@extends('layouts.admin')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Asign Layouts</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4"></h4>
                            <form method="POST" action="{{ route('Admin.asign.store') }}">
                                @csrf
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}</div>
                                @endif
                                <div class="mb-3">
                                    <label for="formrow-firstname-input" class="form-label">Pc no</label>
                                    <input type="number" class="form-control" name="pc_no" id="formrow-firstname-input"
                                        placeholder="Enter Your pc_no">
                                    <span class="text-danger">
                                        @error('pc_no')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <div class="col-lg-12">
                                        <label for="formrow-firstname-input" class="form-label">Student Name</label>
                                        <select class="form-select select2" aria-label="Default select example"
                                            name="student_id">
                                            <option value="" disabled selected hidden>select</option>
                                            @foreach ($admission as $list)
                                                <option value="{{ $list->id }}">{{ $list->student_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('student_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-lg-12">
                                        <label for="formrow-firstname-input" class="form-label">Teacher Name</label>
                                        <select class="form-select select2" aria-label="Default select example"
                                            name="teacher_id">
                                            <option value="" disabled selected hidden>select</option>
                                            @foreach ($teacher as $list)
                                                <option value="{{ $list->id }}">{{ $list->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('teacher_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-lg-12">
                                        <label for="formrow-firstname-input" class="form-label">Subject Name</label>
                                        <select class="form-select select2" aria-label="Default select example"
                                            name="subject_id">
                                            <option value="" disabled selected hidden>select</option>
                                            @foreach ($subject as $list)
                                                <option value="{{ $list->id }}">{{ $list->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('subject_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-lg-12">
                                        <label for="formrow-firstname-input" class="form-label">Batch Time</label>
                                        <select class="form-select select2" aria-label="Default select example"
                                            name="batch_time">
                                            <option value="" disabled selected hidden>select</option>
                                            @foreach ($batchsystem as $list)
                                                @if ($list->status != 0)
                                                    <option value="{{ $list->id }}">
                                                        {{ $list->start_time }}-{{ $list->end_time }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('batch_time')
                                                {{ $message }}
                                            @enderror
                                        </span>
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