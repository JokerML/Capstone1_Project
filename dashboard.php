<?php require 'include/sec.inc.php' ;?>
<!DOCTYPE html>
<html lang="en-Us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/dashboard.css">
</head>
<body>
	<!-- Navbar -->
	<nav>
		<div class="burger">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</div>
		<ul class="nav-links">
			<li class="title"><a href=""><span class="first">Admin</span> <span class="second">Dashboard</span></a></li>
			<div class="dropdown">
		  <span onclick="myFunction()" class="dropbtn"><img src="./image/user.png" alt="user logo"></span>
		  <div id="myDropdown" class="dropdown-content">
		  	<p class="admin-name"><?php echo $_SESSION['username'];?></p>
		  	<form action="logout.php" method="post">
		  		<input type="submit" name="logout" value="Logout">
		  	</form>
		  </div>
		</div>
		</ul>
	</nav>
	<!-- End Of Navbar -->

	<!-- Sidebar Menu -->
	<div class="sidebar">
		<header>
			<img class="logo" src="./image/logo.jpg" alt="SMCBI logo">
			<p class="sub-title">PCIMS</p>
		</header>
		<ul class="sidebar-list">
			<li><a href="">Dashboard</li>
			<li><a href="">Records</li>
			<li><a href="">Tools</li>
			<li><a href="">Add item</li>
			<li><a href="">History</li>
		</ul>
	</div>
	<!-- End Of Sidebar Menu -->
	<script defer="true" type="text/javascript">
					function myFunction() {
			  document.getElementById("myDropdown").classList.toggle("show");
			}

			window.onclick = function(event) {
			  if (!event.target.matches('.dropbtn img')) {
			    var dropdowns = document.getElementsByClassName("dropdown-content");
			    var i;
			    for (i = 0; i < dropdowns.length; i++) {
			      var openDropdown = dropdowns[i];
			      if (openDropdown.classList.contains('show')) {
			        openDropdown.classList.remove('show');
			      }
			    }
			  }
			}
	</script>
</body>
</html>

<!------------ MADE BY JOKERML ------------>