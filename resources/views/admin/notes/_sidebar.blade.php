<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                        <span>thêm mới</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="ri-brush-line"></i>
                        <span>Ghi chú</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.coupons.index') }}">Danh sách Coupon</a></li>
                        <li><a href="{{ route('admin.coupons.create') }}">Thêm mới Coupon</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
