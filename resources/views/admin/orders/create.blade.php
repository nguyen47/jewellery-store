@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
@endsection
@section('content')
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE TITLE-->
	    <h1 class="page-title"> Order
	        <small>Thêm mới oder</small>
	    </h1>
	    <!-- END PAGE TITLE-->
	    <!-- BEGIN PAGE BAR -->
	    <div class="page-bar">
	        <ul class="page-breadcrumb">
	            <li>
	                <a href="index.html">Trang chủ</a>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
	                <span>Order</span>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
	                <span>Thêm mới</span>
	            </li>
	        </ul>
	    </div>
	    <!-- END PAGE BAR -->
	    <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line boxless tabbable-reversed">
                    <div class="tab-pane">
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-navicon"></i>Order </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('orders.store')}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Delivery_date</label>
                                            <div class="col-md-9">
                                                <input type="text" name="delivery_date" placeholder="Delivery_date" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Status</label>
                                            <div class="col-md-9">
                                                <input type="text" name="status" placeholder="Status" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Description</label>
                                            <div class="col-md-9">
                                                <input type="text" name="description" placeholder="Description" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>                                  
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Shipping_address</label>
                                            <div class="col-md-9">
                                                <input type="text" name="shipping_address" placeholder="Shipping_address" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Payment_type</label>
                                            <div class="col-md-9">
                                                <input type="text" name="payment_type" placeholder="Payment_type" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="control-label col-md-3">User_id</label>
                                            <div class="col-md-9">
                                                <input type="text" name="user_id" placeholder="User_id" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green">
                                                            <i class="fa fa-check"></i> Gửi</button>
                                                        <a href="{{route('orders.index')}}" class="btn default">Quay lại</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- END CONTENT BODY -->
</div>
@endsection
@section('js-page-level-plugin')
@endsection
@section('script')
@endsection
