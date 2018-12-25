<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> all informtion </title>
	
	<style type="text/css">


		body {

		}
		

		#invoice{
    padding: 30px;
}

	.invoice {
    
    background-color: #FFF;
    /*min-height: 680px;*/
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6;
    font-size: 1rem;
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd;
    text-align:center;
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}

tbody tr td  {
	text-align: center;
	
}

/*.submit_btn , input[type="submit"]{
	display: none;
}*/


	</style>

</head>
<body style="overflow-x: scroll; ">


	

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <title>SB Admin - Blank Page</title>

    <!-- Bootstrap core CSS-->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->

    <!-- Page level plugin CSS-->
    <!-- <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->

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
              <a href="{{ url('/admin') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">details</li>
          </ol>

          <!-- Page Content -->
          <h1>User Information</h1>
          <hr>
          <!--<p></p> -->

          <div class="row">
          	<div class="col-12">
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                            <h1 style="padding-top:20px">MANSOREH LOGO</h1>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                            ------------
                            </a>
                        </h2>
                        <div>--------</div>
                        <div>---------</div>
                        <div>--------</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">{{ $n->user_name  }}</h2>
                        <div style="color:gray;padding-left:10px" class="address">{{ $n->user_name }} {{ $n->user_family }}</div>
                        <div class="email">
                        	<a href="mailto:{{ $n->email }}">{{ $n->email }}</a>
                        </div>
                        <div class="mobile">
                        	<a href="tel:{{ $n->mobile }}">{{ $n->mobile }}</a>
                        </div>
                    </div>
                    <div class="col invoice-details" style="text-align: left;">
                        <h1 class="invoice-id">INVOICE : {{ $n->invoice_id }}</h1>
                        <div class="date">Date of Invoice: {{ $n->created_at }}</div>
                        <div class="date">Last Update: {{ $n->updated_at }}</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-left">Order Information</th>
                            <th class="text-right">HOUR PRICE</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left"><h3>
                                User Name
                                </h3>
                            </td>
                            <td class="unit">{{ $n->user_name }}</td>
                            
                        </tr>
                        <tr>
                            <td class="no">02</td>
                            <td class="text-left">User Family</td>
                            <td class="unit">{{ $n->user_family }}</td>
                          
                        </tr>
                        <tr>
                            <td class="no">03</td>
                            <td class="text-left">User Email</td>
                            <td class="unit">{{ $n->email }}</td>
                            
                        </tr>
                        <tr>
                            <td class="no">04</td>
                            <td class="text-left">User Telegram Id</td>
                            <td class="unit">{{ $n->telegram }}</td>
                            
                        </tr>

                          <tr>
                            <td class="no">05</td>
                            <td class="text-left">User Mobile</td>
                            <td class="unit">{{ $n->mobile }}</td>
                            
                        </tr>
                          <tr>
                            <td class="no">06</td>
                            <td class="text-left">Category</td>
                            <td class="unit">{{ $n->kind }}</td>
                            
                        </tr>
                          <tr>
                            <td class="no">07</td>
                            <td class="text-left">Evidence</td>
                            <td class="unit">{{ $n->type }}</td>
                            
                        </tr>
                          <tr>
                            <td class="no">08</td>
                            <td class="text-left">end Result By</td>
                            <td class="unit">{{ $n->send_via }}</td>
                            
                        </tr>
                          <tr>
                            <td class="no">09</td>
                            <td class="text-left">Payment</td>
                            <td class="unit">{{ $n->payment_status ? "done" : "not paid" }}</td>
                            
                        </tr>
                          <tr>
                            <td class="no">10</td>
                            <td class="text-left">Send Notification</td>
                            <td class="unit">{{ $n->call_to_user ? "done" : "none" }}</td>
                            
                        </tr>
                          <tr>
                            <td class="no">11</td>
                            <td class="text-left">Payment Ref</td>
                            <td class="unit"></td>
                        </tr>
                                                  <tr>
                            <td class="no">12</td>
                            <td class="text-left">Price</td>
                            <td class="unit">{{ $n->price }} Rial</td>
                        </tr>

                          <tr>
                            <td class="no">13</td>
                            <td class="text-left">File</td>
                            <td class="unit"> <?php



                            	$file = $n->input;
                            	$file_len = strlen($file);
                            	if( $file_len !== 0 ) {
                            		echo "<a download href=".$file."> download</a>";
                            	} else {
                            		echo "File Not Uploaded";
                            		echo " - ";
                            		echo "<a href=''> call To User </a>";
                            	}


                            ?>
                            	
                            </td>
                        </tr>
                          <tr>
                            <td class="no">13</td>
                            <td class="text-left">Result</td>
                            <td class="unit">
                            	<form id="upload_">
                            		<div style='height: 0px;width:0px; overflow:hidden;'>
                            			<input id="upfile" name="file" type="file" value="upload"/>
                            		</div>
                            		<div id="uploadHandler" class="btn btn-primary"> Upload Result </div>
                            		<input class="btn btn-secondary submit_btn" type="submit" name=" Send File">
                            	</form>
								<?php
			if(strlen($n->result_input) !== 0) {

					echo "<a class='btn btn-info mr-3 mt-2' href='$n->result_input'  download>";
					echo " View Last File</a>";

                            	}
								?>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>{{ $n->price }} Rial</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX 16%</td>
                            <?php                            	
                            		
                            	//The VAT rate / percentage.
								$vat = 16;
 
								//The price, excluding VAT.
								$priceExcludingVat = $n->price;
 
								//Calculate how much VAT needs to be paid.
								$vatToPay = ($priceExcludingVat / 100) * $vat;
 
								//The total price, including VAT.
								$totalPrice = $priceExcludingVat + $vatToPay;

                            ?>
                            <td> {{ $priceExcludingVat }} Rial</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>{{ $totalPrice }} Rial</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks"></div>
                <div class="notices">
                    <div>User Details:</div>
                    <div class="notice">{{ $n->details }}</div>
                </div>

                <div class="pt-5 mt-3">
                	<div class="jumbotron">
                		<div id="sned_user" class="text-center btn btn-info w-100">Send Result To User</div>
                		<?php

                			if($n->call_to_user == 1) {
                				echo "<span style='text-align:right;color:red'><i> sended before </i></span>";
                			}

                		?>
                	</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
                </table>
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

    <script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

    <!-- Bootstrap core JavaScript-->
    <!--<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript
     <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.js') }}"></script>
    <script type="text/javascript">

    	$.ajaxSetup({
    				headers: {
        				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    				}
				}); 


    	window.uploaded_file = '';

    	function update_data(url) {
    		var data = {
    			url:url,
    			id:{{$n->id}}
    		}
    		 $.ajax({
    		 	url: '{{ route("update_form_result_file") }}',
				type: 'POST',              
				data: data,
				success: function (data) {
					console.log(data);
					document.location.reload(true)

				},
				error: function(err) {
					console.log(err);
				}

    		 })
    	}


    	$("#sned_user").click(function() {

    		var id_ = {
    			id: {{ $n->id }}
    		}

    		  $.ajax({
		        url: '{{ route("send_result_to_user") }}',
		        type: 'POST',              
		        data: id_,
		        success: function(result)
		        {
		            console.log('success');
		             console.log(result);

		             // please upload result first
		             if(result == "01") {
		             	alert("Please Upload Result First");
		             	return false;
		             }

		             alert(result);
		             
		        },
		        error: function(data)
		        {
		            console.log(data);
		            alert("some thing wrong , please try again");
		        }
		    });
    	});


		$('#uploadHandler').click(function(e) {
			document.getElementById("upfile").click();
		})

    	 $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });

    	 				$('#upload_').submit(function(event) {
    					event.preventDefault();
    					var formData = new FormData($("#upload_")[0]);
    			
		    			console.log(formData);
						    $.ajax({
						        url: '{{ route("upload") }}',
						        type: 'POST',              
						        data: formData,
						  		processData: false,
						  		contentType: false,
						        success: function(result)
						        {
						            console.log('success');
						             window.uploaded_file = result;
						             console.log(result);
						             if(result == 'no') {
						             	alert("please Insert File");
						             } else {
						             	update_data(result);
						             	window.location.refresh;
						             }
						             
						        },
						        error: function(data)
						        {
						            console.log(data);
						            alert("some thing wrong , please try again");
						        }
						    });

						});
    </script>

  </body>

</html>
