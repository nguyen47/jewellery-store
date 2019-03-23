@extends('admin.layouts.masterLayout')
@section('css-page-level-plugin')
<link href="{{asset('assets/admin/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> Menu
            <small>Danh sách menu</small>
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
                    <span>Menu</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-navicon font-dark"></i>
                            <span class="caption-subject bold uppercase"> Menu</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{route('categories.create')}}" id="sample_editable_1_new" class="btn sbold green"> Thêm mới
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Tên </th>
                                    <th> Hình Ảnh </th>
                                    <th> Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="odd gradeX">
                                        <td> {{$category->id}} </td>
                                        <td> {{$category->name}} </td>
                                        <td>
                                            <img src="{{asset('images') .  '/' .$category->image}}" width="80" height="50" /> 
                                        </td>
                                        <td>
                                            <a href="{{route('categories.edit', $category->slug)}}" class="btn green">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{route('categories.show', $category->slug)}}" class="btn purple">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a class="btn red" data-toggle="confirmation" data-popout="true" data-original-title="Bạn có chắc không ?" href="{{route('categories.destroy', $category->slug)}}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection
@section('js-page-level-plugin')
<script src="{{asset('assets/admin/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
@endsection
@section('js-page-level-script')
<script src="{{asset('assets/admin/assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
@endsection
@section('script')
@endsection
