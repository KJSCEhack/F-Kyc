<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Support\Facades\Session;
class homeController extends Controller
{
    public function index (Request $request)
    {
        if ($request->session()->has('token') && $request->session()->has('name') && $request->session()->has('id') && $request->session()->has('email') ){
            $uid = Session::get('id');
//            print_r($uid);
            return view::make('pages.home');
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request){
        Session::flush();
        return redirect('/');
    }

}
