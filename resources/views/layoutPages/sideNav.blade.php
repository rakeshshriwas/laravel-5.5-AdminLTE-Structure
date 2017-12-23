<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ $active_link == 'dashboard' ? 'active' : '' }}"><a href="{{ 'dashboard' }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="{{ $active_link == 'task' ? 'active' : '' }}"><a href="{{ 'task' }}"><i class="fa fa-link"></i> <span>Task</span></a></li>
            <li class="{{ $active_link == 'profile' ? 'active' : '' }}"><a href="{{ 'profile' }}"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li class="{{ $active_link == 'settings' ? 'active' : '' }}"><a href="{{ 'settings' }}"><i class="fa fa-gear"></i> <span>Settings</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>