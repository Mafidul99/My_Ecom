@extends('admin.layouts.admin')
@section('title') {{'Manage Order'}} @endsection

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
                        <li class="breadcrumb-item active" aria-current="page">Add New Orders</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{url('admin/order')}}" class="btn btn-danger radius-30 mt-2 mt-lg-0">
                        <i class="bx bx-arrow-from-right"></i>Back</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Orders</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="border border-3 p-4 rounded">

                                <form action="{{route('order.manage_order_process')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="order" class="control-label mb-1">Orders#</label>
                                        <input id="order" value="{{$order}}" name="order" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    </div>
                                            @error('order')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    <div>
                                        <div class="mb-3">
                                            <label for="company_Name" class="control-label mb-1">company Name</label>
                                            <input id="company_Name" value="{{$company_Name}}" name="company_Name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <label for="status" class="control-label mb-1">Status</label>
                                                <input id="status" value="{{$status}}" name="status" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            </div>
                                            <div>
                                        <button id="payment-button" type="submit" class="btn btn-primary">
                                            Save Orders
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="{{$id}}">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
