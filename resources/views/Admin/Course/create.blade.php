@extends('layouts.admin')
@section('content')
<div class="page-content">
        <div class="container-fluid">
    
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Course Layouts</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
    
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                             <form method="POST" action="{{route('Admin.course.store')}}" enctype="multipart/form-data">
                                @csrf
                                <tr style="text-align: center">
                                    <div class="row" style="text-align: center">
                                        <div class="col-12 ">
                                            <div class="mx-auto" style="width: 140px;">
                                                <div class="d-flex justify-content-center align-items-center rounded"
                                                    style="height: 140px; background-color: rgb(233, 236, 239);">
                                                        <img src="https://t4.ftcdn.net/jpg/05/65/22/41/360_F_565224180_QNRiRQkf9Fw0dKRoZGwUknmmfk51SuSS.jpg"
                                                            id="wizardPicturePreview" alt=""
                                                            class="img-thumbnail"
                                                            style="  width: 100%;height: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="file btn btn-lg btn-primary"
                                            style=" position: relative;overflow: hidden;padding: 9px;margin-top: 10px;">
                                            <i class="fa fa-fw fa-camera"></i>
                                            Upload Course image 
                                            <input type="file" name="image" id="wizard-picture" accept="image/png, image/gif, image/jpeg,"
                                                style="position: absolute; font-size: 50px;opacity: 0;right: 0;top: 0;">
                                            </div>  
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Code Number</label>
                                            <input type="number" class="form-control" name="code_number" id="formrow-code_number-input" placeholder="Enter Your code number">
                                            <span class="text-danger">
                                                @error('code_number')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" id="formrow-name-input" placeholder="Enter Your name">
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" rows="5" name="description" placeholder=" Enter Your Description">{{ Auth::user()->about }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                                </tr>
                            </form>
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