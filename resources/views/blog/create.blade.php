@extends('blog.layouts.app')
@section('content')
<div class="container mt-4 mb-4">
<div class="row">
        <div class="col-md-10 mx-auto">
            <h3>Create Blog</h3>
            <br>
            <form action="{{ route('blog.store') }}" method="post" enctype=multipart/form-data>
                @csrf
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="inputTitle"><h6>Title</h6></label>
                        <input name="title" type="text" class="form-control" id="inputTitle">
                    </div>
                    <div class="col-sm-12">
                        <label for="inputSlug"><h6>Slug</h6></label>
                        <input name="slug" type="text" class="form-control" id="inputSlug">
                    </div>
                    <div class="col-sm-12">
                        <label for="inputExcerpt"><h6>Excerpt</h6></label>
                        <textarea name="excerpt" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>                    
                    <div class="col-sm-12">
                        <label for="inputContent"><h6>Content</h6></label>
                        <textarea name="content" id="mytextarea"></textarea>
                    </div>  
                    <div class="col-sm-12">
                        <label for="inputMetaTitle"><h6>Meta Title</h6></label>
                        <input name="meta_title" type="text" class="form-control" id="inputMetaTitle">
                    </div>
                    <div class="col-sm-12">
                        <label for="inputMetaDescription"><h6>Meta Description</h6></label>
                        <textarea name="meta_descr" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <label for="inputMetaKeywords"><h6>Meta Keywords</h6></label>
                        <textarea name="meta_key" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>   
                    <div class="col-sm-12">
                        <label for="inputCategory"><h6>Category</h6></label>
                        <input name="category" type="text" class="form-control" id="inputCategory">
                    </div> 
                    <div class="col-sm-12">
                        <label for="inputImage"><h6>File</h6></label>
                        <input name="image" type="file" class="form-control" id="inputImage">
                    </div>            
                </div>
                <button type="submit" class="btn btn-primary px-4 float-left">Submit</button>
            </form>
        </div>
    </div>
@endsection


