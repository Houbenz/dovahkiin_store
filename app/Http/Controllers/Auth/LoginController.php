<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function authenticate(Request $request){

        $credentials=$request->only('email','password');

        $user=Auth::user();


        if($user != null){
            if(Auth::attempt($credentials)){
                return redirect()->intended('/')->with('user',$user);
            }
        }
    }

    public function showLoginFormAdmin(){
        return view('admin.login');
    }

    public function adminLogin(Request $request){
    
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        
        $credentials = $request->only('email','password');

        if(Auth::guard('admin')->attempt($credentials)){

            return redirect()->route('homeAdmin')->with('admin',Auth::user());
        }

        return back()->withInput($request->only('email'));
    }


    public function logout(){
        Auth::logout();
        return redirect()->intended('/');
    }
}
