<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;


class GoogleController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback(Request $request)
    {
        if($request->session()->has('token') && $request->session()->has('name') && $request->session()->has('id') && $request->session()->has('email') ){
            return View('pages.home');
        }
        else{
            $user = Socialite::driver('google')->user();
            if($user){
//            dd($user);
//            print_r($user->token);
                session(['token' => $user->token, 'name' => $user->name, 'id' => $user->id , 'email' => $user->email]);
                return redirect('/home');
            }
            else{
                return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Login Failed.');
            }
        }

        // $user->token;
    }}
