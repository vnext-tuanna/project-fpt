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
            <h5 class="mb-4">Edit news</h5>
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <label for="inputEmail4">Title</label>
                    <input type="text" class="form-control" value="{{old('title', $post->title)}}" name="title"  placeholder="Title Post ">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Content</label>
                    <textarea type="text" class="form-control ckeditor"  name="content"  rows="5">value="{{old('title', $post->content)}}"</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4 input-image">
                        <label class="input-file">
                            Image Thumbail
                        </label>
                        <input type="file" name="image" class="form-control">
                        <div class="py-2">
                            <img src="{{asset('storage/'. $post->image)}}" width="230px" height="150px" alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Category News</label>
                        <select id="inputState" class="form-control" name="category_id">
                            @foreach($category as $cate)
                                <option @if($cate->id == $post->category_id) selected @endif value="{{$cate->id}}">{{$cate->name}}</option>
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
