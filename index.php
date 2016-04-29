<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Animal Rescue Notifier - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

	<link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" /><link href="scripts/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
	
	
	<style>
input[type=submit] {
 background:#2ecc71;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}
</style>


</head>
<body id="pageBody">

<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="homepage.php" id="divSiteTitle">Animal Rescue Notifier</a><br />
                        <a href="homepage.php" id="divTagLine">"We are here, for them."</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown"><a href="home.php">Home</a></li>
								<li class="dropdown"><a href="about.php">About</a></li>
                                <li class="dropdown">
                                    <a href="page.html" class="dropdown-toggle">Page <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                            <li><a href="full.html">Full Page</a></li>
                            <li><a href="2-column.html">Two Column</a></li>
                            <li><a href="3-column.html">Three Column</a></li>
							<li><a href="../documentation/index.html">Documentation</a></li>
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            </ul>
                            </li>
                            </ul>
                                </li>
								<li class="dropdown active"><a href="index.php">Login</a></li>
                                <li class="dropdown"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Login</span>
            </div> 

        <div class="row-fluid">
                <div class="span12">

					<div id="loginDivBody">

						<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'> -->
						<br>
						<form name="loginform" method="post" action="login_exec.php">
							<div class="loginBox">
								<h1 id="loginH1">Dashboard</h1>
								
								<!--the code bellow is used to display the message of the input validation-->
								<?php
									if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
									echo '<ul class="err">';
									foreach($_SESSION['ERRMSG_ARR'] as $msg) {
											echo '<li>',$msg,'</li>'; 
										}
										echo '</ul>';
										unset($_SESSION['ERRMSG_ARR']);
									}
								?>
								
								<input type="email" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
			
								<input type="password" name="password" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
			
								<!--<a href="login_exec.php"><div class="loginButton">Sign In</div></a> <!-- End Btn --> 
								<!--<input name="" type="submit" value="Sign In" />   -->
								
								<a><button class="loginButton" type="submit" value="Submit">Sign In</button></a>
								
								<!--<a><button class="loginButton2" type="submit" value="Submit">Sign Up</button></a>-->
								
								<a href="#"><div id="loginButton2">Sign Up</div></a> <!-- End Btn2 -->

							</div> <!-- End Box -->  
						</form>

						<p id="loginP">Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
                    
					</div>

                </div>
            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="container">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                
                    <h3>About Company</h3>

                    <p>Started in 2016, our passion and love for animals is what drives us forward.</p>
                    
                    <p> 
                        <a href="#" title="Terms of Use">Terms of Use</a><br />
                        <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                        <a href="#" title="FAQ">FAQ</a><br />
                        <a href="#" title="Sitemap">Sitemap</a>
                    </p>

                </div>
                <div class="span3" id="footerArea2">

                    <h3>Recent Blog Posts</h3> 
                    <p>
                        <a href="#" title="">Dog rescued from a housewire, lives.</a><br />
                        <span style="text-transform:none;">19 hours ago</span>
                    </p>
                    <p>
                        <a href="#" title="">The injured horse walks again.</a><br />
                        <span style="text-transform:none;">2 days ago</span>
                    </p>
                    <p>
                        <a href="#" title="">VIEW ALL POSTS</a>
                    </p>

                </div>
                <div class="span3" id="footerArea3">

                    <h3>Our Mission</h3> 
                    <p>Animals, they give us unconditional love right from the start. They deserve the same. Rescuing isn't something they need, its what they deserve. 					
                        We believe in our mission and hence we need every help we can get, especially from YOU. So come join us and be a part of a community that makes a difference.
                    </p>

                </div>
                <div class="span3" id="footerArea4">

                    <h3>Get in Touch</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Phone:</span>
                        <br />
                        (+91) 86 05 297605                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="mailto:info@yourdomain.com" title="Email">countroyal@gmail.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Address:</span>
                        <br />
                        5-6B, Opp. Inox Theatre<br />
                        2nd Floor, Margao - Goa<br />
                        India
                    </li>
                    </ul>

                </div>
            </div>

            <br /><br />
            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2013 Gehelot Industries. All Rights Reserved.
                    </p>

                    <p class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
			<a href=""><i class="social foundicon-twitter"></i> Twitter</a>
			<a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
			<a href="#"><i class="social foundicon-rss"></i> Rss</a>
                    </p>
                </div>
            </div>
            <br />

        </div>

    </div>
    
</div>

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>


<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script><script src="scripts/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script><script type="text/javascript">$("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});$("a[rel^='prettyPhoto'] img").hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});</script>



</body>
</html>