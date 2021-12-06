@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid disable-text-selection">
        <div class="row">
            <div class="col-12">
                <div class="mb-2">
                    <h1>List categories</h1>
                    <div class="float-sm-right text-zero">
                        <a href="{{route('category.add')}}" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</a>
                        <div class="btn-group ">
                            <div class="btn btn-primary btn-lg pl-4 pr-0 check-button">
                                <label class="custom-control custom-checkbox mb-0 d-inline-block">
                                    <input type="checkbox" class="custom-control-input" id="checkAll">
                                    <span class="custom-control-label"></span>
                                </label>
                            </div>
                            <button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split pl-2 pr-2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </div>
                    </div>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Category</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">List</a>
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-10 list m-auto" data-check-all="checkAll">
                <div class="card d-flex flex-row mb-3">
                    <div class="d-flex flex-grow-1 min-width-zero">
                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center" style="background-color: #0a2a45; color: white; text-transform: uppercase">
                            <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                Name
                                </a>
                            <p class="mb-1 ">Jobs</p>
                            <div class="w-15">
                                Action
                            </div>
                        </div>

                    </div>
                </div>
               @foreach($categories as $category)
                <div class="card d-flex flex-row mb-3">
                    <div class="d-flex flex-grow-1 min-width-zero">
                        <div class="card-body align-self-center  d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center" style="font-size: 1rem">
                            <a class="list-item-heading mb-1 truncate w-40 w-xs-100">
                                {{$category->name}}
                            </a>
                            <p class="mb-1 p-2" style="background-color: #273c75; color: #FFFFFF; border-radius: 50%"> {{count($category->posts)}}</p>
                            <div class="w-15" >
                                <a href="{{route('news-category.edit', $category->id)}}" style="color: #8c7ae6" ><i class="bi bi-pencil-square"></i></a>
                                <a href="{{route('news-category.delete', $category->id)}}" style="color: #c23616"><i class="bi bi-x-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



                <nav class="mt-4 mb-3">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item ">
                            <a class="page-link first" href="#">
                                <i class="simple-icon-control-start"></i>
                            </a>
                        </li>
                        <li class="page-item ">
                            <a class="page-link prev" href="#">
                                <i class="simple-icon-arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item ">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item ">
                            <a class="page-link next" href="#" aria-label="Next">
                                <i class="simple-icon-arrow-right"></i>
                            </a>
                        </li>
                        <li class="page-item ">
                            <a class="page-link last" href="#">
                                <i class="simple-icon-control-end"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
