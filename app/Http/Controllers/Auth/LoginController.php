<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

use Socialite;

//use App\SocialProvider;

use App\User;

//use Illuminate\Support\Facades\Auth;


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
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectToProvider($provider){

        return Socialite::driver($provider)->
/*
        fields([
           'last_name','email'
       ])->scopes([
           'last_name', 'email'
       ])->
*/
        redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */

    public function handleProviderCallback( $provider )
    {
        try{
            $socialUser = Socialite::driver( $provider )->stateless()

    /*->fields([
       'last_name', 'email'
   ])*/

            ->user();

        }catch(Exception $e){

            // return $socialUser->getEmail();

            return redirect('/');

        }
        // the creatiion and the social provider and more

            if( $socialUser->getEmail() ){

                $emailX = $socialUser->getEmail();
            }else{
                $emailX = generateEmail( $socialUser->getName(), $provider );
            }

            $array = array( 

            'name' => $socialUser->getName() ,
            'email' => $emailX ,
            'password' => bcrypt( sluggify( $socialUser->getName() ) ) ,
            'tel' => '0606060606',
            'admin' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'provider' => $provider,
            'provider_id' => $socialUser->getId()
             );


            $user = $this->findOrCreateUser( $array, $provider);

            Auth::login($user, true);

            return redirect('home');

            return redirect::route('home');// with flash what what we include as generated var

    }

    public function findOrCreateUser($array, $provider)
    {
        $authUser = User::where('provider_id', $array['provider_id'] )->first();
        if ( $authUser ) {
            return $authUser;
        }
        return User::create($array);
    }

}
