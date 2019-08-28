<?php

namespace App\Http\Controllers;

use App\ProjectResearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Image;
class ProjectResearchController extends Controller
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
        $projects = ProjectResearch::where('user_id', $userId)->get();
        return view('dashboard.alumni.project_research.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.alumni.project_research.create');
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
            'type' => 'required|max:25',
            'name' => 'required|max:255',
            'title' => 'required|max:300',
            'adviser' => 'required|max:255',
            'team_name' => 'required|max:255',
            'funded_by' => 'required|max:255',

        ]);

        if ($validator->fails()) {
            return redirect('alumni/project_research/create')
                ->withErrors($validator)
                ->withInput();
        }

        $userId = Auth::guard('alumni')->user()->id;
        $userName = Auth::guard('alumni')->user()->user_name;
        $project = new ProjectResearch();

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = $userName . '_' . $userId . $imageName;
            $directory = public_path('/image/project_research/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(400, 400)->save($imageUrl);
            $project->image = $fileName;
        }

        $project->user_id = $userId;
        $project->type = $request->type;
        $project->name = $request->name;
        $project->title = $request->title;
        $project->adviser = $request->adviser;
        $project->team_name = $request->team_name;
        $project->funded_by = $request->funded_by;
        $project->description = $request->description;

        if($project->save())
            return redirect('alumni/project_research')->with('success', 'Project & Research save successfully');
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
        $project = ProjectResearch::find($id);
        return view('dashboard.alumni.project_research.edit', compact('project'));
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
            'type' => 'required|max:25',
            'name' => 'required|max:255',
            'title' => 'required|max:300',
            'adviser' => 'required|max:255',
            'team_name' => 'required|max:255',
            'funded_by' => 'required|max:255',

        ]);

        if ($validator->fails()) {
            return redirect('alumni/project_research/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $userId = Auth::guard('alumni')->user()->id;
        $userName = Auth::guard('alumni')->user()->user_name;
        $project = ProjectResearch::findOrFail($id);

        if($request->hasFile('image')) {
            if ($project->image){
                unlink(public_path('/image/project_research/').$project->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = $userName . '_' . $userId. '_' . $imageName;
            $directory = public_path('/image/project_research/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(400, 400)->save($imageUrl);
            $project->image = $fileName;
        }

        $project->user_id = $userId;
        $project->type = $request->type;
        $project->name = $request->name;
        $project->title = $request->title;
        $project->adviser = $request->adviser;
        $project->team_name = $request->team_name;
        $project->funded_by = $request->funded_by;
        $project->description = $request->description;

        if($project->save())
            return redirect('alumni/project_research')->with('success', 'Project & Research Update successfully');
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
        $project = ProjectResearch::find($id);
        if ($project->image){
            unlink(public_path('/image/project_research/').$project->image);
        }
        if($project->delete())
            return redirect('alumni/project_research')->with('success', 'Project & Research Update successfully');
        return redirect()->back()->with('error','This an Error');
    }

    public function onlyMe($id) {
        $project = ProjectResearch::find($id);
        $project->status = 0;
        if($project->save())
            return redirect('alumni/project_research')->with('success', 'Project & Research info is only me');
        return redirect()->back()->with('error','This an Error');
    }
    public function public($id) {
        $project = ProjectResearch::find($id);
        $project->status = 1;
        if($project->save())
            return redirect('alumni/project_research')->with('success', 'Project & Research info is public');
        return redirect()->back()->with('error','This an Error');
    }


}
