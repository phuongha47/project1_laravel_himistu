@extends('admin.master_layout')

@section('pageTitle', 'Search Post')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of posts</h6>
            </div>
            <div class="card-body">
            <div class="container-fluid">
        <!-- DataTales Example -->
                <div class="table-responsive">
                <form action="{{ route('post.search') }}" method="GET" class="w-100 p-3 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
                                <th>Category</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                <td> {{ $loop->index }} </td>
                                <td>{{ $post->category['name']}}</td>
                                <td class = "col-5 text-left" ><a href=""><h6>{{ $post->title }}</h6></a> </td>
                                <td class = "col-10 text-left"><p>{{ \Illuminate\Support\Str::limit($post->body, 150, $end='...') }}</p></td>
                                <td class = "col-5">
                                    <li class="list-inline-item">
                                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary btn-sm mb-2"><i class="material-icons">&#xE417;</i></a>
                                        <br>
                                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success btn-sm mb-2"><i class="material-icons">&#xE254;</i></a>
                                        <br>
                                        
                                        <button formaction = "{{ route('post.destroy', $post->id) }}" class="btn btn-danger btn-sm" type="submit"><i formaction = "{{ route('post.destroy', $post->id) }}" class="material-icons">&#xE872;</i></button>
                                    </li>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </form>
    </div>

</div>
@endsection
