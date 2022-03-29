<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'role' => 2,
            'status' => 1
        ], $request->get('remember'))) {
            return redirect()->intended(route('user.home'));
        }
        return back()->withInput($request->only('email', 'remember'));
   
    }

    public function registration()
    {
        return view('auth.register');
    }
      
    public function customRegistration(Request $req)
    {  
        Account::create([
            'fullname' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'phone' => $req->phone,
            'address' => $req->address,
            'role' => 1,
            'avartar' => NULL,
            'status' => 1,
        ]);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('home');
    }
}