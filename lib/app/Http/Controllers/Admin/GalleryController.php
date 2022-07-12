<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use App\Http\Requests\AddGalleryRequest;
class GalleryController extends Controller
{
    public function getGal(){
        $data['gallist']= Gallery::all();
        return view('backend.gal',$data);
    }

    public function getAddGal(){
        return view('backend.addgal');
    }

    public function postAddGal(AddGalleryRequest $request){
        $filename = $request ->image->getClientOriginalName();
        $gallery = new Gallery();
        $gallery -> gal_title = $request -> title;
        $gallery -> gal_img = $filename;
        $gallery -> save();
        $request->image->storeAs('avatar',$filename);
        return redirect('admin/gallery');
    }

    public function getEditGal($id){
        $data['gal'] = Gallery::find($id);
        return view('backend.editgal',$data);
    }

    public function postEditGal(Request $request,$id){
        $gallery = new Gallery();
        $arr['gal_title'] = $request -> title;
        if($request->hasFile('image')){
            $image = $request->image->getClientOriginalName();
            $arr['gal_img'] = $image;
            $request->image->storeAs('avatar',$image);
        }
        $gallery::where('gal_id',$id)->update($arr);
        return redirect('admin/gallery');
    }

    public function getDeleteGal($id){
        Gallery::destroy($id);
        return back();
    }
}
