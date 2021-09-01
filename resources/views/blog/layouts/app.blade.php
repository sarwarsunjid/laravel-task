<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blog | List</title>
      <meta name="title" content="@yield('title')">
      <meta name="description" content="@yield('description')">
	   <meta name="keywords" content="@yield('keywords')">
      @include('blog.partials.styles')
   </head>
   </head>
   <body>
   @include('blog.partials.messages')   
      @yield('content')
      @include('blog.partials.scripts')
   </body>
</html>