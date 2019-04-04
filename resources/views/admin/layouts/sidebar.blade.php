<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="nav-item start ">
            <a href="" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="heading">
            <h3 class="uppercase">Danh mục</h3>
        </li>
        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-navicon"></i>
                <span class="title">Menu</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link ">
                        <span class="title">Danh sách</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('categories.create')}}" class="nav-link ">
                        <span class="title">Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-navicon"></i>
                <span class="title">Sản phẩm</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link ">
                        <span class="title">Danh sách</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('products.create')}}" class="nav-link ">
                        <span class="title">Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-navicon"></i>
                <span class="title">Người dùng</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link ">
                        <span class="title">Danh sách</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('users.create')}}" class="nav-link ">
                        <span class="title">Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-navicon"></i>
                <span class="title">Đơn hàng</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('orders.index')}}" class="nav-link ">
                        <span class="title">Danh sách</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('orders.create')}}" class="nav-link ">
                        <span class="title">Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-navicon"></i>
                <span class="title">Chi tiết đơn hàng</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('order_details.index')}}" class="nav-link ">
                        <span class="title">Danh sách</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('order_details.create')}}" class="nav-link ">
                        <span class="title">Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-navicon"></i>
                <span class="title">Banner</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{route('banners.index')}}" class="nav-link ">
                        <span class="title">Danh sách</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('order_details.create')}}" class="nav-link ">
                        <span class="title">Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li>
    <!-- END SIDEBAR MENU -->
</div>
