@extends('admin.layouts.admin')
@section('title') {{'Manage Product'}} @endsection

@section('container')

    @if($id>0)
        {{$image_reqired=""}}
    @else
        {{$image_reqired="required"}}
    @endif
<!--start page wrapper -->
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
                        <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{url('admin/product')}}" class="btn btn-danger radius-30 mt-2 mt-lg-0">
                        <i class="bx bx-arrow-from-right"></i>Back</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Product</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <form action="{{route('product.manage_product_process')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <label for="category_id" class="form-label">Product Category</label>
                                        <select id="category_id" value="{{$category_id}}" name="category_id" type="text" class="form-select"
                                            aria-required="true" aria-invalid="false" required>
                                            <option value="">Select Categories</option>
                                            @foreach ($category as $list)
                                            @if ($category_id==$list->id)
                                            <option selected value="{{$list->id}}">
                                                @else
                                            <option value="{{$list->id}}">
                                                @endif
                                                {{$list->category_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="mb-3">
                                    <label for="name">Product Name</label>
                                    <input id="name" value="{{$name}}" name="name" type="text" class="form-control"
                                        aria-required="true" aria-invalid="false" placeholder="Enter Product Name" required> @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="slug">Slug</label>
                                        <input id="slug" value="{{$slug}}" name="slug" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Enter Slug" required> @error('slug')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="brand">Brand</label>
                                        <select id="brand"  name="brand" type="text" class="form-select"
                                            aria-required="true" aria-invalid="false" required>
                                            <option value="">Select Brand</option>
                                            @foreach ($brands as $list)
                                            @if ($brand==$list->id)
                                            <option selected value="{{$list->id}}">
                                                @else
                                            <option value="{{$list->id}}">
                                                @endif
                                                {{$list->name_brand}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="model">Model</label>
                                        <input id="model" value="{{$model}}" name="model" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Enter Model" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="short_desc">Short Description</label>
                                        <textarea id="short_desc" name="short_desc" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" required>{{$short_desc}}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="short_desc">Description</label>
                                        <textarea id="desc" name="desc" type="text" class="form-control" aria-required="true"
                                            aria-invalid="false" required>{{$desc}}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="keywords">Keywords</label>
                                        <textarea id="keywords" name="keywords" type="text" class="form-control" aria-required="true"
                                            aria-invalid="false" required>{{$keywords}}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="technical_specification">Technical Specification</label>
                                        <textarea id="technical_specification" name="technical_specification" type="text" class="form-control"
                                             aria-required="true" aria-invalid="false" required>{{$technical_specification}}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="uses">Uses</label>
                                        <textarea id="uses" name="uses" type="text" class="form-control" aria-required="true"
                                            aria-invalid="false" required>{{$uses}}</textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="warranty">Warranty</label>
                                        <textarea id="warranty" name="warranty" type="text" class="form-control" aria-required="true"
                                            aria-invalid="false" required>{{$warranty}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Product Images</label>
                                    <input id="image-uploadify" name="image" type="file" accept=".png,.jpeg,.jpg" multiple {{$image_reqired}}> @error('image')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" id="product_attr_box">
                            @php
                            $loop_count_num=1;
                            @endphp
                            @foreach($productAttrArr as $key=>$val)
                            @php
                            $loop_count_prev=$loop_count_num;
                            $pAArr=(array)$val;
                            @endphp
                            <input id="paid" value="{{$pAArr['id']}}" name="paid[]" type="hidden">

                            <div class="border border-3 p-4 rounded">
                                {{session('sku_error')}}
                                <h5 class="card-title">Product Attributes</h5>
                                <hr />
                                <div class="row g-3" id="product_attr_{{$loop_count_num++}}">
                                    <div class="col-md-6">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input id="sku" value="{{$pAArr['sku']}}" name="sku[]" type="text" class="form-control" aria-required="true"
                                            aria-invalid="false" placeholder="Enter SKU" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mrp" class="form-label">MRP</label>
                                        <input id="mrp" value="{{$pAArr['mrp']}}" name="mrp[]" type="text" class="form-control" aria-required="true"
                                            aria-invalid="false" placeholder="00.00" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="price" class="form-label">Price</label>
                                        <input id="price" value="{{$pAArr['price']}}" name="price[]" type="text" class="form-control" aria-required="true"
                                         aria-invalid="false" placeholder="00.00" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="qty" class="form-label">QTY</label>
                                        <input id="qty" value="{{$pAArr['qty']}}" name="qty[]" type="text" class="form-control" aria-required="true"
                                         aria-invalid="false" placeholder="QTY" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="size_id" class="form-label">Product Size</label>
                                        <select id="size_id" name="size_id[]" type="text" class="form-select" aria-required="true"
                                         aria-invalid="false">
                                            <option value="">Select Sizes</option>
                                            @foreach ($sizes as $list)
                                             @if($pAArr['size_id']==$list->id)
                                            <option value="{{$list->id}}" selected>{{$list->size}}</option>
                                            @else
                                            <option value="{{$list->id}}">{{$list->size}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="color_id" class="form-label">Product Color</label>
                                        <select id="color_id" name="color_id[]" type="text" class="form-select" aria-required="true"
                                         aria-invalid="false">
                                            <option value="">Select Colors</option>
                                            @foreach ($colors as $list)
                                            @if ($pAArr['color_id']==$list->id)
                                            <option value="{{$list->id}}" selected>{{$list->color}}</option>
                                            @else
                                            <option value="{{$list->id}}">{{$list->color}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="attr_image" class="form-label">Product Image</label>
                                        <input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true"
                                         aria-invalid="false" required>
                                         @if($pAArr['attr_image']!='')
                                         <img width="150px" src="{{asset('storage/media/'.$pAArr['attr_image'])}}">
                                         @endif
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            @if($loop_count_num==2)
                                                <button type="button" class="btn btn-primary btn-sm" onclick="add_more()">
                                                    <i class="bx bxs-plus-square"></i>Add Product Attr</button>
                                            @else
                                                   <a href="{{url('admin/product/product_attr_delete/')}}/{{$pAArr['id']}}/{{$id}}"><button type="button" class="btn btn-danger btn-sm"
                                                    onclick="remove_more({'{$loop_count_prev}'})">
                                                        <i class="bx bxs-minus-square"></i>Remove</button></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Save Product</button>
                                <input type="hidden" name="id" value="{{$id}}">
                            </div>
                        </div>
                    </div>
                    </form>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    })
</script>
<script>
    var loop_count=1;
    function add_more(){
        loop_count++;
        var html='<div class="border border-3 p-4 rounded"><div class="row g-3" id="product_attr_'+loop_count+'">';

        html+='<div class="col-md-6"><label for="sku" class="form-label">SKU</label><input id="sku" name="sku[]" type="text" class="form-control" aria-required="true"aria-invalid="false" placeholder="Enter SKU" required></div>';
        html+='<div class="col-md-6"><label for="mrp" class="form-label">MRP</label><input id="mrp" name="mrp[]" type="text" class="form-control" aria-required="true"aria-invalid="false" placeholder="Enter mrp" required></div>';
        html+='<div class="col-md-6"><label for="price" class="form-label">Price</label><input id="price" name="price[]" type="text" class="form-control" aria-required="true"aria-invalid="false" placeholder="Price" required></div>';
        html+='<div class="col-md-6"><label for="qty" class="form-label">QTY</label><input id="qty" name="qty[]" type="text" class="form-control" aria-required="true"aria-invalid="false" placeholder="QTY" required></div>';

        var size_id_html=jQuery('#size_id').html();
        size_id_html = size_id_html.replace("selected", "");
        html+='<div class="col-12"><label for="size_id" class="form-label">Size</label><select id="size_id" name="size_id[]" class="form-select">'+size_id_html+'</select></div>';


        var color_id_html=jQuery('#color_id').html();
        color_id_html = color_id_html.replace("selected", "");
        html+='<div class="col-12"><label for="color_id" class="form-label">Color</label><select id="color_id" name="color_id[]" class="form-select">'+color_id_html+'</select></div>';
        html+='<div class="col-12"><label for="attr_image" class="form-label">Image</label><input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true"aria-invalid="false" required></div>';

        html+='<div class="col-12"><div class="d-grid"><button type="button" class="btn btn-danger btn-sm" onclick=remove_more("'+loop_count+'")><i class="bx bxs-minus-square"></i>Remove</button></div></div>';

        html+='</div></div>';

        jQuery('#product_attr_box').append(html)

    }
    function remove_more(loop_count){
        jQuery('#product_attr_'+loop_count).remove();
    }
</script>

@if (session('sku_error'))
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
        title: '{{session('message')}}'
    })
    //swal("Good Job!","{{session('message')}}", "success");
</script>
@endif

@endsection

