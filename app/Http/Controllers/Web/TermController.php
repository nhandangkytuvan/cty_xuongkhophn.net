<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Term;
use App\Events\ViewTermEvent;
use BrowserDetect;
class TermController extends Controller{
    public function show($term_alias,$term_id,Request $request){
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        // event view term active
        event(new ViewTermEvent($term));
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