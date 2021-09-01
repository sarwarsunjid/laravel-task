@if(session('success'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    </div>
@endif