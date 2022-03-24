<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
   //
   function index()
   {
       $dtPro = DB::table('product_types')
            ->join('products', 'products.product_types_id', '=', 'product_types.id')
            ->where('products.status','=','1')
    		->get();   
       return view('admin.product.index',compact('dtPro'));
   }

   function create()
   {
        $dtProT = DB::table('product_types')->where('status','=','1')->get();   
        return view('admin.product.create',compact('dtProT'));
   }

   function showCreate(Request $req){
       $Pro = new Product();
       $Pro->product_name = $req->name;
       $Pro->product_types_id = $req->idProT;
       $Pro->price = $req->price;
       $Pro->quantity = $req->quantity;
       $Pro->size = $req->size;
       $Pro->image = $req->image;
       $Pro->status = 1;
       $Pro -> save();
       $dtPro = Product::all();
      return redirect()->route('products',compact('dtPro'));
   }


   function edit($id)
   {
       $dt = Product::find($id);
       $dtPro = DB::table('product_types')->where('product_types.status','=','1')
            ->join('products', 'products.product_types_id', '=', 'product_types.id')
    		->get();
        $dtProT = DB::table('product_types')->where('status','=','1')->get();
        
       return view('admin.product.edit',compact('dt','dtPro','dtProT'));
   }

   function showEdit(Request $req, $id){       
       $Pro = Product::find($id);
       $Pro->product_name = $req->name;
       $Pro->product_types_id = $req->idProT;
       $Pro->price = $req->price;
       $Pro->quantity = $req->quantity;
       $Pro->size = $req->size;
       $Pro->image=$req->image;
       $Pro->status = $req->status;
       $Pro -> save();
       $dtPro = Product::all();

       
        
      return redirect()->route('products',compact('dtPro'));
   }

   function delete($id){       
       $Pro = Product::find($id);
       $Pro -> status = 0;
       $Pro -> save();
       $dtPro = DB::table('products')->where('status','=','1')->get();    
       return redirect()->route('products',compact('dtPro'));
   } 
}