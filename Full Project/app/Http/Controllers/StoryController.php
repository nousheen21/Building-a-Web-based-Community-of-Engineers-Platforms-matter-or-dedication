<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Auth;
class StoryController extends Controller
{
    //----#### for alumni ####----
    public function index(){
        $userId = Auth::guard('alumni')->user()->id;
        $story = Story::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.story.index', compact('story'));
    }

    public function create(){
        $userId = Auth::guard('alumni')->user()->id;
        $story = Story::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.story.create', compact('story'));
    }

    public function updateOrCreate(Request $request){
        $userId = Auth::guard('alumni')->user()->id;

        Story::updateOrCreate(
            ['user_id' => $userId],
            [
                'description' => $request->description,
            ]);

        return redirect('/alumni/my_story')->with('success', 'Information save success');
    }

    //-------##### for Student #####---------
    public function indexStudent(){
        $userId = Auth::guard('student')->user()->id;
        $story = Story::where('user_id', '=', $userId)->first();
        return view('dashboard.student.story.index', compact('story'));
    }


    public function createStudent(){
        $userId = Auth::guard('student')->user()->id;
        $story = Story::where('user_id', '=', $userId)->first();
        return view('dashboard.student.story.create', compact('story'));
    }

    public function updateOrCreateStudent(Request $request){
        $userId = Auth::guard('student')->user()->id;

        Story::updateOrCreate(
            ['user_id' => $userId],
            [
                'description' => $request->description,
            ]);

        return redirect('/student/story')->with('success', 'Information save success');
    }
}

