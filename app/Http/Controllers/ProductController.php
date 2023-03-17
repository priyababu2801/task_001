<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class ProductController extends Controller
{
    
    /****************** Adding product ***********************/

    public function product(Request $request){
        return view('Admin.productCreate');
    }


/****************** SAVE PRODUCT ************************/

   public function saveProduct(Request $request){
          

            $product = new Product();
          if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move(public_path('uploads/product'), $filename);
            
            $product->image = $filename;
            
          }
          $product->name = $request->input('name');
          $product->description = $request->input('description');
          $product->original_price = $request->input('original_price');
          $product->selling_price = $request->input('selling_price');
          $product->save();
    


        return redirect('product')->with('message','Product Added Successfully');
   }


/******************** PRODUCT VIEW ***************************/

   public function productView(Request $request){

    $data =['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first()];

    $datas = Product::all();
    
    return view('Frontend.productView',compact('datas'),$data);

 }


 /*************************** SINGLE PRODUCT *************************/

 public function singleProduct(Request $request,$id){

    $data =['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first()];
    $products = DB::table('products')->where('id',$id)->get();
    return view('Frontend.singleProduct',['products'=>$products],$data);
 }


}//end controller
