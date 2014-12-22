<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title> <?php echo $title; ?> </title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="carousel theme, free templates, image carousel, darkgray, pixelated background, templatemo, CSS, HTML" />
<meta name="description" content="Carousel Theme with darkgray background - free CSS template provided by templatemo.com" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/templatemo_style.css" />

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1-4-2.min.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/showhide.js"></script> 
<script type="text/JavaScript" src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ddsmoothmenu.js">
/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<!-- Load the CloudCarousel JavaScript file -->
<script type="text/JavaScript" src="<?php echo base_url(); ?>assets/js/cloud-carousel.1.0.5.js"></script>
<script type="text/javascript">
$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			reflHeight: 40,
			reflGap:2,
			titleBox: $('#da-vinci-title'),
			altBox: $('#da-vinci-alt'),
			buttonLeft: $('#slider-left-but'),
			buttonRight: $('#slider-right-but'),
			yRadius:30,
			xPos: 480,
			yPos: 32,
			speed:0.15,
		}
	);
});
</script>

</head>

<body>
<div id="templatemo_header_wrapper">
	<div id="site_title"><h1><a href="#">Our Movie Site</a></h1></div>
	<div id="for_user"  style="top: 10px;right: 250px;position: absolute;">
        <a ><font color="white">Welcome <?php echo $session_user_name;  ?></font></a>&nbsp;&nbsp;<font color="white">|</font>
		<a title="logout" href="<?php echo base_url();?>index.php/welcome/logout"><font color="white">Logout</font> </a>
	</div>
	<div>
		<form action="<?php echo base_url();?>index.php/welcome/search_result" method="post" style="color: white;">
			<input type="text" name="searchtext" value="">
			<input type="radio" name="search" value="movie" checked>Movie
			<input type="radio" name="search" value="celebrity">Celebrity
			<input type="submit" name="submit" value="Search">
		</form>
	</div>
     <div id="templatemo_menu" class="ddsmoothmenu">
       
		<ul>
            <li><a href="<?php echo base_url();?>" <?php if($title=='Mainpage') echo "class=\"selected\"" ?> >Home</a></li>
			<li><a href="" <?php if($title=='List') echo "class=\"selected\"" ?>  >List</a>
                <ul>
					
                    <li><span class="top"></span><span class="bottom"></span></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/user_favourite">My Favourites</a></li>
                    <li><a href="<?php echo base_url();?>index.php/welcome/makelist/boxoffice">Box Office</a></li>
                    <li><a href="<?php echo base_url();?>index.php/welcome/makelist/comingsoon">Coming Soon</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/makelist/thisyear" >Movies This Year</a></li>
              	</ul>
            </li>
			<li><a href="<?php echo base_url();?>index.php/welcome/topmovies" <?php if($title=='TopMovies') echo "class=\"selected\"" ?>>Top Movies</a></li>
            <li><a href="<?php echo base_url();?>index.php/welcome/index/about" <?php if($title=='About') echo "class=\"selected\"" ?> >About Us</a></li>
        </ul>
		
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->


</body>