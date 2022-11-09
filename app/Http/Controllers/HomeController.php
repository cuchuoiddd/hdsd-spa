<?php

namespace App\Http\Controllers;

use App\Helpers\Functions;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index(Request $request){
        $slug = $request->path();
        $setting = Setting::where('slug',$slug)->first();
        if($setting){
            $content = $setting->content;
        } else {
            $content = '';
        }
        $menu = Functions::getMenu();
//        dd($menu);
        return view('home',compact('slug','content','menu'));
    }

    public function upload(Request $request){
        $rules = array('upload' => 'max:10000|mimes:jpg,jpeg,png,JPG,JPEG,PNG');
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        if ($request->hasFile('upload')) {
            $destinationPath = '/images/product/';
            $url = Functions::uploadImage($request->upload,$destinationPath);
            return response()->json(['filename'=> 'image','uploaded' => 1, 'url'=> $url]);
        }

    }

    public function edit($str,$str1,$str2=''){
        if($str2){
            $slug = $str.'/'.$str1.'/'.$str2;
        } else {
            $slug = $str.'/'.$str1;
        }
        $setting = Setting::where('slug',$slug)->first();
        if($setting){
            $content = $setting->content;
        } else {
            $content = '';
        }
        $menu = Functions::getMenu();
        return view('test',compact('slug','content','menu'));
    }

    public function test(Request $request){

        $setting = Setting::where('slug',$request->input('slug'))->first();
        if(!$setting){
            Setting::create(['slug'=>$request->input('slug'),'content'=>$request->input('editor')]);
        } else {
            $setting->update(['content'=>$request->input('editor')]);
        }
        return back()->with(['type' => 'alert-success', 'message' => 'Cập nhật thành công']);
    }

    public function settingMenu(){
        $menu = Functions::getMenu();
        $list_menu = Setting::select('id','name','slug','position','parent_id')->orderBy('parent_id')->orderBy('position')->get();
        return view('menu',compact('menu','list_menu'));
    }

    public function createMenu(Request $request){
        $data = $request->all();
        $data['parent_id'] = $request->parent_id ?:0;
        Setting::create($data);
        return back()->with(['type' => 'alert-success', 'message' => 'Thêm mới thành công']);
    }
}
