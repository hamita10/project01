@extends('layouts.Auth')
@section('contant')
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                         <div class="card-body">
                             <div class="p-2">
                                <div class="text-center">
                                     <div class="avatar-md mx-auto">
                                        <div class="avatar-title rounded-circle bg-light">
                                            <i class="bx bxs-envelope h1 mb-0" style="color: #34c38f"></i>
                                        </div>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <h4>Verify Your Email</h4>
                                        <p class="mb-5">Please Enter The 4 Digit Code Sent To
                                            <span class="fw-semibold">
                                                {{ $data->email }}
                                            </span>
                                        </p>
                                        <form method="POST" action="{{ route('reset.password.get') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3 float-center">
                                                        <input type="hidden" name="email" value="{{ $data->email }}">
                                                        <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                        <input type="text" name="otp" class="form-control ">
                                                    </div>
                                                </div>
                                                <span class="text-danger">
                                                    @error('otp')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-success w-md">Confirm</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>Skote. Crafted With <i class="mdi mdi-heart text-danger"></i> By
                            ThemesBrand
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
