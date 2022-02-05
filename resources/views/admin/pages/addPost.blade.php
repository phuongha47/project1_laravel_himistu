@extends('admin.master_layout')

@section('pageTitle', 'Add User')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> {{ "🔹 Add Post" }} </h1>
    </div>

    <!-- Content -->
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div >
                        <div >
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Fill in post's informations:</h1>
                                </div>
     <form class="user" method= "POST" enctype="multipart/form-data" action="{{ route('post.store') }}">
        <div class="form-group">
            {{ method_field('POST') }}    
            @csrf
            <div class="mb-3 form-group">
                <label class="control-label" for="title"><b>Title</b></label>
                <input cols="30" type="text" name="title" class = "form-control">
            </div>
            <div class="mb-3 form-group">
                <label class="control-label" for="content"><b>Content</b></label>
                <input cols="30" rows="10" type="text" name="body" class = "form-control"></input>
            </div>
            <label for=""><b>Select category</b></label>            
            <select name="category_id" class="form-control" id="sel1">
                @foreach ($categories_sub as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select> 
            <div class="mb-3 form-group mt-3">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="images" class="form-control" placeholder="image" multiple>
                </div>
            </div>      
            <input type="submit" value="Insert" class="btn btn-primary mt-5">
        </div>
                            
    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @if ($errors->any())
        <div class="alert alert-danger w-25 alert_center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif      
</div>
@endsection
