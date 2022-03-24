<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    //
    function index()
   {
       $dtInv = DB::table('accounts')
            ->join('invoices', 'invoices.account_id', '=', 'accounts.id')
            ->where('invoices.status','!=','0')
    		->get();   
       return view('admin.invoice.index',compact('dtInv'));
   }

   function create()
   {
        $dtAcc = DB::table('accounts')->where('status','=','1')->get();   
        return view('admin.invoice.create',compact('dtAcc'));
   }

   function showCreate(Request $req){
       $Inv = new Invoice();
       $Inv->account_id = $req->idAcc;
       $Inv->issueddate =  Carbon::now(); ;
       $Inv->shippingaddress = $req->address;
       $Inv->shippingphone = $req->phone;
       $Inv->total = $req->total;
       $Inv->status = $req->status;
       $Inv -> save();
       $dtInv = Invoice::all();
      return redirect()->route('invoices',compact('dtInv'));
   }

   function edit($id)
   {
    $Inv = Invoice::find($id);
    $Inv -> status = 1;
    $Inv -> save();
    $dtInv = DB::table('invoices')->where('status','!=','0')->get();    
    return redirect()->route('invoices',compact('dtInv'));
   }
   
   function delete($id){       
       $Inv = Invoice::find($id);
       $Inv -> status = 0;
       $Inv -> save();
       $dtInv = DB::table('invoices')->where('status','!=','0')->get();    
       return redirect()->route('invoices',compact('dtInv'));
   } 
}