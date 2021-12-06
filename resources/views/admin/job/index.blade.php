@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid disable-text-selection">
        <div class="row">
            <div class="col-12">
                <div class="mb-2">
                    <h1>List job</h1>
                    <div class="float-sm-right text-zero">
                        <a href="{{route('job.add')}}" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</a>
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
                                <a href="#">Job</a>
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
                                Title
                            </p>
                            <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                Salary
                            </p>
                            <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                Experience
                            </p>
                            <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                Category
                            </p>
                            <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                Expried date
                            </p>
                            <p class="list-item-heading mb-1 truncate w-15 w-xs-100" >
                                Action
                            </p>
                        </div>

                    </div>
                </div>
                @foreach($jobs as $job)
                    <div class="card d-flex flex-row mb-3">
                        <div class="d-flex flex-grow-1 min-width-zero">
                            <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center" >
                                <p class="list-item-heading mb-1  w-40 w-xs-100" style="color: #ff3838">
                                    {{$job->title}}
                                </p>
                                <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                    {{$job->salary}}
                                </p>
                                <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                    {{$job->experience}} năm +++
                                </p>
                                <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                    {{$job->category->name}}
                                </p>
                                <p class="list-item-heading mb-1 truncate w-40 w-xs-100" >
                                    {{$job->expired_date}}
                                </p>
                                <div class="w-15" style="font-size: 20px">
                                    <a href="{{route('job.edit', $job->id)}}" style="color: #8c7ae6" ><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{route('job.delete', $job->id)}}" style="color: #c23616"><i class="bi bi-x-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="paginate d-flex justify-content-center">
        {{$jobs->links()}}
    </div>
@endsection
