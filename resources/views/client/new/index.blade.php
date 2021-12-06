@extends('client.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('client')}}/new.css" />
@endpush
@section('content')
<section class="banner">
    <div class="img-banner">
        <img src="../asset/img/content.jpg" alt="">
    </div>
</section>
<section class="content py-5">
    <div class="container">
        <div class="newsAndBlog-content py-5">
            @foreach($posts as $post)
                <div class="card" >
                    <img src="{{asset('storage')}}/{{$post->image}}" width="300px" height="250px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-danger text-center" style="font-size: 17px; font-family: 'Barlow Condensed', sans-serif, Arial;">{{$post->title}}</h5>
                        <p class="card-text" style="font-size: 13px; font-family: 'Barlow Condensed', sans-serif, Arial;">
                            {{strip_tags(Str::limit($post->content, 100))}}...
                        </p>
                        <div class="detailNews text-center pt-2" >
                            <a href="{{route('news.detail', $post->id)}}">XEM THÊM</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="paginate d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</section>
@endsection
