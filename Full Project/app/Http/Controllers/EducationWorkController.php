<?php

namespace App\Http\Controllers;

use App\EducationWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class EducationWorkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index()
    {
        $userId = Auth::guard('student')->user()->id;
        $education = EducationWork::where('user_id', $userId)->first();
        return view('dashboard.student.education_work.index', compact('education'));
    }

    public function create()
    {
        $userId = Auth::guard('student')->user()->id;
        $education = EducationWork::where('user_id', $userId)->first();
        return view('dashboard.student.education_work.create', compact('education'));
    }

    public function updateOrCreate(Request $request)
    {

        $data = $request->all();
        $validator = Validator::make($data, [
            'high_school' => 'required|max:250',
            'college' => 'required|max:250',
            'degree' => 'required|max:250',
            'institutions' => 'required|max:250',
            'skills' => 'required|max:250',
            'linkedin' => 'url|max:300',

        ]);

        if ($validator->fails()) {
            return redirect('student/education/create')
                ->withErrors($validator)
                ->withInput();
        }

        $userId = Auth::guard('student')->user()->id;
        EducationWork::updateOrCreate(
            ['user_id' => $userId],
            [
                'high_school' => $request->high_school,
                'college' => $request->college,
                'degree' => $request->degree,
                'institutions' => $request->institutions,
                'job_status' => $request->job_status,
                'designation' => $request->designation,
                'skills' => $request->skills,
                'works' => $request->works,
                'linkedin' => $request->linkedin
            ]);

        return redirect('/student/education')->with('success', 'Education & Work save success');
    }
}
