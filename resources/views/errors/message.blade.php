@if($errors->any())
    <div class="alert alert-danger message">
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif

@if($success = Session::get('success'))
    <div class="alert alert-success message">
        {{ $success }}
    </div>
@endif