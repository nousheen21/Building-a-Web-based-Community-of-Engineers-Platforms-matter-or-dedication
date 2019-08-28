<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Admin;

class AdminLogin extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';


    public function __construct()
    {
        $this->middleware('guest:web');
        $this->middleware('guest:admin', ['except' => ['logout', 'userLogout']]);
    }

    public function showLoginForm()
    {
        return view('dashboard.admin.login');
    }

    public function login(Request $request){

        //validate the form data
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        //attempt to log the user in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //if successful, redirect to their intended location
            return redirect()->intended(url('admin/dashboard'));
        }elseif (Auth::guard('admin')->attempt(['name' => $request->email, 'password' => $request->password], $request->remember)){
            return redirect()->intended(url('admin/dashboard'));
        }else{

        }
            

        //if unsuccessful, redirect back with the form data
        return redirect()->back()->with('Input', $request->only('email', 'remember'))->with('error', 'Admin Login invalid.');

    }

    public function logout()
    {
        
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
