<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        $dtAcc = DB::table('accounts')->where('status','=','1')->get();   
        return view('admin.account.index',compact('dtAcc'));
    }

    function create()
    {
        return view('admin.account.create');
    }

    function showCreate(Request $req){
        $Acc = new Account();
        $Acc->fullname = $req->name;
        $Acc->email = $req->email;
        $Acc->phone = $req->phone;
        $Acc->address = $req->address;
        $Acc->admin = $req->admin;
        $Acc->avartar = $req->image;
        $Acc->status = $req->status;
        $Acc -> save();
        $dtAcc = Account::all();
       return redirect()->route('accounts',compact('dtAcc'));
    }

 
    function edit($id)
    {
        $dt = Account::find($id);
        
        return view('admin.account.edit',compact('dt'));
    }

    function showEdit(Request $req, $id){       
        $Acc = Account::find($id);
        $Acc->fullname = $req->fullname;
        $Acc->phone = $req->phone;
        $Acc->address = $req->address;
        $Acc->status = $req->status;
        $Acc -> save();
        $dtAcc = Account::all();
       return redirect()->route('accounts',compact('dtAcc'));
    }

    function delete($id){       
        $Acc = Account::find($id);
        $Acc -> status = 0;
        $Acc -> save();
        $dtAcc = DB::table('accounts')->where('status','=','1')->get();    
        return redirect()->route('accounts',compact('dtAcc'));
    } 
}
