<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Sentinel;
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
    
    public function login(Request $request) {
        try {
            $credentials = [
                'email' => strtolower($request->email),
                'password' => $request->password,
            ];
            $user = Sentinel::authenticate($credentials);
            
            if (!$user) {
                return back()
                        ->withInput()
                        ->with('login_error', 'Oops!, Wrong login credentials!');
            } else {
                Sentinel::login($user);
                try {
                    if (Sentinel::inRole('admin')) {
                        session(['currentUserRole' => 'admin']);
                        session(['currentUserId' => $user->id]);
                        return redirect()->route('couriers');
                    } elseif(Sentinel::inRole('vendor')) {
                        session(['currentUserRole' => 'vendor']);
                        session(['currentUserId' => $user->id]);
                        return redirect()->route('sub-categories');
                    } elseif(Sentinel::inRole('user')) {
                        session(['currentUserRole' => 'user']);
                        session(['currentUserId' => $user->id]);
                        return redirect()->route('categories');
                    }
                } catch (BadMethodCallException $e) {
                    return redirect()->route('login')
                            ->with('error', 'Your Session has expired. Please login again!');
                }
            }
        } catch(Exception $e) {
            return redirect()->route('login');
        }
    }
    
    public function logout() {
      try {
          Sentinel::logout(null, true);
          session()->flush();
          return redirect()->route('landing');
      } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
          return redirect()->route('landing');
      } catch (\ErrorException $e) {
          return redirect()->route('landing')
              ->with('error', 'Session expired. Login again!');
      }
    }
}
