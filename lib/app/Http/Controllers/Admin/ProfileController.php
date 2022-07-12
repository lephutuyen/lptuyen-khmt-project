<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProfileRequest;
use App\Models\Profile;
use DB;
class ProfileController extends Controller
{
    //
    public function getProf(){
        $data['proflist']= Profile::all();
        return view('backend.profile',$data);
    }

    public function getAddProf(){
        return view('backend.addprofile');
    }

    public function postAddProf(AddProfileRequest $request){
        $filename = $request ->image->getClientOriginalName();
        $profile = new Profile;
        $profile -> prol_name = $request -> name;
        $profile -> prol_info = $request -> info;
        $profile -> prol_date = $request -> date;
        $profile -> prol_sex = $request -> sex;
        $profile -> prol_mail = $request -> mail;
        $profile -> prol_phone = $request -> phone;
        $profile -> prol_contact = $request -> contact;
        $profile -> prol_address = $request -> address;
        $profile -> prol_image = $filename;
        $profile -> save();
        $request->image->storeAs('avatar',$filename);
        return redirect('admin/profile');
    }

    public function getEditProf($id){
        $data['profile'] = Profile::find($id);
        return view('backend.editprofile',$data);
    }

    public function postEditProf(Request $request,$id){
        $profile = new Profile;
        $arr['prol_name'] = $request -> name;
        $arr['prol_info'] = $request -> info;
        $arr['prol_date'] = $request -> date;
        $arr['prol_sex'] = $request -> sex;
        $arr['prol_mail'] = $request -> mail;
        $arr['prol_phone'] = $request -> phone;
        $arr['prol_contact'] = $request -> contact;
        $arr['prol_address'] = $request -> address;
        if($request->hasFile('image')){
            $image = $request->image->getClientOriginalName();
            $arr['prol_image'] = $image;
            $request->image->storeAs('avatar',$image);
        }
        $profile::where('prol_id',$id)->update($arr);
        return redirect('admin/profile');
    }

    public function getDeleteProf($id){
        Profile::destroy($id);
        return back();
    }
}
