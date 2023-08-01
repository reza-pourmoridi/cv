<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\LoginAdmin;
use App\Models\contacts;

class LoginAdminController extends Controller
{
    // Display the login form
    public function showLoginForm()
    {
        if (app()->environment('production')) {
            $public_html = 'public/';
        } else {
            $public_html = '/';
        }
        return view('admin.login',['public_html'=>$public_html]);
    }

    public function doshboard()
    {
        if (app()->environment('production')) {
            $public_html = 'public/';
        } else {
            $public_html = '/';
        }
        return view('admin.index',['public_html'=>$public_html]);
    }

    public function contactMeList()
    {
        $contactList = contacts::all();

        $result=[
            'list'=>$contactList ,
        ];

        if (app()->environment('production')) {
            $public_html = 'public/';
        } else {
            $public_html = '/';
        }
        return view('admin.contactMe.list',['public_html'=>$public_html , 'result' => ['list' => $contactList]]);
    }


// Handle the login form submission
    public function login(Request $request)
    {
        $AUTH_DETAIL = LoginAdmin::first();


        if ($AUTH_DETAIL->user_name == $request->username && $AUTH_DETAIL->password == $request->password) {
            // Assuming you have authenticated the user and verified their admin status
            session(['isAdmin' => true]);
            return redirect('/admin/dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(['login' => 'Invalid credentials']);
        }
    }
}
