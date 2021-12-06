@extends('client.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('client')}}/detail-job.css" />
@endpush
@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="infoJob">
                        <div class="py-2">
                            <b>{{$job->title}}</b>
                        </div>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-6">
                                        <span style="margin-left: 10px">Mức lương:</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span style="margin-right: 10px">{{$job->salary}}</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-6">
                                        <span style="margin-left: 10px">Kinh nghiệm:</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span style="margin-right: 10px">{{$job->experience == 0? 'Không yêu cầu' : $job->experience . ' năm kinh nghiệm' }}</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-6">
                                        <span style="margin-left: 10px">Loại hình:</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span style="margin-right: 10px">{{$job->category->name}}</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-6">
                                        <span style="margin-left: 10px">Số lượng:</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span style="margin-right: 10px">{{$job->amount}} người</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-6">
                                        <span style="margin-left: 10px">Hạn nộp:</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span style="margin-right: 10px">{{$job->expired_date}}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="generalInfo">
                        <div class="py-2 text-justify">
                            {!!  $job->description !!}
                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="submitCv text-center">
                        <div class="apply py-3">
                            @if(session('msg'))
                                <p class="bg-success text-white p-3">{{session('msg')}}</p>
                            @endif
                            <a
                                href=""
                                data-toggle="modal"
                                data-target="#exampleModal"
                                data-whatever="@mdo">NỘP CV ỨNG TUYỂN</a>
                            <div
                                class="modal fade"
                                id="exampleModal"
                                tabindex="-1"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4
                                                class="modal-title text-primary"
                                                id="exampleModalLabel"
                                            >
                                                {{$job->title}}
                                            </h4>
                                            <button
                                                type="button"
                                                class="close"
                                                data-dismiss="modal"
                                                aria-label="Close"
                                            >
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <nav class="text-left">
                                            <ul>
                                                <li>*Trường bắt buộc</li>
                                                <li>
                                                    Có thể tải lên nhiều file. Định dạng: jpg, jpeg,
                                                    png, gif, pdf.
                                                </li>
                                                <li>Dung lượng file: <= 5MB</li>
                                            </ul>
                                        </nav>
                                        <div class="modal-body">
                                            <form method="POST" action="" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="recipient-name"
                                                        name="job_id"
                                                        placeholder="Họ và tên*" value="{{$job->id}}" hidden/>
                                                        <div class=" col-md-6 form-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="recipient-name"
                                                                name="name"
                                                                placeholder="Họ và tên*"/>
                                                        </div>
                                                        <div class="col-md-6 form-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="recipient-name"
                                                                name="email"
                                                                placeholder="Email*"/>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="cv" class="form-control-file" id="exampleFormControlFile1" placeholder="Click để tải hồ sơ lên">
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    NỘP CV ỨNG TUYỂN
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="otherJob pt-3">
                        <strong>Tin tuyển dụng khác</strong>
                        <nav>
                            <ul>
                                @foreach($jobs as $job)
                                    <li class="pt-2"><a href="{{route('list.job', $job->id)}}">{{$job->title}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <div class="otherJob pt-3">
                        <strong>Bài viết của chúng tôi</strong>
                        <nav>
                            <ul>
                                @foreach($posts as $post)
                                    <li class="pt-2"><a href="{{route('news.detail', $post->id)}}">{{$post->title}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
