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
	        <small>Thêm mới order</small>
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
                    <span>Chi Tiết</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>{{$order->delivery_date}}</span>
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
                                    <i class="fa fa-navicon"></i>Order</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" method="POST" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Delivery_date</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order->delivery_date}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Status</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order->status}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Description</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order->description}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Shipping_address</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order->shipping_address}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Payment_type</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order->payment_type}}  </p>
                                            </div>
                                        </div>     
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">User_id</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order->user_id}}  </p>
                                            </div>
                                        </div>                               
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
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
