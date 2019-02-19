<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ELMA-CENTER - show all posts</title>

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

    
    <style type="text/css">
      #remove_is,
      #remove_iw,
      #remove_ts,
      #remove_tw {
        display: none;
      } 
    </style>


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">ELMA-CENTER </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

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
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            
          </ol>

          <!-- Page Content -->
          <h1>Question for services</h1>
          <hr>
          

          <div class="jumbotron">
            <h2 class="pb-5"> IELTS / SPEAKING </h2>
            
            <div id="is_container_1">
              <div class="form-group">
              <label for="is_1_title">Question #1</label>
              <input type="text" class="form-control" name="is_1_title" id="is_1_title">
            </div>

            <div class="form-group">
              <label for="is_1_body">Answear #1</label>
              <textarea class="form-control" id="is_1_body" name="is_1_body"></textarea>
            </div>
            <hr/>

            </div>


              <div id="butt_is_" class="d-flex w-50 flex-row justify-content-around">
                <button id="add_is" class="btn btn-secondary mt-5 px-5"> Add + </button>
                <button id="remove_is" class="btn btn-danger mt-5 px-5"> Remove - </button>
              </div>

            </div>


            <div class="row">
              <div class="col-12">
                <button id="save" class="btn btn-primary px-5 m-5">Save</button>
              </div>
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
    <script src="{{ asset('js/jquery-te-1.4.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
     <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <!-- <script src="{{ asset('js/Chart.min.js') }}"></script> -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.js') }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('js/datatables-demo.js') }}"></script>
    <!-- <script src="{{ asset('js/chart-area-demo.js') }}"></script> -->


    <script>
      

      var state = {
          n:{
              is_n:1,
              iw_n:1,
              ts_n:1,
              tw_n:1
            },
          val: {
            is_n_1: {
              q:'',
              a:''
            },
            is_n_2: {
              q:'',
              a:''
            },
            is_n_3: {
              q:'',
              a:''
            },
            is_n_4: {
              q:'',
              a:''
            },
            is_n_5: {
              q:'',
              a:''
            },
            is_n_6: {
              q:'',
              a:''
            }
          }
      }

      function form_is(n) {
        return `<div id="is_container_${n}">
        <div class="form-group">
              <label for="is_${n}_title">Question #${n}</label>
              <input type="text" class="form-control" name="is_${n}_title" id="is_${n}_title">
            </div>

        <div class="form-group">
              <label for="is_${n}_body">Answear #${n}</label>
              <textarea class="form-control" id="is_${n}_body" name="is_${n}_body"></textarea>
            </div><hr/></div>`;
      }


      function add_is_form(n) {
        if(n >= 6) {

          return false;
        }
        var k = form_is(n+1);
        $('#butt_is_').before(k);

        if(n >= 1 && n < 2) {
          $('#remove_is').css('display','flex');
        }

        state.n.is_n = n+1;

      }


      function remove_is_form(n) {
        if(n == 1) {
            $('#remove_is').css('display','none');
          return false;
        }
        
        var ele = `#is_container_${n}`;
        $(ele).remove();
        
        state.n.is_n = n-1;
        if(state.n.is_n == 1 ) {
            $('#remove_is').css('display','none');
        }

      }

      $('#add_is').click(function() {
        add_is_form(state.n.is_n);

      });

      $('#remove_is').click(function() {
        remove_is_form(state.n.is_n);

      });








      $('#save').click(function() {

        // var state_value = state.val.is_n;
        var is_count = state.n.is_n;
        // console.log(state_value);
        
        for(var i = 1; i<= is_count;i++) {
          var title = $('#is_'+ i +'_title').val();
          var body = $('#is_'+ i +'_body').val();
          
          state.val['is_n_'+i].q = title;
          state.val['is_n_'+i].a = body;
          console.log(state.val);
        }

      });



    </script>

  </body>

</html>
