@extends('dashboard')

@section('content')
    <div class="container">
        {{-- <button type="button" class="btn btn-primary">Add User</button> --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allData as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ url('upload/user_images/' . $user->photo) }}"
                                style="width: 50px; height:50px;">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <a href="{{asset('detail')}}/{{$user->id}}" class="btn btn-info" id="detail">Detail</a>
                            {{-- <a href="{{route('edit.user', $user->id)}}" class="btn btn-info">Edit</a> --}}
                            <a href="{{ route('delete.user', $user->id) }}" class="btn btn-danger" id="delete">Delete</a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
@endsection
