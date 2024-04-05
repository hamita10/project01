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
                                            <h5 class="text-primary" style="color: white;"> Reset Password</h5>
                                            <p style="color: white;">Get Your Free Skote Account Now.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{asset('adminassets/images/profile-img.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="#">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('adminassets/images/logo03.png')}}" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form action="{{route('reset.password.post')}}" method="POST">
                                     @csrf  
                                     
                                        <div class="mb-3">
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <label for="password" class="form-label">New Password</label>
                                            <input type="password" name="password"   class="form-control"  placeholder="Enter password">
                                            <span class="text-danger">
                                                @error('password')
                                                   {{$message}} 
                                                @enderror
                                            </span> 
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="passwordconform" class="form-label">Retype New Password</label>
                                            <input type="password"  name="Comfirmpassword"  class="form-control"  placeholder="Enter Comfirm Password">
                                            <span class="text-danger">
                                                @error('Comfirmpassword')
                                                   {{$message}} 
                                                @enderror
                                            </span> 
                                        </div> 
                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary " type="submit">Reset</button>
                                        </div>
                                    </form>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By Registering You Agree To The Skote Terms Of Use</p>
                                        </div>
                                        <span id="msg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <div>
                                <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted With <i class="mdi mdi-heart text-danger"></i> By Themesbrand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
@endsection