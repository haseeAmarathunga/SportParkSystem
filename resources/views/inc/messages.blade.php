<!-- show the error that functions returns -->
@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

<!-- pass the session success messages -->
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif