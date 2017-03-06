<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\User;
use App\Term;
use File;
use Session;
use Config;
class SettingController extends Controller{
    protected $rules = [
        'web_name' => 'required',
        'web_description' => 'required',
        'web_keyword' => 'required',
    ];
    public function web(Request $request){
        $user = Session::get('user');
        if(Setting::first()){
            $setting = Setting::first();
        }else{
            $setting = new Setting;
            $setting->user_id = $user->id;
            $setting->setting_web = json_encode([]);
            $setting->save();
        }
        $setting_web = json_decode($setting->setting_web,true);
        if($request->isMethod('post')){
            // $my_groups = Config::get('groups');
            // if(isset($my_groups[$user->user_group])){
            //     $request = $request->only($my_groups[$user->user_group]['web']);
            // }
            if($request->has('web_avatar')&&$request->hasFile('web_avatar')){
                $file = $request->file('web_avatar');
                $extension = $file->extension();
                $web_avatar = str_slug($request->input('web_name'),'-').'-'.time().'.'.$extension;
                $path = $file->move(public_path().'/img',$web_avatar);
                $setting_web['web_avatar'] = $web_avatar;
            }
            $input = $request->except(['_token','web_avatar']);
            if($request->has('web_logo')&&$request->hasFile('web_logo')){
                $file = $request->file('web_logo');
                $extension = $file->extension();
                $web_logo = str_slug($request->input('web_name'),'-').'-'.time().'.'.$extension;
                $path = $file->move(public_path().'/img',$web_logo);
                $setting_web['web_logo'] = $web_logo;
            }
            $input = $request->except(['_token','web_logo']);
            foreach ($input as $key => $value) {
                $setting_web[$key] = $value;
            }


            $setting->setting_web = json_encode($setting_web);
            $setting->save();
            Session::flash('success','Cập nhật thành công.');
            return back();
        }else{
            $data['request'] = $request;
            $data['setting'] = $setting;
            return view('user.setting.web',['data'=>$data]);
        }
    }
}