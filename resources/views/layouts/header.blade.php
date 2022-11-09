<header class="main-header">
    <!-- Logo -->
    <a href="/setting/lich-hen" class="logo">
        <!-- mini logo -->
        <b class="logo-mini">
            <span class="light-logo"><img src="{{url('images/logo-light.png')}}" alt="logo"></span>
            <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
        </b>
        <!-- logo-->
        <span class="logo-lg">
		  {{--<img src="../images/logo-light-text.png" alt="logo" class="light-logo">--}}
            {{--<img src="../images/logo-dark-text.png" alt="logo" class="dark-logo">--}}
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if(\Illuminate\Support\Facades\Auth::user())
                <li class="search-box">
                    <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
                    <form class="app-search" style="display: none;">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                </li>

                <!-- Okr -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-plus"></i>
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <li class="header"><b>Thêm mới</b></li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            {{--<ul class="menu">--}}
                            {{--<li class="mt-2">--}}
                            {{--<a href="{{route('okrs.okr.index')}}">--}}
                            {{--<i class="fa fa-users text-aqua"></i> <b>OKRs</b>--}}
                            {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="{{route('okrs.create-cfrs.index')}}">--}}
                            {{--<i class="fa fa-warning text-yellow"></i> <b>Phản hồi</b>--}}
                            {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="{{route('okrs.create-cfrs.index')}}">--}}
                            {{--<i class="fa fa-users text-red"></i> <b>Ghi nhận</b>--}}
                            {{--</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </li>
                    </ul>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../images/user5-128x128.jpg" class="user-image rounded-circle"
                             alt="User Image">
                    </a>
                    <ul class="dropdown-menu scale-up">
                        <!-- Menu Body -->
                        <li class="user-body">

                                <div class="col-12 text-left">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            <!-- /.row -->
                        </li>
                    </ul>
                </li>
                @endif
                <!-- Control Sidebar Toggle Button -->
                {{--<li>--}}
                {{--<a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </nav>
</header>