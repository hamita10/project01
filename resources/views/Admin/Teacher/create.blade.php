@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Teacher Layouts</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"></h4>
                        <form method="POST" action="{{route('Admin.teacher.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="formrow-firstname-input" placeholder="Enter Your First name">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="formrow-email-input" placeholder="Enter Your email">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">age</label>
                                        <input type="number" class="form-control" name="age" id="formrow-email-input" placeholder="Enter Your age">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">phone</label>
                                        <input type="number" class="form-control" name="phone" id="formrow-phone-input" placeholder="Enter Your phone">
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">address</label>
                                        <input type="text" class="form-control" name="address" id="formrow-address-input" placeholder="Enter Your address">
                                        <span class="text-danger">
                                            @error('address')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
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
                                    
                                </div>
                                <div class="col-md-6">
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
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
@endsection
