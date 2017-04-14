<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Stay Fresh!</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
	
</head>
<body>
<!-- Top -->
<div id="top">
	
	<!div class="shell">
		
		<!-- Header -->
		<div id="header">
           
			 <h1 id="logo"><a href="main.php">Get Fresh</a></h1>
			<div id="navigation">
				<ul>
                     <?php  
                    session_start(); 
                                 
                    ?> 
				    <li><a href="admin_login1.php">Home</a></li>
					<?php if($_SESSION['admin']) { ?><li>Welcome <?php echo $_SESSION['admin']; ?></li> 
					<li><a href="logout.php">LOGOUT</a></li> <?php } 
                     else { ?> <li><a href="login.php">LOGIN</a></li>
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
                
           <form method="post" action="add_item1.php">
                <br><br><h1 style="color:#0B0B61;">Item Details:</h1><br><br><br>
                    <fieldset><h3 style="color:#61210B;"><br>   
                    
                   <h1> NAME</h1><br><br> <span style="color:red;">*</span><input type="text" name="itemname" required/><br><br> <br><br>
                   <h1> QUANTITY(in Kg)<br><br><br></h1> <span style="color:red;">*</span><input type="number" name="quantity" min=0 max=500 step="0.5"><br><br><br><br>
                  <h1> PRICE(in Rs.)<br><br><br></h1> <span style="color:red;">*</span><input type="number" name="price" min=0 max=500 step="5"><br><br><br><br>
            
                    <input type="submit" name="submit" value="Submit" /><br>
                        <br></h3></fieldset><br><br><br>
                
            </form>
        
        <?php }?>
				
				
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
