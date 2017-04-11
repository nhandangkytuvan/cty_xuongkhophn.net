<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Term;
use App\View;
use Session;
use BrowserDetect;
class TermController extends Controller{
    public function show($term_alias,$term_id,Request $request){
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        // -----------
        if(View::where('term_id',$term_id)->exists()){
            $view = View::where('term_id',$term_id)->first();
        }else{
            $view = new View;
            $view->term_id = $term_id;
        }
        $view->view_sum ++;
        $view->save();
        // -----------
        $data['term'] = $term;
        if(BrowserDetect::isDesktop()){
            if(count($term->children)){
            	return view('web.desktop.term',['data'=>$data]); 
            }else{
            	return view('web.desktop.term2',['data'=>$data]); 
            }
        }else{
            return view('web.mobile.term',['data'=>$data]); 
        }
    }
}