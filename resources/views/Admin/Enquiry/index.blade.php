@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18"> Enquiry Tables</h4>
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
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Massage</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($Enquiry  as $key=>$item)
                                <tr class="even" style="text-align: center">
                                    <td>{{++$key}}</td>
                                    <td class="sorting_1 dtr-control">{{$item->Name}}</td>
                                    <td class="sorting_1 dtr-control">{{$item->email}}</td>
                                    <td class="sorting_1 dtr-control">{{$item->number}}</td>
                                    <td style="display: none;"> <a href="{{URL::to('admin/enquiry/view'.'/'.$item->id)}}">
                                        <button type="button" class="btn btn-primary waves-effect waves-light">
                                            view
                                        </button></a></td>

                                    <td> <select name="" class="changestatus" data-id="{{ $item->id }}">
                                        <option value="pending" @if ($item->status == 'pending') selected="selected" @endif>Pending
                                        </option>
                                        <option value="Accpect" @if ($item->status == 'Accpect') selected="selected" @endif>Accpect
                                        </option>
                                        <option value="Rejected" @if ($item->status == 'Rejected') selected="selected" @endif>Rejected
                                        </option>
                                    </select></td>
                                    <td style="display: none;">
                                        <a href="{{URL::to('admin/enquiry/delete'.'/'.$item->id)}}"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</button></td>
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
            var url = '{{ route('admin.chnageStatus') }}';
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