@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
@endsection
@section('content')
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE TITLE-->
	    <h1 class="page-title"> Sản Phẩm
	        <small>Thêm mới sản phẩm</small>
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
	                <span>Sản phẩm</span>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
                    <span>Chi Tiết</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>{{$product->name}}</span>
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
                                    <i class="fa fa-navicon"></i>Sản phẩm</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" method="POST" class="form-horizontal form-bordered">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Tên Sản phẩm</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$product->name}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Giá</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$product->price}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Chiết khấu</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$product->discount}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Kích cỡ</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$product->size}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Số lượng</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$product->stock}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Danh mục</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$product->categories->name}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Mã sản phẩm</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static">  {{$product->product_code}}  </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Trạng thái</label>
                                            <div class="col-md-9">
                                                @if ($product->status == 1) 
                                                    <p class="form-control-static">  Hiện  </p>
                                                @else
                                                    <p class="form-control-static">  Ẩn  </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Mô tả</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> {{$product->description}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Hình Ảnh</label>
                                            <div class="col-md-9">
                                                <p class="form-control-static"> <img height="150" width="240" src="{{asset('images') .'/' . $product->image}}" /> </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="{{route('products.index')}}" class="btn default">Quay lại</a>
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
