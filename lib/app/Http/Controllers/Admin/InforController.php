<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use App\Models\PostCate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddInfoRequest;
use DB;

class InforController extends Controller
{
    public function getInfo(){
        $data['inforlist']= DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->get();
        return view('backend.information',$data);
    }

    public function getAddInfo(){
        $data['postcatelist'] = PostCate::all();
        return view('backend.addinfo',$data);
    }

    public function postAddInfo(AddInfoRequest $request){
        $filename = $request ->image->getClientOriginalName();
        $info = new Information();
        $info -> info_title = $request -> title;
        $info -> info_content = $request -> text;
        $info -> info_cate_id = $request -> postcate ;
        $info -> info_image = $filename;
        $info -> date_post = date('Y-m-d H:i:s');
        $info -> save();
        $request->image->storeAs('informations',$filename);
        return redirect('admin/information');

    }

    public function getEditInfo($id){
        $data['postcatelist'] = PostCate::all();
        $data['infolist'] = Information::find($id);
        return view('backend.editinfo',$data);
    }

    public function postEditInfo(Request $request, $id){
        $info = new Information;
        $arr['info_title'] = $request -> title;
        $arr['info_content'] = $request -> text;
        if($request->hasFile('image')){
            $image = $request->image->getClientOriginalName();
            $arr['info_image'] = $image;
            $request->image->storeAs('informations',$image);
        }
        $info::where('info_id',$id)->update($arr);
        return redirect('admin/information');
    }

//    public function getInfoDetail($id){
//        $data['information'] =
//            DB::table('vp_information')
//                ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.info_cate_id')->where('info_id',$id)->first();
//        return view('backend.informationdetail',$data);
//    }



    public function getDeleteInfo($id){
        Information::destroy($id);
        return back();
    }
}
