<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="<?= base_url('dashboard') ?>" class="site_title"><i class="fa fa-paw"></i> <span>Codegniter Project</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="<?= base_url('assets/gentelella/images/img.jpg') ?>" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>Mirian</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?= base_url('form/advanced') ?>">Advanced Components</a></li>
                <li><a href="<?= base_url('form/validation') ?>">Form Validation</a></li>
                <li><a href="<?= base_url('form/upload') ?>">Form Upload</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?= base_url('element') ?>">General Elements</a></li>
                <li><a href="<?= base_url('element/media') ?>">Media Gallery</a></li>
                <li><a href="<?= base_url('element/widgets') ?>">Widgets</a></li>
                <li><a href="<?= base_url('element/calendar') ?>">Calendar</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?= base_url('tables') ?>">Tables</a></li>
                <li><a href="<?= base_url('tables/dynamic') ?>">Table Dynamic</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('login') ?>">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
</div>