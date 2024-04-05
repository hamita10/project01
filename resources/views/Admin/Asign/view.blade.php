@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Asing View page</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                    <h2
                    style="text-align: center;
                    color:#12c2b9;
                    font-family: 'Permanent Marker', cursive !important;
                    font-weight: 400 !important;
                    font-style: normal !important;">
                     -- STUDENTS VIEW -- 
                    </h2>
                        <div class="row" style="text-align: center; padding:10px;">
                            <div class="col-md-6">
                                <div class="md-3">
                                <h5 class="posted_in"> <strong>Student Name : </strong>  {{$asign->admission->student_name}}</h5>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-3">
                                    <h5 class="posted_in"> <strong>Teacher Name : </strong>  {{$asign->teacher->name}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center; padding:10px;">
                            <div class="col-md-6">
                                <div class="md-3">
                                <h5 class="posted_in"> <strong>Subject Name : </strong>  {{$asign->subject->name}} </h5>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-3">
                                    <h5 class="posted_in"> <strong>Batch Time: </strong>  {{$asign->batchtime->start_time}}   {{$asign->batchtime->end_time}}</h5>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection