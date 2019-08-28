<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
//---------- for Alumni ------------
    public function index(){
        if (Auth::guard('alumni')->check()) {
            $userId = Auth::guard('alumni')->user()->id;
            $faq = Faq::where('user_id', '=', $userId)->first();
            return view('dashboard.alumni.faq.index', compact('faq'));
        }else{
            return redirect('/login');
        }
    }

    public function create(){
        if (Auth::guard('alumni')->check()) {
            $userId = Auth::guard('alumni')->user()->id;
            $faq = Faq::where('user_id', '=', $userId)->first();
            return view('dashboard.alumni.faq.create', compact('faq'));
        }else{
            return redirect('/login');
        }
    }

    public function updateOrCreate(Request $request){
        if (Auth::guard('student')->check()){
            $userId = Auth::guard('student')->user()->id;
        }else{
            $userId = Auth::guard('alumni')->user()->id;
        }

        Faq::updateOrCreate(
            ['user_id' => $userId],
            [
                'description' => $request->description,
            ]);

        return redirect()->back()->with('success', 'Faq save success');
    }


    public function faqQuestion()
    {
        if (Auth::guard('alumni')->check()) {
            $userName = Auth::guard('alumni')->user()->user_name;
            $questions = Question::where('alumni_or_student', '=', $userName)->orderBy('id', 'desc')->get();
            return view('dashboard.alumni.faq.question', compact('questions'));
        }else{
            return redirect('/login');
        }
    }

    //---------- for Student ------------
    public function studentIndex(){
        if (Auth::guard('student')->check()) {
            $userId = Auth::guard('student')->user()->id;
            $faq = Faq::where('user_id', '=', $userId)->first();
            return view('dashboard.student.faq.index', compact('faq'));
        }else{
            return redirect('/login');
        }
    }

    public function studentCreate(){
        if (Auth::guard('student')->check()) {
            $userId = Auth::guard('student')->user()->id;
            $faq = Faq::where('user_id', '=', $userId)->first();
            return view('dashboard.student.faq.create', compact('faq'));
        }else{
            return redirect('/login');
        }
    }

    public function faqQuestionStudent()
    {
        if (Auth::guard('student')->check()) {
            $userName = Auth::guard('student')->user()->user_name;
            $questions = Question::where('alumni_or_student', '=', $userName)->orderBy('id', 'desc')->get();
            return view('dashboard.student.faq.question', compact('questions'));
        }else{
            return redirect('/login');
        }
    }

    public function questionDelete($id){
        $question = Question::find($id);
        if ($question->delete())
            return redirect()->back()->with('success','Question delete successfully');
        return redirect()->back()->with('error', 'There is an error message');
    }


}
