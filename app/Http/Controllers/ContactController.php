<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
    */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'message' => ['required', 'string', 'max:300'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Illuminate\Http\Requests $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        // $input = $request->all();

        // Validator::make($input, [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'message' => 'required',
        // ]);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // notify()->success('Your message has been successfully sent');

        return back()->with('success', 'Your message has been successfully sent 👊');
    }
}
