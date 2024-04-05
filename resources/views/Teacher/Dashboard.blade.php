@extends('layouts.Teacher')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-11">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3" style="font-size: 40px">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Skote Dashboard</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset('AdminAssets/images/profile-img.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="avatar-md profile-user-wid mb-4"
                                        style="width: 100px;
                                position:relative; top:-30px;">
                                 @if (!Auth::user()->image)
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt=""
                                                    class="img-thumbnail rounded-circle">
                                            @else
                                                <img src="{{ asset('/adminassets/Uploads/Profile') . '/' . Auth::user()->image }}"
                                                    alt="" class="img-thumbnail rounded-circle">
                                            @endif 
                                        </div>
                                    <h5 class="font-size-15 text-truncate">{{ Auth::user()->name }}</h5>
                                    <p class="text-muted mb-0 text-truncate">Teacher</p>
                                </div>

                                <div class="col-sm-8">
                                    <div class="pt-4">

                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="font-size-15">{{ Auth::user()->email }}</h5>
                                                <p class="text-muted mb-0">Email</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="font-size-15">+91 {{ Auth::user()->phone_no }}</h5>
                                                <p class="text-muted mb-0">Phone</p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="{{route('Teacher.profile.index')}}"
                                                class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
