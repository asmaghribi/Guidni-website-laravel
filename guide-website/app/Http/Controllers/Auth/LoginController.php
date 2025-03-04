<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        $this->middleware('guest:supplier')->except('logout');
    }


    public function ShowloginAdmin()
    {
        return view('auth.login_admin');
    }
    public function ShowloginSupplier()
    {
        return view('auth.login_supplier');
    }
    public function loginAdmin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
           
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('admin.index');
        }
        return back()->withInput($request->only('email'));
    }
    public function loginSupplier(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',

        ]);
        if (Auth::guard('supplier')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('supplier.index');
        }
        return back()->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {


        if(Auth::guard('admin')->check()) { // this means that the admin was logged in.
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login.show');

        } elseif(Auth::guard('supplier')->check()) {
            Auth::guard('supplier')->logout();
            return redirect()->route('supplier.login.show');
        } else {
            Auth::guard('web')->logout();
            return redirect()->route('login');

        }
        $this->guard()->logout();
        $request->session()->invalidate();




    }
}
