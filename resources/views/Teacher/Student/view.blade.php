@extends('layouts.Teacher')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Student View page</h4>
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
                              -- STUDENT DETAILS --
                            </h2>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Pc No : </strong> {{ $student->pc_no }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Student Name : </strong>
                                            {{ $student->admission->student_name }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center; padding:10px;">
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Subject Name : </strong>
                                            {{ $student->subject->name }} </h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-3">
                                        <h5 class="posted_in"> <strong>Batch Time: </strong>
                                            {{ $student->batchtime->start_time }} TO {{ $student->batchtime->end_time }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h2
                                    style="text-align: center;
                                margin-top:30px;

                                        color:#12c2b9;
                                        font-family: 'Permanent Marker', cursive !important;
                                        font-weight: 400 !important;
                                        font-style: normal !important;">
                                   -- STUDENT ATTENDANCE --
                                </h2>
                                <form method="POST" id="" action="{{ route('Teacher.attendance.store') }}"
                                    style="display: flex;">
                                    @csrf
                                  
                                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                                    <div class="col-md-4" style="padding: 10px">
                                     
                                        <div class="mb-3">
                                            <label for="validationCustom01" class="form-label"> Date</label>
                                            <input type="date" name="date" class="form-control"
                                                placeholder="Enter Course Name">
                                        </div>
                                        <span class="text-danger">
                                            @error('date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}</div>
                                    @endif
                                    </div>
                                    <div class="col-md-4" style="padding: 10px; margin-left:10px;">
                                        <div class="mb-3">
                                            <label class="col-md-4 ">Attendance</label>
                                            <div class="col-md-12">
                                                <select class="form-select" name="attendance">
                                                    <option>Select</option>
                                                    <option value="Present">Present</option>
                                                    <option value="Absent">Absent </option>
                                                </select>
                                            </div>
                                            <span class="text-danger">
                                                @error('attendance')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="margin-top: 36px; margin-left:10px;">
                                        <button class="btn btn-primary" type="submit">Submit </button>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <h2
                                style="text-align: center;
                                margin-top:30px;
                     color:#12c2b9;
                      font-family: 'Permanent Marker', cursive !important;
                       font-weight: 400 !important;
                         font-style: normal !important;">
                               -- STUDENT ATTENDANCE DETAILS --
                            </h2>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Total Days</p>
                                                    <h4 class="mb-0">{{$data = DB::table('attendances')->where('student_id', $student->id)->count()}}</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-calendar-plus font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                   
                                                       
                                                  
                                                    <p class="text-muted fw-medium">Present</p>
                                                   
                                                    <h4 class="mb-0">{{ $data = DB::table('attendances')->where('attendance', '=', 'Present')->where('student_id', $student->id)->count()}}</h4>
                                                  
                                                </div>

                                                <div class="flex-shrink-0 align-self-center ">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bxs-user-plus font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    
                                                    <p class="text-muted fw-medium">Absent</p>
                                                   
                                                <h4 class="mb-0">{{ $Absent = DB::table('attendances')->where('attendance', '=', 'Absent')->where('student_id', $student->id)->count()}} </h4>
                                               
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bxs-user-minus font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    @php
                                                        $data =DB::table('attendances')->where('student_id', $student->id)->count();
                                                        $present = DB::table('attendances')->where('attendance', '=', 'Present')->where('student_id', $student->id)->count();
                                                        if( $present !=0){

                                                            $percentage =  ($present / $data) * 100;
                                                        }else{
                                                            $percentage = 0;

                                                        }
                                                    @endphp
                                                    <p class="text-muted fw-medium">percentage</p>
                                                   
                                                    <h4 class="mb-0">{{$percentage}}%</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            {{-- <i class="bx bx-purchase-tag-alt font-size-24"></i> --}}
                                                            <i class="fa fa-percent font-size-15" ></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
