<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Term;
use File;
use Gate;
use Session;
class PostController extends Controller{
    protected $rules = [
        'post_name' => 'required',
        'post_description' => 'required',
        'term_id' => 'required',
    ];
    protected $messages = [
        'post_name.required' => 'Bạn chưa nhập tên bài viết.',
        'post_description.required' => 'Bạn chưa nhập tóm tắt bài viết.',
        'term_id.required' => 'Bạn chưa chọn mục úp bài viết.',
    ];
    public function create(Request $request){
        $user = Session::get('user');
    	$terms = Term::get();
        if($request->isMethod('post')){
            $this->validate($request,$this->rules,$this->messages);
            $post = new Post;
            $post->user_id = $user->id;
            $post->term_id = $request->input('term_id');
            $post->post_name = $request->input('post_name');
            $post->post_alias = str_slug($request->input('post_name'),'-');
            $post->post_description = $request->input('post_description');
            $post->post_detail = $request->input('post_detail');
            $post->post_keyword = $request->input('post_keyword');
            if($request->has('post_status')){
                $post->post_status = 1;
            }else{
                $post->post_status = 0;
            }

            if($request->hasFile('post_avatar')){
                $file = $request->file('post_avatar');
                $extension = $file->extension();
                $post_avatar = $post->post_alias.'-'.time().'.'.$extension;
                $path = $file->move(public_path().'/img',$post_avatar);
                $post->post_avatar = $post_avatar;
            }
            if($post->save()){
                Session::flash('msg-success','Thêm thành công.');
                return redirect('user/post/edit/'.$post->id);
            }else{
                Session::flash('msg-error','Thêm lỗi.');
                return back();
            }
        }else{
            $data['user'] = $user;
            $data['terms'] = $terms;
            $data['menu'] = 'menu.menuUser'; 
            $data['blade'] = 'user.post.create';
            return view('layout.admin',['data'=>$data]); 
        }
    }
    public function edit($post_id,Request $request){
    	$user = Session::get('user');
        $terms = Term::get();
        $post = Post::find($post_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('edit-post', $post)) {
                Session::flash('msg-error','Bài viết không phải của bạn.');
                return back();
            }
            $this->validate($request,$this->rules,$this->messages);
            $post->term_id = $request->input('term_id');
            $post->post_name = $request->input('post_name');
            $post->post_alias = str_slug($request->input('post_name'),'-');
            $post->post_description = $request->input('post_description');
            $post->post_detail = $request->input('post_detail');
            $post->post_keyword = $request->input('post_keyword');
            if($request->has('post_status')){
                $post->post_status = 1;
            }else{
                $post->post_status = 0;
            }
            if($request->hasFile('post_avatar')){
                $file = $request->file('post_avatar');
                $extension = $file->extension();
                $post_avatar = $post->post_alias.'-'.time().'.'.$extension;
                $path = $file->move(public_path().'/img',$post_avatar);
                $post->post_avatar = $post_avatar;
            }
            if($post->save()){
                Session::flash('msg-success','Sửa thành công.');
                return redirect('user/post/edit/'.$post->id);
            }else{
                Session::flash('msg-error','Sửa lỗi.');
                return back();
            }
        }else{
            $data['user'] = $user;
        	$data['post'] = $post;
            $data['terms'] = $terms;
            $data['menu'] = 'menu.menuUser'; 
            $data['blade'] = 'user.post.edit';
            return view('layout.admin',['data'=>$data]); 
        }
    }
    public function index(Request $request){
        $user = Session::get('user');
        $users = User::get();
        $terms = Term::get();
        $posts = Post::orderby('id','desc');
        if($request->input('post_name')){
            $posts = $posts->where('post_name','like','%'.$request->input('post_name').'%');
        }
        if($request->input('term_id')){
            $term_ids = [];
            $term = Term::find($request->input('term_id'));
            $term_childs = $term->childTerm;
            if(count($term_childs)){
                foreach ($term_childs as $key => $term_child) {
                    $term_ids[] = $term_child->id;
                }
            }
            $term_ids[] = $term->id;
            $posts = $posts->whereIn('term_id',$term_ids);
        }
        if($request->input('user_id')){
            $posts = $posts->where('user_id',$request->input('user_id'));
        }
        $posts = $posts->get();
        $data['user'] = $user;
        $data['users'] = $users;
        $data['request'] = $request;
        $data['posts'] = $posts;
        $data['terms'] = $terms;
        $data['menu'] = 'menu.menuUser'; 
        if($request->input('view')=='list'){
            $data['blade'] = 'user.post.indexList';
        }elseif($request->input('view')=='icon'){
            $data['blade'] = 'user.post.indexIcon';
        }else{
            $data['blade'] = 'user.post.indexList';
        }
        return view('layout.admin',['data'=>$data]);
    }
    public function delete($post_id,Request $request){
        $user = Session::get('user');
        $post = Post::find($post_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('delete-post', $post)) {
                Session::flash('msg-error','Bài viết không phải của bạn.');
                return back();
            }
            if($post->delete()){
                Session::flash('msg-success','Xóa thành công.');
                return redirect('user/post/index');
            }else{
                Session::flash('msg-error','Xóa lỗi.');
                return back();
            }
        }else{
            $data['post'] = $post;
            $data['menu'] = 'menu.menuUser'; 
            $data['blade'] = 'user.post.delete';
            return view('layout.admin',['data'=>$data]); 
        }
    }
}