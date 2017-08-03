<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function postlogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:5',
        ],
        [
            'username.required' => 'username không thể để trống',
            'password.required' => 'password không thể để trống',
            'password.min'      => 'password ít nhất 5 kí tự'
        ]);
        $credentials =$request->only(['username','password']);
        if (Auth::attempt($credentials)) {
            return view('admin.index');
        }
        else{
            return redirect(route('login'))->with('msg','wrong username or password');
        }
    }
}
