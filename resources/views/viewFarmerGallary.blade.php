<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Farmer Galllry</title>
</head>

<body>


<!DOCTYPE html>
<html lang="en">
<head>
<title>LEADS | Farmer :: View Databank</title>

</head>
	
<body>
                    
                    <table width="787" height="451" border="0" align="center" style=" font-family:Verdana, Geneva, sans-serif; color:#036;">
                    	<tr>
                            <td colspan="3" align="center"><h3>Farmer Gallary</h3></td>
                        </tr>
                        <tr>
                        @foreach($data as $object)
                            <td width="367" height="37"><img src="../gallary/{{ $object->image }}" alt="" width="250" height="250" style="border:1px solid #006;" /></td>
   						@endforeach
                        </tr>
                       
                        <tr>
                            <td colspan="3"><a href="{{url('/logout')}}" style=" text-decoration:none;">Home</a></td>
                            
                        </tr>
                    </table>

</body>
</html>
</body>
</html>