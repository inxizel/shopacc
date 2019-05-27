<!doctype html>
<html lang="{{ \App::getLocale() }}">
<head>

    @include('layout::backend.head')

    @yield('style')
</head>
<body>
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="{{ route('layout.index') }}"><span>[</span>{{ env('APP_NAME') }}<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <div class="br-sideleft-menu">

            <label class="sidebar-label pd-x-15 mg-t-20">@lang('global.all')</label>
            <a href="{{ route('layout.index') }}" class="br-menu-link {{ request()->is('admin') ? 'active' : '' }}">
                <div class="br-menu-item">
                    <i class="fa fa-home tx-18" aria-hidden="true"></i>
                    <span class="menu-item-label">@lang('global.dashboard')</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <label class="sidebar-label pd-x-15 mg-t-20">@lang('global.modules')</label>
            @if( isset($menu_functions)) @foreach($menu_functions as $menu_function)
                <a href="/admin/{{$menu_function->name}}" class="br-menu-link {{ request()->is("admin/$menu_function->name*") ? 'active' : '' }}">
                    <div class="br-menu-item">
                        <i class="fa fa-code tx-16" aria-hidden="true"></i>
                        <span class="menu-item-label">{{ ucfirst($menu_function->display_name) }}</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
            @endforeach @endif

            <label class="sidebar-label pd-x-15 mg-t-20">@lang('global.managers')</label>

            {{-- @permission('customer-view')
                <a href="{{ route('customer.index') }}" class="br-menu-link {{ request()->is("admin/customer*") ? 'active' : '' }}">
                    <div class="br-menu-item">
                        <i class="fa fa-grav tx-16" aria-hidden="true"></i>
                        <span class="menu-item-label">{{ App\Models\Module::getDisplayName('customer') }}</span>
                    </div><!-- menu-item -->
                </a><!-- br-menu-link -->
            @endpermission --}}

            

            @permission('module-view')
            <a href="{{ route('module.index') }}" class="br-menu-link {{ request()->is("admin/module*") ? 'active' : '' }}">
                <div class="br-menu-item">
                    <i class="fa fa-tasks tx-16" aria-hidden="true"></i>
                    <span class="menu-item-label">{{ App\Models\Module::getDisplayName('module') }}</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            @endpermission

            <label class="sidebar-label pd-x-15 mg-t-20">@lang('global.plugins')</label>
            
            @permission('user-view')
            <a href="{{ route('user.index') }}" class="br-menu-link {{ request()->is("admin/user*") ? 'active' : '' }}">
                <div class="br-menu-item">
                    <i class="fa fa-user tx-22" aria-hidden="true"></i>
                    <span class="menu-item-label">{{ App\Models\Module::getDisplayName('user') }}</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            @endpermission
            @permission('role-view')
            <a href="{{ route('role.index') }}" class="br-menu-link {{ request()->is("admin/role*") ? 'active' : '' }}">
                <div class="br-menu-item">
                    <i class="fa fa-rocket tx-16" aria-hidden="true"></i>
                    <span class="menu-item-label">{{ App\Models\Module::getDisplayName('role') }}</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            @endpermission

         {{--    @permission('permission-view')
            <a href="{{ route('permission.index') }}" class="br-menu-link {{ request()->is("admin/permission*") ? 'active' : '' }}">
                <div class="br-menu-item">
                    <i class="fa fa-handshake-o tx-12" aria-hidden="true"></i>
                    <span class="menu-item-label">{{ App\Models\Module::getDisplayName('permission') }}</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            @endpermission --}}

           {{--  @permission('activity-log-view')
            <a href="{{ route('activity_log.index') }}" class="br-menu-link {{ request()->is("admin/activity_log*") ? 'active' : '' }}">
                <div class="br-menu-item">
                    <i class="fa fa-trophy tx-16" aria-hidden="true"></i>
                    <span class="menu-item-label">{{ App\Models\Module::getDisplayName('activity_log') }}</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            @endpermission

            @permission('system-log-view')
            <a href="{{ route('system_log.index') }}" class="br-menu-link {{ request()->is("admin/system_log*") ? 'active' : '' }}">
                <div class="br-menu-item">
                    <i class="fa fa-cog tx-16" aria-hidden="true"></i>
                    <span class="menu-item-label">{{ App\Models\Module::getDisplayName('system_log') }}</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            @endpermission --}}
        </div><!-- br-sideleft-menu -->

        <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    @include('layout::backend.nav')

    @include('layout::backend.contact')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('layout.index') }}">@lang('global.dashboard')</a>
                {{--<span class="breadcrumb-item active">Blank Page</span>--}}

                @yield('breadcrumb')
            </nav>
        </div><!-- br-pageheader -->

        @yield('pageheader')

        <div class="br-pagebody">

            <!-- start you own content here -->
            @yield('content')
        </div><!-- br-pagebody -->

        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2019. {{ env('APP_NAME')  }}.</div>
                <div>@author Laravel</div>
            </div>
            <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="https://www.facebook.com"><i class="fa fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="https://github.com"><i class="fa fa-github tx-20"></i></a>
            </div>
        </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    @include('layout::backend.script')

    @yield('script')
</body>
</html>
