<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index()
    {
        $dtPro = DB::table('products')->where('status','=','1')->get();
        return view('home',compact('dtPro'));
    }
}