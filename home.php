<?php
session_start();
if(isset($_SESSION['fid']))
{
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home page</title>
</head>
<body  bgcolor="#00FF00">
<?php
$dd =  $_SESSION['fid'];
?>
<button><a href="profile.php">PROFILE</a></button>
<button><a href="logout.php">LOGOUT</a></button>

<table align="center" border="1">
 
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