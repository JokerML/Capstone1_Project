		<?php require 'include/sec.inc.php' ;?>
		<?php include_once './include/sidebar.inc.php'; ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
        	<div id="content">
        		<div class="container-fluid p-0 px-lg-0 px-md-0">
        			<!-- Topbar -->
        			<nav class="navbar navbar-expand navbar-dark bg-dark my-navbar">
        				<!-- Sidebar Toggle (Topbar) -->
        				<div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
        					<span></span>
        					<span></span>
        					<span></span>
        				</div>
          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown  d-sm-none">
         
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
					placeholder="Search for..." >
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           <li class="nav-item dropdown">
							<a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
								<div class="position-relative">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
            <!-- Nav Item - Messages -->
            <li class="nav-item">
              <a class="nav-link " href="#"
			 role="button">
                <i class="fas fa-envelope"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
            </li>

            <!-- Nav Item - User Information -->
            <div class="dropdown">
			  <a class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <img class="img-profile rounded-circle" src="./image/user.png">
			  </a>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item  text-muted" href="#"><?php echo $_SESSION['username'];?></a>
			    <a class="dropdown-item" href="logout.php">Logout</a>
			  </div>
			</div>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       	<div class="container-fluid px-lg-4">
			<div class="row">
				<div class="col-md-12 mt-lg-4 mt-4">
		<!-- Page Heading -->
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
						<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> 
							Generate Report</a>
						    </div>
							</div>
						<div class="col-md-12">
						       <div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Computer Laboratory</h5>
												<span class="mt-1 mb-3">Unit: </span>
												<span class="text-muted">10</span>
												<div class="mb-1">
													<span class="text-default"> <i class="mdi mdi-arrow-bottom-right"></i>Conditon: </span>
													<span class="text-muted">Good</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Computer Laboratory</h5>
												<span class="mt-1 mb-3">Unit: </span>
												<span class="text-muted">10</span>
												<div class="mb-1">
													<span class="text-default"> <i class="mdi mdi-arrow-bottom-right"></i>Conditon: </span>
													<span class="text-muted">Good</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Computer Laboratory</h5>
												<span class="mt-1 mb-3">Unit: </span>
												<span class="text-muted">10</span>
												<div class="mb-1">
													<span class="text-default"> <i class="mdi mdi-arrow-bottom-right"></i>Conditon: </span>
													<span class="text-muted">Good</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<h5 class="card-title mb-4">Computer Laboratory</h5>
												<span class="mt-1 mb-3">Unit: </span>
												<span class="text-muted">10</span>
												<div class="mb-1">
													<span class="text-default"> <i class="mdi mdi-arrow-bottom-right"></i>Conditon: </span>
													<span class="text-muted">Good</span>
												</div>
											</div>
										</div>
									</div>
									<!-- column -->
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Records</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dl">
                                            <select class="custom-select">
                                                <option value="0" selected="">Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Item Name</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Brand</th>
                                            <th class="border-top-0">Borrowed By</th>
                                            <th class="border-top-0">Time Borrowed</th>
                                            <th class="border-top-0">Time Return</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Tools</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <label class="label label-default">Person</label>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <h5 class="m-b-0">View | Update | Delete</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Tools</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <label class="label label-default">Person</label>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <h5 class="m-b-0">View | Update | Delete</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Tools</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <label class="label label-default">Person</label>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <h5 class="m-b-0">View | Update | Delete</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Tools</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <label class="label label-default">Person</label>
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>
                                                <h5 class="m-b-0">View | Update | Delete</h5>
                                            </td>
                                        </tr>                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        		</div>
        	</div>
        <!-- /.container-fluid -->
      </div>
      <?php include_once './include/footer.inc.php'; ?>

<!------------ MADE BY JOKERML ------------>