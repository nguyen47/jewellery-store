@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
@endsection
@section('content')
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE TITLE-->
	    <h1 class="page-title"> Liên hệ
	        <small>Chỉnh sửa liên hệ</small>
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
	                <span>Liên hệ</span>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
                    <span>Chỉnh sửa</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span> {{$contact->name}} </span>
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
                                    <i class="fa fa-navicon"></i>Liên hệ </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('contacts.update', $contact->id)}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                <input name="_method" type="hidden" value="PUT">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Họ tên</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" placeholder="Họ tên" class="form-control" value="{{$contact->name}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Số điện thoại</label>
                                            <div class="col-md-9">
                                                <input type="text" name="phone_number" placeholder="Số điện thoại" class="form-control" value="{{$contact->phone_number}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Thư điện tử</label>
                                            <div class="col-md-9">
                                                <input type="text" name="email" placeholder="Thư điện tử" class="form-control" value="{{$contact->email}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Địa chỉ</label>
                                            <div class="col-md-9">
                                                <input type="text" name="address" placeholder="Địa chỉ" class="form-control" value="{{$contact->address}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Nội dung</label>
                                            <div class="col-md-9">
                                                <input type="text" name="content" placeholder="Nội dung" class="form-control" value="{{$contact->content}}"/>
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
                                                        <a href="{{route('contacts.index')}}" class="btn default">Quay lại</a>
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
