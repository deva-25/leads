<?php
session_start();
if(isset($_SESSION['fid']))
{
	?>
<!DOCTYPE html PUBLIC "-//W3C//Dth XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Dth/xhtml1-transitional.dth">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile page</title>
</head>


<body  bgcolor="#00FF00">
<?php
$uid =  $_SESSION['fid'];
$con=mysqli_connect('localhost','root','','leads');
$qry="SELECT * FROM registration WHERE id='$uid'";
$exe=mysqli_query($con,$qry);
?>
<button><a href="home.php">HOME</a></button>
<button><a href="logout.php">LOGOUT</a></button>

<table width="200" border="1" align="center">
<tr>
 <th colspan="3">DETAILS</th>
</tr>
  <tr>
    <th>Name</th>
    <th>:</th>
    <th><input type="text" name="pname" value="" /></th>
  </tr>
  <tr>
    <th>Age</th>
    <th>:</th>
    <th><input type="text" name="page" value="" /></th>
  </tr>
  <tr>
    <th>Experience</th>
    <th>:</th>
    <th><input type="text" name="pexperience" value="" /></th>
  </tr>
  <tr>
    <th>Phone</th>
    <th>:</th>
    <th><input type="text" name="pphone" value="" /></th>
  </tr>
  <tr>
    <th>Description</th>
    <th>:</th>
    <th><input type="text" name="pdescription" value="" /></th>
  </tr>
  <tr>
    <th></th>
    <th><input type="submit" name="psubmit" value="SUBMIT" /></th>
    <th></th>
  </tr>
</table>


</body>
</html>
<?php
}
else
 {
	 echo "<script>location.href='login.php'</script>";
 }
 
?>