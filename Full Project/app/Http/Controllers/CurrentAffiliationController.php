<?php

namespace App\Http\Controllers;

use App\Affiliation;
use Illuminate\Http\Request;
use Auth;
use Validator;
class CurrentAffiliationController extends Controller
{

    public function __construct(){
        $this->middleware('auth:alumni');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::guard('alumni')->user()->id;
        $affiliations = Affiliation::where('user_id', $userId)->get();
        return view('dashboard.alumni.current_affiliation.index', compact('affiliations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.alumni.current_affiliation.create');
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
            'job_status' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'duration_form' => 'required|date',

        ]);

        if ($validator->fails()) {
            return redirect('alumni/current_affiliation/create')
                ->withErrors($validator)
                ->withInput();
        }

        $to = $request->get('duration_to');
        $current = $request->get('currently_working');

        $userId = Auth::guard('alumni')->user()->id;

        $affiliation = new Affiliation();
        $affiliation->user_id = $userId;
        $affiliation->job_type = $request->job_type;
        $affiliation->job_status = $request->job_status;
        $affiliation->organization = $request->organization;
        $affiliation->name = $request->name;
        $affiliation->designation = $request->designation;
        $affiliation->duration_form = $request->duration_form;
        $affiliation->duration_to = $current == null ? $to:$current;
        if($affiliation->save())
            return redirect('alumni/current_affiliation')->with('success', 'Current Affiliation Info Save Successfully');
        return redirect()->back()->with('error','This an Error');
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
        $affiliation = Affiliation::find($id);
        return view('dashboard.alumni.current_affiliation.edit', compact('affiliation'));
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
            'job_status' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'duration_form' => 'required|date',

        ]);

        if ($validator->fails()) {
            return redirect('alumni/current_affiliation/create')
                ->withErrors($validator)
                ->withInput();
        }


        $to = $request->get('duration_to');
        $current = $request->get('currently_working');

        $affiliation = Affiliation::find($id);
        $affiliation->job_type = $request->job_type;
        $affiliation->job_status = $request->job_status;
        $affiliation->organization = $request->organization;
        $affiliation->name = $request->name;
        $affiliation->designation = $request->designation;
        $affiliation->duration_form = $request->duration_form;
        $affiliation->duration_to = $current == null ? $to:$current;
        if($affiliation->save())
            return redirect('alumni/current_affiliation')->with('success', 'Current Affiliation Info update Successfully');
        return redirect()->back()->with('error','This an Error');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affiliation = Affiliation::find($id);
        if($affiliation->delete())
            return redirect('alumni/current_affiliation')->with('success', 'Current Affiliation Info Delete Successfully');
        return redirect()->back()->with('error','This an Error');
    }
}
