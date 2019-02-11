    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Overview</span>
        </a>
      </li>
      <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-boxes"></i>
          <span>Products</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <!-- <h6 class="dropdown-header">Login Screens:</h6> -->
          <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">New Product</a>
		  <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List Product</a>
          <!-- <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a> -->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-cog"></i>
          <span>Settings</span></a>
      </li>
    </ul>