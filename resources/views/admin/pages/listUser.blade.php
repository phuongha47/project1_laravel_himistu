@extends('admin.master_layout')

@section('pageTitle', 'Search User')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container-fluid">
    
   <!-- Content -->
   
   <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of users</h6>
            </div>
            <div class="card-body">
            <div class="container-fluid">
        <!-- DataTales Example -->
                <div class="table-responsive">
                <form action="{{ route('user.search') }}" method="GET" class="w-100 p-3 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control bg-light border-0 small mb-3" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2" value="{{ $searchKeyWord }}">
                        <div class="input-group-append w-75 mr-5 mb-3">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <form action="{{ route('post.deleteAll') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="table-responsive">

                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                <td>{{ $loop->index }}</td>
                                <td><h5>{{ $user->name }}</h5></td>
                                <td><a href=""><h5>{{ $user->email }}</h5></a> </td>
                                <td><p>{{ $user->role['name'] }}</p></td>
                                <td class="col-2">
                                    <li class="list-inline-item w-5" >
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-sm mb-2"><i class="material-icons">&#xE254;</i></a><br>
                                        <button formaction = "{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-sm" type="submit"><i class="material-icons">&#xE872;</i></button>
                                    </li>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
