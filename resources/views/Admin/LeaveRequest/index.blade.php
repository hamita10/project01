@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Leave Tables</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr style="text-align: center">
                                <th>id</th>
                                <th>Teacher Name</th>
                                <th>Leave Type</th>
                                <th>Date</th>
                                <th>View</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($leaverequest  as $key=>$item)
                                <tr class="even" style="text-align: center">
                                    <td>{{++$key}}</td>
                                    <td class="sorting_1 dtr-control">{{$item->User->name}}</td>
                                    <td class="sorting_1 dtr-control">{{$item->leave_type}}</td>
                                    <td class="sorting_1 dtr-control">{{$item->start_date}} - {{$item->end_date}}</td>
                                    <td style="display: none;"> <a href="{{URL::to('admin/leaverequest/view'.'/'.$item->id)}}">
                                        <button type="button" class="btn btn-primary waves-effect waves-light">
                                            view
                                        </button></a></td>
                                         <td> <select name="" class="changestatus" data-id="{{ $item->id }}" style="    padding: 7px;
                                        color: #ffffff;
                                        background-color: #12c2b9;
                                        border-radius: 4px;
                                        border-color: #12c2b9;">
                                        <option value="0" @if ($item->status == '0') selected="selected" @endif>Pending
                                        </option>
                                        <option value="1" @if ($item->status == '1') selected="selected" @endif>Approve
                                        </option>
                                        <option value="2" @if ($item->status == '2') selected="selected" @endif>Rejected
                                        </option>
                                    </select></td>
                                    <td style="display: none;">
                                        <a href="{{URL::to('admin/leaverequest/delete'.'/'.$item->id)}}">
                                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                                Delete
                                            </button></a>
                                    </td>
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
@endsection
@section('script')
<script>
    $(function() {
        $('.changestatus').on('change', function(event) {
            event.preventDefault();
            var val = $(this).val();
            var id = $(this).data('id');
            // alert(val);
            var url = '{{ route('admin.leaverequest.chnageStatus') }}';
            $.ajax({
                type: 'post',
                url: url,
                data: {
                    id: id,
                    val: val,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {

                    location.reload();
                }
            });
        })

    });
</script>
@endsection