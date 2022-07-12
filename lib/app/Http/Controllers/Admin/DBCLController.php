<?php

namespace App\Http\Controllers\Admin;

use App\Models\DBCL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddDBCLRequest;
use DB;
class DBCLController extends Controller
{
    public function getDBCL(){
        $data['bdcllist'] = DBCL::all();
        return view('backend.bdcl',$data);
    }

    public function getAddDBCL(){
        return view('backend.adddbcl');
    }

    public function postAddDBCL(AddDBCLRequest $request){
        $filename = $request->file->getClientOriginalName();
        $dbcl = new DBCL();
        $dbcl -> dbcl_code = $request -> code;
        $dbcl -> dbcl_title = $request -> title;
        $dbcl -> dbcl_file = $filename;
        $dbcl -> dbcl_cate = $request -> cate;
        $dbcl -> save();
        return redirect('admin/dbcl');

    }

    public function getEditDBCL($id){
        $data['dbcl'] = DBCL::find($id);
        return view('backend.editbdcl',$data);
    }

    public function postEditDBCL(Request $request, $id){
        $dbcl = new DBCL();
        $arr['dbcl_code'] = $request -> code;
        $arr['dbcl_title'] = $request -> title;
        $arr['dbcl_cate'] = $request -> cate;
        if($request->hasFile('file')){
            $file = $request->file->getClientOriginalName();
            $arr['dbcl_file'] = $file;
            $request->file->storeAs('avatar',$file);
        }
        $dbcl::where('dbcl_id',$id)->update($arr);
        return redirect('admin/dbcl');
    }

    public function getDeleteDBCL($id){
        DBCL::destroy($id);
        return back();
    }
}
