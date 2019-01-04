<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Blank Page</title>



      <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

    <link href="{{ asset('css/jquery-te-1.4.0.css') }}" rel="stylesheet">    

  </head>

  <body class="sidebar-toggled" id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">ELMA-CENTER</a>

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
      <!-- <ul class="sidebar navbar-nav "> -->
        <ul class="sidebar navbar-nav toggled">
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
            <a class="dropdown-item active" href="blank.html">Blank Page</a>
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
            <li class="breadcrumb-item active">Add New Post</li>
          </ol>

          <!-- Page Content -->
          <h1>Add New Post</h1>
          
          <div class="row">
            <div class="col-12 px-5 pt-5 pb-3 ">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title">
                <small id="emailHelp" class="form-text text-muted">your title must be short</small>
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <textarea  class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter description">
                </textarea>
                <small id="emailHelp" class="form-text text-muted">optional</small>
              </div>

              <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" aria-describedby="emailHelp" placeholder="Enter author">
                
              </div>

              <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" aria-describedby="emailHelp" placeholder="Enter author">

                    @foreach($categorys as $category)
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach

                </select>
              </div>


              <div class="form-group">
                <label for="post_text">Your Story</label>
                <textarea style="min-height: 400px"  class="form-control" id="post_text" aria-describedby="emailHelp" placeholder="......">
                </textarea>
              </div>


                <div class="form-group">
                  <label>Upload Image</label>
                  <input type="file" name="file" id="head_image">
                </div>


                <div>
                  <button class="btn btn-primary w-50" id="submit">Send</button>
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


    <script type="text/javascript">
      
          $('document').ready(function() {
            $("#post_text").jqte();
          });


          $('#submit').click(function(event) {
            
          var obj = {
            title: $('#title').val(),
            description: $('#description').val(),
            author:$('#author').val(),
            category: $('#category').val(),
            post_text: $('#post_text').val(),
            head_image:window.ImageUploaded

          }

          if(obj.title.length == 0 || obj.title == " " || obj.title === null) {
            alert("Please Enter Data");
            return false;
          }

          if(obj.post_text.length == 0 || obj.post_text == " " || obj.post_text === null) {
            alert("Please Enter Data");
            return false;
          }


          console.log(obj);
        
          });
      
    </script>




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

  </body>

</html>
