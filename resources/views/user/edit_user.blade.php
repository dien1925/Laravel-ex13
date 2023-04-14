{{-- @extends('dashboard')

@section('content')
    <div class="container">
        <form id="myForm" method="post" action="" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $users->id }}">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ $users->name }}">
            </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
@endsection --}}
