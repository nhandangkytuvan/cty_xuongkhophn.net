<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Term;
use File;
use Gate;
use Session;
class TermController extends Controller{
    protected $rules = [
        'term_name' => 'required',
    ];
    public function create(Request $request){
        $user = Session::get('user');
        $terms = Term::get();
        if($request->isMethod('post')){
            $this->validate($request,$this->rules);
            $term = new Term;
            $term->user_id = $user->id;
            $term->term_id = $request->input('term_id');
            $term->term_name = $request->input('term_name');
            $term->term_alias = str_slug($request->input('term_name'),'-');
            $term->term_order = 0;
            $term->term_description = $request->input('term_description');
            $term->term_keyword = $request->input('term_keyword');
            if($term->save()){
                Session::flash('msg-success','Tạo mới thành công.');
                return redirect('user/term/index');
            }else{
                Session::flash('msg-error','Tạo mới lỗi.');
                return back();
            }   
        }else{
            $data['user'] = $user;
            $data['request'] = $request;
            $data['terms'] = $terms;
            $data['menu'] = 'menu.menuUser'; 
            $data['blade'] = 'user.term.create';
            return view('layout.admin',['data'=>$data]); 
        }
    }
    public function edit($term_id,Request $request){
        $user = Session::get('user');
        $terms = Term::where('id','!=',$term_id)->get();
        $term = Term::find($term_id);
        if($request->isMethod('post')){
            $this->validate($request,$this->rules);
            if (Gate::forUser($user)->denies('edit-term', $term)) {
                Session::flash('msg-error','Không phải của bạn.');
                return back();
            }
            $term->term_id = $request->input('term_id');
            $term->term_name = $request->input('term_name');
            $term->term_alias = str_slug($request->input('term_name'),'-');
            $term->term_description = $request->input('term_description');
            $term->term_keyword = $request->input('term_keyword');
            if($term->save()){
                Session::flash('msg-success','Sửa thành công.');
                return redirect('user/term/index');
            }else{
                Session::flash('msg-error','Sửa lỗi.');
                return back();
            }   
        }else{
            $data['user'] = $user;
            $data['request'] = $request;
            $data['terms'] = $terms;
            $data['term'] = $term;
            $data['menu'] = 'menu.menuUser'; 
            $data['blade'] = 'user.term.edit';
            return view('layout.admin',['data'=>$data]); 
        }
    }
    public function index(Request $request){
        $user = Session::get('user');
        $terms = Term::orderby('id','desc');
        if($request->input('term_name')){
            $terms = $terms->where('term_name','like','%'.$request->input('term_name').'%');
        }
        if($request->input('term_id')){
            $terms = $terms->where('term_id',$request->input('term_id'));
        }
        $terms = $terms->get();
        $data['user'] = $user;
        $data['request'] = $request;
        $data['terms'] = $terms;
        $data['terms_search'] = Term::get();
        $data['menu'] = 'menu.menuUser'; 
        $data['blade'] = 'user.term.index';
        return view('layout.admin',['data'=>$data]); 
    }
    public function delete($term_id,Request $request){
        $user = Session::get('user');
        $term = Term::find($term_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('delete-term', $term)) {
                Session::flash('msg-error','Không phải của bạn.');
                return back();
            }
            if($term->delete()){
                Session::flash('msg-success','Xóa thành công.');
                return redirect('user/term/index');
            }else{
                Session::flash('msg-error','Xóa lỗi.');
                return back();
            }
        }else{
            $data['user'] = $user;
            $data['request'] = $request;
            $data['term'] = $term;
            $data['menu'] = 'menu.menuUser'; 
            $data['blade'] = 'user.term.delete';
            return view('layout.admin',['data'=>$data]); 
        }
    }
}