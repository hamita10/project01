<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('Admin.dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                            <img src="{{asset('AdminAssets/images/logo.svg')}}" alt="" height="22">
                        </span>
                    <span class="logo-lg">
                            <img src="{{asset('AdminAssets/images/logo-dark.png')}}" alt="" height="17">
                    </span>
                    </a>
                    <a href="{{route('Admin.dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                            <img src="{{asset('AdminAssets/images/logo-light-01.png')}}" alt="" height="22">
                        </span>
                    <span class="logo-lg">
                            <img src="{{asset('AdminAssets/images/logo-light-02.png')}}" alt="" height="19" style="height: 30px;">
                        </span>
                    </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
            </button>
             </div>
             <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                     <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                </button>
            </div>
            {{-- <a href="{{route('Admin.enquiry.index')}}">
            <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">{{DB::table('enquiry_forms')->where('status' ,'=', 'pending')->count()}}</span>
                </button>
            </div>
        </a> --}}
        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-bell bx-tada"></i>
                <span class="badge bg-danger rounded-pill">{{DB::table('enquiry_forms')->where('status' ,'=', 'pending')->count()}}</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-0" key="t-notifications">Enquiry Notifications </h6>
                        </div>
                        
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                    <a href="{{route('Admin.enquiry.index')}}" class="text-reset notification-item">
                        @if ( $data = DB::table('enquiry_forms')->where('status' ,'=', 'pending')->first())
                            
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    <i class='bx bx-message-rounded-dots'></i>
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" key="t-your-order">{{$data->Name}}</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer"> {{$data->Message}}</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php
                           
                                        $timestamp = strtotime($data->created_at);
                                        $formatted_time = date('G\h i\m s\s', $timestamp);
                                         echo $formatted_time;
                                        ?></span></p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </a>
                </div>
                <div class="p-2 border-top d-grid">
                    <a class="btn btn-sm btn-link font-size-14 text-center" href="{{route('Admin.enquiry.index')}}">
                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span> 
                    </a>
                </div>
            </div>
        </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @if (!Auth::user()->image)
                            <img class="rounded-circle header-profile-user" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            alt="Header Avatar">
                           @else
                        <img class="rounded-circle header-profile-user" src="{{asset('/adminassets/Uploads/Profile') . '/' . Auth::user()->image }}"
                        alt="Header Avatar">
                        @endif
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->name}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('Admin.profile.index')}}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{route('Admin.logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                </div>
            </div>
        </div>
    </div>

</header>