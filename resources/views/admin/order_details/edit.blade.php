@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
@endsection
@section('content')
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE TITLE-->
	    <h1 class="page-title"> Order_detail
	        <small>Chỉnh sửa order_detail</small>
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
	                <span>Order_detail</span>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
                    <span>Chỉnh sửa</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span> {{$order_detail->order_id}} </span>
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
                                    <i class="fa fa-navicon"></i>Order_detail </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('order_details.update', $order_detail->id)}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                <input name="_method" type="hidden" value="PUT">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Discount</label>
                                            <div class="col-md-9">
                                                <input type="text" name="discount" placeholder="Discount" class="form-control" value="{{$order_detail->discount}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Order_id</label>
                                            <div class="col-md-9">
                                                <input type="text" name="order_id" placeholder="Order_id" class="form-control" value="{{$order_detail->order_id}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Product_id</label>
                                            <div class="col-md-9">
                                                <input type="text" name="product_id" placeholder="Product_id" class="form-control" value="{{$order_detail->product_id}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Price</label>
                                            <div class="col-md-9">
                                                <input type="text" name="price" placeholder="Price" class="form-control" value="{{$order_detail->price}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Quatity</label>
                                            <div class="col-md-9">
                                                <input type="text" name="quatity" placeholder="Quatity" class="form-control" value="{{$order_detail->quatity}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>        
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Subtotal</label>
                                            <div class="col-md-9">
                                                <input type="text" name="subtotal" placeholder="Subtotal" class="form-control" value="{{$order_detail->subtotal}}"/>
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
