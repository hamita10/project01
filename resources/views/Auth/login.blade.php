@extends('layouts.Auth')
@section('contant')
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign In To Continue To Institute Management Dashboard.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{Asset('AdminAssets/images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0"> 
                        <div class="auth-logo">
                            <a href="index-2.html" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{Asset('AdminAssets/images/logo03.png')}}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                            <a href="index-2.html" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{Asset('AdminAssets/images/logo03.png')}}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="form-horizontal" method="POST" action="{{route('auth.signin')}}">
                                @csrf
                                @if(Session::has('error'))
                                <div class="alert alert-danger">
                                  {{ Session::get('error')}}
                                </div>
                                @endif
                                <div class="mb-3">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="username" placeholder="Enter username">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                 <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" name="password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn btn-light" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <h5 class="font-size-14 mb-3">Sign In With</h5>                                   
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{route('Auth.recoverpw')}}" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection