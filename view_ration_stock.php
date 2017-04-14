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
		     
			
			
		      </form>             
			</ul>
			</div>
		</div>
		<!-- Header -->
		<div id="header">
           
			<div id="navigation">
				<ul>
                     <?php  
                    session_start(); 
                                 
                    ?> 
				    
					<?php if($_SESSION['admin']) { ?><div style="font-size:28px;padding-top:40px;padding-left:10px"><li style="color:#A9A9A9">Welcome <?php echo $_SESSION['admin']; ?></li> 
						<li><a href="admin_login1.php">Home</a></li>
					<li><a href="logout.php">LOGOUT</a></li> <?php } 
                     else { ?> <li><a href="login.php">LOGIN</a></li></div>
                                     <?php } ?> 
					
                    
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
        
		<!-- End Search, etc -->
	
        	
    <?php   if(!$_SESSION['admin'])
                        {
                        echo "you are not logged in";
                        } 
        else {?>
                
           <?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'asdf';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
  mysql_select_db('dp');
   $sql = "SELECT * FROM ration";
   $retval = mysql_query( $sql, $conn );
        
   $query = "select count(*) FROM ration" ;
    $retval1 = mysql_query($query);
    $row = mysql_fetch_array($retval1);
   if($row['count(*)']<'1')
   printf("No item in stock\n"); 
        else{
            
            if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   } ?>
   <br> <h1 style="color:#0B0B61;">Ration in the stock:-</h1> <br>    
   
<?php   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
   { ?> <fieldset><h3 style="color:#61210B;"><br>
   <?php   echo "Name:{$row['name']}  <br> ".
         "Quantity : {$row['quantity']} <br> ".
         "Price : {$row['price']} <br> "; ?>
         
  <br> </h3></fieldset>
        
 <?php  } } }?> <br><br>
        
				
				
				<!-- Footer -->
				
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
