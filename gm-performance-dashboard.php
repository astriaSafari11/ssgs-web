<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Sidebar Mini</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | Sidebar Mini" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">    
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/53a51106e3.js" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-mini sidebar-collapse bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button" style="color: #001F82; font-weight: 800; font-size: 24px; margin-bottom: 5px;">
                <i class="bi bi-list"></i> PERFORMANCE DASHBOARD
              </a>
            </li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" href="#">
                <i class="fa-solid fa-location-dot" style="color: #001F82;"></i>
                <span class="d-none d-md-inline">Factory HCL</span>
                <!-- <span class="navbar-badge badge text-bg-danger">3</span> -->
              </a>
            </li>
            <!--end::Messages Dropdown Menu-->
            <!--begin::Notifications Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-bell-fill" style="color: #001F82;"></i>
                <span class="navbar-badge badge text-bg-warning">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-end fs-7 text-danger"
                          ><i class="bi bi-star-fill"></i
                        ></span>
                      </h3>
                      <p class="fs-7">Call me whenever you can...</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li>
            <!--end::Notifications Dropdown Menu-->
            <!--begin::Fullscreen Toggle-->
            <!-- <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li> -->
            <!--end::Fullscreen Toggle-->
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="dist/assets/img/user2-160x160.jpg"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline" style="color: #001F82;">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="dist/assets/img/user2-160x160.jpg"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    Alexander Pierce - Administrator
                    <small>Member since Nov. 2023</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-white shadow" data-bs-theme="light">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="home.php" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="dist/assets/img/unilever-logo.png"
              alt="Unilever Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text font-bold text-primary" style="font-weight: 800; font-size: 24px; margin-bottom: 5px;">SGSS</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-house" style="color: #001F82;"></i>
                  <p>Home</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill" style="color: #001F82;"></i>
                  <p>
                    Goods Management
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="home.php" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Performance Dashboard</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Stock Card</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Transaction Card</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Master Data</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-hand-holding-heart" style="color: #001F82;"></i>
                  <p>Service Management</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-hand-holding-dollar" style="color: #001F82;"></i>
                  <p>Savings Simulator</p>
                </a>
              </li>                              
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <a class="btn btn-primary position-relative" style="font-weight: 600; border-radius: 50px;">
                  Request List
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> 5
                  <span class="visually-hidden">unread messages</span>
                  </span>
                </a>                
                <a href= "gm-performance-dashboard-feedback.php" class="btn btn-secondary position-relative" style="font-weight: 600; border-radius: 50px; color: #001F82;">
                  Feedback List
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> 5
                  <span class="visually-hidden">unread messages</span>
                  </span>
                </a>                  
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item" aria-current="page">Goods Management</li>
                  <li class="breadcrumb-item active" aria-current="page">Performance Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12 mb-4">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <div class="card-tools">
                      <button type="button" class="btn btn-danger position-relative" style="font-weight: 600; border-radius: 50px; width: 150px;">
                        Export
                      </button>                       
                      <button type="button" class="btn btn-danger position-relative" style="font-weight: 600; border-radius: 50px;width: 150px;">
                        Import
                      </button>                       
                    </div>
                  </div>
                  <div class="card-body">
                    <table id="example" class="table table-striped" style="width:100%">
                      <thead>
                          <tr >
                              <th style="color: #fff;background-color: #001F82;text-align: center;">Due Date</th>
                              <th style="color: #fff;background-color: #001F82;text-align: center;">Until Due Date</th>
                              <th style="color: #fff;background-color: #001F82;text-align: center;">Item Code</th>
                              <th style="color: #fff;background-color: #001F82;text-align: center;">Item</th>
                              <th style="color: #fff;background-color: #001F82;text-align: center;">Qty</th>
                              <th style="color: #fff;background-color: #001F82;text-align: center;">UoM</th>
                              <th style="color: #fff;background-color: #001F82;text-align: center;">Status</th>
                              <th style="color: #fff;background-color: #001F82;text-align: center;">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td style="vertical-align: middle;text-align: center;">2011-04-25</td>
                              <td style="vertical-align: middle;text-align: center;">2011-04-25</td>
                              <td style="vertical-align: middle;text-align: center;">ALK001</td>
                              <td style="vertical-align: middle;text-align: center;">Alkohol</td>
                              <td style="vertical-align: middle;text-align: center;">100</td>
                              <td style="vertical-align: middle;text-align: center;">ml</td>
                              <td style="vertical-align: middle;text-align: center;background-color: #ed2f2f;">Urgent</td>
                              <td style="vertical-align: middle;text-align: center;">                
                                <a href="gm-performance-dashboard-feedback-form.php" class="btn btn-sm btn-secondary" style="border-radius: 50px; color: #001F82;">
                                ORDER NOW
                                </a>  
                                <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 50px; color: #001F82;">
                                  IGNORE
                                </button>  
                              </td>
                          </tr>
                          <tr>
                            <td style="vertical-align: middle;text-align: center;">2011-04-25</td>
                            <td style="vertical-align: middle;text-align: center;">2011-04-25</td>
                            <td style="vertical-align: middle;text-align: center;">ALK001</td>
                            <td style="vertical-align: middle;text-align: center;">Alkohol</td>
                            <td style="vertical-align: middle;text-align: center;">100</td>
                            <td style="vertical-align: middle;text-align: center;">ml</td>
                            <td style="vertical-align: middle;text-align: center;background-color: #ed2f2f;">Urgent</td>
                            <td style="vertical-align: middle;text-align: center;">                
                              <a href="gm-performance-dashboard-feedback-form.php" class="btn btn-sm btn-secondary" style="border-radius: 50px; color: #001F82;">
                                ORDER NOW
                                </a>
                              <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 50px; color: #001F82;">
                                IGNORE
                              </button>  
                            </td>
                        </tr>
                        <tr>
                          <td style="vertical-align: middle;text-align: center;">2011-04-25</td>
                          <td style="vertical-align: middle;text-align: center;">2011-04-25</td>
                          <td style="vertical-align: middle;text-align: center;">ALK001</td>
                          <td style="vertical-align: middle;text-align: center;">Alkohol</td>
                          <td style="vertical-align: middle;text-align: center;">100</td>
                          <td style="vertical-align: middle;text-align: center;">ml</td>
                          <td style="vertical-align: middle;text-align: center;background-color: #ed2f2f;">Urgent</td>
                          <td style="vertical-align: middle;text-align: center;">                
                            <a href="gm-performance-dashboard-feedback-form.php" class="btn btn-sm btn-secondary" style="border-radius: 50px; color: #001F82;">
                                ORDER NOW
                                </a> 
                            <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 50px; color: #001F82;">
                              IGNORE
                            </button>  
                          </td>
                      </tr>
                      <tr>
                        <td style="vertical-align: middle;text-align: center;">2011-04-25</td>
                        <td style="vertical-align: middle;text-align: center;">2011-04-25</td>
                        <td style="vertical-align: middle;text-align: center;">ALK001</td>
                        <td style="vertical-align: middle;text-align: center;">Alkohol</td>
                        <td style="vertical-align: middle;text-align: center;">100</td>
                        <td style="vertical-align: middle;text-align: center;">ml</td>
                        <td style="vertical-align: middle;text-align: center;background-color: #fa9f1d;">Medium</td>
                        <td style="vertical-align: middle;text-align: center;">                
                          <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 50px; color: #001F82;">
                          ORDER NOW
                          </button>  
                          <button type="button" class="btn btn-sm btn-secondary" style="border-radius: 50px; color: #001F82;">
                            IGNORE
                          </button>  
                        </td>
                    </tr>                                              
                      <tfoot>
                        <tr >
                          <th style="color: #fff;background-color: #001F82;text-align: center;">Due Date</th>
                          <th style="color: #fff;background-color: #001F82;text-align: center;">Until Due Date</th>
                          <th style="color: #fff;background-color: #001F82;text-align: center;">Item Code</th>
                          <th style="color: #fff;background-color: #001F82;text-align: center;">Item</th>
                          <th style="color: #fff;background-color: #001F82;text-align: center;">Qty</th>
                          <th style="color: #fff;background-color: #001F82;text-align: center;">UoM</th>
                          <th style="color: #fff;background-color: #001F82;text-align: center;">Status</th>
                          <th style="color: #fff;background-color: #001F82;text-align: center;">Action</th>
                      </tr>
                      </tfoot>
                  </table>              
                  </div>
                  <!-- /.card-body -->
                  <!-- <div class="card-footer">Footer</div> -->
                  <!-- /.card-footer-->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
            <div class="row">
              <div class="col-12 mb-4">
                <span class="btn btn-primary" style="border-radius: 50px;width: 100%;font-weight: 600;">KPI RESULT</span>  
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-12 col-12">
                <span class="btn btn-info mb-2" style="border-radius: 50px;width: 100%;font-weight: 600;color: #fff;">COST</span>  
                <div class="info-box" style="border-radius: 25px;">
                  <div class="info-box-content" style="color: #001F82;">
                    <figure class="highcharts-figure">
                      <div id="container"></div>
                    </figure>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>

              <div class="col-md-4 col-sm-12 col-12">
                <span class="btn btn-info mb-2" style="border-radius: 50px;width: 100%;font-weight: 600;color: #fff;">SERVICE</span>  
                <div class="info-box" style="border-radius: 25px;">
                  <div class="info-box-content" style="color: #001F82;">
                    <figure class="highcharts-figure1">
                      <div id="container1"></div>
                    </figure>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              
              <div class="col-md-4 col-sm-12 col-12">
                <span class="btn btn-info mb-2" style="border-radius: 50px;width: 100%;font-weight: 600;color: #fff;">CASH</span>  
                <div class="info-box" style="border-radius: 25px;">
                  <div class="info-box-content" style="color: #001F82;">
                    <figure class="highcharts-figure2">
                      <div id="container2"></div>
                    </figure>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div> 
              <!-- /.col -->               
            </div>
            <!--end::Row-->            
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">SGSS v1.1 Copyright &copy; 2025&nbsp;</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <a href="#" class="nav-link font-bold" style="font-weight: 800;color: #001F82;">
          <i class="fa-solid fa-circle-arrow-left" style="color: #001F82;"></i>
          Logout
        </a>
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="dist/js/adminlte.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      $(document).ready(function() {
          $('#example').DataTable();

          Highcharts.setOptions({
            colors: ['#001F82', '#123e68', '#1b5885', '#3277a1', '#64E572', '#5293bb', '#6db2d9', '#89cff0']
          });

          Highcharts.chart('container', {
            chart: {
                type: 'pie',
                custom: {},
                events: {
                    render() {
                        const chart = this,
                            series = chart.series[0];
                        let customLabel = chart.options.chart.custom.label;

                        // if (!customLabel) {
                        //     customLabel = chart.options.chart.custom.label =
                        //         chart.renderer.label(
                        //             'Total<br/>' +
                        //             '<strong>2 877 820</strong>'
                        //         )
                        //             .css({
                        //                 color: '#000',
                        //                 textAnchor: 'middle'
                        //             })
                        //             .add();
                        // }

                        // const x = series.center[0] + chart.plotLeft,
                        //     y = series.center[1] + chart.plotTop -
                        //     (customLabel.attr('height') / 2);

                        // customLabel.attr({
                        //     x,
                        //     y
                        // });
                        // // Set font size based on chart diameter
                        // customLabel.css({
                        //     fontSize: `${series.center[2] / 12}px`
                        // });
                    }
                }
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    borderRadius: 8,
                    dataLabels: [{
                        enabled: true,
                        distance: 20,
                        format: '{point.name}'
                    }, {
                        enabled: true,
                        distance: -15,
                        format: '{point.percentage:.0f}%',
                        style: {
                            fontSize: '0.9em'
                        }
                    }],
                    showInLegend: true
                }
            },
            series: [{
                name: 'Item',
                colorByPoint: true,
                innerSize: '50%',
                data: [{
                    name: 'Item 1',
                    y: 23.9
                }, {
                    name: 'Item 2',
                    y: 12.6
                }, {
                    name: 'Item 3',
                    y: 37.0
                }, {
                    name: 'Item 4',
                    y: 26.4
                }]
              }]
           });     
           
           Highcharts.chart('container1', {
            chart: {
                type: 'pie',
                custom: {},
                events: {
                    render() {
                        const chart = this,
                            series = chart.series[0];
                        let customLabel = chart.options.chart.custom.label;

                        // if (!customLabel) {
                        //     customLabel = chart.options.chart.custom.label =
                        //         chart.renderer.label(
                        //             'Total<br/>' +
                        //             '<strong>2 877 820</strong>'
                        //         )
                        //             .css({
                        //                 color: '#000',
                        //                 textAnchor: 'middle'
                        //             })
                        //             .add();
                        // }

                        // const x = series.center[0] + chart.plotLeft,
                        //     y = series.center[1] + chart.plotTop -
                        //     (customLabel.attr('height') / 2);

                        // customLabel.attr({
                        //     x,
                        //     y
                        // });
                        // // Set font size based on chart diameter
                        // customLabel.css({
                        //     fontSize: `${series.center[2] / 12}px`
                        // });
                    }
                }
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                innerSize: '20%',            
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    borderRadius: 8,
                    dataLabels: [{
                        enabled: true,
                        distance: 20,
                        format: '{point.name}'
                    }, {
                        enabled: true,
                        distance: -15,
                        format: '{point.percentage:.0f}%',
                        style: {
                            fontSize: '0.9em'
                        }
                    }],
                    showInLegend: true
                }
            },
            series: [{
                name: 'Item',
                colorByPoint: true,
                innerSize: '50%',
                data: [{
                    name: 'Item 1',
                    y: 23.9
                }, {
                    name: 'Item 2',
                    y: 12.6
                }, {
                    name: 'Item 3',
                    y: 37.0
                }, {
                    name: 'Item 4',
                    y: 26.4
                }]
              }]
           });      
           
           Highcharts.chart('container2', {
            chart: {
                type: 'bar',
                custom: {},
                events: {
                    render() {
                        const chart = this,
                            series = chart.series[0];
                        let customLabel = chart.options.chart.custom.label;

                        // if (!customLabel) {
                        //     customLabel = chart.options.chart.custom.label =
                        //         chart.renderer.label(
                        //             'Total<br/>' +
                        //             '<strong>2 877 820</strong>'
                        //         )
                        //             .css({
                        //                 color: '#000',
                        //                 textAnchor: 'middle'
                        //             })
                        //             .add();
                        // }

                        const x = series.center[0] + chart.plotLeft,
                            y = series.center[1] + chart.plotTop -
                            (customLabel.attr('height') / 2);

                        customLabel.attr({
                            x,
                            y
                        });
                        // Set font size based on chart diameter
                        customLabel.css({
                            fontSize: `${series.center[2] / 12}px`
                        });
                    }
                }
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.0f}%</b>'
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    borderRadius: 8,
                    dataLabels: [{
                        enabled: true,
                        distance: 20,
                        format: '{point.name}'
                    }, {
                        enabled: true,
                        distance: -15,
                        format: '{point.percentage:.0f}%',
                        style: {
                            fontSize: '0.9em'
                        }
                    }],
                    showInLegend: true
                }
            },
            series: [{
                name: 'Item',
                colorByPoint: true,
                innerSize: '50%',
                data: [{
                    name: 'Item 1',
                    y: 23.9
                }, {
                    name: 'Item 2',
                    y: 12.6
                }, {
                    name: 'Item 3',
                    y: 37.0
                }, {
                    name: 'Item 4',
                    y: 26.4
                }]
              }]
           });            
      });
  </script>
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
