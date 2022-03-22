<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Account;

class RegisterController extends Controller
{
    use AuthenticatesUsers;
    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }
    public function index()
    {
        return view('admin.auth.login');
    }
    public function register(Request $req)
    {
        // $this->validate($request, [
        //     'name' =>'required|name',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        //     'password_confirmation' => 'required|min:6'
        // ]);
        Account::create([
            'fullname' => $req->fullname,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'phone' => $req->phone,
            'address' => $req->address,
            'role' => 1,
            'avartar' => $req->avartar,
            'status' => 1,

        ]);
        //return redirect()->route('admin.auth.login');
        return view('admin.auth.login');
    }
}