@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'comunicados' ? 'active' : '' }}">
                <a href="{{ route('admin.comunicados.index') }}">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    <span class="title">Comunicados</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'entrevista' ? 'active' : '' }}">
                <a href="{{ route('admin.entrevista.index') }}">
                    <i class="glyphicon glyphicon-list-alt"></i>
                    <span class="title">Entrevista</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'fotografia' ? 'active' : '' }}">
                <a href="{{ route('admin.fotografia.index') }}">
                    <i class="fa fa-photo"></i>
                    <span class="title">Fotografía</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'noticias' ? 'active' : '' }}">
                <a href="{{ route('admin.noticias.index') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Noticias</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'videos' ? 'active' : '' }}">
                <a href="{{ route('admin.videos.index') }}">
                    <i class="glyphicon glyphicon-expand"></i>
                    <span class="title">Videos</span>
                </a>
            </li>



            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
