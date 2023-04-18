<html>
<head>
</head>
<center>
<body><br>
<?php
if(isset($_REQUEST['submit']))
{
$CAR=$_POST['CAR'];
} 

if($CAR=="safari" || $CAR=="nexo" || $CAR=="tigor" || $CAR=="tiago")
{
$res="TATA";
}
elseif($CAR=="XUV700" || $CAR=="XUV300" || $CAR=="bolero")
{
$res="MAHINDRA";
}

elseif($CAR=="i20" || $CAR=="vrna" || $CAR=="venue" || $CAR=="creta")
{
$res="HYUNDAI";
}

elseif($CAR=="swift" || $CAR=="alto" || $CAR=="baleno" || $CAR=="brezza")
{
$res="SUZUKI";
}
else
{
echo "car not found";
}

?>
<form method="POST" action="pr4_1.php">
<table>
<tr>
<td>ENTER CAR NAME: <input type="text" name="CAR" value="" placeholder="Enter CAR Name"></td>
</tr><br>

<tr>
<td><input type="submit" name="submit"></td>
</tr>

<tr><td>
<?php echo $res." ".$CAR; ?>
</td></tr>
</table>
</form>

</body>
</html>