<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Student Name</th>
            <td>{{ $show->student_name}}</td>
        </tr>

        @foreach ($installment as $showlist)
        <tr>
            <th scope="col">Installment {{ $showlist->month}}</th>
            @if ($showlist->status == 0)
            <td class="text-center"><span class="btn btn-warning changeStatus text-white" data-id="{{ $showlist->id }}">{{ $showlist->amount}}</span></td>
            @else
            <td class="text-center"><span class="btn btn-success  changeStatus text-white" data-id="{{ $showlist->id }}">{{ $showlist->amount}}</span></td>
            @endif

        </tr>
        @endforeach
    </thead>
{{-- @endforeach --}}
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(function() {
    $('.changeStatus').on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var url = "{{route('admin.admission.chnageStatus')}}";
        Swal.fire({
            icon: 'warning',
              title: 'Are you sure you want to Add this record?',
              showDenyButton: false,
              showCancelButton: false,
              confirmButtonText: 'Yes'
          }).then((result) => {
            / Read more about isConfirmed, isDenied below /
            if (result.isConfirmed) {
            }
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
});


</script>