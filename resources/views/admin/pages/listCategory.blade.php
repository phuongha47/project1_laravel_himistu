@extends('admin.master_layout')

@section('pageTitle', 'Search Category')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container-fluid">

    <!-- Page Heading -->
    
    <!-- <a href="{{ route('category.search') }}"></a> -->

    <!-- Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of categories</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <form action="{{ route('category.search') }}" method="GET" class="w-100 d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
                    <table class="table table-bordered w-200" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category name</th>
                                <th>Parent category</th>
                                <th>Num post(s)</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td> {{ $loop->index }} </td>
                                    <td class="w-50"> {{ $category->name }} </td>
                                    @if($category->parent_id == 0)         
                                        <td class="w-50">Null</td>         
                                    @else
                                        <td class="w-50">Level 1</td>        
                                    @endif
                                    <td class="text-center col-25">{{ $category->posts->count() }}</td>
                                    <td class = "col-20 r-2">
                                        <li class="list-inline-item col-5">
                                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-sm mb-2"><i class="material-icons">&#xE254;</i></a><br>
                                            <button formaction = "{{ route('category.destroy', $category->id) }}" class="btn btn-danger btn-sm" type="submit"><i class="material-icons">&#xE872;</i></button>
                                        </li>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>
        </div>

    </div>
    {{ $categories->links("pagination::bootstrap-4")}}

</div>
@endsection
