@extends('layouts.admin')
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
                                    <div class="text-primary p-4" style="font-size: 30px">
                                        <h3 class="text-primary">Welcome Back !</h3>
                                        <p>Skote Institute Dashboard</p>
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
                                    <h5 class="font-size-15 text-truncate">{{ Auth::user()->name }} </h5>
                                    <p class="text-muted mb-0 text-truncate">Admin</p>
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
                                            <a href="{{ route('Admin.profile.index') }}"
                                                class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Enquiry</p>
                                        <h4 class="mb-0">{{ DB::table('enquiry_forms')->count() }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center ">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class='bx bx-message-rounded-dots font-size-24'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Admission</p>
                                        <h4 class="mb-0">{{ DB::table('admissions')->count() }}</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class='bx bxs-id-card font-size-24'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Teacher</p>
                                        <h4 class="mb-0">{{$teacher}}</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class='bx bxs-user-pin font-size-24'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Course</p>
                                        <h4 class="mb-0">{{ DB::table('courses')->count() }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center ">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class='bx bxs-food-menu font-size-24'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Subject</p>
                                        <h4 class="mb-0">{{ DB::table('subjects')->count() }}</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class='fas fa-book-reader font-size-24'></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Asign</p>
                                        <h4 class="mb-0">{{ DB::table('asigns')->count() }}</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class='bx bx-task font-size-24'></i>
                                            </span>
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
