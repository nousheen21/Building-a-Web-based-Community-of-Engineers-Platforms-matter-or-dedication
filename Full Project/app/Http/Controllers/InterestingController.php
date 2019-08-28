<?php

namespace App\Http\Controllers;

use App\Interesting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterestingController extends Controller
{
    public function __construct(){
        $this->middleware('auth:alumni');
    }

    public function index(){
        $userId = Auth::guard('alumni')->user()->id;
        $interesting = Interesting::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.interesting_fact.index', compact('interesting'));
    }

    public function create(){
        $userId = Auth::guard('alumni')->user()->id;
        $interesting = Interesting::where('user_id', '=', $userId)->first();
        return view('dashboard.alumni.interesting_fact.create', compact('interesting'));
    }

    public function updateOrCreate(Request $request){
        $userId = Auth::guard('alumni')->user()->id;

        Interesting::updateOrCreate(
            ['user_id' => $userId],
            [
                'description' => $request->description,
            ]);

        return redirect('/alumni/interesting')->with('success', 'Interesting save success');
    }
}
