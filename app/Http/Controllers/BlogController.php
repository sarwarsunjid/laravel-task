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
        $blogs = Blog::orderby('id','desc')->paginate(6);
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
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'content' => 'required',  
            'meta_title' => 'required',
            'meta_descr' => 'required',
            'meta_key' => 'required',
            'category' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName="";
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();  
            $path = $request->image->move(public_path('featured'), $imageName);
            
        }
        

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->input('title'), "-");
        $blog->excerpt = $request->excerpt;
        $blog->content = $request->content;
        $blog->meta_title = $request->meta_title;
        $blog->meta_descr = $request->meta_descr;
        $blog->meta_key = $request->meta_key;
        $blog->category=$request->category;
        $blog->image = $imageName;
        $blog->save();
        return redirect()->route('blog.index')
                         ->with('success','Blog Has Been Created successfully'); 
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
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'content' => 'required',  
            'meta_title' => 'required',
            'meta_descr' => 'required',
            'meta_key' => 'required',
            'category' => 'required',
        ]);
        
        $imageName="";
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();  
            $path = $request->image->move(public_path('featured'), $imageName);
            
        }

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->input('title'), "-");
        $blog->excerpt = $request->excerpt;
        $blog->content = $request->content;
        $blog->meta_title = $request->meta_title;
        $blog->meta_descr = $request->meta_descr;
        $blog->meta_key = $request->meta_key;
        $blog->category=$request->category;
        $blog->image = $imageName;
        $blog->save();
        return redirect()->route('blog.index')
                         ->with('update','Blog Has Been Updated Successfully');
        
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
        return redirect()->route('blog.index')
                         ->with('delete','Blog Has Been Deleted Successfully');
    }
 
   

}
