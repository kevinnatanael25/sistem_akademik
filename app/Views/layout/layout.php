<!doctype html>
<html lang="en" ng-app="apps">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(assets/images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(assets/images/logo.jpg);"></div>
	  				<h3>aku padamu baby muachhh :* </h3>
	  			</div>
	  		</div>
        <?= $sidebar;?>
        
    	</nav>
      <div id="content" class="p-4 p-md-5 pt-5">
        
        <?= $content;?>
      </div>

        <!-- Page Content  -->
     
		</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/angular/angular.min.js"></script>

    <script src="apps/apps.js"></script>
    <script src="apps/controller/admin.controllers.js"></script>
    <script src="apps/services/admin.services.js"></script>
    <script src="apps/services/helperServices.js"></script>

  </body>
</html>