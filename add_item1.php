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
	
   <h2 style="color:red;">
        	
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
   mysql_select_db("dp");
   if(! $conn )
   {
      die('Could not connect to the database.');
   }
if (@$_POST['submit'] <> "") {
$price=$_POST['price'];
  $itemname = $_POST['itemname'];
    $quantity = $_POST['quantity'];
}
    
    
    
$query = "select count(*) from ration where name=('$itemname')" ;
    $retval = mysql_query($query);
    $row = mysql_fetch_array($retval);
   if($row['count(*)']>='1')
   {    //echo "{$row['count(*)']}";
       echo "<br>Item exist and it's value sucessfully updated<br>";
       $query2=mysql_query("update ration set quantity=quantity+$quantity where name=('$itemname')");
       $query3=mysql_query("update ration set price=$price where name=('$itemname')");
    }
    else {
        $query1 = mysql_query("INSERT INTO ration VALUE('$itemname','$price','$quantity')") ;
    if(!$query1)
        echo "Item cannot be added due to some internal problem<br>";
    else echo "<br>Item sucessfully added";

    }
mysql_close($conn);

?>
        
        <?php }?>   </h2>
  	
	
             <br><br> <h1 style="color:#0B0B61;">Things to do:</h1><br>  
           <fieldset><br><h2 style="color:#61210B;"> <ol>
                <li><a href="add_item.php">Add Items</a></li><br>
               
                <li><a href="view_ration_stock.php">View Ration Stock</a></li><br>
                <l
        </ol></h2><br></fieldset><br><br><br>
        
			
				
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


