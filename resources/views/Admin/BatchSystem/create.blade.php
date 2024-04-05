@extends('layouts.Admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">BatchSystem Layouts</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">student Layout</h4>
                       <form method="POST" action="{{route('Admin.batchsystem.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Start Batch Time</label>
                                        <input type="time" name="start_time" class="form-control"
                                            id="validationCustom01" placeholder="Enter start_time">
                                        <span class="text-danger">
                                            @error('start_time')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">End Batch Time</label>
                                        <input type="time" name="end_time" class="form-control"
                                            id="validationCustom01" placeholder="Enter end_time">
                                        <span class="text-danger">
                                            @error('end_time')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
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
