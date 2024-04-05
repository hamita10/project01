@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Enquiry Massage page</h4>
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
                        ENQUIRY DETAILS
                    </h2>
                        <div class="row" style="text-align: center; padding:10px;">
                            <div class="col-md-12">
                                <div class="md-3">
                                <h5 class="posted_in"> <strong>Name : </strong>  {{$Enquiry->Name}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center; padding:10px;">
                            <div class="col-md-6">
                                <div class="md-3">
                                <h5 class="posted_in"> <strong>Email : </strong>  {{$Enquiry->email}}</h5>
                             </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-3">
                                    <h5 class="posted_in"> <strong>Phone : </strong>  {{$Enquiry->number}}</h5>
                                </div>
                            </div>
                        </div>
                         <div class="row"style="text-align: center; padding:10px;">
                            <div class="col-md-12">
                                <div class="md-3">
                                <h5 class="posted_in"> <strong>Massage :<br> <br> </strong>  {{$Enquiry->Message}}</h5>
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