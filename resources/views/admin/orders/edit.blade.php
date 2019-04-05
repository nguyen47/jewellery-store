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
	        <small>Chỉnh sửa đơn hàng</small>
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
                    <span>Chỉnh sửa</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span> {{$order->delivery_date}} </span>
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
                                <form action="{{route('orders.update', $order->id)}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                <input name="_method" type="hidden" value="PUT">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Khách hàng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="user_id" placeholder="Khách hàng" class="form-control" value="{{$order->users->fullname}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>                                  
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Ngày giao hàng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="delivery_date" placeholder="Ngày giao hàng" class="form-control" value="{{$order->delivery_date}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Trạng thái</label>
                                            <div class="col-md-9">
                                            <select class="form-control" name="status">
                                                    @if ($order->status == 1)
                                                        <option value="1" selected >Hiển Thị</option>
                                                        <option value="0">Ẩn</option>
                                                    @else
                                                        <option value="1" >Hiển Thị</option>
                                                        <option value="0" selected >Ẩn</option>
                                                    @endif
                                                </select>           
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mô tả</label>
                                            <div class="col-md-9">
                                                <input type="text" name="description" placeholder="Mô tả" class="form-control" value="{{$order->description}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Địa chỉ giao hàng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="shipping_address" placeholder="Địa chỉ giao hàng" class="form-control" value="{{$order->shipping_address}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Hình thức thanh toán</label>
                                            <div class="col-md-9">
                                                <input type="text" name="payment_type" placeholder="Hình thức thanh toán" class="form-control" value="{{$order->payment_type}}"/>
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
