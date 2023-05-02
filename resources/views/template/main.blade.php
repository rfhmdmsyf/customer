<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{ asset ('main')}}/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{ asset ('main')}}/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="{{ asset ('main')}}/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{ asset ('main')}}/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{ asset ('main')}}/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{ asset ('main')}}/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
						  <div class="header-logo">
							<a href="#" class="logo">
							  <img src="">
							</a>
						  </div>
									</div>
										<div class="col-md-9">
											<div class="header-search" style="margin-left: 89%;">
											  
							  <a href="">
												<button class="primary-btn cta-btn ">Login</button>
							</a>
											  
											</div>
										  </div>
										
						</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
          <div class="content mt-3">
           @yield('konten')
        </div>
        
       
        
          
        
        
                <!-- jQuery Plugins -->
                <script src="{{ asset ('main')}}/js/jquery.min.js"></script>
                <script src="{{ asset ('main')}}/js/bootstrap.min.js"></script>
                <script src="{{ asset ('main')}}/js/slick.min.js"></script>
                <script src="{{ asset ('main')}}/js/nouislider.min.js"></script>
                <script src="{{ asset ('main')}}/js/jquery.zoom.min.js"></script>
                <script src="{{ asset ('main')}}/js/main.js"></script>
        
            </body>
        </html>
      