<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;

class EventsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.events');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories = Category::all();

        return view('admin.createEvent', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => ['required', 'max:255'],
            'status' => 'required',
            'date' => 'required',
            'hours' => 'required',
            'duration' => 'required',
            'image' => 'required|mimes:png,jpeg,gif,jpg',
            'description' => ['required', 'max:255'],
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'type' => 'required',
            'code_postal' => 'required',
            // 'category_id' => ['required'],
        ]);

        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/Events', $fileName);

        $data = [
            'name' => $request->name,
            'status' => $request->status,
            'date' => $request->date,
            'hours' => $request->hours,
            'duration' => $request->duration,
            'image' => $fileName,
            'description' => $request->description,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'code_postal' => $request->code_postal,
            'type' => $request->type,
            'user_id' => Auth::user()->id,
        ];

        Events::create($data);

       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventsRequest  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventsRequest $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
