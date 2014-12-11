<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	
	<!-- FontAwesome -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		.navbar-nav>.active>a{
			background-color:black !important;
		}
		.navbar-nav > li > a { padding-top: 5px !important; padding-bottom: 5px !important; }
		.navbar { min-height: 28px !important; }
		.navbar-brand { padding-top: 5px; padding-bottom: 10px; padding-left: 10px; }
		.navbar.navbar-default{
			border-right-width: 0px;
			border-top-width: 0px;
			border-left-width: 0px;
			border-bottom-width: 1px;
			margin-bottom: 2px;
			height: 30px;
			background-color: #0c0000;

		}
		.fa-bars{
			font-size:16px;
		}
		.fa-home{
			font-size:16px;
		}
		.fa-github-alt{
			font-size:16px;
		}
		.fa-gear{
			font-size:16px;
		}

		.sidebar-nav{
			margin-top: 32px;
		}

	</style>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Assignment Portal
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
		
		<!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <i class="fa fa-bars fa-2x" id="menu-toggle"></i>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <!--<li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="./">Login</a></li>
              <li class="active"><a href="../navbar-static-top/"><i class="fa fa-home fa-2x"></i></a></li>
              <li><a href="../navbar-fixed-top/"><i class="fa fa-github-alt fa-2x"></i></a></li>
              <li><a href="../navbar-fixed-top/"><i class="fa fa-gear fa-2x"></i></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
	  


        <!-- Page Content -->
					
			<div id="page-content-wrapper">
				<?php
				switch($_GET['content']){
					case 'register': include("partials/register.php");
									  break;
					case 'dashboard': echo"testing";
									  break;
                    case 'testing': include("partials/forms.php");
                                      break;

					default : include("partials/default.php");
				}

				?>
			</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
