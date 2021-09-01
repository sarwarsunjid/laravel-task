@extends('blog.layouts.app')
@section('content')
<div class="container mt-4 mb-4">
<div class="row">
   <div class="col-md-10 mx-auto">
      <h3>Edit Blog</h3>
      <br>
      <form action="{{ route('blog.update',$blog->id) }}" method="post" enctype=multipart/form-data>
         @csrf
         @method('PUT')
         <div class="form-group row">
            <div class="col-sm-12">
               <label for="inputTitle"><h6>Title</h6></label>
               <input name="title" type="text" class="form-control" id="inputTitle" value="{{ $blog->title }}">
            </div>
            <div class="col-sm-12">
               <label for="inputSlug"><h6>Slug</h6></label>
               <input name="slug" type="text" class="form-control" id="inputCategory" value="{{ $blog->slug }}">
            </div>
            <div class="col-sm-12">
               <label for="inputExcerpt"><h6>Excerpt</h6></label>
               <textarea name="excerpt" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $blog->excerpt }}</textarea>
            </div>
            <div class="col-sm-12">
               <label for="inputContent"><h6>Content</h6></label>
               <textarea name="content" id="mytextarea"> {{ $blog->content }} </textarea>
            </div>
            <div class="col-sm-12">
               <label for="inputMetaTitle"><h6>Meta Title</h6></label>
               <input name="meta_title" type="text" class="form-control" id="inputMetaTitle"  value="{{ $blog->meta_title }}">
            </div>
            <div class="col-sm-12">
               <label for="inputMetaDescription"><h6>Meta Description</h6></label>
               <textarea name="meta_descr"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $blog->meta_descr }}</textarea>
            </div>
            <div class="col-sm-12">
               <label for="inputMetaKeywords">Meta Keywords</label>
               <textarea name="meta_key"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $blog->meta_key }}</textarea>
            </div>
            <div class="col-sm-12">
               <label for="inputCategory"><h6>Category</h6></label>
               <input name="category" type="text" class="form-control" id="inputTitle" value="{{ $blog->category }}">
            </div>
            <div class="col-sm-12">
               <label for="inputFile"><h6>File</h6></label>
               <input name="image" type="file" class="form-control" id="inputTitle" value="{{ $blog->image }}">
            </div>
         </div>
         <button type="submit" class="btn btn-primary px-4 float-left">Submit</button>
      </form>
   </div>
</div>
@endsection