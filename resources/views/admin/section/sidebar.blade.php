<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar" style= "background : white; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2); height: 50vh;">
    <div id="sidebar-collapse" style="">
        <div class="admin-block d-flex">
            <div class="admin-info" style="color: black">
                <div class="font-strong" style="color: black">{{ auth()->user()->name }}</div>
                <small style="color: black">{{ ucfirst(auth()->user()->role) }}</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{ route(auth()->user()->role) }}"><i class="sidebar-item-icon fa fa-th-large" style="color: black"></i>
                    <span class="nav-label" style="color: black">Dashboard</span>
                </a>
            </li>
            <!-- <li class="heading" style="color: black">FEATURES</li> -->
            <li>
                <a class="" href="{{ route('banner.index') }}"><i class="sidebar-item-icon fa fa-image" style="color: black"></i>
                    <span class="nav-label" style="color: black">Banner Management</span>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('category.index') }}"><i class="sidebar-item-icon fa fa-sitemap" style="color: black"></i>
                    <span class="nav-label" style="color: black">Category Management</span>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('product.index') }}"><i class="sidebar-item-icon fa fa-shopping-bag" style="color: black"></i>
                    <span class="nav-label" style="color: black">Product Management</span>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('order.index') }}"><i class="sidebar-item-icon fa fa-tachometer" style="color: black"></i>
                    <span class="nav-label" style="color: black">Order Management</span>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('order.index') }}"><i class="sidebar-item-icon fa fa-ticket" style="color: black"></i>
                    <span class="nav-label" style="color: black">Coupon Management</span>
                </a>
            </li>
            <li>
                <a class="" href=""><i class="sidebar-item-icon fa fa-users" style="color: black"></i>
                    <span class="nav-label" style="color: black">Users Management</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
