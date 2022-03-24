<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    //
    function index()
    {
        $dtAcc = DB::table('accounts')->where('status','=','1')->get();   
        return view('admin.account.index',compact('dtAcc'));
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