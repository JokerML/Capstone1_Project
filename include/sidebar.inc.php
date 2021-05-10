
<!DOCTYPE html>
<html lang="en-Us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/dashboard.css">
	<link rel="stylesheet" href="font/font/flaticon.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
	<script defer type="text/javascript" src="./js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div class="overlay"></div>
  <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
			<a class="sidebar-brand" href="index.html">
				<span class="align-middle">PCIMS</span>
			</a>
			<ul class="navbar-nav align-self-stretch">
				<li class="">
					<a class="nav-link text-left active"  role="button" 
		  aria-haspopup="true" aria-expanded="false">
		  <i class="flaticon-bar-chart-1"></i>  Dashboard
		</a>
	</li>
	<li class="has-sub">
		<a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" ><i class="flaticon-user"></i>Admin Profile</a>
		<div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
		<div class="container-fluid ">
							<div class="row">
								<div class="col-lg-12 px-2">
									<div class="submenu-box"> 
										<ul class="list-unstyled m-0">
											<li><a href="logout.php">Logout</a></li>
											<li><a href="">Edit Profile</a></li>
										    <li><a href="">Change Password</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
		     		</div>
		  		</div>
		  	</li>
		  	<li class="">
		  		<a class="nav-link text-left"  role="button" >
		  			<i class="flaticon-bar-chart-1"></i> Borrowed Items
		  		</a>
		  	</li>
		  	<li class="">
		  		<a class="nav-link text-left"  role="button" >
		  			<i class="flaticon-bar-chart-1"></i> Records
		  		</a>
		  	</li>
		  	<li class="">
		  		<a class="nav-link text-left"  role="button" >
		  			<i class="flaticon-bar-chart-1"></i> Computer Laboratory
		  		</a>
		  	</li>
		  	<li class="">
		  		<a class="nav-link text-left"  role="button" >
		  			<i class="flaticon-bar-chart-1"></i> Borrowers Record
		  		</a>
		  </li>
		  	<li class="">
		  		<a class="nav-link text-left"  role="button" >
		  			<i class="flaticon-bar-chart-1"></i> History
		  		</a>
		  	</li>
		  	<li class="">
		  		<a class="nav-link text-left"  role="button" >
		  			<i class="flaticon-bar-chart-1"></i>  Setting
		  		</a>
		  	</li>
		  	<li class="">
		  		<a class="nav-link text-left"  role="button" >
		  			<i class="flaticon-bar-chart-1"></i> Recently Deleted
		  		</a>
		  	</li>
		  </ul>
		</div>
	</nav>
        <!-- end of sidebar-wrapper -->
        <!-- MADE BY JOKERML -->