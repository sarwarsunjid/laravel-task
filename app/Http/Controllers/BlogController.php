<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('blog.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();  
        $path = $request->image->move(public_path('featured'), $imageName);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->input('title'), "-");
        $blog->excerpt = $request->excerpt;
        $blog->content = $request->content;
        $blog->meta_title = $request->meta_title;
        $blog->meta_descr = $request->meta_descr;
        $blog->meta_key = $request->meta_key;
        $blog->category=$request->category;
        //for uploading image
        $blog->image = $imageName;
        $blog->save();

        return redirect()->route('blog.index')
            ->with('success','Blog has been created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        $blog = Blog::where('slug',$slug)->get()->first();
        return view('blog.show', compact('blog', 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog= Blog::find($id);
        return view ('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $imageName = time().'.'.$request->image->extension();  
        $path = $request->image->move(public_path('featured'), $imageName);

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->input('title'), "-");
        $blog->excerpt = $request->excerpt;
        $blog->content = $request->content;
        $blog->meta_title = $request->meta_title;
        $blog->meta_descr = $request->meta_descr;
        $blog->meta_key = $request->meta_key;
        $blog->category=$request->category;
        //for uploading image
        $blog->image = $imageName;
        $blog->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
    }
 
   

}
