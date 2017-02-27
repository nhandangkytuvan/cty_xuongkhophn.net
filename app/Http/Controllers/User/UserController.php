<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Setting;
use Session;
use Hash;
class UserController extends Controller{
	protected $messages_create = [
	    'username.required' => 'Chúng tôi cần biết username của bạn.',
	    'user_name.required' => 'Chúng tôi cần biết user_name của bạn.',
	    'password.required' => 'Chúng tôi cần biết password của bạn.',
	    'password_confirmation.required' => 'Chúng tôi cần biết password_confirmation của bạn.',
	];
	protected $rules_create = [
        'username' => 'required|unique:user|max:255',
        'user_name' => 'required|max:255',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|min:6',
    ];
    protected $messages_login = [
	    'username.required' => 'Chúng tôi cần biết username của bạn.',
	    'password.required' => 'Chúng tôi cần biết password của bạn.',
	];
	protected $rules_login = [
        'username' => 'required|max:255',
        'password' => 'required|min:6',
    ];
    protected $rules_edit = [
    	'user_name' => 'required',
    	'user_email' => 'required|email',
    ];
    protected $rules_forget = [
        'password_old' => 'required',
        'password_new' => 'required|min:6|confirmed',
        'password_new_confirmation' => 'required|min:6',
    ];
    protected $messages_forget = [
	    'password_old.required' => 'Nhập password cũ của bạn.',
	    'password_new.required' => 'Nhập password mới của bạn.',
	    'password_new_confirmation.required' => 'Nhập lại password mới của bạn.',
	    'password_new.confirmed' => 'Passowrd không khớp.',
	];
	public function create(Request $request){
		if ($request->isMethod('post')) {
			$this->validate($request,$this->rules_create,$this->messages_create);
			$user = new User;
			$user->username = $request->input('username');
			$user->user_name = $request->input('user_name');
			$user->password = Hash::make($request->input('password'));
			$user->user_group = $request->input('user_group');
			if($user->save()){
				Session::flash('msg-success','Đăng ký thành công.');
				return redirect('user/index');
			}else{
				Session::flash('msg-error','Đăng ký gặp lỗi.');
				return back();
			}
		}else{
			$data['blade'] ='user.create';
			$data['menu'] ='menu.menuUser';
			return view('layout.admin',['data'=>$data]);
		}
	}
	public function login(Request $request){
		$setting = Setting::first();
		if(Session::get('user')){
			return redirect('user/edit');
		}
		if ($request->isMethod('post')) {
			$this->validate($request,$this->rules_login,$this->messages_login);
			$user = User::where('username',$request->input('username'))->first();
			if($user){
				if(Hash::check($request->input('password'),$user->password)){
	                Session::put('user', $user);
	                return redirect('user/post/create');
	            }else{
	            	Session::flash('msg-error','Passowrd không đúng.');
					return back();
	            }
			}else{
				Session::flash('msg-error','Username không đúng.');
				return back();
			}
		}else{
			$data['setting'] =$setting;
			$data['blade'] ='user.login';
			$data['menu'] ='menu.menuHome';
			return view('layout.admin',['data'=>$data]);
		}
	}
	public function logout(Request $request){
		Session::flush();
		Session::flash('msg-info','Hẹn gặp lại.');
		return redirect('/');
	}
	public function forget(Request $request){
		$user = Session::get('user');
		if ($request->isMethod('post')) {
			$this->validate($request,$this->rules_forget,$this->messages_forget);
			if(Hash::check($request->input('password_old'),$user->password)){
				$user->password = Hash::make($request->input('password_new'));
				$user->save();
				Session::flush();
				Session::flash('msg-info','Đăng nhập lại.');
				return redirect('user/login');
			}else{
				Session::flash('msg-info','Password cũ không đúng.');
				return back();
			}
		}else{
			return 'Hi';
		}
	}
	public function edit(Request $request){
		$user = Session::get('user');
		if($request->isMethod('post')){
			$this->validate($request,$this->rules_edit);
			$user->user_name = $request->input('user_name');
			$user->user_email = $request->input('user_email');
			if($request->hasFile('user_avatar')){
                $file = $request->file('user_avatar');
                $extension = $file->extension();
                $user_avatar = str_slug($user->user_name,'-').'-'.time().'.'.$extension;
                $path = $file->move(public_path().'/img',$user_avatar);
                $user->user_avatar = $user_avatar;
            }
            $user->save();
            Session::flash('msg-success','Sửa thông tin thành công.');
            return back();
		}else{
			$data['user'] = $user;
			$data['blade'] = 'user.edit';
			$data['menu'] = 'menu.menuUser';
			return view('layout.admin',['data'=>$data]);
		}
	}
	public function index(Request $request){
		$users = User::orderBy('username');
		if($request->input('user_group')){
			$users = $users->where('user_group',$request->input('user_group'));
		}
		if($request->input('username')){
			$users = $users->where('username',$request->input('username'));
		}
		$users = $users->get();
		$data['users'] = $users;
		$data['request'] = $request;
		$data['menu'] = 'menu.menuUser';
		$data['blade'] = 'user.index';
		return view('layout.admin',['data'=>$data]);
	}
	public function editGroup($user_id,Request $request){
		$user = User::find($user_id);
		if ($request->isMethod('post')) {
			$user->user_group = $request->input('user_group');
			if($user->save()){
				Session::flash('msg-success','Chỉnh sửa thành công.');
				return redirect('user/index');
			}else{
				Session::flash('msg-error','Chỉnh sửa lỗi.');
				return back();
			}
		}else{
			$data['user'] = $user;
			$data['blade'] ='user.editGroup';
			$data['menu'] ='menu.menuUser';
			return view('layout.admin',['data'=>$data]);
		}
	}
	public function delete($user_id,Request $request){
		$user = User::find($user_id);
		if($request->isMethod('post')){
			if($user->delete()){
				Session::flash('msg-success','Xóa user '.$user->username.' thành công.');
				return redirect('user/index');
			}else{
				Session::flash('msg-error','Xóa user '.$user->username.' gặp lỗi.');
				return back();
			}
		}else{
			$data['user'] = $user;
			$data['menu'] = 'menu.menuUser';
			$data['blade'] = 'user.delete';
			return view('layout.admin',['data'=>$data]);
		}
	}
	public function block($user_id,Request $request){
		
	}
}