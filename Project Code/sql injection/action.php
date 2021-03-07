<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HR DATABASE</title>
 <meta name="description" content="Twitter Bootstrap Version2.0 form error example from w3resource.com."> <link href="http://localhost/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">
 </head>
 <body style="margin-top: 50px">
 <div class="container">
 <div class="row">
 <div class="span6"> 
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'hr');
 
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
	 
	 <?php
	 
	$uid = $_POST['uid'];
	$pid = $_POST['passid'];
	$SQL = "select * from user_details where userid ='$uid' and password ='$pid' ";
	$result = mySQLi_query($con,$SQL);

	if(mySQLi_num_rows($result)>0){ 
		echo "<h4>". "-- Personal Information -- </h4>",
		"</br>";
	while ($row=mySQLi_fetch_row($result)){ echo "
<p>".
"User ID : ".
$row[0]."
</p>";
echo "<p>".
"Password : ".
$row[1]."</p>";
echo "<p>".
"First Name : ".
$row[2]." Last Name : ".
$row[3]."</p>";
echo "<p>".
"Gender : ".
$row[4]." 
Date of Birth :".
$row[5]."</p>
";echo "
<p>".
"Country : ".
$row[6]." 
User rating : ".$row[7].
"</p>
";
echo "<p>
"."Email ID : ".
$row[8].
"</p>
";
echo "--------------------------------------------";}}else echo "
Invalid user id or password"; ?>

</div>
</div>
</div>
</body>
</html>