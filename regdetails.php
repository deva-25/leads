<?php
 $con=mysqli_connect('localhost','root','','leads');
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Details</title>
</head>
<body>
<table align="center" border="1" cellpadding="12">
<tr>
   <th colspan="9"><u>REGISTRATION DETAILS</u></th>
</tr>    
 <tr>
  <th>No</th>
  <th>Name</th>
  <th>Age</th>
  <th>Gender</th>
  <th>Type</th>
  <th>Phone</th>
  <th>Description</th>
  <th>Verification</th>
 </tr>
  <?php
   $Qry="SELECT * FROM registration order by id desc";
   $exe=mysqli_query($con,$Qry);
   $i=1;
    while($row=mysqli_fetch_array($exe))
	{
  ?>		
  <tr>
  <th><?php echo $i; ?></th>
  <th><?php echo $row['name']; ?></th>
  <th><?php echo $row['age']; ?></th>
  <th><?php echo $row['gender']; ?></th>
  <th><?php echo $row['type']; ?></th>
  <th><?php echo $row['phone']; ?></th>
  <th><?php echo $row['description']; ?></th>
  <th><a href="edit.php">EDIT</a> | <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure ?')">DELETE</a></th>
  </tr>
  <?php
    $i++;
	}
  ?>	
     <tr>
     <th colspan="8"><a href="index.html">REGISTRATION FORM</a></th>
   </tr>
</table>
</body>
</html>