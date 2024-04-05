@extends('layouts.admin')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="row flex-lg-nowrap">
                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <form method="POST" action="{{route('Admin.profile.update')}}" enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                <div class="row">
                                                    <div class="col-12 col-sm-auto mb-3">
                                                        <div class="mx-auto" style="width: 140px;">
                                                            <div class="d-flex justify-content-center align-items-center rounded"
                                                                style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                @if (!Auth::user()->image)
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                                        id="wizardPicturePreview" alt=""
                                                                        class="img-thumbnail"
                                                                        style="  width: 100%;height: 100%;">
                                                                @else
                                                                    <img src="{{ asset('/adminassets/Uploads/Profile') . '/' . Auth::user()->image }}"
                                                                        id="wizardPicturePreview" alt=""
                                                                        class="img-thumbnail"
                                                                        style="  width: 100%;height: 100%;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">
                                                                {{ Auth::user()->name }}</h4>
                                                            <p class="mb-0">{{ Auth::user()->email }}</p>
                                                            <div class="mt-2">
                                                                <div class="file btn btn-lg btn-primary"
                                                                style=" position: relative;overflow: hidden;padding: 9px;margin-top: 10px;">
                                                                <i class="fa fa-fw fa-camera"></i>
                                                                Change Photo 
                                                                <input type="file" name="image" id="wizard-picture" accept="image/png, image/gif, image/jpeg,"
                                                                    style="position: absolute; font-size: 50px;opacity: 0;right: 0;top: 0;">
                                                            </div>  
                                                            </div>
                                                        </div>
                                                        <div class="text-center text-sm-right">
                                                            <span class="badge badge-secondary">administrator</span>
                                                            <div class="text-muted"><small>Joined
                                                                    {{ Auth::user()->created_at }}</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item"><a href=""
                                                            class="active nav-link">Settings</a></li>
                                                </ul>
                                                <div class="tab-content pt-3">
                                                    <div class="tab-pane active">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Full Name</label>
                                                                            <input class="form-control" type="text"
                                                                                name="name" placeholder="Name"
                                                                                value="{{ Auth::user()->name }}">
                                                                            <span class="text-danger">
                                                                                @error('name')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Contact</label>
                                                                            <input class="form-control" type="number"
                                                                                name="number" placeholder="+123456789"
                                                                                value="{{ Auth::user()->phone_no }}">

                                                                            <span class="text-danger">
                                                                                @error('number')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input class="form-control" type="text"
                                                                                name="email"
                                                                                placeholder="user@example.com"
                                                                                value="{{ Auth::user()->email }}">

                                                                            <span class="text-danger">
                                                                                @error('email')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <div class="form-group">
                                                                            <label>About</label>
                                                                            <textarea class="form-control" rows="5" name="about" placeholder="My Bio">{{ Auth::user()->about }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6 mb-3">
                                                                <div class="mb-2"><b>Change Password</b></div>
                                                                @if (Session::has('success'))
                                                                    <div class="alert alert-success">
                                                                        {{ Session::get('success') }}</div>
                                                                @endif
                                                                @if (Session::has('fail'))
                                                                    <div class="alert alert-danger">
                                                                        {{ Session::get('fail') }}</div>
                                                                @endif
                                                                <div class="mb-3">
                                                                    <label class="form-label"> Current Password</label>
                                                                    <div class="input-group auth-pass-inputgroup">
                                                                        <input type="password" class="form-control"
                                                                            name="Currentpassword"
                                                                            placeholder="Enter Current password"
                                                                            aria-label="Password"
                                                                            aria-describedby="password-addon">
                                                                        <button class="btn btn-light" type="button"
                                                                            id="password-addon"><i
                                                                                class="mdi mdi-eye-outline"></i></button>
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        @error('Currentpassword')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label"> New Password</label>
                                                                    <div class="input-group auth-pass-inputgroup">
                                                                        <input type="newpassword" class="form-control"
                                                                            name="password"
                                                                            placeholder="Enter New password"
                                                                            aria-label="newpassword"
                                                                            aria-describedby="password-addon">
                                                                        <button class="btn btn-light" type="button"
                                                                            id="password-addon"><i
                                                                                class="mdi mdi-eye-outline"></i></button>
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        @error('password')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Confirm Password</label>
                                                                    <div class="input-group auth-pass-inputgroup">
                                                                        <input type="confirmpassword" class="form-control"
                                                                            name="confirmpassword"
                                                                            placeholder="Enter Confirm password"
                                                                            aria-label="confirmpassword"
                                                                            aria-describedby="password-addon">
                                                                        <button class="btn btn-light" type="button"
                                                                            id="password-addon"><i
                                                                                class="mdi mdi-eye-outline"></i></button>
                                                                    </div>
                                                                    <span class="text-danger">
                                                                        @error('confirmpassword')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col d-flex justify-content-end">
                                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 mb-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="px-xl-3">
                                            <button class="btn btn-block btn-secondary">
                                                <a class="dropdown-item " href="{{ route('Admin.logout') }}">
                                                    <i class="bx bx-power-off font-size-16 align-middle me-1 "></i>
                                                    <span key="t-logout">Logout</span>
                                                </a>
                                            </button>


                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title font-weight-bold">Support</h6>
                                        <p class="card-text">Get fast, free help from our friendly assistants.</p>
                                        <button type="button" class="btn btn-primary">Contact Us</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endsection
        @section('script')
        <script>
            $(function() {
                $("#wizard-picture").change(function() {
                    readURL(this);
                });
    
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
    
                        reader.onload = function(e) {
                            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            });
        </script>
    @endsection