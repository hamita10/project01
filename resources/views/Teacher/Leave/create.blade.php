@extends('layouts.Teacher')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create Leave</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title"></h4>
                            <form method="POST" id="" action="{{route('Teacher.leave.store')}}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="col-md-2 col-form-label">Leave Type</label>
                                            <div class="col-md-12">
                                                <select class="form-select" name="leave_type">
                                                    <option>Select</option>
                                                    <option value="casual Leave">Casual leave</option>
                                                    <option value="medical Leave">medical leave</option>
                                                </select>
                                            </div>
                                            <span class="text-danger">
                                                @error('leave_type')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="col-md-2 col-form-label">Day</label>
                                            <div class="col-md-12">
                                                <select class="form-select" name="day">
                                                    <option>Select</option>
                                                    <option value="Full Day">Full Day</option>
                                                    <option value="Haif Day">Haif Day </option>
                                                </select>
                                            </div>
                                            <span class="text-danger">
                                                @error('day')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom01" class="form-label">Start Date</label>
                                            <input type="date" name="start_date" class="form-control"
                                                placeholder="Enter Course Name">
                                            </div>
                                        <span class="text-danger">
                                            @error('start_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom01" class="form-label">end Date</label>
                                            <input type="date" name="end_date" class="form-control"
                                                placeholder="Enter Course Name">
                                            
                                        </div>
                                        <span class="text-danger">
                                            @error('end_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-2">
                                            <label for="validationCustom03" class="form-label">Reason</label>
                                            <textarea name="reason" class="form-control" id="validationCustom01" placeholder="Enter Address"></textarea>
                                            <span class="text-danger">
                                                @error('reason')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
