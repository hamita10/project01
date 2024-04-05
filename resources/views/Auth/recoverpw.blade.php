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
                                        <h5 class="text-primary"> Reset Password</h5>
                                        <p>Reset Password With Skote.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ Asset('AdminAssets/images/profile-img.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="index-2.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ Asset('AdminAssets/images/logo03.png') }}" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                             <div class="p-2">
                                <div class="alert alert-success text-center mb-4" role="alert">
                                    Enter your Email And Instructions Will Be Sent To You!
                                </div>
                                <form  method="POST" action="{{ route('forget.password.post') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                     <div class="text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light"
                                            type="submit">Reset</button>
                                    </div>
                                </form>
                            </div>
                         </div>
                    </div>
                    <div class="mt-4 text-center">
                        <p>Remember It ? <a href="{{ route('auth.login') }}" class="text-muted">Sign In Here </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
