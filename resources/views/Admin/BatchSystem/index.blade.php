@extends('layouts.Admin')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">BatchSystem Tables</h4>
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
                                               <a href="{{route('Admin.batchsystem.create')}}"> <button type="button" class="btn btn-primary btn-lg">+Create</button></a>
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
                                                <tr role="row">
                                                    <tr style="text-align: center">
                                                    <th>id</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 39.3333px;"
                                                        aria-label="Age: activate to sort column ascending">Start Time</th>
                                                     <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 39.3333px;"
                                                        aria-label="Age: activate to sort column ascending">End Time</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 39.3333px;"
                                                        aria-label="Age: activate to sort column ascending">status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1" style="width: 86.3333px;"
                                                        aria-label="Start date: activate to sort column ascending">Edit</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                                        rowspan="1" colspan="1"
                                                        style="width: 65.3333px; display: none;"
                                                        aria-label="Salary: activate to sort column ascending">Delete</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($batchsystem as $key=>$item)
                                                <tr class="even"style="text-align: center">
                                                    <td>{{++$key}}</td>
                                                    <td>{{$item->start_time}}</td>
                                                    <td>{{$item->end_time}}</td>
                                                    <td>
                                                        @if ($item->status == 1)
                                                            <button type="button" class="btn btn-primary changeStatus"
                                                                data-id="{{ $item->id }}">available </button>
                                                        @else
                                                            <button type="button" class="btn btn-danger changeStatus"
                                                                data-id="{{ $item->id }}">Not available </button>
                                                        @endif
                                                    </td>
                                                    <td><a href="{{URL::to('admin/batchsystem/edit'.'/'.$item->id)}}"><button type="button" class="btn btn-warning waves-effect waves-light">Edit</button></a></td>
                                                    <td style="display: none;">
                                                       <a href="{{URL::to('admin/batchsystem/delete'.'/'.$item->id)}}"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</button></a></td>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function() {
            $('.changeStatus').on('click', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var url = '{{ route('admin.batchSystem.chnageStatus') }}';
                $.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        id: id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
    
                        location.reload();
                    }
                });
            });
        });
        </script>
@endsection
