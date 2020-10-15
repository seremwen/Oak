<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="index,follow" />
    <link rel="shortcut icon" href="images/main_logo.jpg" type="image/x-icon">
    <title>Home | OAKSCRIPT PUBLISHERS AND ACADEMY</title>
    
    <link href="Content/Template/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link  href="Content/Template/css/animate.css" rel="stylesheet" type="text/css">
    <link  href="Content/Template/css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="Content/Template/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
    <link  href="Content/Template/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link  href="Content/Template/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link  href="Content/Template/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="Content/Template/js/jquery.min.js"></script>
    <script type="text/javascript" src="Content/Template/js/jquery.migrate.js"></script>
    <script type="text/javascript" src="Content/Template/js/jquery.appear.js"></script>
    <script type="text/javascript" src="Content/Template/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="Content/Template/js/bootstrap.js"></script>
    <script type="text/javascript" src="Content/Template/js/raphael-min.js"></script>
    <script type="text/javascript" src="Content/Template/js/DevSolutionSkill.min.js"></script>
    <script type="text/javascript" src="Content/Template/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="Content/Template/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="Content/Template/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="Content/Template/js/waypoint.min.js"></script>
    <script type="text/javascript" src="Content/Template/js/plugins-scroll.js"></script>
    <script type="text/javascript" src="Content/Template/js/script.js"></script>

                                   
   
   

    <link href="Content/themes/base/css9065.css?v=6GWhSz1xEQiUE3E4zsIfG9d_jYl4GfnZiv2M73vgacs1" rel="stylesheet"/>
    




   <script>
    $(function () {
        var pull = $('#pull');
        menu = $('nav ul');
        menuHeight = menu.height();

        $(pull).on('click', function (e) {
            e.preventDefault();
            menu.slideToggle();
        });

        $.ajax({
            type: "Get",
            url: '/Menus/GetMenu',
            dataType: 'html',
            data: { Id: "Homepage" },
            success: function (resp) {
                $('#mainmenu').html(resp);
            },
            error: function (data) {
            }
        });

        $(window).resize(function () {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });
                                   </script>
                               </head>
<body>

   	<div id="container" class="container">
   <!-- sidebar
		    ================================================== -->
		<div id="sidebar">

			<!-- header -->
			<header class="sidebar-section">
				<div class="header-logo">
					<a class="logo" href="#"><img alt="Faithwork Systems Logo" src="images/main_logo.jpg" width="200" height="150"></a>
				</div>
				<a class="elemadded responsive-link" href="#">Menu</a>
				<div id="mainmenu" class="navbar-vertical">

				</div>
			</header>

			<!-- Social list box -->
			<div class="sidebar-section white-box">
				<div class="social-box">
					<h2>Connect With Us</h2>
					<ul class="social-icons">
						<li><a class="facebook" href="https://www.facebook.com/oakscriptpublishersofficial"><i class="fa fa-facebook"></i></a></li>
						
					</ul>
				</div>
			</div>

			

			<!-- contact-info box -->
			<div class="sidebar-section white-box">
				<div class="contact-info-box">
					<h2>Contact Us</h2>
					<ul>
						<li>
							<i class="fa fa-phone">+263779263156</i>
                            <i class="fa fa-email">oakscriptpublishers@gmail.com</i>
						</li>
						
					</ul>
				</div>
			</div>


		</div>
		<!-- End Sidebar -->

	<div id="content">
    
<script>
    $(function () {
        $('#home').addClass("active");

    });
</script>

 

<!-- slider 
				================================================== -->
			<div id="slider" class="box-section triggerAnimation animated" data-animate="rollIn">
				 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
        </button>
        
      </div>
        <div class="collapse navbar-collapse">
		<nav>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#top" class="smoothScroll"><span>Home</span></a></li>
            <li><a href="aboutus.php" class="smoothScroll"><span>About</span></a></li>
            <li><a href="ourteam.php" class="smoothScroll"><span>Our Team</span></a></li>
            <li><a href="booksession.php" class="smoothScroll"><span>Book Session</span></a></li>
             <li><a href="booksession.php" class="smoothScroll"><span>Articles</span></a></li>
            <li><div class="container-box rotated">
                <button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">Contact Us</button>
            </div></li>
           
          </ul>
		  </nav>
       </div>

    </div>
  </div>
			</div>
			<!-- End slider -->


 		
				
<!-- Services section 2
				================================================== -->
			 <div class="container mainn-raised" style="width:100%;">
    ,<center><a class="logo" href="#"><img alt="oakscriptpublishers Logo" src="images/main_logo.jpg" width="200" height="150"></a></center>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/c1.jpg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="images/c2.jpg" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="images/c3.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="images/c4.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="images/c5.jpg" alt="New York" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     
			<!-- End services section -->
        

    <!-- client section
				================================================== -->
			<div class="box-section portfolio-section triggerAnimation animated" data-animate="flipInY">
				<h2>Our services</h2>
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

					<!-- Wrapper for slides -->
					<div class="carousel-inner">

						       <div class="item active">

                                <div class="item">
							    <div class="row">
								    <div class="col-sm-3">
									    <div class="project-post">
										    <img src="images/c1.jpg" alt="DAZ">	
									    </div>
								    </div>
								    <div class="col-sm-3">
									    <div class="project-post">
										    <img src="images/c2.jpg" alt="39th Crescent">	
									    </div>
								    </div>
								    <div class="col-sm-3">
									    <div class="project-post">
										    <img src="images/c3.jpg" alt="Mobishoppa">	
									    </div>
								    </div>
								    <div class="col-sm-3">
									    <div class="project-post">
										    <img src="images/c4.jpg" alt="Savannah Travel &amp; Tours">	
									    </div>
								    </div>
						        </div>
					            </div>
                                </div>
                                 <div class="item">

                            <div class="item">
							<div class="row">
								<div class="col-sm-3">
									<div class="project-post">
										<img src="images/c5.jpg" alt="Zarnet">	
									</div>
								</div>
								<div class="col-sm-3">
									<div class="project-post">
										<img src="images/c6.jpg" alt="GEC">	
									</div>
								</div>
								<div class="col-sm-3">
									<div class="project-post">
										<img src="images/c7.jpg" alt="PowerSpeed Electrical Ltd">	
									</div>
								</div>
								<div class="col-sm-3">
									<div class="project-post">
										<img src="images/c8.jpg" alt="FBC Re">	
									</div>
								</div>
						    </div>
					        </div>
                            </div>
                                 <div class="item">

                            <div class="item">
							<div class="row">
								<div class="col-sm-3">
									<div class="project-post">
										<img src="images/c9.jpg" alt="Elecrosales Hardware">	
									</div>
								</div>
								<div class="col-sm-3">
									<div class="project-post">
										<img src="images/c3.jpg" alt="EduHub">	
									</div>
								</div>
								<div class="col-sm-3">
									<div class="project-post">
										<img src="images/c4.jpg" alt="FMRE">	
									</div>
								</div>
						    </div>
					        </div>
                            </div>
                        </div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
				</div>
        </div>
			<!-- End portfolio section -->
 <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">
                                Contact Us
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" id="reused_form" action="sendmessage.php" >
                                <p> Send your message in the form below and we will get back to you as early as possible. </p>
                                <div class="form-group">
                                    <label for="name"> Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="email"> Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="name"> Message:</label>
                                    <textarea class="form-control" type="textarea" name="messages" id="messages" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Post It! &rarr;</button>
                            </form>
                            <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                        </div>
                    </div>
                </div>
            </div>
	 <!-- footer section
				================================================== -->
			<footer>
				
				<div class="footer-line">
					<p><span>Copyright &copy; 2020 Site by Ngoni Seremwe</span></p>
					<a class="go-top" href="index.php"><i class="fa fa-angle-up"></i></a>
				</div>
			</footer>
	<!-- End footer section -->
</div>

 
    <div class="middle-content"></div>

  
  
 
        </div> <!-- /.site-footer -->

</body>
      

</html>
 