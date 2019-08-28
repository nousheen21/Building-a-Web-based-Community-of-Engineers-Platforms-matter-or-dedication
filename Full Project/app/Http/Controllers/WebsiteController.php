<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Event;
use App\Question;
use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;
use Validator;
class WebsiteController extends Controller
{
    //register view
    public function alumniSignup(){
        return view('website.register.alumni');
    }

    public function studentSingup(){
        return view('website.register.student');
    }
    //end register view

    public function index(){
        $events = Event::where('status', 1)->orderBy('id', 'desc')->take('5')->get();
        return view('website.index.index', compact('events'));
    }

    public function alumni(){
        $newUsers = DB::table('users')
            ->select('users.*')
            ->where('status', 1)
            ->where('role', 1)
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        $users = User::where('status', 1)->where('role', 1)->orderBy('id', 'desc')->get();
        return view('website.alumni.alumni', compact('users', 'newUsers'));
    }

    public function alumniDetails($userName){
        if(Auth::guard('alumni')->check()) {
            $user = User::where('user_name', $userName)
                ->with('affiliations', 'projects', 'story', 'travels', 'educations', 'achievements', 'interestings', 'workshops','faqs', 'blogs')
                ->first();
            return view('website.alumni.view', compact('user'));
        }elseif(Auth::guard('student')->check()){
            $user = User::where('user_name', $userName)
                ->with('affiliations', 'projects', 'story', 'travels', 'educations', 'achievements', 'interestings', 'workshops','faqs', 'blogs')
                ->first();
            return view('website.alumni.view', compact('user'));
        }else{
            session(["from" => "alumni/details/$userName"]);
            return redirect()->route('login');
        }
    }


    public function student(){
        $newUsers = DB::table('users')
            ->select('users.*')
            ->where('status', 1)
            ->where('role', 2)
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        $users = User::where('status', 1)->where('role', 2)->orderBy('id', 'desc')->get();
        return view('website.student.student', compact('users', 'newUsers'));
    }

    public function studentDetails($userName){
        if(Auth::guard('student')->check()) {
            $user = User::where('user_name', $userName)
                ->with('story', 'educationWorks', 'faqs')
                ->first();
            return view('website.student.view', compact('user'));
        }elseif(Auth::guard('alumni')->check()){
            $user = User::where('user_name', $userName)
                ->with('story', 'educationWorks', 'faqs')
                ->first();
            return view('website.student.view', compact('user'));
        }else{
            session(["from" => "student/details/$userName"]);
            return redirect()->route('login');
        }
    }


    public function service(){
        return view('website.service.service');
    }


    public function search(Request $request){
        $name = $request->get('search');
        $users = User::where('status', 1)
            ->where('user_name', 'LIKE', '%' . $name . '%')
            ->orWhere('first_name', 'LIKE', '%' . $name . '%')
            ->orWhere('last_name', 'LIKE', '%' . $name . '%')
            ->get();
        return view('website.search.user', compact('users'));
    }

    public function event(){
        $events = Event::where('status', 1)->orderBy('id', 'desc')->get();
        $newEvents = Event::where('status', 1)->orderBy('id', 'desc')->take(4)->get();
        return view('website.event.event', compact('events', 'newEvents'));
    }

    public function eventDetails($slug){
        $event = Event::where('slug', $slug)->first();
        $newEvents = Event::where('status', 1)->orderBy('id', 'desc')->take(4)->get();
        return view('website.event.view', compact('event', 'newEvents'));
    }

    public function contact(){
        return view('website.contact.contact');
    }

    public function contactStore(Request $request){

        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|max:100',
            'subject' => 'required|max:200',
            'email' => 'required|email',
            'message' => 'required|max:350',
        ]);

        if ($validator->fails()) {
            return redirect('/contact')
                ->withErrors($validator)
                ->withInput();
        }


        $contact = new Contact();
        $contact->name = $request->name;
        $contact->subject = $request->subject;
        $contact->email = $request->email;
        $contact->message = $request->message;

        if ($contact->save())
            return redirect()->back()->with('success','Your message send successfully');
        return redirect()->back()->with('error', 'There is an error message');

    }

    public function alumniContact($userName){
        if(Auth::guard('student')->check()) {
            $alumni = User::where('user_name', $userName)->first();
            return view('website.alumni.contact', compact('alumni'));
        }elseif (Auth::guard('alumni')->check()){
            $alumni = User::where('user_name', $userName)->first();
            return view('website.alumni.contact', compact('alumni'));
        }else{
            session(["from" => "alumni/contact/$userName"]);
            return redirect()->route('login');
        }
    }

    public function studentContact($userName){
        if(Auth::guard('student')->check()) {
            $student = User::where('user_name', $userName)->first();
            return view('website.student.contact', compact('student'));
        }elseif (Auth::guard('alumni')->check()){
            $student = User::where('user_name', $userName)->first();
            return view('website.student.contact', compact('student'));
        }else{
            session(["from" => "student/contact/$userName"]);
            return redirect()->route('login');
        }
    }

    public function questionStore(Request $request){
        $uName = $request->get('alumni_or_student');
        $data = $request->all();
        $validator = Validator::make($data, [
            'subject' => 'required|max:100',
            'alumni_or_student' => 'required|max:200',
            'question' => 'required|max:200',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::guard('student')->check()){
            $userName = Auth::guard('student')->user()->user_name;
            $role = Auth::guard('student')->user()->role;
            $name = Auth::guard('student')->user()->first_name;
        }else{
            $userName = Auth::guard('alumni')->user()->user_name;
            $role = Auth::guard('alumni')->user()->role;
            $name = Auth::guard('alumni')->user()->first_name;
        }

        $question = new Question();
        $question->alumni_or_student = $request->alumni_or_student;
        $question->type = $role;
        $question->user_name = $userName;
        $question->name = $name;
        $question->subject = $request->subject;
        $question->question = $request->question;

        if ($question->save())
            return redirect()->back()->with('success','Your question send successfully');
        return redirect()->back()->with('error', 'There is an error message');

    }


}
