<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Stay Fresh!</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	

	<link rel="stylesheet" href="css1/colour.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css1/my.css" type="text/css" media="all" />
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>	
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
	
</head>
<style>
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
        
        
       
        <?php
        if($_SESSION['username']) { 
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'asdf';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
  mysql_select_db('dp');
    $phnum=$_SESSION['phnum'];
   $sql = "SELECT id,itemname,quantity,price,time FROM transaction where flag='N' && phnum=$phnum";
    $sql1 = "SELECT count(*) FROM transaction where flag='N' && phnum=$phnum";        
   $retval = mysql_query( $sql, $conn );
            $retval1 = mysql_query( $sql1, $conn );
    $row1 = mysql_fetch_array($retval1);
   if($row1['count(*)']<'1') { ?> <h2 style="color:red;"><br>
        <?php  header("location:no_any_order.php");  ?> </h2> <?php
                            } else { ?>
       <br> <h1 style="color:#0B0B61;">Your orders</h1><br>
    <?php     //while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                          for($var=0;$var<$row1['count(*)'];$var=$var+1)
   { $row = mysql_fetch_array($retval, MYSQL_ASSOC); ?> <fieldset><h3 style="color:#61210B;"><br>
   <?php 
      echo "order id:{$row['id']}  <br> ".
          "item name:{$row['itemname']}  <br> ".
         "quantity : {$row['quantity']} <br> ".
         "price : {$row['price']} <br> ".
          "time of order : {$row['time']} <br> "; 
         ?>
         
     
        <br> </h3></fieldset>
   
 <?php   }}} ?><br><br>
    
				
				
				<!-- Footer -->
				<div id="footer">
					<div class="left">
						<a href="main.php">Home</a>
						
						<span>|</span>
						<a href="contactus.php">Contact Us</a>
					</div>
					<div class="right">
						&copy;. 						 Design by <a href="https://www.facebook.com/aryan488" target="_blank" title="CSS Templates">Aryan</a>

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
