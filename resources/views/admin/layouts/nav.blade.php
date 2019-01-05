
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
@include('admin.layouts.menue')
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('design/Adminlte')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{admin()->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class=" treeview">

          <li> <a href="{{aurl('')}}">
              <i class="fa fa-dashboard"></i> <span>{{trans('admin.dashboard')}}</span>
              <span class="pull-right-container">
            </span>
            </a>

        </li>


          <li> <a href="{{aurl('settings')}}">
                  <i class="fa fa-cogs"></i> <span>Setting</span>
                  <span class="pull-right-container">
            </span>
              </a>
          </li>

                <li class="treeview {{active_menu('admin')[0]}}">
          <a href="#">
            <i class="fa fa-users"></i> <span>{{trans('admin.admin')}}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu " style="{{active_menu('admin')[1]}}">
            <li class="active"><a href="{{aurl('admin')}}"><i class="fa fa-users"></i>{{trans('admin.admin')}}</a></li>
          </ul>
        </li>


        <li class="treeview {{active_menu('users')[0]}}">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  style="{{active_menu('users')[1]}}">
            <li class="active"><a href="{{aurl('users')}}"><i class="fa fa-users"></i>Users Accounts</a></li>
            <li class=""><a href="{{aurl('users')}}?level=user"><i class="fa fa-users"></i>User</a></li>
            <li class=""><a href="{{aurl('users')}}?level=vendor"><i class="fa fa-users"></i>Vendor</a></li>
            <li class=""><a href="{{aurl('users')}}?level=company"><i class="fa fa-users"></i>Company</a></li>
          </ul>
        </li>



          <li class="treeview {{active_menu('departments')[0]}}">
              <a href="#">
                  <i class="fa fa-list"></i> <span>Departments</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('departments')[1]}}">
                  <li class=""><a href="{{aurl('departments')}}"><i class="fa fa-list"></i>Departments</a></li>
                  <li class=""><a href="{{aurl('departments/create')}}"><i class="fa fa-plus"></i>Add Departments</a></li>

              </ul>
          </li>


          <li class="treeview {{active_menu('products')[0]}}">
              <a href="#">
                  <i class="fa fa-product-hunt"></i> <span>Products</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('products')[1]}}">
                  <li class=""><a href="{{aurl('products')}}"><i class="fa fa-product-hunt"></i>Products</a></li>
                  <li class=""><a href="{{aurl('products/create')}}"><i class="fa fa-plus"></i>Add Product</a></li>

              </ul>
          </li>

          <li class="treeview {{active_menu('programmers')[0]}}">
              <a href="#">
                  <i class="fa fa-product-hunt"></i> <span>programmers</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu"  style="{{active_menu('programmers')[1]}}">
                  <li class=""><a href="{{aurl('programmers')}}"><i class="fa fa-product-hunt"></i>programmers</a></li>
                  <li class=""><a href="{{aurl('programmers/create')}}"><i class="fa fa-plus"></i>Add programmers</a></li>

              </ul>
          </li>

</ul>
    </section>
    <!-- /.sidebar -->
  </aside>
