<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
         if (Auth::id()) {
             if (Auth::user()->usertype == '0') {
                 return view('user.dashboard');
             } else {
                 return view('admin.home');
             }
         } else {
           return redirect()->back();
         }
     }
     public function index()
     {
         return view('user.home');
     }
}
