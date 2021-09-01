@extends('blog.layouts.app')
@section('title', $blog->meta_title)
@section('description', $blog->meta_descr)
@section('keywords', $blog->meta_key)
@section('content')
<div class="container mt-4 mb-4">
  <h2>{{$blog->title}}</h5>
  <br>
  <div class="col-lg-8">
      <img width="100%" src="{{ url('featured/'.$blog->image) }}" alt="Card image cap">
      <p>{{$blog->content}}</p>
      <p><b>Category:</b> {{$blog->category}}</p>
  </div>        
@endsection

