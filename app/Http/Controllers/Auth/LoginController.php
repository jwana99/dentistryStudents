<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    }

    protected function authenticated(Request $request, $user)
    {
        // to admin dashboard
        if ($user->isAdmin()) {
            return redirect(route('dashboard'));
        } // to user dashboard
        else if ($user->isUser()) {
            return redirect(route('student_account'));
        }

        abort(404);
    }

    public function showLoginForm()
    {
        return view('students.login');
    }

    public function guard()
    {
        return Auth::guard('student');
    }

//    public function login(Request $request)
//    {
//        $student= [
//            'email'
//        ]
//        Auth::guard('student')->login($student);
//        $this->validateLogin($request);
//    }
}
