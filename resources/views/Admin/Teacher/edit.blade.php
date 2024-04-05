@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Form Layouts</h4>
                 </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"></h4>
                        <form method="POST" action="{{route('Admin.teacher.update')}}">
                            @csrf
                        
                            <div class="mb-3">
                                <input type="hidden" name="id" value="{{$teacher->id}}">
                                <label for="formrow-firstname-input" class="form-label">first name</label>
                                <input type="text" class="form-control" name="name" value="{{$teacher->name}}" id="formrow-firstname-input" placeholder="Enter Your First name">
                                <span class="text-danger">
                                    @error('first_name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">email</label>
                                <input type="text" class="form-control" name="email" value="{{$teacher->email}}"  id="formrow-email-input" placeholder="Enter Your email">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">age</label>
                                <input type="number" class="form-control" name="age" value="{{$teacher->age}}"  id="formrow-age-input" placeholder="Enter Your age">
                                <span class="text-danger">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">phone</label>
                                <input type="number" class="form-control" name="phone" value="{{$teacher->phone_no}}" id="formrow-phone-input" placeholder="Enter Your phone">
                                <span class="text-danger">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">address</label>
                                <input type="text" class="form-control" name="address" value="{{$teacher->address}}" id="formrow-address-input" placeholder="Enter Your address">
                                <span class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
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