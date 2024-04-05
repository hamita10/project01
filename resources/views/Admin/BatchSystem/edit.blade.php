@extends('layouts.Admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Form Layouts</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Layouts</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Form Grid Layout</h4>
                        
                        
                        <form method="POST" action="{{route('Admin.batchsystem.update')}}">
                            @csrf
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <input type="hidden" name="id" value="{{$batchsystem->id}}">
                                                <label for="validationCustom03" class="form-label">Start Batch Time</label>
                                                <input type="time" name="start_time" class="form-control"
                                                    id="validationCustom01" value="{{$batchsystem->start_time}}" placeholder="Enter start Time">
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
                                                    id="validationCustom01" value="{{$batchsystem->end_time}}" placeholder="Enter end Time">
                                                <span class="text-danger">
                                                    @error('end_time')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
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