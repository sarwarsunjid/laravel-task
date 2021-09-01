<!-- For Validation -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- For Success message -->
@if(session('success'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    </div>
@endif

<!-- For update message -->
@if(session('update'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('update') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    </div>
@endif

<!-- For delete message -->
@if(session('delete'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    </div>
@endif