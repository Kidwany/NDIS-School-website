<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        //
        $events = Events::all();
        return view('dashboard.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('dashboard.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $input = $request->all();

        /*$start_date = $input['start'];
        $end_date = $input['end'];

        $input['start'] = Carbon::parse($start_date)->format('Y-m-d');
        $input['end'] = Carbon::parse($end_date)->format('Y-m-d');*/

        $this->validate($request, [
            'title'         =>  'required|min:3',
            'desc'          =>  '',
            'start'         =>  'required|date',
            'end'           =>  'nullable|date',
        ],[],[
            'title'         =>  ' Title',
            'desc'          =>  'Description',
            'start'         =>  'Start',
            'end'           =>  'End',
        ]);

        //Upload and insert images

        $event = Calendar::create($input);

        Session::flash('create',   $event->title . ' Has Been Created Successfully');
        return redirect('management/calendar');

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

        $event = Calendar::find($id);

        return view('dashboard.calendar.edit', compact('event'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */

    public function update(Request $request, $id)
    {

        $event = Calendar::find($id);

        $input = $request->all();

        /*$start_date = $input['start'];
        $end_date = $input['end'];

        $input['start'] = Carbon::parse($start_date)->format('Y-m-d');
        $input['end'] = Carbon::parse($end_date)->format('Y-m-d');*/

        $this->validate($request, [
            'title'         =>  'required|min:3',
            'desc'          =>  '',
            'start'         =>  'required|date',
            'end'           =>  'nullable|date',
        ],[],[
            'title'         =>  ' Title',
            'desc'          =>  'Description',
            'start'         =>  'Start',
            'end'           =>  'End',
        ]);

        //Upload and insert images

        $event = Calendar::update($input);

        Session::flash('create',   $event->title . ' Has Been Updated Successfully');
        return redirect('management/calendar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Calendar::find($id);

        $event->delete();

        Session::flash('delete',   $event->title . ' Event Has Been Deleted Successfully');

        return redirect('management/calendar');
    }
}
