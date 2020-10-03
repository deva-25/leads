<?php
 $con=mysqli_connect('localhost','root','','leads');
  if(isset($_POST['fsubmit']))
   {
	   $rname=$_POST['fname'];
	   $rusername=$_POST['fusername'];
	   $rpassword=$_POST['fpassword'];
	   $rage=$_POST['fage'];
	   $rgender=$_POST['fgender'];
	   $rtype=$_POST['fselect'];
	   $rexp=$_POST['fexp'];
	   $rphone=$_POST['fphone'];
	   $rdescription=$_POST['fdescription'];
 $qry="INSERT INTO registration(name,username,password,age,gender,type,experience,phone,description) VALUES('$rname','$rusername','$rpassword','$rage','$rgender','$rtype','$rexp','$rphone','$rdescription')";
 $exe=mysqli_query($con,$qry);
 if($exe)
 {
echo "<script>alert('Insertion success')</script>";
echo "<script>location.href='index.html'</script>";
 }
 else
  {
echo "<script>alert('Insertion not successful !')</script>";
echo "<script>location.href='index.html'</script>";
  }
  
  }
?>