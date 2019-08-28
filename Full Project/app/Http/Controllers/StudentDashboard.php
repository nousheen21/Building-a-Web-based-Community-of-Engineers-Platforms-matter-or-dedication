<?php

namespace App\Http\Controllers;

use App\EducationWork;
use App\Faq;
use App\Story;
use App\User;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class StudentDashboard extends Controller
{
    public function __construct(){
        $this->middleware('auth:student');
    }

    public function index(){
        $userId = Auth::guard('student')->user()->id;
        $user = User::where('id', $userId)->first();
        $story = Story::where('user_id', $userId)->first();
        $education = EducationWork::where('user_id', $userId)->first();
        $faq = Faq::where('user_id', $userId)->first();
        return view('dashboard.student.index.index', compact('user','story', 'education', 'faq'));
    }

    public function edit(){
        $userId = Auth::guard('student')->user()->id;
        $user = User::where('id', $userId)->first();
        return view('dashboard.student.index.edit',compact('user'));
    }

    public function update(Request $request){

        $data = $request->all();
        $validator = Validator::make($data, [
            'nsuid' => 'required|numeric|digits_between:6,20',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'year' => 'required|digits:1',
            'short_bio' => 'max:350',
        ]);

        if ($validator->fails()) {
            return redirect('student/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $userId = Auth::guard()->user()->id;
        $userName = Auth::guard()->user()->user_name;
        $user = User::findOrFail($userId);

        if($request->hasFile('image')) {
            if ($user->image){
                unlink(public_path('/image/student/').$user->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = $userName . "_profile_". $userId . "_" . $imageName;

            $directory = public_path('/image/student/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(200, 200)->save($imageUrl);
            $user->image = $fileName;
        }

        if($request->hasFile('cover_image')) {
            if ($user->cover_image){
                unlink(public_path('/image/student/').$user->cover_image);
            }
            $image = $request->file('cover_image');
            $imageName = $image->getClientOriginalName();
            $fileName = $userName . "_cover_". $userId . "_" . $imageName;

            $directory = public_path('/image/student/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(770, 400)->save($imageUrl);
            $user->cover_image = $fileName;
        }

        $user->nsuid = $request->nsuid;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->year = $request->year;
        $user->degree = $request->degree;
        $user->short_bio = $request->short_bio;

        if ($user->save())
            return redirect()->back()->with('success','Update successfully');
        return redirect()->back()->with('error', 'There is an error message');
    }

    public function onlyMe($id){
        $user = User::find($id);
        $user->status = 0;
        if ($user->save())
            return redirect()->back()->with('success','Your Profile is  "Only Me"');
        return redirect()->back()->with('error', 'There is an error message');
    }

    public function public($id){
        $user = User::find($id);
        $user->status = 1;
        if ($user->save())
            return redirect()->back()->with('success','Your Profile is  "Public"');
        return redirect()->back()->with('error', 'There is an error message');
    }

}
