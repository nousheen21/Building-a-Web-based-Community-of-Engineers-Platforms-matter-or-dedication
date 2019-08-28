<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:alumni');
    }

    public function index()
    {
        $userId = Auth::guard('alumni')->user()->id;
        $educations = Education::where('user_id', $userId)->get();
        return view('dashboard.alumni.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.alumni.education.create');
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
            'level' => 'required|max:30',
            'degree' => 'required|max:255',
            'group' => 'required|max:255',
            'institute' => 'required|max:255',
            'passing_year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'duration' => 'required|max:255',

        ]);

        if ($validator->fails()) {
            return redirect('alumni/education/create')
                ->withErrors($validator)
                ->withInput();
        }


        $userId = Auth::guard('alumni')->user()->id;

        $education = new Education();
        $education->user_id = $userId;
        $education->level = $request->level;
        $education->degree = $request->degree;
        $education->group = $request->group;
        $education->institute = $request->institute;
        $education->result = $request->result;
        $education->scale = $request->scale;
        $education->passing_year = $request->passing_year;
        $education->duration = $request->duration;

        if($education->save())
            return redirect('alumni/education')->with('success', 'Education save successfully');
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
        $education = Education::find($id);
        return view('dashboard.alumni.education.edit', compact('education'));
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
            'level' => 'required|max:30',
            'degree' => 'required|max:255',
            'group' => 'required|max:255',
            'institute' => 'required|max:255',
            'passing_year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'duration' => 'required|max:255',

        ]);

        if ($validator->fails()) {
            return redirect('alumni/education/create')
                ->withErrors($validator)
                ->withInput();
        }

        $education = Education::find($id);
        $education->level = $request->level;
        $education->degree = $request->degree;
        $education->group = $request->group;
        $education->institute = $request->institute;
        $education->result = $request->result;
        $education->scale = $request->scale;
        $education->passing_year = $request->passing_year;
        $education->duration = $request->duration;

        if($education->save())
            return redirect('alumni/education')->with('success', 'Education Update successfully');
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
        $education = Education::find($id);
        if($education->delete())
            return redirect('alumni/education')->with('success', 'Education Delete successfully');
        return redirect()->back()->with('error','This an Error');
    }
}
