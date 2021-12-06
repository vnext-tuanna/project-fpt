@extends('admin.layouts.main')
@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-4">Edit user</h5>
            <form action="" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Nguyen Anh Tuan" value="{{old('name', $user->name)}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Username</label>
                        <input type="text"  class="form-control" name="username"  placeholder="josnguyentuan99" value="{{old('username', $user->username)}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="josnguyentuan99@gmail.com" value="{{old('email', $user->email)}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Password</label>
                        <input type="password"  class="form-control" name="password"  placeholder="**********" >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-block mt-3">Create user</button>
            </form>
        </div>
    </div>
@endsection
