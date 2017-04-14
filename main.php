<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Stay Healthy!</title>
	<link rel="stylesheet" href="css1/colour.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css1/my.css" type="text/css" media="all" />
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
	<script src="js/jquery.slide.js" type="text/javascript"></script>
	<script src="js/jquery-func.js" type="text/javascript"></script>
	
</head>
<body>

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
</div>
</div>

<div id="main">
	<div class="shell">
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
		
		<!-- Search, etc -->
      
		<div class="options">
         
            
			<div class="search">
				
			</div>
           
			<div class="right">
				<span class="left more-links">
                
                 </span>

			</div>

		</div>
  
        
		
		<!-- Content -->
		<div id="content">
			
			<!-- Container -->
			<div id="container">
				
				<div class="tabbed">
					<!-- First Tab Content -->
					<div class="tab-content" style="display:block;">
						<div class="items">
							<div class="cl">&nbsp;</div>
                          
							<div id="container1">
                                	<div id="left1">
							    	<div class="image">
							    		<input type="image" src="css/images/sugar.jpg" height=150px width=200px/>
                                    </div></button>
                                    
							    	<p>
							    		   Item Name: <span>Sugar</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>20/Kg</strong></p>
							    	<p> <h3> Out of Stock </h3></p>
                                    </div>
                                    <div id="right1">
							    	<div class="image">
							    		<input type="image" src="css/images/wheat.jpg" height=150px width=200px/>
                                    </div></button>
                                    <p>
							    		   Item Name: <span>Wheat</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>60/Kg</strong></p>
							    	<p> <h3> Out of Stock </h3></p>
                                    </div>
							    	
							    	<div id="center1">
                                    <form method="post" action="search.php">
                                    <input type="hidden" name="itemname" value="Rice">
                                    <button type="submit" name="submit" value="submit">
							    	<div class="image">
							    		<input type="image" src="css/images/rice.jpg" height=150px width=200px/>
                                    </div></button>
                                    <p>
							    		   Item Name: <span>Rice</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>80/Kg</strong></p>
                                    </form>
							    	</div>
                            </div>
                            <div id="container1">    	
                            		<div id="left1">
                                	<div class="image">
							    		<input type="image" src="css/images/moongdal.jpg" height=150px width=200px/>
                                    </div></button>
                                    <p>
							    		   Item Name: <span>MoongDal</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>70/Kg</strong></p>
							    	<p> <h3> Out of Stock </h3></p>
                                    </div>
							    	<div id="right1">
							    	<div class="image">
							    		<input type="image" src="css/images/rajma.jpg" height=150px width=200px/>
                                    </div></button>
              
							    	<p>
							    		   Item Name: <span>Rajma</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>65/Kg</strong></p>
							    	<p> <h3> Out of Stock </h3></p>
                                    </div>
                                	<div id="center1">
                                	<div class="image">
							    		<input type="image" src="css/images/blackchana.jpg" height=150px width=200px/>
                                    </div></button>
                                    <p>
							    		   Item Name: <span>Black Chana</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>110/Kg</strong></p>
							    	<p> <h3> Out of Stock </h3></p>
                                    </center>
							    	</div>
                                </div>	
							    <div id="container1">
							    	<div id="left1">
							    	<div class="image">
							    		<input type="image" src="css/images/haremung.jpg" height=150px width=200px/>
                                    </div></button>
                                    <p>
							    		   Item Name: <span>Haremung Dal</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>130/Kg</strong></p>
							    	<p> <h3> Out of Stock </h3></p>
                                    </div>
							    
							    	<div id="center1">
							    	<div class="image">
							    		<input type="image" src="css/images/kerosene.jpg" height=150px width=200px/>
                                    </div></button>
                                    <p>
							    		   Item Name: <span>Kerosene</span><br />
							    	</p>
							    	<p class="price"> Price: <strong>40/Litre</strong></p>
							    	<p> <h3> Out of Stock </h3></p>
                                    </div>
                                </div>
					</div>
					<!-- End First Tab Content -->
					
					
					
				</div>
				<hr>
                <br>
                <br>

				<p> </p>
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

