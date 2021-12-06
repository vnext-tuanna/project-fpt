@extends('admin.layouts.main')
@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-4">Add user</h5>

            <form action="" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control"  placeholder="Nguyen Anh Tuan" name="name">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Username</label>
                        <input type="text"  class="form-control"  placeholder="josnguyentuan99" name="username">
                        @error('username')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control"  placeholder="josnguyentuan99@gmail.com" name="email">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Password</label>
                        <input type="password"  class="form-control"  placeholder="**********" name="password">
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-block mt-3">Create user</button>
            </form>
        </div>
    </div>
@endsection
