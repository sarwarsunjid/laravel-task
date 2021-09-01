@extends('blog.layouts.app')
@section('content')
<div class="container mt-4 mb-4">
   <h2>Blog List</h2>
   <br>
   <!-- Main content Start-->
   <div class="row justify-content-center">
      <div class="col-md-12">
         <!-- general form elements -->
         <div class="card card-primary">
            <div class="card-header">
               <div class="text-right">
                  <a href="{{ route('blog.create') }}" class="btn btn-primary">Add New Blog</a>
               </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th style="width: 10px">Serial No.</th>
                     <th>Title</th>
                     <th>Excerpt</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($blogs as $blog)
                  <tr>
                     <td>{{$loop->index+1}}</td>
                     <td><h6>{{$blog->title}}</h6></td>
                     <td><a href="{{ route('blog.show',$blog->slug) }}">{{$blog->excerpt}}</a></td>
                     <td>
                        <div class="">
                           <form  action="{{ route('blog.destroy',$blog->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                           </form>
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         <br>
         <div class="d-flex float-right">
                {!! $blogs->links() !!}
            </div> 
      </div>
   </div>
</div>
<!-- Main content End --> 
@endsection
</body>
</html>