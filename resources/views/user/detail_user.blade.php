@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="col-md-4">
                <img src="{{url('upload/user_images/' . $user->photo)}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <h5 class="card-title">{{ $user->email }}</h5>
                    <h5 class="card-title">{{ $user->phone }}</h5>
                </div>
            </div>
        </div>
    </div>
    @endsection