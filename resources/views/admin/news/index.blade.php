@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 list" >
            <div class="col-10 m-auto mb-4">
                <div class="mb-4">
                    <div class="">
                        <h5 class="card-title">List news</h5>
                        <div class="">
                            @foreach($posts as $post)
                                <div class="p-2 row align-items-center mb-3 shadow">
                                    <a class="mt-2 col-2" href="#">
                                        <img src="{{asset('storage/'. $post->image)}}"  width="100%" height="100px" alt="Marble Cake" class="list-thumbnail border-0" />
                                    </a>
                                    <div class="mt-2 pb-2 col-8">
                                        <a href="#">
                                            <p class="list-item-heading">{{$post->title}}</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">
                                                    {{strip_tags(\Illuminate\Support\Str::limit($post->content,50))}}...
                                                </p>
                                            </div>
                                            <div class="text-primary text-small mt-2 d-none d-sm-block">{{$post->created_at}}</div>
                                        </a>
                                    </div>
                                    <div class="col-2" style="font-size: 20px">
                                        <a href="{{route('news.edit', $post->id)}}" style="color: #8c7ae6" ><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{route('news.delete', $post->id)}}" style="color: #c23616"><i class="bi bi-x-lg"></i></a>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>
    <div class="paginate d-flex justify-content-center">
        {{$posts->links()}}
    </div>

@endsection
