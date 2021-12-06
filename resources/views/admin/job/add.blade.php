@extends('admin.layouts.main')
@section('content')
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-4">Add Job</h5>

            <form action="" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputEmail4">Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}"  placeholder="PHP Developer. ...">
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputEmail4">Salary</label>
                        <input type="text"  class="form-control" name="salary" value="{{old('salary')}}"   placeholder="Upto, range">
                        @error('salary')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputEmail4">Amount</label>
                        <input type="number" step="1"  class="form-control" value="{{old('amount')}}"  name="amount"  placeholder="2">
                        @error('amount')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea type="text" name="description" class="form-control ckeditor" rows="5">{{old('description')}}</textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Experience</label>
                        <input type="number" name="experience" step="0.5" value="{{old('experience')}}"  class="form-control"  >
                        @error('experience')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputZip">Expired Date</label>
                        <div class="input-group">
                            <input type="date" name="expired_date" value="{{old('expired_date')}}"  class="form-control">
                        </div>
                        @error('expired_date')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Category Job</label>
                        <select id="inputState" name="category_id" class="form-control">
                            @foreach($categories as $cate)
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
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
