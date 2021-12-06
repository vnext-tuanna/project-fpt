@extends('client.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('client')}}/job.css" />

@endpush
@section('content')
    <section class="banner">
        <div class="img-banner">
            <img src="../asset/img/banner2.png" alt="" />
        </div>
    </section>
    <section class="content py-5">
        <div class="container">
            <div class="fouth-content-detail py-5">
                @foreach($jobs as $job)
                    <div class="card" >
                        <div class="card-body">
                            <a href="../Job/DetailJob.html"> <h5 class="card-title text-danger">{{$job->title}}</h5></a>
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-6"><span style="margin-left: 10px;">Mức lương:</span></div>
                                        <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->salary}}</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-6"><span style="margin-left: 10px;">Kinh nghiệm:</span></div>
                                        <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->experience == 0? 'Không yêu cầu' : $job->experience . ' năm kinh nghiệm' }}</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-6"><span style="margin-left: 10px;">Loại hình:</span></div>
                                        <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->category->name}}</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-6"><span style="margin-left: 10px;">Số lượng:</span></div>
                                        <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->amount}}</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-6"><span style="margin-left: 10px;">Hạn nộp:</span></div>
                                        <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->expired_date}}</span></div>
                                    </div>
                                </li>
                            </ul>
                            @if($job->expired_date >= today()->sub(1, 'day'))
                            <div class="text-center detailJob pt-2" >
                                <a href="{{route('job.detail', $job->id)}}">Chi tiết</a>
                            </div>
                            @else
                                <div class="text-center detailJob pt-2" >
                                    <a href="#">Hết hạn tuyển dụng</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="paginate d-flex justify-content-center">
                {{$jobs->links()}}
            </div>
        </div>
    </section>
@endsection
