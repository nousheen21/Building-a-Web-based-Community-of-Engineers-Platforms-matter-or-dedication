<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Validator;
use Image;
class EventController extends Controller
{


    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get();
        return view('dashboard.admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $validator = Validator::make($data, [
            'title' => 'required|max:225',
            'contact' => 'required|max:225',
            'start_date' => 'required|date',
            'end_date' => 'date',

        ]);

        if ($validator->fails()) {
            return redirect('admin/event/create')
                ->withErrors($validator)
                ->withInput();
        }
        $date = $request->get('start_date');
        $event = new Event();

        if($request->hasFile('image')) {
            if ($event->image){
                unlink(public_path('/image/event/').$event->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = "event_". $date . "_" . $imageName;

            $directory = public_path('/image/event/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(225, 225)->save($imageUrl);
            $event->image = $fileName;
        }
        $event->title = $request->title;
        $event->contact = $request->contact;
        $event->start_date = $date;
        $event->end_date = $request->end_date;
        $event->description = $request->description;
        if ($event->save())
            return redirect('admin/event')->with('success','Event Save Success"');
        return redirect()->back()->with('error', 'There is an error message');

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
        $event = Event::find($id);
        return view('dashboard.admin.event.edit', compact('event'));
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
        $data = $request->all();
        $validator = Validator::make($data, [
            'title' => 'required|max:225',
            'contact' => 'required|max:225',
            'start_date' => 'required|date',
            'end_date' => 'date',

        ]);

        if ($validator->fails()) {
            return redirect('admin/event/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $date = $request->get('start_date');
        $event = Event::find($id);

        if($request->hasFile('image')) {
            if ($event->image){
                unlink(public_path('/image/event/').$event->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = "event_up_". $date . "_" . $imageName;

            $directory = public_path('/image/event/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(225, 225)->save($imageUrl);
            $event->image = $fileName;
        }
        $event->title = $request->title;
        $event->contact = $request->contact;
        $event->start_date = $date;
        $event->end_date = $request->end_date;
        $event->description = $request->description;
        if ($event->save())
            return redirect('admin/event')->with('success','Event Update Success"');
        return redirect()->back()->with('error', 'There is an error message');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        if ($event->image){
            unlink(public_path('/image/event/').$event->image);
        }
        if ($event->delete())
            return redirect('admin/event')->with('success','Event Delete Success"');
        return redirect()->back()->with('error', 'There is an error message');

    }


    public function unpublished($id) {
        $project = Event::find($id);
        $project->status = 0;
        if($project->save())
            return redirect('admin/event')->with('success', 'Event info is Unpublished');
        return redirect()->back()->with('error','This an Error');
    }
    public function published($id) {
        $project = Event::find($id);
        $project->status = 1;
        if($project->save())
            return redirect('admin/event')->with('success', 'Event info is published');
        return redirect()->back()->with('error','This an Error');
    }



}
