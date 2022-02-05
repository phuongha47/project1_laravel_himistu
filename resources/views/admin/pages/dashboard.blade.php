@extends('admin.master_layout')

@section('pageTitle', 'Dashboard')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> {{ "🔹 Dashboard" }} </h1>
    </div>

    <!-- Content -->
    <a href="#" class="btn btn-light btn-icon-split">
        <span class="icon text-gray-600">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">Go to Meranda homepage</span>
    </a>

</div>
@endsection
