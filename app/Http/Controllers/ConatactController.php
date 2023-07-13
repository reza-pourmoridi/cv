<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\conatact;

class ConatactController extends Controller
{

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        conatact::create($request->all());

        return redirect()->back()->with('success', 'Message sent successfully!');
    }


}
