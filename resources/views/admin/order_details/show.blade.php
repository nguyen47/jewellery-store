@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
@endsection
@section('content')
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE TITLE-->
	    <h1 class="page-title"> Chi tiết đơn hàng
	        <small>Thêm mới chi tiết đơn hàng</small>
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
	                <span>Chi tiết đơn hàng</span>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
                    <span>Chi Tiết</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span> {{$order_detail->orders->users->fullname}} </span>
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
                                    <i class="fa fa-navicon"></i>Chi tiết đơn hàng</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" method="POST" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Khách hàng</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order_detail->orders->users->fullname}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Sản phẩm</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order_detail->products->name}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Giá</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order_detail->price}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Số lượng</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order_detail->quatity}}  </p>
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Chiết khấu</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order_detail->discount}}  </p>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tổng tính</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$order_detail->subtotal}}  </p>
                                            </div>
                                        </div>                               
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="{{route('order_details.index')}}" class="btn default">Quay lại</a>
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
