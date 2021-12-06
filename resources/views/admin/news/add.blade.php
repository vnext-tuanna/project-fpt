@push('style')
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendor/cropper.min.css" />
    <style>
        input[type=file]{
            background-color: #0a2a45;
            padding: 8px;
            color: white;
            width: 100%;
        }
    </style>
@endpush
@extends('admin.layouts.main')
@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-4">Add news</h5>
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                        <label for="inputEmail4">Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}"  placeholder="Title Post ">
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputAddress">Content</label>
                    <textarea type="text" class="form-control ckeditor" name="content"  rows="5">{{old('content')}}</textarea>
                    @error('content')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4 input-image">
                        <label class="input-file">
                            Image Thumbail
                        </label>
                        <input type="file" name="image" value="{{old('image')}}" class="form-control">
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Category News</label>
                        <select id="inputState" class="form-control" name="category_id">
                            @foreach($categories as $cate)
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-block mt-3">Create post</button>
            </form>
        </div>
    </div>
@endsection
@push('script')
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="{{asset('admin')}}/js/vendor/cropper.min.js"></script>
    <script src="{{asset('admin')}}/js/dore-plugins/select.from.library.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
