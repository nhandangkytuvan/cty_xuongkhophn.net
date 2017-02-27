<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Term;
use Session;
use BrowserDetect;
class TermController extends Controller{
    public function show($term_alias,$term_id,Request $request){
    	$setting = Setting::first();
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        $data['term'] = $term;
        $data['setting'] = $setting;
        if(BrowserDetect::isDesktop()){
            if(count($term->childTerm)){
            	return view('web.desktop.term',['data'=>$data]); 
            }else{
            	return view('web.desktop.term2',['data'=>$data]); 
            }
        }else{
            return view('web.mobile.term',['data'=>$data]); 
        }
    }
}