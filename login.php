<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>LOGIN!!</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />	
	<link rel="stylesheet" href="css1/colour.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css1/my.css" type="text/css" media="all" />
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
	
</head><style>
#q1
{


height:50px;

}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
#l1{align-:right;height:350px;width:300px;}
#container1{width:100%;}
#left1{float:left;height:350px;width:300px;}
#right1{float:right;height:350px;width:300px;}
#center1{margin:0 auto;height:350px;width:300px;}		
</style>
<body>
<!-- Top -->
<div id="top">
	
	<!div class="shell">
		
		<!-- Header -->
		<div id="header">
           
			
			<div id="navigation">
				<ul>
                     <?php session_start(); ?>
                     	<?php if($_SESSION['username']) { ?>
					<li><div style="font-size:28px;padding-top:40px;padding-left:10px" > <b>Welcome</b> <b><?php echo $_SESSION['username']; ?> </b></div></li> 
				    <li><a href="main.php"><h1>Home</h1></a></li>
					
				
					<li><a href="logout.php"><h1>LOGOUT</h1></a></li> <?php } 
                     else { ?>
                      <li><a href="login.php"><h1>LOGIN</h1></a></li>
                                     <?php } ?> 
					<form style="padding-top:40px;padding-left:10px" method="post" action="search.php" >
                    <span  class="field"><input  type="search" value="Search By Name" name="itemname"/></span>
                    <input type="submit" class="search-submit" value="GO" name="submit"/>
                    <?php if($_SESSION['username']){ ?>  
                    <li style="float:right"><a href="my_orders.php">My orders</a></li>  
                     <?php } ?>

		      </form>             
			</ul>
			</div>
		</div>
		<!-- End Header -->
		
		<!-- Slider -->
		
		<!-- End Slider -->
		
	

<div id="main">
	<div class="shell">
		
		<!-- Search, etc -->
		<div class="options">  
			
		</div>
        
		<!-- End Search, etc --><br>
		<h1 style="color:#0B0B61;">Login as:</h1><br><br><br><br><br>
    <fieldset><br><h2 style="color:#61210B;">
    <br>
        <a href="cust_login.php">1. Customer</a><br><br><br><br><br><br>
     <a href="admin_login.php">2. Admin</a></h2><br></fieldset><br><br><br>
				
				<!-- Footer -->
				<div id="footer">
					<div class="left">
						<a href="main.php">Home</a>
						<span>|</span>
						<a href="contactus.php">Contact Us</a>
					</div>
					<div class="right">
												 Design by <a href="https://www.facebook.com/aryan488" target="_blank" title="CSS Templates">Aryan</a>
	</div>
				</div><br>
				<!-- End Footer -->
				
			</div>
			<!-- End Container -->
			
		</div>
		<!-- End Content -->
		
	</div>
</div>
<!-- End Main -->
	
</body>
</html>



