 @unless (Auth::guest())
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                <i class="fa fa-folder-open"></i>
                <span>Posts</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ action('PostsController@index') }}"><i class="fa fa-inbox"></i>Current Posts</a></li>
                    <li><a href="{{ action('PostsController@create') }}"><i class="fa fa-archive"></i>New Post</a></li>
                </ul>
            </li>
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@endunless