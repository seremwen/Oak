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
    <link rel="stylesheet" href="new/fonts/icomoon/style.css">

  
  <link rel="stylesheet" href="new/css/jquery-ui.css">
  

  <link rel="stylesheet" href="new/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="new/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="new/css/bootstrap-datepicker.css">

  

  <link rel="stylesheet" href="new/css/aos.css">
  <link href="new/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="new/css/style.css">

                                   
   
    <script src="bundles/jqueryuiec92?v="></script>

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
					<a class="logo" href="#"><img alt="OAKSCRIPT PUBLISHERS AND ACADEMY Logo" src="images/main_logo.jpg" width="200" height="150"></a>
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
            <li><a href="index.php" class="smoothScroll"><span>Home</span></a></li>
            <li><a href="aboutus.php" class="smoothScroll"><span>About</span></a></li>
            <li><a href="ourteam.php" class="smoothScroll"><span>Our Team</span></a></li>
            <li><a href="booksession.php" class="smoothScroll"><span>Book Session</span></a></li>
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
				<div class="site-wrap">
			<div class="box-section services-section2 triggerAnimation animated" data-animate="rotateInUpLeft">
				<h1>book session</h1>
                <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            
            <form method="post" action="bookses.php">
              
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="fname" style="color: white">FULLNAME</label>
                          <input type="text" name="fullname" id="fullname" class="form-control form-control-lg" placeholder="FULLNAME" required="">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="lname" style="color: white">EMAIL</label>
                          <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="EMAIL" required="">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="eaddress" style="color: white">CELL</label>
                          <input type="text" id="cell" name="cell" class="form-control form-control-lg" placeholder="CELL" required="">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="tel" style="color: white">MODULE/SUBJECT</label>
                          <input type="text" name="module" id="module" class="form-control form-control-lg" placeholder="MODULE" required="">
                      </div>
                  </div>
                <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="eaddress" style="color: white">PROGRAM</label>
                          <input type="text" name="program" id="program" class="form-control form-control-lg" placeholder="PROGRAM" required="">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="tel" style="color: white">LEVEL</label>
                          <input type="text" name="program_level" id="program_level" class="form-control form-control-lg" placeholder="level" required="">
                      </div>
                  </div>
                <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="eaddress" style="color: white">Institution(School/college/University)</label>
                          <input type="text" id="institution" name="university" class="form-control form-control-lg" placeholder="INSTITUTION" required="">
                      </div>

                      <div class="col-md-6 form-group">
                          <label for="tel" style="color: white">SERVICE</label>
                          <input type="text" id="tel" name="service" class="form-control form-control-lg" required="">
                      </div>

                  </div>
                   

                <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="eaddress" style="color: white">START DATE</label>
                          <input type="date" id="sdate" class="form-control form-control-lg" placeholder="START DATE" required="">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="tel" style="color: white">HOURS</label>
                          <input type="text" id="hours" class="form-control form-control-lg" placeholder="HOURS" required="">
                      </div>
                </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="eaddress" style="color: white">COUNTRY</label>
                          <input type="text" name="country" id="country" class="form-control form-control-lg" placeholder="COUNTRY" required="">
                      </div>
                      <div class="col-md-6 form-group">
                         
                          <label for="tel" style="color: white">CONTACT ME VIA</label>
                          <select name = "dropdown" class="form-control form-control-lg" required="">
                              <option value = "CALL" selected>CALL</option>
                              <option value = "SMS">SMS</option>
                              <option value = "WHATSAPP">WHATSAPP</option>
                          </select>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-12">
                          <input type="submit" value="SEND REQUEST" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
              
            </form>
          </div>
          
        </div>

        
      </div>
    </div>

			</div>
		</div>
			<!-- End services section -->
        

    <!-- client section
				================================================== -->
			
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
                            <form role="form" method="post" id="reused_form" >
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
                                    <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
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
        <script src="new/js/jquery-3.3.1.min.js"></script>
  <script src="new/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="new/js/jquery-ui.js"></script>
  <script src="new/js/popper.min.js"></script>
  <script src="new/js/bootstrap.min.js"></script>
  <script src="new/js/owl.carousel.min.js"></script>
  <script src="new/js/jquery.stellar.min.js"></script>
  <script src="new/js/jquery.countdown.min.js"></script>
  <script src="new/js/bootstrap-datepicker.min.js"></script>
  <script src="new/js/jquery.easing.1.3.js"></script>
  <script src="new/js/aos.js"></script>
  <script src="new/js/jquery.fancybox.min.js"></script>
  <script src="new/js/jquery.sticky.js"></script>
  <script src="new/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="new/js/main.js"></script>

</body>
      

</html>
 