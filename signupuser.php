
<?php header('Access-Control-Allow-Origin: *');
<?php
if (@$_POST["SIGN UP"] <> "") {
    $email = @$_POST["email"];
    $password = @$_POST["password"];
    $repeatassword = @$_POST["repeatpassword"];
 }
?>

<?php
$email = $_GET['email'];
$password = $_GET['fpass'];
$repeatpassword = $_GET['rpass'];
$con=mysqli_connect("mysql","database_email","database_password","database_repeatpassword","Project Swotta");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  ?>
  <html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
 <?php
$query = "SELECT userid FROM members where email='".$email."' and password='".$password."' and repeatpassword='".$repeatpassword."'" ;
$query = str_replace("\'","",$query);
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
  {
  echo $row['userid'];
  }
mysqli_close($con);
?>
</body>
</html>
