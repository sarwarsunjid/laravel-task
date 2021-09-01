<!DOCTYPE html>
<html>
<head>
<title>Blog | List</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<script src="https://cdn.tiny.cloud/1/ikltavgne6yij0te0vnrytpwqkg4a9p2q9598yu0wuys7ug9/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
  
</head>

<body>
<div class="container mt-4 mb-4">
<h2>Blog List</h2>
<br>
<div class="row">
            @foreach($blog as $b)
            <div class="col-lg-4">
            <div class="card" >
            <img class="card-img-top" src="{{ url('featured/'.$b->image) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$b->title}}</h5>
              <p class="card-text">{{$b->excerpt}}</p>
              <a href="" class="btn btn-primary">Read More</a>
            </div>
          </div>
          </div>
            @endforeach
    </div>
</body>
</div>
</div>
</div>

</html>

