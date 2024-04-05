@extends('layouts.Teacher')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">StudentList Tables</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
         <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed"
                                        role="grid" aria-describedby="datatable-buttons_info" style="width: 880px;">
                                        <thead>
                                            <tr role="row" style="text-align: center">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 132.333px;"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Pc No</th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 205.333px;"
                                                    aria-label="Position: activate to sort column ascending">Student Name</th>   
                                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 39.3333px;"
                                                    aria-label="Age: activate to sort column ascending">Subject Name</th>
                                                 <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                    rowspan="1" colspan="1" style="width: 39.3333px;"
                                                    aria-label="Age: activate to sort column ascending">Batch Time</th>
                                                <th>View</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student as $key=>$item)
                                            <tr class="even"style="text-align: center">
                                                <td>{{$item->pc_no}}</td>
                                                <td>{{$item->admission->student_name}}</td>
                                                <td>{{$item->subject->name}}</td>
                                                <td>{{$item->batchtime->start_time}} - {{$item->batchtime->end_time}}</td>
                                                <td style="display: none;"> <a href="{{URL::to('teacher/student/view'.'/'.$item->id)}}">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">
                                                        view
                                                    </button></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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