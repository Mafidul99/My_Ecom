@extends('admin.layouts.admin')
@section('title') {{'Manage Category'}} @endsection

@section('container')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Category</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{url('admin/category')}}" class="btn btn-danger radius-30 mt-2 mt-lg-0">
                        <i class="bx bx-arrow-from-right"></i>Back</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Category</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="border border-3 p-4 rounded">

                                <form action="{{route('category.manage_category_process')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="category_name" class="control-label mb-1">Category Name</label>
                                        <input id="category_name" value="{{$category_name}}" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            @error('category_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_slug" class="control-label mb-1">Category slug</label>
                                        <input id="category_slug" value="{{$category_slug}}" name="category_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    </div>
                                            @error('category_slug')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-primary">
                                            Save Category
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
