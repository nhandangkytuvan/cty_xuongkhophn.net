<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Term;
use View;
use Response;
use BrowserDetect;
class HomeController extends Controller{
	public function show(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.home');
		}else{
			return view('web.mobile.home');
		}
	}
	public function sitemap(Request $request){
		$posts = Post::where('post_status',1)->get();
		$terms = Term::get();
		$data['posts'] = $posts;
		$data['terms'] = $terms;
		$content = View::make('web.desktop.sitemap',['data'=>$data]);
		return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
	}
}