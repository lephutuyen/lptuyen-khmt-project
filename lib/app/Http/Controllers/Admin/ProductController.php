<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Category;
use DB;
class ProductController extends Controller
{
    public function getProduct(){
        $data['productlist'] = DB::table('vp_products')
            ->join('vp_categories','vp_products.prod_cate','=','vp_categories.cate_id')
            ->join('vp_profile','vp_products.prod_profile','=', 'vp_profile.prol_id')
            ->orderBy('prod_id','desc')->get();
        return view('backend.product',$data);
    }

    public function getAddProduct(){
        $data['catelist'] = Category::all();
        $data['proflist'] = Profile::all();
        return view('backend.addproduct',$data);
    }

    public function postAddProduct(AddProductRequest $request){
        $product = new Product();
        $product->prod_author = $request -> author;
        $product->prod_acticle = $request -> acticle;
        $product->prod_publisher = $request -> publisher;
        $product->prod_year = $request ->year;
        $product->prod_chapter = $request -> chapter;
        $product->prod_cate = $request->cate;
        $product->prod_profile = $request->profile;
        $product->save();

        //$category->count_post = 1;
        //$category->save();
        $category = new Category();
        $category::where('cate_id',$request->cate)->update(['count_post'=> DB::raw('count_post+1')]);
        return back();
    }

    public function getEditProduct($id){
        $data['product'] = Product::find($id);
        $data['listcate'] = Category::all();
        $data['proflist'] = Profile::all();
        return view('backend.editproduct',$data);
    }

    public function postEditProduct(Request $request, $id){
        $product = new Product();
        $arr['prod_author'] = $request -> author;
        $arr['prod_acticle'] = $request -> acticle;
        $arr['prod_publisher'] = $request -> publisher;
        $arr['prod_year'] = $request -> year;
        $arr['prod_chapter'] = $request -> chapter;
        $arr['prod_cate'] = $request->cate;
        $arr['prod_profile'] = $request->profile;
        $product::where('prod_id',$id)->update($arr);
        return redirect('admin/product');
    }

    public function getDeleteProduct($id){
        $product = Product::find($id);
        $product::where('prod_id',$id)->get();
        $category = DB::table('vp_categories')->join('vp_products','vp_categories.cate_id','=',
            'vp_products.prod_cate')->where('vp_products.prod_id', '=', $id);
        $category->update(['count_post'=> DB::raw('count_post-1')]);
        Product::destroy($id);
        return back();
    }
}
