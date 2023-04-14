@extends('dashboard')

@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary">Add User</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allData as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset($user->photo) }} " style="width: :50px; height:50px;">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        {{-- <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger" id="delete">Delete</a>

                        </td> --}}

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
