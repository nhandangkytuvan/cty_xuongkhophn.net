<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Setting;
use Session;
use BrowserDetect;
class PostController extends Controller{
    public function show($post_alias,$post_id,Request $request){
    	$setting = Setting::first();
    	$user = Session::get('user');
    	$post = Post::find($post_id);
        if(!$post){
            return redirect('/');
        }
    	$data['post'] = $post;
    	$data['setting'] = $setting;
    	if(BrowserDetect::isDesktop()){
    		if($post_id == 2){
    			return view('web.desktop.post_2',['data'=>$data]); 
    		}
        	return view('web.desktop.post',['data'=>$data]); 
        }else{
        	if($post_id == 2){
    			return view('web.mobile.post_2',['data'=>$data]); 
    		}
        	return view('web.mobile.post',['data'=>$data]); 
        }
    }
}