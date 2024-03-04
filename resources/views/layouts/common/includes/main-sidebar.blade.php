<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- Start Dashboard Link -->
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            {{ trans('dashboard/dashboard.dashboard') }}
                        </a>
                    </li>
                    <!-- End Dashboard Link -->

                    <!-- Start Admin Managment Menu-->
                    <li class="pl-4 mt-10 mb-10 font-medium text-muted menu-title">{{ trans('dashboard/dashboard.sliders') }}</li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#sliders_managment">
                            <div class="pull-left">
                                <i class="ti-palette"></i>
                                <span class="right-nav-text">{{ trans('dashboard/dashboard.sliders') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="sliders_managment" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('sliders.index')}}">{{ trans('dashboard/dashboard.sliders') }}</a></li>
                        </ul>
                    </li>
                    <!-- End Admin Managment Menu-->
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================