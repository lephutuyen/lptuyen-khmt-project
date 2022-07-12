<?php

namespace App\Http\Controllers\Admin;

use App\Models\Introduce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\AddIntroduceRequest;
class IntroduceController extends Controller
{
    public function getIntro(){
        $data['introlist']= Introduce::all();
        return view('backend.intro',$data);
    }

    public function getAddIntro(){
        return view('backend.addintro');
    }

    public function postAddIntro(AddIntroduceRequest $request){
        $filename = $request ->image->getClientOriginalName();
        $intro = new Introduce;
        $intro -> intro_text = $request -> name;
        $intro -> intro_text_2 = $request -> name2;
        $intro -> intro_text_3 = $request -> name3;
        $intro -> intro_title = $request -> title;
        $intro -> intro_title_2 = $request -> title2;
        $intro -> intro_title_3 = $request -> title3;
        $intro -> intro_img = $filename;
        $intro -> save();
        $request->image->storeAs('avatar',$filename);
        return redirect('admin/introduce');
    }

    public function getEditIntro($id){
        $data['intro'] = Introduce::find($id);
        return view('backend.editintro',$data);
    }

    public function postEditIntro(Request $request,$id){
        $intro = new Introduce;
        $arr['intro_text'] = $request -> name;
        $arr['intro_title'] = $request -> title;
        $arr['intro_text_2'] = $request -> name2;
        $arr['intro_title_2'] = $request -> title2;
        $arr['intro_text_3'] = $request -> name3;
        $arr['intro_title_3'] = $request -> title3;
        if($request->hasFile('image')){
            $image = $request->image->getClientOriginalName();
            $arr['intro_img'] = $image;
            $request->image->storeAs('avatar',$image);
        }
        $intro::where('intro_id',$id)->update($arr);
        return redirect('admin/introduce');
    }

    public function getDeleteIntro($id){
        Introduce::destroy($id);
        return back();
    }

}
