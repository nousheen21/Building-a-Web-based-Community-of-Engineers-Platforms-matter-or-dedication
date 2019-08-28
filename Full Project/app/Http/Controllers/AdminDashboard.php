<?php

namespace App\Http\Controllers;

use App\Alumni;
use App\Contact;
use App\Student;
use App\User;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $students = Student::where('role', 2)->get();
        $alumnis = Alumni::where('role', 1)->get();
        return view('dashboard.admin.index.index', compact('alumnis', 'students'));
    }

    public function deleteUser($id){
        $user = User::find($id);
        if ($user->cover_image){
            unlink(public_path('/image/user/').$user->cover_image);
        }
        if ($user->delete())
            return redirect()->back()->with('success','Delete successfully');
        return redirect()->back()->with('error', 'There is an error message');
    }

    public function contact(){
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('dashboard.admin.contact.contact', compact('contacts'));
    }

    public function contactDelete($id){
        $contact = Contact::find($id);
        if ($contact->delete())
            return redirect()->back()->with('success','Delete successfully');
        return redirect()->back()->with('error', 'There is an error message');
    }


}
