<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link href="https://tantesasa.com/assets/themes/goldhyip/img/logo/favicon.ico" rel="icon" />
    <title>Cyber Office - {{$title ?? ''}}</title>
	<!--plugins-->
	<link href="{{url('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/highcharts/css/highcharts-white.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{url('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="{{url('assets/js/pace.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{url('assets/css/app.css')}}" rel="stylesheet">
	<link href="{{url('assets/css/icons.css')}}" rel="stylesheet">

</head>
<body class="bg-theme bg-theme4">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{url('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Testing</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{url('index.php')}}">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li> 
			</ul>
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
										</a>
										<a class="dropdown-item" href="javascript:;">
										</a>
										<a class="dropdown-item" href="javascript:;">
										</a>
										<a class="dropdown-item" href="javascript:;">
										</a>
										<a class="dropdown-item" href="javascript:;">
										</a>
										<a class="dropdown-item" href="javascript:;">
										</a>
										<a class="dropdown-item" href="javascript:;">
										</a>
										<a class="dropdown-item" href="javascript:;">
										</a>
										<a class="dropdown-item" href="javascript:;">
										</a>
									</div>
									<a href="javascript:;">
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">	
								<div class="dropdown-menu dropdown-menu-end">
									<div class="header-message-list">
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{url('assets/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Admin</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a href="javascript:void(0)" id="btn_change_password_admin" class="dropdown-item"><i class='bx bx-log-out-circle'></i><span>Change Password</span></a>
							</li>
							<li><a href="{{url('auth/signout')}}" class="dropdown-item"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="container-fluid">
				<div class="row page-titles">
					<div class="col-md-5 align-self-center">
						<h4 class="text-themecolor">{{$title ?? ''}}</h4>
					</div>
				</div>
				<!--Content-->
				@yield('content')
			</div>
		</div>
		<!--end page wrapper -->
		<footer class="page-footer">
			<p class="mb-12">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{url('assets/js/jquery.min.js')}}"></script>
	<script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{url('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/highcharts.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/exporting.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/variable-pie.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/export-data.js')}}"></script>
	<script src="{{url('assets/plugins/highcharts/js/accessibility.js')}}"></script>
	<script src="{{url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{url('assets/js/dashboard-sales.js')}}"></script>
	<!--app JS-->
	<script src="{{url('assets/js/app.js')}}"></script>
	<script rel="script" type="application/javascript" src="{{url('assets/js/popper.min.js')}}"></script>
	<script rel="script" type="application/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
	<script rel="script" type="application/javascript" src="{{url('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
	<script rel="script" type="application/javascript" src="{{url('assets/js/waves.js')}}"></script>
	<script rel="script" type="application/javascript" src="{{url('assets/js/custom.min.js')}}"></script>
@yield('js')
</body>

</html>