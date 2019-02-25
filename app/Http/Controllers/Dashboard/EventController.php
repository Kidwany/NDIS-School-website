<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        $input = $request->all();

        $input['date'] = Carbon::parse($input['date'])->format('Y-m-d H:i:s');

        //return $input['date'];

        $this->validate($request, [
            'title'         =>  'required|min:3',
            'location'      =>  'required',
            'content'       =>  'required',
            'date'          =>  'required',
            'image'         =>  'required|mimes:jpeg,bmp,png,jpg,gif',
        ],[],[
            'title'         =>  'Title',
            'content'       =>  'Content',
            'date'          =>  'Date',
            'image'         =>  'Image',
        ]);
        //Upload and insert images


        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();

            $file->move('dashboard/img/event', $name);

            $path = 'dashboard/img/event/' . $name;

            //$image = Images::create(['name' => $name, 'path' => $path]);

            $input['image'] = $path;
        }

        $event = new Events;
        $event->title = $input['title'];
        $event->content = $input['content'];
        $event->date = $input['date'];
        $event->location = $input['location'];
        $event->image = $input['image'];
        $event->save();


        Session::flash('create',   $event->title . ' Has Been Created Successfully');
        return redirect('management/event');

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
        $event = Events::find($id);
        return view('dashboard.events.edit', compact('event'));
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


        $input = $request->all();

        $input['date'] = Carbon::parse($input['date'])->format('Y-m-d H:i:s');

        //return $input['date'];

        $this->validate($request, [
            'title'         =>  'required|min:3',
            'location'      =>  'required',
            'content'       =>  'required',
            'date'          =>  'required',
/*            'image'         =>  'mimes:jpeg,bmp,png,jpg,gif',*/
        ],[],[
            'title'         =>  'Title',
            'content'       =>  'Content',
            'date'          =>  'Date',
            'image'         =>  'Image',
        ]);

        //Upload and insert images
        if ($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();

            $file->move('dashboard/img/event', $name);

            $path = 'dashboard/img/event/' . $name;

            //$image = Images::create(['name' => $name, 'path' => $path]);

            $input['image'] = $path;
        }

        $event = Events::find($id);
        $event->title = $input['title'];
        $event->content = $input['content'];
        $event->date = $input['date'];
        $event->location = $input['location'];
        if (!empty($input['image']))
        {
            $event->image = $input['image'];
        }

        $event->save();

        Session::flash('update',   $event->title . ' Has Been Updated Successfully');
        return redirect('management/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Events::find($id);

        if ($event->image)
        {
            unlink(public_path() . '/' . $event->image);
        }

        // Delete Pivot Row Related to Member ID

        $event->delete();

        Session::flash('delete', $event->title . ' Event Has Been Deleted Successfully');

        return redirect('management/event');
    }
}
