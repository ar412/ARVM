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
					
				
					<li><a href="logout.php"><h1>Logout</h1></a></li> <?php } 
                     else { ?>
                      <li><a href="login.php"><h1>Login</h1></a></li>
                                     <?php } ?> 
					<form style="padding-top:40px;padding-left:10px" method="post" action="search.php" >
                    <span  class="field"><input  type="search" value="Search By Name" name="itemname"/></span>
                    <input type="submit" class="search-submit" value="GO" name="submit"/>
                    <?php if($_SESSION['username']){ ?>  
                    <li style="float:right;><a href="my_orders.php">My orders</a></li>  
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
        
        
    <?php
    session_start();
        
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'asdf';
            
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            mysql_select_db('dp');
            if(! $conn )
              {
                die('Could not connect: ' . mysql_error());
              }
            else{
               $type = $_POST['itemname']; 
               $sql = "SELECT name,quantity,price FROM ration where name=('$type')";
               $retval = mysql_query( $sql, $conn );
                $retval1 = mysql_query( $sql, $conn );
               $row = mysql_fetch_array($retval);
               $sql1="select count(*) from ration where name=('$type')";
               $retval2=mysql_query($sql1,$conn);
                 $row1=mysql_fetch_array($retval2);   
                }
                
            
        
    
    if($row1['count(*)'] >= 1){
      while($row1 = mysql_fetch_array($retval1, MYSQL_ASSOC))
   {
     /* echo "name:{$row['name']}  <br> ".
         "quantity : {$row['quantity']} <br> ".
	"link: {$row['link']} <br> ".
         "--------------------------------<br>";*/
     ?>
        <br>
        <form align="center" method="post" action="order.php" > <center><table border="5px" align="center" width="200px" cellspacing="2px" height=270px>
        <tr align="center" bgcolor="pink" height="50px"><td align="center"><big><?php  echo "{$row1['name']} <br><br><br> Quantity left:{$row1['quantity']} kg <br><br><br> Price :{$row1['price']} Rupees <br><br><br>"; ?> </big></td></tr> 
            <tr height=20px><td align="center"><h2>Select Quantity(in Kg) </h2><br><span style="color:red;">*</span><form>
  <input type="radio" name="quantity" value="1" checked> 1
  <input type="radio" name="quantity" value="2"> 2
  <input type="radio" name="quantity" value="3"> 3  
</form> 
</td> </tr>
            <input type="hidden" name="itemname" value="<?php echo $type ?>"/> 
            <input type="hidden" name="price" value="<?php echo $row1['price']  ?>"/>
            <tr><td align="center"><input type="submit" value="Order Now" name="submit1" height=30px/></td></tr>
        </table></center></form><br>
        <?php
   }}
        
        else{ ?>
        
       
		
	</div>
</div>

<div id="main">
	<div class="shell">
		
		<!-- Search, etc -->
      
		<div class="options">
         
            
			<div class="search">
				<form method="post" action="search.php" >
                    <span class="field"><input type="search" value="Search By Name" name="itemname"/></span>
                    <input type="submit" class="search-submit" value="GO" name="submit"/>

		      </form>
			</div>
           
			<div class="right">
				<span class="left more-links">
                
                 </span>

			</div>

		</div>
  
        
		<!-- End Search, etc -->
		
    <br><h2 style="color:red;">
    <?php    echo "Item not available";  ?></h2>
        
		<!-- Content -->
		<div id="content">
			
			<!-- Tabs -->
			<div class="tabs">
				<ul>
				    <li><a href="#" class="active"><span>Ration</span></a></li>
				   
				</ul>
			</div>
			<!-- Tabs -->
			
			<!-- Container -->
			<div id="container">
				
				<div class="tabbed">
					
					<!-- First Tab Content -->
					<div class="tab-content" style="display:block;">
						<div class="items">
							<div class="cl">&nbsp;</div>
                          
							<ul>
                                
							    <li><form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="Sugar">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/sugar.jpg" height=75px width=100px/>
                                    </div></button>
                                    <center>
							    	<p>
							    		   Item Name: <span>Sugar</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>20/Kg</strong></p>
                                    </center></form>
							    </li>
                                
							    <li><form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="rice">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/rice.jpg" height=75px width=100px/>
                                    </div></button>
                                    <center>
							    	<p>
							    		   Item Name: <span>Rice</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>80/Kg</strong></p>
                                    </center></form>
							    </li>
                                
							    <li><form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="wheat">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/wheat.jpg" height=75px width=100px/>
                                    </div></button>
                                    <center>
							    	<p>
							    		   Item Name: <span>Wheat</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>60/Kg</strong></p>
                                    </center></form>
							    </li>
                                
							    <li><form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="moongdal">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/moongdal.jpg" height=75px width=100px/>
                                    </div></button>
                                    <center>
							    	<p>
							    		   Item Name: <span>MoongDal</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>70/Kg</strong></p>
                                    </center></form>
							    </li>
                                
							    <li><form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="rajma">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/rajma.jpg" height=75px width=100px/>
                                    </div></button>
                                    <center>
							    	<p>
							    		   Item Name: <span>Rajma</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>65/Kg</strong></p>
                                    </center></form>
							    </li>
                                
							    <li><form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="blackchana">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/blackchana.jpg" height=75px width=100px/>
                                    </div></button>
                                    <center>
							    	<p>
							    		   Item Name: <span>Black Chana</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>110/Kg</strong></p>
                                    </center></form>
							    </li>
                                
							    <li><form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="haremung">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/haremung.jpg" height=75px width=100px/>
                                    </div></button>
                                    <center>
							    	<p>
							    		   Item Name: <span>Haremung Dal</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>130/Kg</strong></p>
                                    </center></form>
							    </li>
                                
							    <li><form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="kerosene">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/kerosene.jpg" height=75px width=100px/>
                                    </div></button>
                                    <center>
							    	<p>
							    		   Item Name: <span>Kerosene</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>40/Litre</strong></p>
                                    </center></form>
							    </li>
                                
							</ul>
					</div>
					<!-- End First Tab Content -->
					
				</div>
				<hr>
                <br>
                <br>

            
     <?php   }
      
    ?>
   
				
				<!-- Footer -->
				<div id="footer">
					<div class="left">
						<a href="main.php">Home</a>
					
						<a href="contactus.php">Contact Us</a>
					</div>
					<div class="right">
						&copy;						 Design by <a href="https://www.facebook.com/aryan488" target="_blank" title="CSS Templates">Aryan</a>

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
