<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Karla" rel="stylesheet">

    <title>ELMA-CENTER</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body style="font-family: 'Karla', sans-serif" id="page-top">

    <nav style="background-color:#ff4700a6" class="navbar justify-content-between d-flex flex-row navbar-expand navbar-dark static-top">

      <div class="d-flex flex-row">
        <a class="navbar-brand mr-1" href="index.html">ELMA-CENTER</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      </div>
     

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Blog</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Post Setting</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('blog_form') }}">Add New Post</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('blog_list') }}">Show All Posts</a>
            
            
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('set_price_for_service') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Edit Service Price</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <i class="fas fa-fw fa-book-open"></i>
            <span>Books</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Books Setting:</h6>
            <a class="dropdown-item" href="{{ route('books-list') }}" >Show All Books</a>
            <a class="dropdown-item" href="{{ route('books-store-form') }}" >Add New Book</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            
            
          </div>
        </li>

         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <i class="fas fa-fw fa-edit"></i>
            <span>Edit Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Edit Pages:</h6>
            <a class="dropdown-item" href="{{ route('landing.edit') }}" >Edit Landing Page</a>
            <a class="dropdown-item" href="{{ route('question_answeare') }}" >Q/A for services</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card notfiy-card o-hidden h-75">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="mr-5">{{ $contact }} New Messages!</h5>
                </div>
                
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card notfiy-card  o-hidden h-75">
                <div class="card-body">
                  <div class="card-body-icon">
                    
                  </div>
                  <?php
                    $home_work_count = 0;
                    foreach ($home_work as $value) {
                      if(!$value->visited) {
                        $home_work_count++;
                      }
                    }

                  ?>
                  <h5 class="mr-5">{{ $home_work_count }} New Document!</h5>
                </div>

              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card notfiy-card o-hidden h-75">
                <div class="card-body">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="mr-5">123 New Orders!</h5>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card notfiy-card o-hidden h-75">
                <div class="card-body">
                  <div style="color:black" class="card-body-icon">
                  </div>
                  <h5 class="mr-5">13 New Tickets!</h5>
                </div>
              </div>
            </div>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              
              Views Chart </div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
          </div>

          <!-- DataTables Example -->
          <div class="card mb-5 mt-5">
            <div class="card-header">
              Orders</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Family</th>
                      <th>Mobile</th>
                      <th>Product</th>
                      <th>Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Family</th>
                      <th>Mobile</th>
                      <th>Product</th>
                      <th>Date</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @forEach($home_work as  $v)
                      
                      <tr {{ $v->visited ? "" : "class=new" }} >
                        
                      <td>
                        <a style="z-index:999999" href="admin/product/{{ $v->id }}">
                          {{ $v->user_name }}
                        </a>
                      </td>
                      <td>{{ $v->user_family }}</td>
                      <td>{{ $v->mobile }}</td>
                      <td>{{ $v->type }} / {{ $v->kind }}</td>
                      <td>{{ $v->created_at }}</td>
                      <td>{{ $v->visited ? "seen" : "NEW" }}</td>
                    </tr>
                    @endforEach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">
              <a href="{{ url('/admin   ') }}">refresh data</a>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.js') }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('js/datatables-demo.js') }}"></script>

      <script type="text/javascript">
        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'sans-serif';
Chart.defaults.global.defaultFontColor = 'gray';
Chart.defaults.global.tooltips.enabled = false;

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.4,
      backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
      borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
      pointRadius: 5,
      pointBackgroundColor: "#e45757",
      pointBorderColor: "rgba(255,255,255,0.9)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,0.4)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
    }],
  },
  options: {
            tooltips: {
            callbacks: {
                labelColor: function(tooltipItem, chart) {
                    return {
                        borderColor: 'rgb(255, 0, 0)',
                        backgroundColor: 'rgb(255, 0, 0)'
                    };
                },
                labelTextColor: function(tooltipItem, chart) {
                    return '#543453';
                }
            }
        },
    title: {
            display: true,
            text: 'Custom Chart Title'
        },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: true
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 40000,
          maxTicksLimit: 5,
          beginAtZero: true
        },
        gridLines: {
          color: "rgba(0, 0, 0, .12)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

      </script>

  </body>

</html>
