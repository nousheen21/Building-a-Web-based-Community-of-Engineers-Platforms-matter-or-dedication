<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:alumni')->except('logout');
        $this->middleware('guest:student')->except('logout');

    }

    public function login(Request $request){

        //validate the form data
        $this->validate($request, [
            'password' => 'required|min:6'
        ]);


        //attempt to log the user in
        if(Auth::guard('alumni')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1], $request->remember)){
            session(['type' => 'alumni']);
            return redirect()->intended(route('alumni.home'));
        }elseif(Auth::guard('alumni')->attempt(['user_name' => $request->email, 'password' => $request->password, 'role' => 1], $request->remember)){
            session(['type' => 'alumni']);
            return redirect()->intended(route('alumni.home'));
        }elseif(Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 2], $request->remember)){
            session(['type' => 'student']);
        }else{

        }
        //if unsuccessful, redirect back with the form data
        return redirect()->back()->with('Input', $request->only('email', 'remember'))->with('error', 'Invalid User Name or Email');
    }



    public function logout(Request $request)
    {
        Auth::guard(session('type'))->logout();
        return redirect('/');
    }

    public function showLoginForm()
    {
        $this->redirectTo = session('from');

        return view('website.login');
    }

}
