@extends('admin.layouts.main')
@section('title', 'Admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <h5 class="mb-4">Dashboard</h5>
            <div class="row icon-cards-row mb-4">
                <div class="col-md-4 col-6 mt-3">
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="iconsmind-User"></i>
                            <p class="card-text font-weight-semibold mb-0">User</p>
                            <p class="lead text-center"  style="font-size: 3rem; font-weight: bold; opacity: .6">{{count($users)}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-6 mt-3">
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="iconsmind-Worker"></i>
                            <p class="card-text font-weight-semibold mb-0">Job</p>
                            <p class="lead text-center" style="font-size: 3rem; font-weight: bold; opacity: .6">{{count($jobs)}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-6 mt-3">
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="iconsmind-Notepad"></i>
                            <p class="card-text font-weight-semibold mb-0">CV</p>
                            <p class="lead text-center"  style="font-size: 3rem; font-weight: bold; opacity: .6">{{count($cv)}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-6 mt-3">
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="iconsmind-Newspaper"></i>
                            <p class="card-text font-weight-semibold mb-0">Post</p>
                            <p class="lead text-center"  style="font-size: 3rem; font-weight: bold; opacity: .6">{{count($posts)}}</p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>


@endsection

