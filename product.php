<!DOCTYPE html>

<html lang="en">

<head>
 
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="free-educational-responsive-web-template-webEdu">

  <meta name="author" content="webThemez.com">

  <title>Ayurvedic Rejuvenation Center</title>

  <link rel="favicon" href="assets/images/favicon.png">

  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
 
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="assets/css/animate.css">

  <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'>
 
  <link rel="stylesheet" type="text/css" media="all" href="assets/css/pro-bars.min.css">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.js"></script>

  <script src="assets/js/respond.min.js"></script>

  <![endif]-->
</head>

<body>
  <!-- Fixed navbar -->
  <div>
  <?php include('login_nav.php'); 
	$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db('arc',$con) or die("Failed to connect to MySQL: " . mysql_error());
	$sql = "SELECT * FROM prod";
	$query = mysql_query($sql) or die(mysql_error());
	
	
	
  ?>
  </div>
  
  <div class="logo">
 
   <a href="index.html"><img src="assets/images/Awsome-agency-logo5.png" width="300" align="center"></a>
 
 </div>
 
 
 
 <div class="navbar navbar-inverse">
   
 <div class="container">
  
    <div class="navbar-header">
   
     <!-- Button for smallest screens -->
    
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
     
   
      </div>
    
  <div class="navbar-expand">
     
   <ul class="nav navbar-nav  mainNav">

<li><a href="login1.html">Login</a></li>
      
    <li><a href="index.html">Home</a></li>
    
      <li><a href="about.html">About</a></li>

<li><a href="booking.html">Booking</a></li>

<li class="active"><a href="product.php">Products</a></li>
       
   <li><a href="testimonial.html">Testimonial</a></li>
     
     <li><a href="contact.html">Contact</a></li>
     
   </ul>
      </div>
      <!--/.nav-collapse -->
   
 </div>
  </div>
  <!-- /.navbar -->

	<!-- Header -->
	<header>

		<section class="call-to-action text-center">
   
   <div class="text-all">
   
     <h2 class="title">Ayurvedic Rejuvenation Center</h2>
   
     </div>  
  
  </section> 
 
 </header>

	
<!-- /Header -->

  
<section class="container">

<hr>
<h2 class="text-center"> PRODUCTS</h2>
<hr>
<div class="container">
  <div class="row text-left">
  
  <?php
	while($row = mysql_fetch_array($query)){
  ?>
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <div class="thumbnail"> <img src="assets/images/product/<?php echo $row['prod_img'] ?>" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
		<div id="content" align="center">
          <h3><?php echo $row['prod_name']; ?></h3>
		  <p> $ <?php echo $row['prod_price']; ?></p>
		  </div> 
          <p><?php echo $row['prod_desc']; ?></p>
          <p><a target='_blank' href="add_to_cart.php?product_id=<?php echo $row['prod_id'];?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a></p>
        </div>
      </div>
    </div>
	<?php } ?>
  </div>
  <nav class= "text-left">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination - lg">
      <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
    </ul>
  </nav>
</div>
</section>

  <footer>
  
  <div class="footer-section ">
    
  <div class="container">
    
    <div class="social pull-left">
    
      <p><i class="fa fa-phone"></i>+919768025062 <i class="fa fa-envelope-o"></i>Support@abhishekmshr60@gmail.com</p>
   
     </div>
     
   <div class="navigation">
   
       <ul class="pull-right">
       
<li><a href="login1.html">Login</a></li>

       <li><a href="index.html">Home</a></li>
  
            <li><a href="about.html">About</a></li>

<li><a href="booking.html">Booking</a></li>

<li><a href="product.html">Products</a></li>
        
      <li><a href="testimonial.html">Testimonial</a></li>
        
      <li><a href="contact.html">Contact</a></li>
            </ul>
        </div> 
      </div>
    </div>
 
   <div class="footer-bottom">
      <div class="container">
     
   <div class="social pull-left">
   
       <p>&copy; copyright your website link, 2016.</p>
    
    </div>
     
   <div class="navigation">
     
     <ul class="pull-right">
      
        <li><a href="https://www.facebook.com/AyurvedicRejuvenationCenter/?skip_nax_wizard=true"><i class="fa fa-2x fa-facebook"></i></a></li>
     
         <li><a href="https://twitter.com/AyurvedicRejuva"><i class="fa fa-2x fa-twitter"></i></a></li>
         
     <li><a href="https://in.pinterest.com/ayurvedicrejuve/"><i class="fa fa-2x fa-pinterest"></i></a></li>
       
     </ul>
        </div> 
      </div>
    </div>     
  </footer>

	
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  
  <script src="assets/js/modernizr-latest.js"></script> 
 
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script> 
 
   <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
   
  
    <script src="assets/js/bootstrap.min.js"></script> 
  
  <script src="assets/js/appear.min.js" type="text/javascript"></script>
  
  <script src="assets/js/pro-bars.min.js" type="text/javascript"></script>
  
  <script src="assets/js/wow.min.js" type="text/javascript"></script>
  
  
</body>
</html>
