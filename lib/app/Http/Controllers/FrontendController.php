<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DBCL;
use App\Models\Gallery;
use App\Models\Introduce;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use App\Models\PostCate;
use App\Models\Information;
class FrontendController extends Controller
{
    public function getHome(){
        $data['infocatelist'] = PostCate::all();

        $data['informationAlltake2'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->take(2)->inRandomOrder()->get();

        $data['informationAlltake1'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->take(1)->orderBy('date_post','desc')->get();

        $data['informationAll'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->orderBy('date_post','desc')->paginate(6);

        $data['informationAlltake4new'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->orderBy('date_post','desc')->paginate(8);

        return view('frontend.home',$data);
    }

    public function getInfoByCate($id){
        $data['infocatelist'] = PostCate::all();

        $data['informationAll'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->where('vp_information.info_cate_id',$id)
            ->orderBy('info_id','asc')->paginate(3);

        $data['informationNewTake1'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->where('vp_information.info_cate_id',$id)
            ->take(1)->orderBy('date_post','desc')->get();

        $data['informationNewTake2'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->where('vp_information.info_cate_id',$id)
            ->skip(1)->take(2)->orderBy('date_post','desc')->get();

        $data['informationAlltake5new'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->take(5)->orderBy('date_post','desc')->get();

        $data['informationOther'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->take(6)->inRandomOrder()->get();

        return view('frontend.infobycate',$data);
    }

    public function getInfoDetail($id){
        $data['infocatelist'] = PostCate::all();

        $data['information'] = DB::table('vp_information')->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->where('info_id',$id)->first();

        $data['informationAlltake5new'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->take(5)->orderBy('date_post','desc')->get();

        $data['informationOther'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->take(5)->inRandomOrder()->get();

        return view('frontend.informationdetail',$data);
    }

    public function getNCKHDetail($id){
        $data['productlist'] = DB::table('vp_products')
            ->join('vp_categories','vp_products.prod_cate','=','vp_categories.cate_id')
            ->join('vp_profile','vp_products.prod_profile','=', 'vp_profile.prol_id')
            ->where('prod_profile',$id)
            ->orderBy('prod_year','desc')
            ->get();

//        $data['categories'] = Category::all();
//        $data['profiles'] = Profile::all();
//        $data['products'] = Product::all();

//        $data['catename'] = Category::where('cate_id',$id)->first();

//        $data['posts'] = Product::where('prod_profile',$id)->with()->orderBy('prod_year','desc')->get();
//
        $data['cate_name'] = Category::where('cate_id',$id)->first();

        return view('frontend.nckhdetail',$data);
    }

    public function getCategory($id){
        $data['profilelist'] = Profile::all();
        $data['post'] = Product::where('prod_cate',$id)->orderBy('prod_year','desc')->get();
        $data['cate_name'] = Category::where('cate_id',$id)->first();
        return view ('frontend.category',$data);
    }

    public function getIntroduce(){
        $data['profilelist'] = Profile::all();
        return view ('frontend.introduce',$data);
    }

    public function getSearchInfo(Request $request){
        $resultt = $request->resultt;
        $resultt = str_replace(' ','%',$resultt);

        $data['infocatelist'] = PostCate::all();

        $data['information'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->where('info_title','like','%'.$resultt.'%')->paginate(6);

        $data['informationAlltake4new'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->skip(1)->take(6)->orderBy('date_post','desc')->get();

        $data['informationAlltake5new'] = DB::table('vp_information')
            ->join('vp_post_cate','vp_information.info_cate_id','=','vp_post_cate.post_cate_id')
            ->take(4)->orderBy('date_post','desc')->get();

        return view('frontend.searchinfo',$data);
    }


//    public function getSearch(Request $request){
//        $data['profilelist'] = Profile::all();
//        $result= $request->result;
//        $result = str_replace(' ', ' ', $result);
//        $data['keyword'] = $result;
//        $data['search_post'] = Product::where('prod_acticle','like','%'.$result.'%')
//            ->orWhere('prod_year','like','%'.$result.'%')
//            ->orWhere('prod_author','like','%'.$result.'%')->get();
//
//
//        return view('frontend.search',$data);
//    }

    public function getAbout(){
        $data['introlist'] = Introduce::all();
        $data['gallist'] = Gallery::all();
        return view('frontend.about',$data);
    }

    public function getDissertation(){
        return view('frontend.dissertation');
    }

    public function getPersional(){
        $data['profilelist'] = Profile::all();
        return view('frontend.persional',$data);
    }

    public function getDMMC(){
        $data['dmmclist'] = DBCL::all();
        return view('frontend.dmmc',$data);
    }





}
