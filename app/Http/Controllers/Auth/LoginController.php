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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void     */
    
    public function __construct()
        {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:user')->except('logout');
            
        }
    public function showAdminLoginForm()
    {
        return view('auth.adminLogin', ['url' => 'admin']);
    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('username', 'remember'));
    }
    public function showUserLoginForm()
    {
        return view('auth.login', ['url' => 'login']);
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return back();
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
