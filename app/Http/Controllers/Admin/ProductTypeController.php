<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;
use Illuminate\Support\Facades\DB;

class ProductTypeController extends Controller
{
    //
    function index()
    {
        $dtProT = DB::table('product_types')->where('status','=','1')->get();   
        return view('admin.producttype.index',compact('dtProT'));
    }

    function create()
    {
        return view('admin.producttype.create');
    }

    function showCreate(Request $req){
        $ProT = new ProductType();
        $ProT->product_types_name = $req->name;
        $ProT->status = $req->status;
        $ProT -> save();
        $dtProT = ProductType::all();
       return redirect()->route('producttypes',compact('dtProT'));
    }

 
    function edit($id)
    {
        $dt = ProductType::find($id);
        return view('admin.producttype.edit',compact('dt'));
    }

    function showEdit(Request $req, $id){       
        $ProT = ProductType::find($id);
        $ProT->status = $req->status;
        $ProT -> save();
        $dtProT = ProductType::all();
       return redirect()->route('producttypes',compact('dtProT'));
    }

    function delete($id){       
        $ProT = ProductType::find($id);
        $ProT -> status = 0;
        $ProT -> save();
        $dtProT = DB::table('product_types')->where('status','=','1')->get();    
        return redirect()->route('producttypes',compact('dtProT'));
    } 
}