@extends('client.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{asset('client')}}/detail-new.css" />
@endpush
@section('content')
    <section class="banner">
        <div class="img-banner">
            <img src="../asset/img/content.jpg" alt="">
        </div>
    </section>
    <section class="content py-5">
        <div class="container">
            <div class="content-top text-center">
                <strong>{{$post->title}}</strong>
            </div>
            <div class="mainContent">
               <p>{{strip_tags(html_entity_decode($post->content))}}</p>
            </div>
            <div class="text-right"> <i class="fas fa-calendar-day"></i> {{$post->created_at}}</div>
        </div>
    </section>
@endsection
