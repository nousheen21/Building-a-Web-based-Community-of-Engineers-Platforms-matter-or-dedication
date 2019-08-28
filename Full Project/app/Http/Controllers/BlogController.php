<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth:alumni');
    }

    public function index()
    {
        $userId = Auth::guard('alumni')->user()->id;
        $blogs = Blog::where('user_id', '=', $userId)->get();
        return view('dashboard.alumni.blog.index', compact('blogs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.alumni.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'title' => 'required|max:200',

        ]);

        if ($validator->fails()) {
            return redirect('alumni/blog/create')
                ->withErrors($validator)
                ->withInput();
        }

        $user_id = Auth::guard('alumni')->user()->id;
        $blog = new Blog();
        $blog->user_id = $user_id;
        $blog->title = $request->title;
        $blog->description = $request->description;
        if($blog->save())
            return redirect('alumni/blog')->with('success', 'Blog Save Successfully');
        return redirect()->back()->with('error','This an Error');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('dashboard.alumni.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'title' => 'required|max:200',

        ]);

        if ($validator->fails()) {
            return redirect('alumni/blog/create')
                ->withErrors($validator)
                ->withInput();
        }

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        if($blog->save())
            return redirect('alumni/blog')->with('success', 'Blog update Successfully');
        return redirect()->back()->with('error','This an Error');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if($blog->delete())
            return redirect('alumni/blog')->with('success', 'Blog delete Successfully');
        return redirect()->back()->with('error','This an Error');
    }

    public function onlyMe($id) {
        $blog = Blog::find($id);
        $blog->status = 0;
        if($blog->save())
            return redirect('alumni/blog')->with('success', 'Blog info is only me');
        return redirect()->back()->with('error','This an Error');
    }
    public function public($id) {
        $blog = Blog::find($id);
        $blog->status = 1;
        if($blog->save())
            return redirect('alumni/blog')->with('success', 'Blog info is public');
        return redirect()->back()->with('error','This an Error');
    }
}
