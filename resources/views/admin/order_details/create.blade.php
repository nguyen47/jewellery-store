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
                                    <i class="fa fa-navicon"></i>Chi tiết đơn hàng </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('order_details.store')}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Khách hàng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="order_id" placeholder="Khách hàng" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Sản phẩm</label>
                                            <div class="col-md-9">
                                                <input type="text" name="product_id" placeholder="Sản phẩm" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>                                  
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Giá</label>
                                            <div class="col-md-9">
                                                <input type="text" name="price" placeholder="Giá" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Số lượng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="quatity" placeholder="Số lượng" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Chiết khấu</label>
                                            <div class="col-md-9">
                                                <input type="text" name="discount" placeholder="Chiết khấu" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tổng tính</label>
                                            <div class="col-md-9">
                                                <input type="text" name="subtotal" placeholder="Tổng tính" class="form-control" />
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
