@extends('admin.layouts.main')
@section('title', 'Admin')
@section('content')

    <div class="row">
        @foreach($cvs as $cv)
        <div class="col-4 col-xl-4 mt-5">
            <div class="card preview-area d-flex flex-column flex-sm-row flex-xl-column">
                <div class="position-relative">
                    <embed src="{{asset('storage/'. $cv->cv)}}" type="application/pdf" zoom=scale width="100%" height="600px" />

                </div>
                <div class="card-body">
                    <p class="text-muted text-small mb-1">Name</p>
                    <p class="mb-3">{{$cv->name}}</p>
                    <p class="text-muted text-small mb-1">Job</p>
                    <p class="mb-3">{{$cv->job->title}}</p>
                    <p class="text-muted text-small mb-1">Email</p>
                    <p class="mb-0">{{$cv->email}}</p>
                    <a href="{{route('cv.delete', $cv->id)}}" class="btn text-center text-danger" style="font-size: 24px; font-weight: bold; margin-left: 40%"><i class="simple-icon-close"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="paginate d-flex justify-content-center">
        {{$cvs->links()}}
    </div>
@endsection
