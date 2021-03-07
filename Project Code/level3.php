<?php
session_start();
if(!($_SESSION["seshflg"] == 'QHJATmlAIEV4dU1AaQ==')){
    echo "<script type='text/javascript'>alert('Access Denied!!!');document.location.href='index.html'</script>";
}

if(isset($_POST['submit']))
{
   $flag = $_POST['flag'];
   
 

$var1 = 'RXBpc2tleSE';

if ($var1 == $flag) { 
    echo "<script type='text/javascript'>alert('Correct!');document.location.href='level4.php'</script>";
    $_SESSION["seshflg"] = $flag;
} 
else { 
    echo "<script type='text/javascript'>alert('Wrong Flag!');</script>"; 
} }
?>

<html>
<head>
    <title>Accio Flags</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <meta name="author" content="templatemo">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- CSS Bootstrap & Custom -->
 
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/levels_css.css" rel="stylesheet" media="screen">
	 <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="css/animate.css" >
    <!-- Favicons -->
    
    
    
</head>
<body>
    
    
    <div class="bg-image"></div>
    <div class="overlay-bg"></div>

    
   

    <!-- This one in here is responsive menu for tablet and mobiles -->
    
		
                <!-- Begin Content -->
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="templatemo_logo">
                                <a href="#">
                                    <img src="images/accio1.png" alt="Accio Flag">
                                </a>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->


                    <div id="menu-container">
                        
                    
					
                        
                        <div id="menu-1" class="content homepage">
						<div class="page-header">
                                <h2 style="text-align:left" class="page-title">Level 3</h2>
                            </div> <!-- /.page-header -->
                            <div class="row">
							
							<div class="col-md-7">
							 <div class="content-inner">
                                        
                                        <p style="text-align:left">The 2nd Horcrux is Marvolo Gaunt's Ring. To destroy it, you need to <a href="seta.php" target="_blank">find </a>it first. Submit the correct flag to discover The Ring.

</p>
                                        
										
										<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
										   <input type="text" name="flag" autocomplete="off"><br> <br><br>
										   <input type="submit" name="submit" value="Submit Flag"><br>
										</form>
										<br><br>
										
                                    </div> 
									
                                </div>
								
                            </div> <!-- /.row -->
                        </div> <!-- /.homepage -->

                    <!-- LET'S TALK STEGANOGRAPHY!!!
                    
                        Steganography is the technique of hiding secret data within an ordinary, non-secret, file or 
                        message in order to avoid detection; the secret data is then extracted at its destination. 
                        
                        It's pretty much revealing something hidden in a picture...
                        Fun Fact: Did you know that the revealing charm in Harry Potter universe was APARECIUM?

                        Hint for a hint! ;)
                            The final answer may or may not be in a very popular hash value! *wink* *wink*

                        Hint for a hint 2! ;)
                            You may or may not be able to open "things" using the revealing charm! *winks x 100*
                        
                    -->    
                        
                        

                    </div> <!-- /.content-holder -->
                
                </div> <!-- /.col-md-10 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-content encodable: Aresto Momentum -->

    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>
  >
<!-- templatemo 402 genius -->
</body>
</html>