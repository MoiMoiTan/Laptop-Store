<div id="wrapper.home-wrapper">
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <!-- Logo -->
        <div class="brand-logo">
            <a href="{{ route('home') }}">
                <i class="zmdi zmdi-laptop-mac logo-icon"></i>
                <h5 class="logo-text">Laptop Store</h5>
            </a>
        </div>

        <!-- Menu -->
        <ul class="sidebar-menu do-nicescroll">
            <li class="sidebar-header">ĐIỀU HƯỚNG CHÍNH</li>
            
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="zmdi zmdi-view-dashboard"></i> 
                    <span>Tổng quan</span>
                </a>
            </li>

            <li>
                <a href="{{ route('products.index') }}">
                    <i class="zmdi zmdi-laptop"></i> 
                    <span>Sản phẩm</span>
                </a>
            </li>

            <li>
                <a href="{{ route('categories.index') }}">
                    <i class="zmdi zmdi-format-list-bulleted"></i> 
                    <span>Danh mục</span>
                </a>
            </li>

            <li>
                <a href="{{ route('orders.index') }}">
                    <i class="zmdi zmdi-shopping-cart"></i> 
                    <span>Đơn hàng</span>
                    <small class="badge float-right badge-light">Mới</small>
                </a>
            </li>

            <li class="sidebar-header">QUẢN LÝ</li>

            <li>
                <a href="{{ route('customers.index') }}">
                    <i class="zmdi zmdi-accounts"></i> 
                    <span>Khách hàng</span>
                </a>
            </li>

            <li>
                <a href="{{ route('reports.index') }}">
                    <i class="zmdi zmdi-file-text"></i> 
                    <span>Báo cáo</span>
                </a>
            </li>

            <li class="sidebar-header">CÀI ĐẶT</li>

            <li>
                <a href="{{ route('profile') }}">
                    <i class="zmdi zmdi-account-circle"></i> 
                    <span>Hồ sơ</span>
                </a>
            </li>

            <li>
                <a href="{{ route('settings') }}">
                    <i class="zmdi zmdi-settings"></i> 
                    <span>Thiết lập</span>
                </a>
            </li>
        </ul>
    </div>
</div>