@extends('dashboard')

@section('content')
@php
    $allData = App\Models\User::orderBy('name', 'ASC')->limit(4)->get();
@endphp
    <div class="container">
        <h1>Detail</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                @foreach ($userID as $user)
                    {{-- <input type="hidden" name="id" value="{{ $user->id }}"> --}}
                    <div class="col-md-4">
                        <img src="{{ !empty($user->photo) ? url('upload/user_images/' . $user->photo) : url('upload/no_image.jpg') }}"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <h5 class="card-title">{{ $user->email }}</h5>
                            <h5 class="card-title">{{ $user->phone }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
