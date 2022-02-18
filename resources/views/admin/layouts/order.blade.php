@extends('admin.layouts.admin')
@section('title') {{'Coupons'}} @endsection

@section('container')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Order</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{url('admin/order/manage_order')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0">
                        <i class="bx bxs-plus-square"></i>Add Orders</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive ">
                    <table id="datatable" class="table" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Orders#</th>
								<th>Company Name</th>
								<th>Status</th>
								<th>Total</th>
								<th>Date</th>
								<th>View Details</th>
								<th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $list)
                            <tr>
                                <td>{{$list->id}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">{{$list->order}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$list->company_Name}}</td>
                                <td>
                                    <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
                                        <i class='bx bxs-circle me-1'></i>{{$list->status}}</div>
                                    </td>
                                <td>{{$list->total}}</td>
                                <td>{{$list->date}}</td>
                                <td>
                                    @if ($list->status==1)
                                    <a href="{{url('admin/coupon/status/0/')}}/{{$list->id}}">
                                        <button class="btn btn-success px-4 radius-30">Active</button>
                                      </a>
                                      @elseif ($list->status==0)
                                      <a href="{{url('admin/coupon/status/1/')}}/{{$list->id}}">
                                        <button class="btn btn-danger px-4 radius-30">Inactive</button>
                                      </a>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{url('admin/order/manage_order/')}}/{{$list->id}}">
                                            <i class="bx bx-edit primary"></i></a>
                                        <a href="{{url('admin/order/delete/')}}/{{$list->id}}" class="ms-3">
                                            <i class='bx bx-trash danger'></i></a>
                                    </div>
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

@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
      } );
</script>
<!----------------Sweetlert----------------->
@if (session('message_delet'))
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })
        Toast.fire({
        icon: 'error',
        title: '{{session('message_delet')}}'
    })
    //swal("Deleted","{{session('message_delet')}}", "error");
</script>
@endif
@if (session('message_status'))
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })
        Toast.fire({
        icon: 'success',
        title: '{{session('message_status')}}'
    })
    //swal("Status","{{session('message_status')}}", "info");
</script>
@endif
@if (session('message'))
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })
        Toast.fire({
        icon: 'success',
        title: '{{session('message')}}'
    })
    //swal("Good Job!","{{session('message')}}", "success");
</script>
@endif
<!----------------Sweetlert End----------------->
@endsection
