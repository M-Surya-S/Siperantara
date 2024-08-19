<div class="reallow-sidebar">
    <div class="sidebar-logo-wrap d-flex justify-content-between align-items-center">
        <div class="logo-details">
            <a href="{{ url('/dashboard') }}">
                <img src="{{ asset('assets/images/logo/logo_siperantara.png') }}" alt="logo not found">
            </a>
        </div>
    </div>
    <div class="reallow-sidebar-inner">
        <div class="sidebar-nav">
            <ul>
                <li><a href="{{ url('/dashboard') }}"><span><i class="fa-sharp fa-light fa-table-columns"></i></span>Dashboard</a></li>
                <li><a href="{{ url('/dashboard/my-property') }}"><span><i class="fa-sharp fa-light fa-house-building"></i></span>My Property</a></li>
                <li><a href="{{ url('/dashboard/add-property') }}"><span><i class="fa-sharp fa-light fa-building-circle-arrow-right"></i></span>Add Property</a></li>
                <li><a href="{{ url('/dashboard/my-agent') }}"><span><i class="fa-sharp fa-light fa-building-circle-arrow-right"></i></span>Agent</a></li>
                <li><a href="{{ url('/dashboard/add-agent') }}"><span><i class="fa-sharp fa-light fa-building-circle-arrow-right"></i></span>Add Agent</a></li>
                <li><a href="{{ url('/dashboard/my-blog') }}"><span><i class="fa-sharp fa-light fa-building-circle-arrow-right"></i></span>My Blog</a></li>
                <li><a href="{{ url('/dashboard/add-blog') }}"><span><i class="fa-sharp fa-light fa-building-circle-arrow-right"></i></span>Add Blog</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle"><span><i class="fa-sharp fa-light fa-building-circle-arrow-right"></i></span>Customer</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/dashboard/sell-property') }}">Sell</a></li>
                        <li><a href="{{ url('/dashboard/join-agent') }}">Join Agent</a></li>
                        <li><a href="{{ url('/dashboard/download-guide') }}">Download Guide</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="app-offcanvas-overlay"></div>
