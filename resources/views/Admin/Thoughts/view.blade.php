@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">thoughts page</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row" >
                            <div class="col-12 ">
                            <h2
                                style="text-align: center;
                             color:#12c2b9;
                              font-family: 'Permanent Marker', cursive !important;
                               font-weight: 400 !important;
                                 font-style: normal !important;">
                                STUDENT THOUGHTS
                            </h2>
                                <div class="mx-auto" style="width: 140px;">
                                    <div class="d-flex justify-content-center align-items-center rounded"
                                        style="height: 140px; background-color: rgb(233, 236, 239);">
                                        @if (!$thoughts->image)
                                            <img src="https://t4.ftcdn.net/jpg/05/65/22/41/360_F_565224180_QNRiRQkf9Fw0dKRoZGwUknmmfk51SuSS.jpg"
                                                id="wizardPicturePreview" alt=""
                                                class="img-thumbnail"
                                                style="  width: 100%;height: 100%;">
                                        @else
                                            <img src="{{ asset('/adminassets/Uploads/thoughts') . '/' . $thoughts->image }}"
                                                id="wizardPicturePreview" alt=""
                                                class="img-thumbnail"
                                                style="  width: 100%;height: 100%;">
                                        @endif
                                    </div>
                                </div>
                            </div>
                           
                        </div><br>
                        <div class="row" style="text-align: center; padding:10px;">
                            <div class="col-md-12">
                                <div class="md-3">
                                <h5 class="posted_in"> <strong>Student Name : </strong>  {{$thoughts->Admission->student_name}}</h5>
                                </div>
                            </div>
                        </div>
                         <div class="row"style="text-align: center; padding:10px;">
                            <div class="col-md-12">
                                <div class="md-3">
                                <h5 class="posted_in"> <strong>Description :<br> <br> </strong>  {{$thoughts->description}}</h5>
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