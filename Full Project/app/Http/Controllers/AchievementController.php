<?php

namespace App\Http\Controllers;

use App\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    public function __construct(){
        $this->middleware('auth:alumni');
    }

    public function index(){
        $userId = Auth::guard('alumni')->user()->id;
        $achievement = Achievement::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.achievement.index', compact('achievement'));
    }

    public function create(){
        $userId = Auth::guard('alumni')->user()->id;
        $achievement = Achievement::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.achievement.create', compact('achievement'));
    }

    public function updateOrCreate(Request $request){
        $userId = Auth::guard('alumni')->user()->id;

        Achievement::updateOrCreate(
            ['user_id' => $userId],
            [
                'description' => $request->description,
            ]);

        return redirect('/alumni/achievement')->with('success', 'Achievement save success');
    }
}
