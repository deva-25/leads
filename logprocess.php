<?php
$con=mysqli_connect('localhost','root','','leads');
if(isset($_POST['btnsubmit']))
{
	$luser=$_POST['fname'];
	$lpass=$_POST['fpass'];
	$qry="SELECT * FROM registration WHERE username='$luser' AND password='$lpass'";
	$exe=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($exe);
	if($row != '')
	{
		session_start();
		$_SESSION['fid']=$row['id'];
		$_SESSION['fname']=$row['name'];
		echo "<script>location.href='home.php'</script>";
	}
	else
		{
			echo "<script>alert('Invalid Request !')</script>";
			echo "<script>location.href='login.php'</script>";
		}
		
}
?>