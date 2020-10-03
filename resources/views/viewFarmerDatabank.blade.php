


<!DOCTYPE html>
<html lang="en">
<head>
<title>LEADS | Farmer :: View Databank</title>

</head>
	
<body>
                    @foreach($data as $object)
                    <table width="787" height="451" border="0" align="center" style=" font-family:Verdana, Geneva, sans-serif; color:#036;">
                    	<tr>
                            <td colspan="3" align="center"><h3>Farmer Databank</h3></td>
                        </tr>
                        <tr>
                            <td width="367" height="37">Farmer Name</td>
                            <td width="14">:</td>
                            <td width="384">{{ $object->Name }}</td>
                        </tr>
                    	<tr>
                            <td height="37">Address</td>
                            <td>:</td>
                            <td>{{ $object->Address }}</td>
                        </tr>
                        <tr>
                            <td height="37">DOB</td>
                            <td>:</td>
                            <td>{{ $object->dob }}</td>
                        </tr>
                        <tr>
                            <td height="37">Sex</td>
                            <td>:</td>
                            <td>{{ $object->sex }}</td>
                        </tr>
                        
                        <tr>
                            <td height="37">Email</td>
                            <td>:</td>
                            <td>{{ $object->Email }}</td>
                        </tr>
                        <tr>
                            <td height="37">Contact</td>
                            <td>:</td>
                            <td>{{ $object->Contact }}</td>
                        </tr>
                        <tr>
                            <td height="37">Qualification</td>
                            <td>:</td>
                            <td>{{ $object->Quali }}</td>
                        </tr>
                        <tr>
                            <td height="37">Specialized In</td>
                            <td>:</td>
                            <td>{{ $object->Spce }}</td>
                        </tr>
                        <tr>
                            <td height="37">Toatal Area</td>
                            <td>:</td>
                            <td>{{ $object->Area }}</td>
                        </tr>
                        <tr>
                            <td height="37">About</td>
                            <td>:</td>
                            <td>{{ $object->About }}</td>
                        </tr>
                        <tr>
                            <td height="37">Image</td>
                            <td>:</td>
                            <td><img src="../farrmer/{{ $object->photo }}" alt="" width="100" height="100" /></td>
                        </tr>
                        <tr>
                            <td height="37">&nbsp;</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td height="37" align="right"><a href="{{url('/logout')}}" style=" text-decoration:none;">Home</a></td>
                            <td></td>
                            <td><a href="{{url('/viewGallary/' .$object->id)}}" style=" text-decoration:none;">View Gallary</a></td>
                        </tr>
                    </table>
@endforeach
</body>
</html>