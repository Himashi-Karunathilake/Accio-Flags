<?php
session_start();
if(!($_SESSION["seshflg"] == 'OhaLNHTbiZhTHWi1cmMg4Vxhs9Pvevzxy5VGu2MR4Po=')){
    echo "<script type='text/javascript'>alert('Access Denied!!!');document.location.href='index.html'</script>";
}

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

    <link rel="stylesheet" href="css/animate.css">
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


                    <div id="menu-container" style="display:inline-block;">
                        
                    
					
                        
                        <div id="menu-1" class="content homepage" style="display:inline-block;">
						<h1 style="text-align:center">CONGRATULATIONS! YOU HAVE DEFEATED LORD VOLDEMORT!!!</h1><!-- /.page-header -->
                            <div class="row">
							
							<div class="col-md-7">
							 <div class="content-inner">
                                        
                                          <video width="1280" height="720" controls autoplay>
            <source src="videos/ending.mp4" type="video/mp4">
            Sorry. Your browser doesn't support the video element.
        </video>
									
                                        <br><br>
                                        <div style="text-align:center"><p>Thank you for participating in this CTF challenge! 😊 We hope you learnt lots!! 
                                            <input style="text-align:center" type="submit" name="submit" value="Complete CTF!" onClick="document.location.href='index.html'"></p></div>
                                        

                                    </div> 
									
                                </div>
                        
								
                            </div> <!-- /.row -->
                        </div> <!-- /.homepage -->

                        
                        
                        

                    </div> <!-- /.content-holder -->
                
                </div> <!-- /.col-md-10 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-content -->

    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>
  
<!-- templatemo 402 genius -->

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>


</body>
</html>