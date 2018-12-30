<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">

    <title>Add Book</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Mansoreh</a>

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
            <li class="breadcrumb-item active">Add Book</li>
          </ol>

          <!-- Page Content -->
          <h1 class="ml-5" style="font-family: monospace;">Edit Information For ( <span style="color:gray"> {{ $book->name }} </span> ) Book</h1>
          
          <hr>
          
          @if (session('status'))
          <div class="jumbotron">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
          </div>
          @endif

          @if ($errors->any())
           <div class="jumbotron">
              <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
           </div>
          @endif
          
          <form class="mx-5" enctype="multipart/form-data" action="{{ route('edit_book') }}" method="POST">

              @csrf

              <input type="hidden" name="id" value="{{ $book->id }}">

          <div class="form-group">
            <label for="exampleInputEmail1">Name </label>
            <input value="{{ $book->name }}" type="text" name="name" class="form-control mx-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
           <small id="emailHelp" class="form-text text-muted">this name used for name of book</small>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">short Details</label>
            <textarea  name="short_details" class="form-control" id="exampleFormControlTextarea1" rows="3">
              {{ trim($book->short_details) }}
            </textarea>
            <small id="emailHelp" class="form-text text-muted">maximum word 50</small>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea2">Details</label>
            <textarea name="details" class="form-control" id="exampleFormControlTextarea2" rows="6">
              {{ trim($book->details) }}
            </textarea>
            <small id="emailHelp" class="form-text text-muted">maximum word 150</small>
          </div>

           <div class="form-group">
            <label for="exampleFormControlTextarea3">demo page NO 1</label>
            <textarea name="details_1" class="form-control" id="exampleFormControlTextarea3" rows="10">
              {{ trim($book->details_1) }}
            </textarea>
            <small id="emailHelp" class="form-text text-muted">optional</small>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea4">demo page NO 2</label>
            <textarea name="details_2" class="form-control" id="exampleFormControlTextarea4" rows="10">
              {{ trim($book->details_2) }}
            </textarea>
            <small id="emailHelp" class="form-text text-muted">optional</small>
          </div>


          <div class="form-group">
            <label for="exampleFormControlTextarea5">demo page NO 3</label>
            <textarea name="details_3" class="form-control" id="exampleFormControlTextarea5" rows="10">
              {{ trim($book->details_3) }}
            </textarea>
            <small id="emailHelp" class="form-text text-muted">optional</small>
          </div>


          <div class="form-group">
            <label for="exampleInputEmail2">price</label>
            <input value="{{ $book->price }}" type="number" name="price" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter price">
           <small id="emailHelp" class="form-text text-muted">Rial</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail12">Cover Image</label>
            <input type="file" name="cover-image" class="btn btn-primary form-control" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="Enter price">
           <small id="emailHelp" class="form-text text-muted">Image Must In 300 * 400</small>
           <a target="blank" href="">Last Image</a>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">author</label>
            <input value="{{ trim($book->author) }}" type="text" name="author" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter author">
          </div>


         


          <div class="form-group">
            <label for="exampleFormControlSelect1">category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
              <option value="ielts" @if($book->category=== 'ielts') selected='selected' @endif >IELTS</option>
              <option value="tofel" @if($book->category=== 'tofel') selected='selected' @endif >TOFEL</option>
            </select>
          </div>


          <div class="form-group">
            <label for="exampleFormControlFile1">Upload New Book</label>
            <input type="file" name="book_file" class="form-control-file" id="exampleFormControlFile1">
            <small class="form-text text-muted ">if you want add new book insted </small>
            <a  class="ml-3 pt-0" href="{{ $book->book_file }}" download> Last File Uploaded </a>
          </div>


          <div class="form-group text-center">
            <input class="btn btn-primary w-50 m-5" type="submit"  value="submit">
          </div>

      </form>

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

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.js') }}"></script> 

  </body>

</html>
