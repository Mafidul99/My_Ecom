@extends('admin.layouts.admin')
@section('title') {{'Manage Brand'}} @endsection

@section('container')
@if($id>0)
    @php
        $image_reqired="";
    @endphp
    @else
    @php
        $image_reqired="required";
    @endphp
    @endif
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">eCommerce</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Brand</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{url('admin/brand')}}" class="btn btn-danger radius-30 mt-2 mt-lg-0">
                        <i class="bx bx-arrow-from-right"></i>Back</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Brand</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="border border-3 p-4 rounded">
                                <form action="{{route('brand.manage_brand_process')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="brand" class="control-label mb-1">Brand Name</label>
                                        <input id="brand" value="{{$name_brand}}" name="name_brand" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    </div>
                                            @error('name_brand')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    <div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Brand Image</label>
                                        <input id="image" name="image" type="file" class="form-control" aria-required="true"
                                         aria-invalid="false" {{$image_reqired}}>
                                         @error('image')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        @if ($image!='')
                                        <img width="50px" src="{{asset('storage/media/brand/'.$image)}}"/>
                                        @endif
                                        </div>
                                        <button id="payment-button" type="submit" class="btn btn-primary">
                                            Save Brand
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
