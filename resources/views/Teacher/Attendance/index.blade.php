@extends('layouts.Teacher')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Attendance Tables</h4>
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
                                                <tr role="row">
                                                <tr style="text-align: center">
                                                    <th>Id</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 132.333px;"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">Student Name</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 132.333px;"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">Attendance</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 205.333px;"
                                                        aria-label="Position: activate to sort column ascending"> Date</th>
                                                        
                                                    
                                                   
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1"
                                                        style="width: 65.3333px; display: none;"
                                                        aria-label="Salary: activate to sort column ascending">Delete</th>
                                                </tr>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($Attendance as $key=>$item)
                                                <tr class="even"style="text-align: center">
                                                    <td>{{++$key}}</td>
                                                    <td>{{$item->asign->Admission->student_name  }}</td>
                                                    <td>{{$item->date}}</td>
                                                    <td>{{$item->attendance}} </td>
                                                    <td style="display: none;">
                                                        <a href="{{URL::to('teacher/leave/delete'.'/'.$item->id)}}"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</button></td>
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