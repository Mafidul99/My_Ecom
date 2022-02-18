@extends('admin.layouts.admin')
@section('title') {{'Dashboard'}} @endsection
@section('container')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-lg-4">
            <div class="col">
                <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Total Orders</p>
                                <h5 class="mb-0 text-white">867</h5>
                            </div>
                            <div class="ms-auto text-white"><i class='bx bx-cart font-30'></i>
                            </div>
                        </div>
                        <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 46%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden bg-gradient-burning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Total Income</p>
                                <h5 class="mb-0 text-white">$52,945</h5>
                            </div>
                            <div class="ms-auto text-white"><i class='bx bx-wallet font-30'></i>
                            </div>
                        </div>
                        <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Total Users</p>
                                <h5 class="mb-0 text-white">24.5K</h5>
                            </div>
                            <div class="ms-auto text-white"><i class='bx bx-bulb font-30'></i>
                            </div>
                        </div>
                        <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 68%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden bg-gradient-moonlit">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Comments</p>
                                <h5 class="mb-0 text-white">869</h5>
                            </div>
                            <div class="ms-auto text-white"><i class='bx bx-chat font-30'></i>
                            </div>
                        </div>
                        <div class="progress  bg-white-2 radius-10 mt-4" style="height:4.5px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 66%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class="card radius-10">
            <div class="card-header border-bottom-0 bg-transparent">
                <div class="d-lg-flex align-items-center">
                    <div>
                        <h6 class="font-weight-bold mb-2 mb-lg-0">Monthly Revenue</h6>
                    </div>
                    <div class="ms-lg-auto mb-2 mb-lg-0">
                        <div class="btn-group-round">
                            <div class="btn-group">
                                <button type="button" class="btn btn-white">Day</button>
                                <button type="button" class="btn btn-white">Week</button>
                                <button type="button" class="btn btn-white">Month</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary radius-10 ms-lg-3">Download CSV</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="chart1"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card radius-10">
                    <div class="card-header border-bottom-0 bg-transparent">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-2 mb-lg-0">Historical Analytics</h6>
                            </div>
                            <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center ms-auto font-13 gap-2">
                            <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle text-danger me-1"></i>Visitors</span>
                            <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle text-success me-1"></i>Chats</span>
                            <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle text-info me-1"></i>Page Views</span>
                        </div>
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card radius-10 bg-primary">
                    <div class="card-body">
                        <h6 class="text-white">Active Visitors</h6>
                        <h4 class="font-weight-bold text-white">3467</h4>
                        <p class="font-13 text-white">Page view per minute</p>
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
@endsection
