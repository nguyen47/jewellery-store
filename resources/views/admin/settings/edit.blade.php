@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
@endsection
@section('content')
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	    <!-- BEGIN PAGE HEADER-->
	    <!-- BEGIN PAGE TITLE-->
	    <h1 class="page-title"> About Us
	        <small>Chỉnh sửa about us</small>
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
	                <span>About Us</span>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
                    <span>Chỉnh sửa</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span> {{$setting->name}} </span>
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
                                    <i class="fa fa-navicon"></i>About Us </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('settings.edit', $setting->id)}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                <input name="_method" type="hidden" value="PUT">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" placeholder="Name" class="form-control" value="{{$setting->name}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Operation_hours</label>
                                            <div class="col-md-9">
                                                <input type="text" name="operation_hours" placeholder="Operation_hours" class="form-control" value="{{$setting->operation_hours}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" name="address" placeholder="Address" class="form-control" value="{{$setting->address}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Phone_number</label>
                                            <div class="col-md-9">
                                                <input type="text" name="phone_number" placeholder="Phone_number" class="form-control" value="{{$setting->phone_number}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" name="email" placeholder="Email" class="form-control" value="{{$setting->email}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Facebook</label>
                                            <div class="col-md-9">
                                                <input type="text" name="facebook" placeholder="Facebook" class="form-control" value="{{$setting->facebook}}"/>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>        
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Instagram</label>
                                            <div class="col-md-9">
                                                <input type="text" name="instagram" placeholder="Instagram" class="form-control" value="{{$setting->instagram}}"/>
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
                                                        <a href="{{route('settings.edit')}}" class="btn default">Quay lại</a>
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
