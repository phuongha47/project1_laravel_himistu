@extends('admin.master_layout')

@section('pageTitle', 'Add Category')
@section('content')
<div class="container-fluid">
<a href="{{ route('category.create') }}" class="btn btn-dark m-3">Back</a>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> {{ "🔹 Add Sub-Categories" }} </h1>
        <a href="{{ route('category.search') }}"></a>
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
                                    <h1 class="h4 text-gray-900 mb-4">Fill in category's informations:</h1>
                                </div>
                                <form class="user" method= "POST" action="{{ route('category.store') }}">
                                    <div class="form-group">
                                        {{ method_field('POST') }}    
                                        @csrf
                                        <div class="mb-3 form-group">
                                            <label class="control-label" for="title"><b>Name</b></label>
                                            <input cols="30" type="text" name="name" class = "form-control">
                                        </div>
                                        <select name="parent_id" class="form-control" id="sel1">
                                        @foreach ($categories_sub as $sub)
                                            <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                        @endforeach
                                        </select>
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
        <div class="alert alert-danger mr-5 w-50 alert_center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif    
</div>
@endsection
