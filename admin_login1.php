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

				
                 
		
		<!-- Header -->
		<div id="header">
           
			
			<div id="navigation">
				<ul>
                     <?php  
                    session_start(); 
                     
$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'asdf';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   mysql_select_db("dp");
   if(! $conn )
   {
      die('Could not connect to the database.');
   }
if (@$_POST["submit"] <> "") {
$phnum = $_POST['username'];
  $password = $_POST['password'];

$query = "select count(*),fname from admin where username=('$phnum') && password=('$password')" ;
    $retval = mysql_query($query);
    $row = mysql_fetch_array($retval);
   if($row['count(*)']>'0')
   {session_start();
        $_SESSION['admin']=$row['fname'];
        //echo "Welcome ".$_SESSION['username'];
    }
                    
    else{
        header("location:cust_login1.php"); 
    }}
    
mysql_close($conn);
                    
                    ?> 
				    <li><a href="admin_login1.php"><h1>Home</h1>	</a></li>
					<?php if($_SESSION['admin']) { ?><li><div style="color:A9A9A9;font-size:28px;padding-top:40px;padding-left:10px" > <b>Welcome <?php echo $_SESSION['admin']; ?></b></div></li> 
					<li><h1><a style="color:#A9A9A9" href="logout.php">LOGOUT</a></h1></li> <?php } 
                     else { ?> <li><a href="login.php">LOGIN</a></li>
                                    < <?php } ?> 
					
                    
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
                        echo "incorrect username or password";
                        } 
        else {?>
             <br><br> <h1 style="color:#000000;">Things to do:</h1><br>  
           <fieldset><br><h2 style="color:black;"> <ol>
                <li><a  style="color:black" href="add_item.php">Add Items</a></li><br>
                <br>
                <li><a style="color:black" href="view_ration_stock.php">View Ration Stock</a></li><br>
               
        </ol></h2><br></fieldset><br><br><br>
        
        <?php }?>
        

				
				
			</div>
			<!-- End Container -->
			
		</div>
		<!-- End Content -->
		
	</div>
</div>
<!-- End Main -->
	
</body>
</html>




