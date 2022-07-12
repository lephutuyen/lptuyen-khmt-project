<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostCate;
use App\Http\Requests\AddPostCateRequest;
use App\Http\Requests\EditCateRequest;
use DB;
class CatePostController extends Controller
{
    public function getPostCate(){
        $data['postcatelist'] = PostCate::all();
        return view('backend.postcate',$data);
    }

    public function postAddPostCate(AddPostCateRequest $request){
        $postcate = new PostCate;
        $postcate->post_cate_name = $request-> name;
        $postcate->post_cate_slug = str_slug($request->name);
        $postcate->save();
        return back();
    }

    public function getEditPostCate($id){
        $data['postcatelist'] = PostCate::find($id);
        return view('backend.editpostcate',$data);
    }

    public function postEditPostCate(Request $request,$id){
        $postcate = PostCate::find($id);
        $postcate->post_cate_name = $request->name;
        $postcate->post_cate_slug = str_slug($request->name);
        $postcate->save();
        return redirect()->intended('admin/postcate');
    }

    public function getDeletePostCate($id){
        PostCate::destroy($id);
        return back();
    }
}
