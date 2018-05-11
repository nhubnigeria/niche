<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class APIController extends Controller
{
    public function test() {
        $names = User::all();
        return json_encode($names);
    }
    
    public function login(Request $request) {
        try {
            $credentials = [
                'email' => strtolower($request->email),
                'password' => $request->password,
            ];
            $user = Sentinel::authenticate($credentials);
            $test = Sentinel::login($user);
            return response()->json($test);
            // if (!$user) {
            //     return back()
            //             ->withInput()
            //             ->with('error', 'Oops!, Wrong login credentials!');
            // } else {
            //     Sentinel::login($user);
            //     try {
            //         if (Sentinel::inRole('admin')) {
            //             session(['currentUserRole' => 'admin']);
            //             session(['currentUserId' => $user->id]);
            //             return redirect()->route('projects');
            //         } elseif(Sentinel::inRole('user')) {
            //             session(['currentUserRole' => 'user']);
            //             session(['currentUserId' => $user->id]);
            //             return redirect()->route('projects');
            //         }
            //     } catch (BadMethodCallException $e) {
            //         return redirect()->route('login')
            //                 ->with('error', 'Your Session has expired. Please login again!');
            //     }
            // }
        } catch(Exception $e) {
            // return redirect()->route('login');
            return response()->json(null, 204);
        }
    }
    
    public function logout() {
      try {
          Sentinel::logout(null, true);
          session()->flush();
            //   return redirect()->route('login');
            return response()->json(null, 204);      
          
      } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
        //   return redirect()->route('login');
        return response()->json(null, 204);      
      } catch (\ErrorException $e) {
        //   return redirect()->route('login')
        //       ->with('error', 'Session expired. Login again!');
        return response()->json(null, 204);      
      }
    }
}
