<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;
use Auth;
class WorkshopJobController extends Controller
{

    public function __construct(){
        $this->middleware('auth:alumni');
    }
    public function index(){
        $userId = Auth::guard('alumni')->user()->id;
        $workshop = Workshop::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.workshop_job.index', compact('workshop'));
    }

    public function create(){
        $userId = Auth::guard('alumni')->user()->id;
        $workshop = Workshop::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.workshop_job.create', compact('workshop'));
    }

    public function updateOrCreate(Request $request){
        $userId = Auth::guard('alumni')->user()->id;

        Workshop::updateOrCreate(
            ['user_id' => $userId],
            [
                'description' => $request->description,
            ]);

        return redirect('/alumni/workshop_job')->with('success', 'Workshop & Job save success');
    }


}
