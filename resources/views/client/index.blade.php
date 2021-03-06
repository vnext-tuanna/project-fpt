@extends('client.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('client')}}/home.css" />
@endpush
@section('content')
    <section class="banner ">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" style="height: 400px;">
                <div class="carousel-item active">
                    <img src="{{asset('asset')}}/img/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('asset')}}/img/banner2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('asset')}}/img/banner3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('asset')}}/img/banner4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>
    <section class="jobOpportunities py-5">
        <div class="container">
            <p class="text-center h3 py-5">C?? H???I VI???C L??M H???P D???N CHO B???N</p >
            <div class="fouth-content-detail">
                @foreach($jobs as $job)
                    @if($job->expired_date >= today()->sub(1, 'day'))
                        <div class="card" >
                            <div class="card-body">
                                <a href="{{route('job.detail', $job->id)}}"> <h5 class="card-title text-danger">{{$job->title}}</h5></a>
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-6"><span style="margin-left: 10px;">M???c l????ng:</span></div>
                                            <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->salary}}</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-6"><span style="margin-left: 10px;">Kinh nghi???m:</span></div>
                                            <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->experience == 0? 'Kh??ng y??u c???u' : $job->experience . ' n??m kinh nghi???m' }}</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-6"><span style="margin-left: 10px;">Lo???i h??nh:</span></div>
                                            <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->category->name}}</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-6"><span style="margin-left: 10px;">S??? l?????ng:</span></div>
                                            <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->amount}}</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-6"><span style="margin-left: 10px;">H???n n???p:</span></div>
                                            <div class="col-6 text-right"><span style="margin-right: 10px;">{{$job->expired_date}}</span></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center detailJob pt-2" >
                                    <a href="{{route('job.detail', $job->id)}}">Chi ti???t</a>
                                </div>
                            </div>


                        </div>
                    @endif
                @endforeach
            </div>
            <div class="readMore text-center py-5">
                <a href="{{route('list.job')}}"> XEM TH??M C??C V??? TR?? KH??C </a>
            </div>
        </div>
    </section>
    <section class="newsAndBlog">
        <div class="container">
            <p class="text-center h3 py-5">B??I VI???T C???A CH??NG T??I</p >
            <div class="newsAndBlog-content">
                @foreach($posts as $post)
                    <div class="card" >
                        <img src="{{asset('storage')}}/{{$post->image}}" width="300px" height="250px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-danger text-center" style="font-size: 17px; font-family: 'Barlow Condensed', sans-serif, Arial;">{{$post->title}}</h5>
                            <p class="card-text" style="font-size: 13px; font-family: 'Barlow Condensed', sans-serif, Arial;">
                                {{strip_tags(Str::limit($post->content, 100))}}...
                            </p>
                            <div class="detailNews text-center pt-2" >
                                <a href="{{route('news.detail', $post->id)}}">XEM TH??M</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="readmoreLocation text-center py-5">
                <a href="{{route('list.news')}}">XEM TH??M B??I VI???T KH??C</a></div>
        </div>
    </section>
    <section class="partner py-5">
        <div class="container">
            <div class="h4 text-center py-5">
                <strong>?????I T??C TI??U BI???U</strong>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('asset')}}/img/backhoa.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('asset')}}/img/donga.jpeg" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('asset')}}/img/ptit.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('asset')}}/img/Logo_?????i_h???c_FPT.png" alt="" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
