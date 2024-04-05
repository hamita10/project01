@extends('layouts.admin')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">thoughts Tables</h4>
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
                                    <div class="col-12">
                                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0 font-size-18"></h4>
                                            <div class="page-title-right">
                                               <a href="{{route('Admin.thoughts.create')}}"> <button type="button" class="btn btn-primary btn-lg">+Create</button></a>
                                            </div>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable-buttons"
                                            class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline collapsed"
                                            role="grid" aria-describedby="datatable-buttons_info" style="width: 880px;">
                                           <thead>
                                            <tr style="text-align: center">
                                                <th>Id</th>
                                                <th>Student Name</th>
                                                <th>View</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                           </thead>
                                             <tbody>
                                                @foreach ($thoughts as $key=>$item)
                                                <tr class="even"style="text-align: center">
                                                    <td>{{++$key}}</td>
                                                    <td>{{$item->Admission->student_name}}</td>
                                                    <td style="display: none;"> <a href="{{URL::to('admin/thoughts/view'.'/'.$item->id)}}">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light">
                                                            view
                                                        </button></a></td>
                                                     <td><a href="{{URL::to('admin/thoughts/edit'.'/'.$item->id)}}"><button type="button" class="btn btn-warning waves-effect waves-light">Edit</button></a></td>
                                                    <td style="display: none;">
                                                        <a href="{{URL::to('admin/thoughts/delete'.'/'.$item->id)}}"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</button></a></td>
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