@extends('layouts.admin')
@section('content')
    <style>
        @import url("http://fonts.googleapis.com/css?family=Oswald:400,300,700");
    </style>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Admission View page</h4>
                        <div class="page-title-right">
                            <button type="button" data-id="{{ $admission->id }}"
                                data-instollment="{{ $admission->instollmentmonth }}" class="btn Addbtn btn-primary">+ Add
                                instollment Fees</button>
                        </div>
                        <button type="button" data-id="{{ $admission->id }}" class="btn showbtn btn-primary">
                            Show instollment paid
                        </button>
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
                                ADMISSION
                            </h2>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Course : </strong> {{ $admission->course }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Admission Date : </strong> {{ $admission->date }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Student Name : </strong>
                                            {{ $admission->student_name }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Date Of Birth : </strong>
                                            {{ $admission->birth_date }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Age : </strong> {{ $admission->age }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Qualification : </strong>
                                            {{ $admission->qualification }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Phone.No : </strong> {{ $admission->landline }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Mobile No : </strong> {{ $admission->mobile_no }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Qualification : </strong>
                                            {{ $admission->qualification }}</h5>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="md-3">
                                            <h5 class="posted_in"> <strong>Email : </strong> {{ $admission->email }}</h5>
                                        </div>
                                    </div>
                                </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Name Of Father : </strong>
                                            {{ $admission->father_name }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Father Mobile No : </strong>
                                            {{ $admission->father_no }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Father Qualification : </strong>
                                            {{ $admission->father_qualification }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Father Occupation : </strong>
                                            {{ $admission->father_occupation }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Name Of Mother : </strong>
                                            {{ $admission->mother_name }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Mother Mobile No : </strong>
                                            {{ $admission->mother_no }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Mother Occupation : </strong>
                                            {{ $admission->mother_qualification }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Contact Any Emergency : </strong>
                                            {{ $admission->emergency_no }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Total Fees : </strong> {{ $admission->totalfees }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Total instollment Month : </strong>
                                            {{ $admission->instollmentmonth }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Total Fees Paid : </strong>
                                            {{ $admission->feespaid }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row"style="text-align: center; padding:10px;">
                                <div class="col-md-12">
                                    <div class="md-3">
                                    <h5 class="posted_in"> <strong>Address :<br> <br> </strong>  {{$admission->address}}</h5>
                                    </div>
                                </div>
                            </div> <br>  <br>

                            <h3
                                style="text-align: center;
                             color:#12c2b9;
                              font-family: 'Permanent Marker', cursive !important;
                               font-weight: 400 !important;
                                 font-style: normal !important;">
                                OFFICE USE ONLY
                            </h3> 
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Center Reg Code : </strong>
                                            {{ $admission->center_code }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Student Reg Code : </strong>
                                            {{ $admission->student_code }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row"style="text-align: center; padding:10px;">
                                <div class="col-md-12">
                                    <div class="md-3">
                                    <h5 class="posted_in"> <strong>Batch Time :<br> <br> </strong>  {{$admission->batchtime->start_time}} TO {{$admission->batchtime->end_time}}</h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal fade" id="showmodal" role="dialog" aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true">
                        <div class="modal-dialog  " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        style="float: right;"></button>
                                </div>
                                <div class="Show-Modal"></div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Addbtn" role="dialog" aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true">
                        <div class="modal-dialog  " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        style="float: right;"></button>
                                </div>
                                <div class="modal-body modelview">
                                    <div class="mb-3">
                                        <form method="post" id=""
                                            action="{{ route('admin.admission.addfees') }}">
                                            @csrf
                                            <input type="hidden" name="user_id" id="stu_id" />
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Add
                                                            Amount</label>
                                                        <input type="text" name="amount" id="feespaid"
                                                            class="form-control" placeholder="Enter Add instollment">
                                                        <span class="text-danger">
                                                            @error('feespaid')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">add
                                                            Instollment</label>
                                                        <input type="text" name="instollment" id="instollment"
                                                            value="" class="form-control"
                                                            placeholder="Enter Add Fees">
                                                        <span class="text-danger">
                                                            @error('instollment')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="Show-Modal"></div>
                            </div>
                        </div>
                    </div>  
        </div>
    @endsection
    @section('script')
        <script>
            $(document).ready(function() {
                $(document).on('click', '.showbtn', function() {
                    var id = $(this).data('id');
                    var url = "{{ route('admin.admission.show') }}";
                    $('#showmodal').modal('show');
                    $.ajax({
                        type: 'GET',
                        url: url,
                        data: {
                            id: id,
                        },
                        success: function(data) {
                            $('.Show-Modal').html(data);

                        }
                    });
                });

                // add fees btn //
                $(document).on('click', '.Addbtn', function() {
                    $('#Addbtn').modal('show');
                    var id = $(this).data('id');
                    $('#stu_id').val(id);
                    var instollment = $(this).data('instollment');
                    $('#instollment').val(instollment); 
                });
            });
        </script>
@endsection
