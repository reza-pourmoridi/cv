<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contacts;

class ConatactController extends Controller
{

    public function create()
    {
        if (app()->environment('production')) {
            $public_html = 'public/';
        } else {
            $public_html = '/';
        }

        return view('contact', ['public_html' => $public_html]);
    }
    public function cv()
    {
        if (app()->environment('production')) {
            $public_html = 'public/';
        } else {
            $public_html = '/';
        }
        return view('cv',['public_html'=>$public_html]);
    }

    public function store(Request $request)
    {
        // Validate the form data
        $contact = new contacts();
        $contact->name = $request['name'];// Optionally, you can perform additional actions here,
        $contact->email = $request['email'];// such as sending notifications or redirecting to a thank you page.
        $contact->message = $request['message'];

        $contact->save();

        if ($contact) {
            $result = [ 'success' => 'message sent'];
        }else{
            $result = ['error' => 'error'];
        }
        $result = json_encode($result);
        return $result;
    }


}
