@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
@endsection
@section('content')
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE TITLE-->
	    <h1 class="page-title"> Phản hồi
	        <small>Thêm mới phản hồi</small>
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
	                <span>Phản hồi</span>
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
                                    <i class="fa fa-navicon"></i>Phản hồi </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('contacts.store')}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Khách hàng</label>
                                            <div class="col-md-9">
                                                <input type="text" name="user_id" placeholder="Khách hàng" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Sản phẩm</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="product_id">
                                                    @foreach ($products as $product)
                                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Đánh giá</label>
                                            <div class="col-md-9">
                                                <input type="text" name="rating" placeholder="Đánh giá" class="form-control" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>                                  
                                         <div class="form-group">
                                            <label class="control-label col-md-3">Nội dung</label>
                                            <div class="col-md-9">
                                                <input type="text" name="content" placeholder="Nội dung" class="form-control" />
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
                                                        <a href="{{route('reviews.index')}}" class="btn default">Quay lại</a>
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
