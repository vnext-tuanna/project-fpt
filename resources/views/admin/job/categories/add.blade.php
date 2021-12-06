@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Add job categoy</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Job</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Category</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4">Add category</h5>
                        <form action="" method="POST">
                            @csrf
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name"  placeholder="Enter category name">
                            </div>
                            <button type="submit" class="btn btn-primary mb-0">Add categories</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
