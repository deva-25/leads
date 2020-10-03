<?php

$con=mysqli_connect('localhost','root','','leads');
 
 $delid=$_GET['id'];
 
 $qry="DELETE FROM registration WHERE id='$delid'";
 
 $exe=mysqli_query($con,$qry);
 
echo "<script>alert('Deletion success')</script>";
echo "<script>location.href='regdetails.php'</script>";

?>