<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use BrowserDetect;
class HomeController extends Controller{
	public function show(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.home');
		}else{
			return view('web.mobile.home');
		}
	}
}