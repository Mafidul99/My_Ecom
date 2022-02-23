<ul class="metismenu" id="menu">
    <li>
        <a href="{{url('admin/dashboard')}}">
            <div class="parent-icon"><i class='bx bx-home'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-spa' ></i>
            </div>
            <div class="menu-title">Category</div>
        </a>
        <ul>
            <li> <a href="{{url('admin/category')}}">
                <i class="bx bx-right-arrow-alt"></i>View</a>
            </li>
            <li> <a href="{{url('admin/category/manage_category')}}">
                <i class="bx bx-right-arrow-alt"></i>Add Category</a>
            </li>
        </ul>
    </li>
    <li class="menu-label">eCommerce</li>
    <li>
        <a href="#" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-cart-alt' ></i>
            </div>
            <div class="menu-title">eCommerce</div>
        </a>
        <ul>
            <li> <a href="{{url('admin/product')}}">
                <i class="bx bx-right-arrow-alt"></i>Products</a>
            </li>
            <li> <a href="{{url('admin/size')}}">
                <i class="bx bx-right-arrow-alt"></i>Size</a>
            </li>
            <li> <a href="{{url('admin/color')}}">
                <i class="bx bx-right-arrow-alt"></i>Color</a>
            </li>
            <li> <a href="{{url('admin/brand')}}">
                <i class="bx bx-right-arrow-alt"></i>Brand</a>
            </li>
            <li> <a href="{{url('admin/product/manage_product')}}">
                <i class="bx bx-right-arrow-alt"></i>Add New Products</a>
            </li>
        </ul>
    </li>
    <li class="menu-label">All Orders</li>
    <li>
        <a href="#" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-gift' ></i>
            </div>
            <div class="menu-title">Orders</div>
        </a>
        <ul>
            <li> <a href="{{url('admin/order')}}">
                <i class="bx bx-right-arrow-alt"></i>Orders List</a>
            </li>
        </ul>
    </li>
    <li class="menu-label">Coupon</li>
    <li>
        <a href="#" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-purchase-tag-alt" ></i>
            </div>
            <div class="menu-title">All Coupon</div>
        </a>
        <ul>
            <li> <a href="{{url('admin/coupon')}}">
                <i class="bx bx-right-arrow-alt"></i>View Coupon</a>
            </li>
            <li> <a href="{{url('admin/coupon/manage_coupon')}}">
                <i class="bx bx-right-arrow-alt"></i>Add Coupon</a>
            </li>
        </ul>
    </li>

</ul>
