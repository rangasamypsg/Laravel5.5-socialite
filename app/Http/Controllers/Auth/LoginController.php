<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($social)
    {
      
        $userSocial = Socialite::driver($social)->user();
        //dd($userSocial);

        $user = User::where(['email' => $userSocial->getEmail()])->first();
       // $user = User::where('provider_id', $userSocial->getId())->first();
        if (!$user) {
            // add user to database
            $user = User::create([
                'email' => $userSocial->getEmail(),
                'name' => $userSocial->getName() ? $userSocial->getName() : 'Thala',
                'provider_id' => $userSocial->getId(),
                'password' => bcrypt('123456'),
            ]);
        }
        // login the user
        Auth::login($user, true);
        return redirect($this->redirectTo);
    }

}
