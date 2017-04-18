<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Term;
use File;
use Gate;
use Session;
use DB;
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
                Session::flash('success','Tạo mới thành công.');
                return redirect('user/term/index');
            }else{
                Session::flash('error','Tạo mới lỗi.');
                return back();
            }   
        }else{
            $data['request'] = $request;
            $data['terms'] = $terms;
            return view('user.term.create',['data'=>$data]); 
        }
    }
    public function edit($term_id,Request $request){
        $user = Session::get('user');
        $terms = Term::where('id','!=',$term_id)->get();
        $term = Term::find($term_id);
        if($request->isMethod('post')){
            $this->validate($request,$this->rules);
            if (Gate::forUser($user)->denies('edit-term', $term)) {
                Session::flash('error','Không phải của bạn.');
                return back();
            }
            $term->term_id = $request->input('term_id');
            $term->term_name = $request->input('term_name');
            $term->term_alias = str_slug($request->input('term_name'),'-');
            $term->term_description = $request->input('term_description');
            $term->term_keyword = $request->input('term_keyword');
            if($term->save()){
                Session::flash('success','Sửa thành công.');
                return redirect('user/term/index');
            }else{
                Session::flash('error','Sửa lỗi.');
                return back();
            }   
        }else{
            $data['terms'] = $terms;
            $data['term'] = $term;
            return view('user.term.edit',['data'=>$data]); 
        }
    }
    public function index(Request $request){
        $terms = Term::orderby('id','desc');
        if($request->input('term_name')){
            $terms = $terms->where('term_name','like','%'.$request->input('term_name').'%');
        }
        if($request->input('term_id')){
            $terms = $terms->where('id',$request->input('term_id'));
        }
        $terms = $terms->get();
        $data['terms'] = $terms;
        $data['terms_search'] = Term::get();
        return view('user.term.index',['data'=>$data]); 
    }
    public function delete($term_id,Request $request){
        $user = Session::get('user');
        $term = Term::find($term_id);
        if($request->isMethod('post')){
            if (Gate::forUser($user)->denies('delete-term', $term)) {
                Session::flash('error','Không phải của bạn.');
                return back();
            }
            if($term->delete()){
                if($term->term_avatar){
                    File::delete(public_path().'\img\\'.$term->term_avatar);
                }
                $post_avatars = $term->post()->pluck('post_avatar')->toArray();
                foreach ($post_avatars as $key => $post_avatar) {
                    $post_avatars[$key] = public_path().'\img\\'.$post_avatar;
                }
                foreach ($term->post as $post) {
                    $post->visit()->delete();
                }
                $term->visit()->delete();
                $term->post()->delete();
                File::delete($post_avatars);
                DB::statement('ALTER TABLE term AUTO_INCREMENT = 1');
                DB::statement('ALTER TABLE post AUTO_INCREMENT = 1');
                DB::statement('ALTER TABLE visit AUTO_INCREMENT = 1');

                Session::flash('success','Xóa thành công.');
                return redirect('user/term/index');
            }else{
                Session::flash('error','Xóa lỗi.');
                return back();
            }
        }else{
            $data['term'] = $term;
            return view('user.term.delete',['data'=>$data]); 
        }
    }
    public function removePost($term_id,Request $request){
        $term = Term::find($term_id);
        if($request->isMethod('post')){
            $post_avatars = $term->post()->pluck('post_avatar')->toArray();
            foreach ($post_avatars as $key => $post_avatar) {
                $post_avatars[$key] = public_path().'\img\\'.$post_avatar;
            }
            $term->post()->delete();
            $media_files = $term->media()->pluck('media_file')->toArray();
            foreach ($media_files as $key => $media_file) {
                $media_files[$key] = public_path().'\img\\'.$media_file;
            }
            $term->media()->delete();
            File::delete($post_avatars);
            DB::statement('ALTER TABLE post AUTO_INCREMENT = 1');
            DB::statement('ALTER TABLE visit AUTO_INCREMENT = 1');
            return redirect('user/term/index');
        }else{
            $data['term'] = $term;
            return view('user.term.removePost',['data'=>$data]); 
        }
    }
}