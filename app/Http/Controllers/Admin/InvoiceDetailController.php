<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\InvoiceDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

class InvoiceDetailController extends Controller
{
    //
     //
     function index()
     {
         $dtInvD = DB::table('products')
              ->join('invoice_details', 'invoice_details.products_id', '=', 'products.id')
              ->where('invoice_details.status', '1')
              ->get();   
         return view('admin.invoicedetail.index',compact('dtInvD'));
     }
     
     function detail($id)
     {
         $dtInvD = DB::table('products')
                ->join('invoice_details', 'invoice_details.products_id', '=', 'products.id')
              ->where('invoice_details.invoices_id', $id)
              ->get();   
         return view('admin.invoicedetail.detail',compact('dtInvD'));
     }
  
     function create()
     {
          $dtInv = DB::table('invoices')->where('status','=','1')->get();
          $dtPro = DB::table('products')->where('status','=','1')->get();
          return view('admin.invoicedetail.create',compact('dtInv','dtPro'));
     }
  
     function showCreate(Request $req){
         $InvD = new InvoiceDetail();
         $InvD->invoices_id = $req->idInv;
         $InvD->products_id =  $req->idPro;
         $InvD->quantity = $req->quantity;
         $InvD->unitprice = $req->unitprice;
         $InvD->status = 1;
         $InvD -> save();
         $dtInvD = InvoiceDetail::all();
        return redirect()->route('invoicedetails',compact('dtInvD'));
     }
  
     function edit($id)
     {
        $dt = InvoiceDetail::find($id);
        return view('admin.invoicedetail.edit',compact('dt'));
     }
     
     function showEdit(Request $req, $id)
     {       
        $InvD = InvoiceDetail::find($id);
        $InvD->quantity = $req->quantity;
        $InvD -> save();
        $dtInvD = InvoiceDetail::all();
       return redirect()->route('invoicedetails',compact('dtInvD'));
    }

     function delete($id){       
         $InvD = InvoiceDetail::find($id);
         $InvD -> status = 0;
         $InvD -> save();
         $dtInvD = DB::table('invoice_details')->where('status','!=','0')->get();    
         return redirect()->route('invoicedetails',compact('dtInvD'));
     } 
}