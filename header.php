<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="" />
	<title>Business Pages Web</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/introjs.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	<header>
		<div class="top-bar">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header col-md-4">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<img alt="Brand" src="assets/images/logo.png">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nav-menu-list collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav main-menu">
							<li class="active">
								<a href="key-metrics-insights.php" data-intro='Step1' data-step="1">Key Metrics <span class="sr-only">(current)</span></a>
							</li>
							<li>
								<a href="business-page-web.php" data-intro='Step2' data-step="2">Business Pages</a>
							</li>
							<li>
								<a href="create-ad.php" data-intro='Step3' data-step="3">Create Ad</a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
					<ul class="nav navbar-nav navbar-right user-info-dropdown">
						<li class="dropdown">
							<a href="#"
								class="dropdown-toggle"
								data-toggle="dropdown"
								role="button"
								aria-haspopup="true"
								aria-expanded="false"
								data-intro='Step4'
								data-step="4">
								Vanila Web Studio <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						<li class="dropdown user-link">
							<a href="#"
								class="dropdown-toggle" 
								data-toggle="dropdown" 
								role="button" 
								aria-haspopup="true" 
								aria-expanded="false"
								data-intro='Step5'
								data-step="5">
								<img src="assets/images/user.png" src="user-avatar"> <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.container-fluid -->
			</nav>
		</div>

		<!-- Page Title Section -->
		<div class="page-title-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-5">
						<div class="page-header">
							<h3><img src="assets/images/page-icon.png" alt="page-icon"> Business Pages</h3>
						</div>
					</div>
					<div class="col-md-6 col-sm-7 text-right header-right-btns">
						<a href="#" class="btn btn-lg need-help-btn">Need help <i class="fa fa-question-circle" aria-hidden="true"></i></a>
						<a href="#register-early-adopter" class="btn btn-lg register-adopter-btn fancybox">Register as an Early Adopter</a>
					</div>
					<div id="register-early-adopter" class="register-form-wrap text-center">
						<div class="container">
							<h2 class="title-text">Early Adopter Program</h2>
							<h3 class="sub-title">Fill the form below to apply<br>early adopter program</h3>
							<div class="form-cols">
								<div class="row">
			                    	<div class="col-sm-6">
			                    		<div class="form-group">
			                    			<input type="text" name="" placeholder="First Name" class="form-control">
			                    		</div>
			                    	</div>
			                    	<div class="col-sm-6">
			                    		<div class="form-group">
			                    			<input type="text" name="" placeholder="Last Name" class="form-control">
			                    		</div>
			                    	</div>
			                    </div>
			                    <div class="row">
			                    	<div class="col-sm-6">
			                    		<div class="form-group">
			                    			<input type="email" name="" placeholder="Email" class="form-control">
			                    		</div>
			                    	</div>
			                    	<div class="col-sm-6">
			                    		<div class="form-group">
			                    			<input type="text" name="" placeholder="Budget $" class="form-control">
			                    		</div>
			                    	</div>
			                    </div>
							</div>
		                    <button class="btn btn-lg apply-now-btn">Apply Now</button>
						</div>
					</div>
				</div>
				<!-- Page Menus -->
				<div class="page-menus-wrap">
					<ul>
						<li class="active-page">
							<a href="" data-intro='Step6' data-step="6">pages</a>
						</li>
						<li>
							<a href="add-page.php" data-intro='Step7' data-step="7">add page</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>