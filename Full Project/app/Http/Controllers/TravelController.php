<?php

namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;
use Auth;
class TravelController extends Controller
{
    public function __construct(){
        $this->middleware('auth:alumni');
    }

    public function index(){
        $userId = Auth::guard('alumni')->user()->id;
        $travel = Travel::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.travel_diaries.index', compact('travel'));
    }

    public function create(){
        $userId = Auth::guard('alumni')->user()->id;
        $travel = Travel::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.travel_diaries.create', compact('travel'));
    }

    public function updateOrCreate(Request $request){
        $userId = Auth::guard('alumni')->user()->id;

        Travel::updateOrCreate(
            ['user_id' => $userId],
            [
                'description' => $request->description,
            ]);

        return redirect('/alumni/travel')->with('success', 'Travel save success');
    }


    public function onlyMe($id) {
        $travel = Travel::find($id);
        $travel->status = 0;
        if($travel->save())
            return redirect('alumni/travel')->with('success', 'Your travel is only me');
        return redirect()->back()->with('error','This an Error');
    }
    public function public($id) {
        $travel = Travel::find($id);
        $travel->status = 1;
        if($travel->save())
            return redirect('alumni/travel')->with('success', 'Your travel is public');
        return redirect()->back()->with('error','This an Error');
    }
}
