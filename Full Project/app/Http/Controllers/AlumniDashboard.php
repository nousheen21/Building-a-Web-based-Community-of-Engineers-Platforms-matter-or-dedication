<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Affiliation;
use App\Blog;
use App\Education;
use App\Faq;
use App\Interesting;
use App\ProjectResearch;
use App\Story;
use App\Travel;
use App\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use App\User;
use Validator;
class AlumniDashboard extends Controller
{
    public function __construct(){
        $this->middleware('auth:alumni');
    }

    public function index(){
        $userId = Auth::guard('alumni')->user()->id;
        $user = User::where('id', $userId)->first();
        $affiliations = Affiliation::where('user_id', $userId)->get();
        $story = Story::where('user_id', $userId)->get();
        $travels = Travel::where('user_id', $userId)->get();
        $projects = ProjectResearch::where('user_id', $userId)->get();
        $educations = Education::where('user_id', $userId)->get();
        $workshop = Workshop::where('id', $userId)->first();
        $achievement = Achievement::where('id', $userId)->first();
        $interesting = Interesting::where('id', $userId)->first();
        $faq = Faq::where('id', $userId)->first();
        $blogs = Blog::where('user_id', $userId)->get();
        return view('dashboard.alumni.index.index', compact('user','affiliations', 'story', 'projects',
            'travels', 'educations', 'workshop', 'achievement', 'interesting', 'faq','blogs' ));
    }

    public function edit(){
        $userId = Auth::guard('alumni')->user()->id;
        $user = User::where('id', $userId)->first();
        return view('dashboard.alumni.index.edit',compact('user'));
    }

    public function update(Request $request){

        $data = $request->all();
        $validator = Validator::make($data, [
            'nsuid' => 'required|numeric|digits_between:6,20',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'year' => 'required|digits:4',
            'short_bio' => 'max:350',
        ]);

        if ($validator->fails()) {
            return redirect('alumni/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $userId = Auth::guard()->user()->id;
        $userName = Auth::guard()->user()->user_name;
        $user = User::findOrFail($userId);

        if($request->hasFile('image')) {
            if ($user->image){
                unlink(public_path('/image/user/').$user->image);
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $fileName = $userName . "_profile_". $userId . "_" . $imageName;

            $directory = public_path('/image/user/');
            $imageUrl = $directory.$fileName;
            Image::make($image)->resize(200, 200)->save($imageUrl);
            $user->image = $fileName;
        }

        if($request->hasFile('cover_image')) {
            if ($user->cover_image){
                unlink(public_path('/image/user/').$user->cover_image);
            }
            $image = $request->file('cover_image');
            $imageName = $image->getClientOriginalName();
            $fileName = $userName . "_cover_". $userId . "_" . $imageName;

            $directory = public_path('/image/user/');
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
