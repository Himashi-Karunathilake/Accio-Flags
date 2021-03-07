<?php

    $cookie_name = "Menu";
    $cookie_value = "UGllcnRvdHVtIExvY29tb3Rvcg";
    setcookie($cookie_name, $cookie_value, time() + (3600), "/"); // 86400 = 1 day

    $flg = $_POST['flag'];

?>

<html>
 
<head>
    <title>Order Delivered!</title>
    <h1 style="text-align:center;">Welcome to Hogwarts Tea Time!</h1>
</head>
 
<body style="background-color: #9eb7f0; text-align: center;">

    <?php echo " YOU ORDERED $flg. "; ?><br>
    <p>YOUR ORDER IS NOW READY! IT WILL ARRIVE IN THE NEXT TEN SECONDS!<br><br>THANK YOU FOR ORDERING TEA THROUGH US! HAVE A NICE DAY!<br><br><br></p>
    <!-- SHA256 is a well known hash used by many programs to assure integrity and authneticity. -->


    <img src="images/tea.gif">
</body>
</html>

