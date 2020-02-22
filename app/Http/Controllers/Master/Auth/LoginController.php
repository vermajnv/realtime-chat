<?php

namespace App\Http\Controllers\Master\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    protected $guard = 'admin';
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

    use AuthenticatesUsers {
    logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/sitemaster';
    protected $redirectToLogin = '/sitemaster/login';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
       return view('master.auth.login');
    }

    /**
     *  Logout Function (Auth Cleaanup)
     *
     * @return void
     */
    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect($this->redirectToLogin);
    }

    /**
     * Check either username or email or Mobile.
     * @return string
     */
    public function username()
    {
        $identity  = request()->get('identity');
        if(filter_var($identity, FILTER_VALIDATE_EMAIL))
        {
            //user sent their email
            $fieldName = 'email';
        }
        else
        {
            if(is_numeric($identity))
            {
                //they sent their mobile instead
                $fieldName = 'mobile_number';
            }
            else
            {
                //they sent their username instead
                $fieldName = 'username';
            }
        }
        request()->merge([$fieldName => $identity]);
        return $fieldName;
    }

    /**
     * Validate the user login.
     * @param Request $request
     */
    protected function validateLogin(Request $request)
    {
        $this->validate(
            $request,
            [
                'identity' => 'required|string',
                'password' => 'required|string',
            ],
            [
                'identity.required' => 'loginInvalid Username or email or Mobile',
                'password.required' => 'Incorrect Password',
            ]
        );
    }

    /**
     * Overriding defaul
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $data = $request->only($this->username(), 'password');
        $data['is_active'] = true;
        return $data;
    }
    /**
     * Overriding Default Auth Login Failed Response
     * @param Request $request
     * @throws ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        // dd(trans('auth.failed'));
        $request->session()->put('credentials', trans('auth.failed'));
        throw ValidationException::withMessages(
            [
                'error' => [trans('auth.failed')],
            ]
        );
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard($this->guard);
    }
}
