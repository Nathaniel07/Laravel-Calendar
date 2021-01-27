<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Month;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $months = Month::orderBy('days','asc')->get();
        return view('events.index')->with('months', $months);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,
            [
            'event-name' => 'required',
            'event-days' => 'required',

            'from-days' => 'required',

            'to-days' => 'required'
            ]
            );

            $event = new Event;
            $event->event_name = $request->input('event-name');
            $event->event_days = implode(',', $request->input('event-days'));
            $event->from_days = $request->input('from-days');
            $event->to_days = $request->input('to-days');
            $event->save();


          $data = array(
            'success' => 'Event sucessfully saved.',
            //'event_days' => implode(',', $request->input('event-days')),
            'event_days' => $request->input('event-days'),

            'event_name' => $request->input('event-name'),
            'from_days' => $request->input('from-days'),
            //'from' => date("d", strtotime($request->input('from-days'))),
            'to_days' => $request->input('to-days'),
            //'to' => date("d", strtotime($request->input('to-days')))

            );

        return redirect('/')->with($data);

        //return 'TRUE';  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
