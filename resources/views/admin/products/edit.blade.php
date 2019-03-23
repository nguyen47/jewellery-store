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
	        <small>Chỉnh sửa sản phẩm</small>
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
	                <span>Sản Phẩm</span>
	                <i class="fa fa-angle-right"></i>
	            </li>
	            <li>
                    <span>Chỉnh sửa</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span> {{$product->name}} </span>
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
                                    <i class="fa fa-navicon"></i>Sản phẩm </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="{{route('products.update', $product->slug)}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                <input name="_method" type="hidden" value="PUT">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tên sản phẩm</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" placeholder="Tên danh mục" class="form-control" value="{{$product->name}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Price</label>
                                            <div class="col-md-9">
                                                <input type="text" name="price" placeholder="price" class="form-control" value="{{$product->price}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Discount</label>
                                            <div class="col-md-9">
                                                <input type="text" name="discount" placeholder="Discount" class="form-control" value="{{$product->discount}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Size</label>
                                            <div class="col-md-9">
                                                <input type="text" name="size" placeholder="Size" class="form-control" value="{{$product->size}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Stock</label>
                                            <div class="col-md-9">
                                                <input type="text" name="stock" placeholder="stock" class="form-control" value="{{$product->stock}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Category_id</label>
                                            <div class="col-md-9">
                                                <input type="text" name="category_id" placeholder="category_id" class="form-control" value="{{$product->category_id}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Product_code</label>
                                            <div class="col-md-9">
                                                <input type="text" name="product_code" placeholder="product_code" class="form-control" value="{{$product->product_code}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Status</label>
                                            <div class="col-md-9">
                                                <input type="text" name="status" placeholder="Status" class="form-control" value="{{$product->status}}" />
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mô tả</label>
                                            <div class="col-md-9">
                                                <textarea name="description" rows="5" placeholder="Mô tả" class="form-control">{{$product->description}}</textarea>
                                                {{-- <span style="color: red"> Error </span> --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Hình ảnh</label>
                                            <div class="col-md-9">
                                                <input type="file" name="image" id="exampleInputFile">
                                                <br>
                                                <img height="150" width="240" src="{{asset('images') .'/' . $product->image}}" />
                                                <p class="help-block"> some help text here. </p>
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
