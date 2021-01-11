<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('sector.list')); ?>">
            <i class="fa fa-files-o"></i>
            <span>Sector Managemnt </span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">5</span>
            </span>
          </a>

        </li>
        <li>
          <a href="<?php echo e(route('productcategories.list')); ?>">
            <i class="fa fa-th"></i> <span>Product Categories</span>
            <span class="pull-right-container">
              <small class="fa fa-angle-left pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('productsubcategories.list')); ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Products Sub-Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Manufacturers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
         <li class="">
          <a href="#">
            <i class="fa fa-table"></i> <span>Add Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

    
    </section>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH C:\xampp\htdocs\project\resources\views/backend/partials/sidebar.blade.php ENDPATH**/ ?>