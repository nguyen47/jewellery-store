@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
@endsection
@section('content')
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE TITLE-->
	    <h1 class="page-title"> Đơn hàng
	        <small>Thêm mới đơn hàng</small>
	    </h1>
	    <!-- END PAGE TITLE-->
	    <!-- BEGIN PAGE BAR -->
	    <div class="page-bar">
	        <ul class="page-breadcrumb">
	            <li>
                    <span>Trang chủ</span>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
	                <span>Đơn hàng</span>
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
                                    <i class="fa fa-navicon"></i>Đơn hàng </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('orders.store')}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                         <div class="form-group">
                                            <label class="control-label col-md-3">Khách hàng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="Người dùng" placeholder="User_id" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>                             
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Ngày giao hàng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="delivery_date" placeholder="Ngày giao hàng" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Trạng thái</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="status">
                                                    <option value="1">Hiển Thị</option>
                                                    <option value="0">Ẩn</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mô tả</label>
                                            <div class="col-md-9">
                                                <input type="text" name="description" placeholder="Mô tả" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>                                  
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Địa chỉ giao hàng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="shipping_address" placeholder="Địa chỉ giao hàng" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Hình thức thanh toán</label>
                                            <div class="col-md-9">
                                                <input type="text" name="payment_type" placeholder="Hình thức thanh toán" class="form-control" />
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
