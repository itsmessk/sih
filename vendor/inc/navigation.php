</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-blue shadow bg-grey elevation-4 sidebar-no-expand">
  <!-- Brand Logo -->
  <a href="<?php echo base_url ?>admin" class="brand-link bg-grey text-sm">
    <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Store Logo"
      class="brand-image img-circle elevation-3" style="width: 1.7rem;height: 1.7rem;max-height: unset">
    <span class="brand-text font-weight-dark" style="font-size: larger;">
      <?php echo $_settings->info('short_name') ?>
    </span>
  </a>
  <!-- Sidebar -->
  <div
    class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
    <div class="os-resize-observer-host observed">
      <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
    </div>
    <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
      <div class="os-resize-observer"></div>
    </div>
    <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
    <div class="os-padding">
      <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
          <!-- Sidebar user panel (optional) -->
          <div class="clearfix"></div>
          <!-- Sidebar Menu -->
          <nav class="mt-4">
            <ul
              class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child"
              data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item dropdown">
                <a href="./" class="nav-link nav-home">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-header">Procurement Management</li>


              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=procurement" class="nav-link nav-procurement">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>
                    Create & Manage
                  </p>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=category" class="nav-link nav-category">
                  <i class="nav-icon fas fa-th-list"></i>
                  <p>
                    Category List
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=product" class="nav-link nav-product">
                  <i class="nav-icon fas fa-box"></i>
                  <p>
                    Product List
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=service" class="nav-link nav-service">
                  <i class="nav-icon fas fa-hands-helping"></i>
                  <p>
                    Service List
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=items" class="nav-link nav-items">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p>
                    Item List
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=purchase_orders" class="nav-link nav-purchase_orders">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>
                    Purchase Orders
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=reports" class="nav-link nav-reports">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Reports
                  </p>
                </a>
              </li>
              <li class="nav-header">Payment Management</li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=payment" class="nav-link nav-payment">
                  <i class="nav-icon fas fa-box"></i>
                  <p>
                    Create Record
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=payments" class="nav-link nav-payments">
                  <i class="nav-icon fas fa-truck-loading"></i>
                  <p>
                  History/ Manage
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=payment_invoice" class="nav-link nav-payment_invoice">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>
                    Upload Invoice
                  </p>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=payment_workflow" class="nav-link nav-payment_workflow">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Approval Workflow/ Status
                  </p>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=payment_schedule" class="nav-link nav-payment_schedule">
                  <i class="nav-icon fas fa-box"></i>
                  <p>
                    Schedules
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=payment_auth" class="nav-link nav-payment_auth">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                  Paying Authority
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=buyer" class="nav-link nav-buyer">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>
                  Buyer Details
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=consignee" class="nav-link nav-consignee">
                  <i class="nav-icon fas fa-truck-loading"></i>
                  <p>
                  Consignee Details
                  </p>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=payment_report" class="nav-link nav-payment_report">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Reports
                  </p>
                </a>
              </li>
              <li class="nav-header">Vendor Management</li>
              <li class="nav-item">
                <a href="./?page=vendor_manage" class="nav-link nav-vendor_manage">
                  <i class="nav-icon fas fa-box"></i>
                  <p>Manage Vendor</p>
                </a>
              </li>
              

              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=suppliers" class="nav-link nav-suppliers">
                  <i class="nav-icon fas fa-truck-loading"></i>
                  <p>
                    Supplier List
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=vendor_approval" class="nav-link nav-vendor_approval">
                  <i class="nav-icon fas fa-boxes"></i>
                  <p>
                    Approve Vendor
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=vendor_comm" class="nav-link nav-vendor_comm">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>
                    Communicate with Vendor
                  </p>
                </a>
              </li>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=report_vendor" class="nav-link nav-report_vendor">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>
                    Reports
                  </p>
                </a>
              </li>
              <?php if ($_settings->userdata('type') == 1): ?>
                <li class="nav-header">Maintenance</li>
                <li class="nav-item dropdown">
                  <a href="<?php echo base_url ?>admin/?page=user/list" class="nav-link nav-user_list">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      User List
                    </p>
                  </a>
                </li>

              <?php endif; ?>
              <li class="nav-header">Analytics</li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url ?>admin/?page=analytics_reports" class="nav-link nav-analytics_reports">
                  <i class="nav-icon fas fa-file-invoice"></i>
                  <p>
                    Analytics & Reports
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
      </div>
    </div>
    <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
      <div class="os-scrollbar-track">
        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
      </div>
    </div>
    <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
      <div class="os-scrollbar-track">
        <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
      </div>
    </div>
    <div class="os-scrollbar-corner"></div>
  </div>
  <!-- /.sidebar -->
</aside>
<script>
  $(document).ready(function () {
    var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
    var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
    page = page.split('/');
    page = page[0];
    if (s != '')
      page = page + '_' + s;

    if ($('.nav-link.nav-' + page).length > 0) {
      $('.nav-link.nav-' + page).addClass('active')
      if ($('.nav-link.nav-' + page).hasClass('tree-item') == true) {
        $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active')
        $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open')
      }
      if ($('.nav-link.nav-' + page).hasClass('nav-is-tree') == true) {
        $('.nav-link.nav-' + page).parent().addClass('menu-open')
      }

    }

  })
  
</script>