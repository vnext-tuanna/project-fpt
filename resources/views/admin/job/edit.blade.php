@extends('admin.layouts.main')
@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-4">Edit job</h5>

            <form action="" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputEmail4">Title</label>
                        <input type="text" class="form-control" value="{{ old('title', $job->title)}}" name="title"  placeholder="PHP Developer. ...">
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputEmail4">Salary</label>
                        <input type="text"  class="form-control"  value="{{ old('title', $job->salary)}}" name="salary"  placeholder="Upto, range">
                        @error('salary')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputEmail4">Amount</label>
                        <input type="number" step="1"  value="{{ old('title', $job->amount)}}"  class="form-control" name="amount"  placeholder="2">
                        @error('amount')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea type="text" name="description" class="form-control ckeditor" rows="5">{{ old('title', $job->description)}}</textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Experience</label>
                        <input type="number"  value="{{ old('title', $job->experience)}}" name="experience" step="0.5" class="form-control" >
                        @error('experience')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Expired Date</label>
                        <div class="input-group">
                            <input type="date"  value="{{ old('title', $job->expired_date)}}" name="expired_date" class="form-control">

                        </div>
                        @error('expired_date')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Category Job</label>
                        <select id="inputState" name="category_id" class="form-control">
                            @foreach($categories as $cate)
                                <option @if($cate->id == $job->category_id) selected @endif value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-block mt-3">Create job</button>
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
