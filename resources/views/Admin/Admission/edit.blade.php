@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1 style="text-align: center;">Admission Form</h1>
                        <form method="POST" id="" action="{{route('Admin.admission.update')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <input type="hidden" name="id" value="{{$admission->id}}">
                                        <label for="validationCustom01" class="form-label">Course</label>
                                        <input type="text" name="course" value="{{$admission->course}}" class="form-control"
                                            placeholder="Enter Course Name">
                                        <span class="text-danger">
                                            @error('course')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4" class="float-right">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Admission Date</label>
                                        <input type="date" name="date"  value="{{$admission->date}}" class="form-control"
                                            placeholder="Enter Course Name">
                                        <span class="text-danger">
                                            @error('date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Student Name</label>
                                        <input type="text" name="name" class="form-control"
                                            id="validationCustom01" value="{{$admission->student_name}}" placeholder="Enter Student Name">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Date Of Birth</label>
                                        <input type="date" name="DateOfBirth" class="form-control"
                                            id="validationCustom01"value="{{$admission->birth_date}}" placeholder="Enter Date Of Birth">
                                        <span class="text-danger">
                                            @error('DateOfBirth')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Age</label>
                                        <input type="number" name="age" class="form-control"
                                            id="validationCustom01" value="{{$admission->age}}"placeholder="Enter Age">
                                        <span class="text-danger">
                                            @error('age')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Qualification</label>
                                        <input type="text" name="qualification" class="form-control"
                                            id="validationCustom01"value="{{$admission->qualification}}" placeholder=" Enter Qualification">
                                        <span class="text-danger">
                                            @error('qualification')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Ph.No(landline)</label>
                                        <input type="number" name="landline" class="form-control"
                                            id="validationCustom01"value="{{$admission->landline}}" placeholder="Enter landline Number">
                                        <span class="text-danger">
                                            @error('landline')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-2">
                                            <label for="validationCustom03" class="form-label">Address</label>
                                            <textarea type="text" name="address" class="form-control" 
                                            id="validationCustom01"  placeholder="Enter Address">{{$admission->address}}</textarea>
                                            <span class="text-danger">
                                                @error('address')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Mobile No:-</label>
                                            <input type="number" name="mobile" class="form-control"
                                                id="validationCustom01"value="{{$admission->mobile_no}}" placeholder="Enter Mobile No">
                                            <span class="text-danger">
                                                @error('mobile')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="validationCustom01"value="{{$admission->email}}" placeholder="Enter Email Address">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Name Of Father</label>
                                            <input type="text" name="fathername" class="form-control"
                                                id="validationCustom01"value="{{$admission->father_name}}" placeholder="Enter Name Of Father">
                                            <span class="text-danger">
                                                @error('fathername')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Father Mobile No:-</label>
                                            <input type="number" name="FatherMobileNo" class="form-control"
                                                id="validationCustom01"value="{{$admission->father_no}}" placeholder="Enter Father Mobile No">
                                            <span class="text-danger">
                                                @error('FatherMobileNo')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Father Qualification</label>
                                            <input type="text" name="FatherQualification" class="form-control"
                                                id="validationCustom01"value="{{$admission->father_qualification}}" placeholder="Enter Father Qualification">
                                            <span class="text-danger">
                                                @error('FatherQualification')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Father Occupation</label>
                                            <input type="text" name="FatherOccupation" class="form-control"
                                                id="validationCustom01"value="{{$admission->father_occupation}}" placeholder="Enter Father Occupation">
                                            <span class="text-danger">
                                                @error('FatherOccupation')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Name Of Mother</label>
                                            <input type="text" name="NameOfMother" class="form-control"
                                                id="validationCustom01"value="{{$admission->mother_name}}" placeholder="Enter Name Of Mother">
                                            <span class="text-danger">
                                                @error('NameOfMother')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Mother Mobile No:-</label>
                                            <input type="number" name="MotherMobileNo" class="form-control"
                                                id="validationCustom01"value="{{$admission->mother_no}}" placeholder="Enter Mother Mobile No">
                                            <span class="text-danger">
                                                @error('MotherMobileNo')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Mother Qualification</label>
                                            <input type="text" name="MotherQualification" class="form-control"
                                                id="validationCustom01"value="{{$admission->mother_qualification}}" placeholder="Enter Mother Qualification">
                                            <span class="text-danger">
                                                @error('MotherQualification')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Mother Occupation</label>
                                            <input type="text" name="MotherOccupation" class="form-control"
                                                id="validationCustom01" value="{{$admission->mother_occupation}}"placeholder="Enter Mother Occupation">
                                            <span class="text-danger">
                                                @error('MotherOccupation')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Contact Any Emergency</label>
                                            <input type="number" name="ContactAnyEmergency" class="form-control"
                                                id="validationCustom01"value="{{$admission->emergency_no}}" placeholder="Enter Contact Any Emergency">
                                            <span class="text-danger">
                                                @error('ContactAnyEmergency')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Total Fees</label>
                                        <input type="number" name="Fees" class="form-control"
                                            id="validationCustom01"value="{{$admission->totalfees}}" placeholder=" Enter Total Fees">
                                        <span class="text-danger">
                                            @error('Fees')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Total Fees Paid</label>
                                        <input type="number" name="Paidfees" class="form-control"
                                            id="validationCustom01" value="{{$admission->feespaid}}"placeholder=" Enter Total Fees Paid">
                                        <span class="text-danger">
                                            @error('Paidfees')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Total instollment Month</label>
                                        <input type="number" name="instollment" class="form-control"
                                            id="validationCustom01" value="{{$admission->instollmentmonth}}"placeholder=" Enter Total instollment Month">
                                        <span class="text-danger">
                                            @error('instollment')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>
                                </div>

                            </div>
                                <h3 style="text-align: center;">Office Use Only</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Center Reg Code</label>
                                            <input type="text" name="CenterRegCode" class="form-control"
                                                id="validationCustom01" value="{{$admission->center_code}}"placeholder="Enter Center Reg Code">
                                            <span class="text-danger">
                                                @error('CenterRegCode')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Student Reg Code</label>
                                            <input type="text" name="StudentRegCode" class="form-control"
                                                id="validationCustom01"value="{{$admission->student_code}}" placeholder="Enter Student Reg Code">
                                            <span class="text-danger">
                                                @error('StudentRegCode')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Batch Time</label>
                                                <select name="batch_id" class="form-control" >
                                                    <option value="{{$admission->batch_id}}"> select Batch </option>
                                                    @foreach ($batch as $batchlist)
                                                    @if($batchlist->status != 0)
                                                    <option value="{{$batchlist->id}}" {{ $admission->batch_id == $batchlist->id  ? 'selected' : '' }} >{{$batchlist->start_time}}-{{$batchlist->end_time}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            <span class="text-danger">
                                                @error('batch_id')
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