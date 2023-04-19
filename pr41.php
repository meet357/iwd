<html>
<head></head>
<body>
<?php
$mark=$_POST['sub1'];
$mark1=$_POST['sub2'];
$mark2=$_POST['sub3'];
$mark3=$_POST['sub4'];
	if($mark>=35)
	{
	$grade = "pass";
	}
	else
	{
  	$grade="fail";
	}

	if($mark1>=35)
	{
	$grade1 = "pass";
	}
	else
	{
  	$grade1="fail";
	}

	if($mark2>=35)
	{
	$grade2 = "pass";
	}

	else
	{	
 	 $grade2="fail";
	}

	if($mark3>=35)
	{
	$grade3 = "pass";
	}

	else
	{
  	$grade3="fail";
	}

$total=$mark+$mark1+$mark2+$mark3;
$avg=$total/4;
if($avg>=85)
	$grades="AA";
else if ($avg>=75 && $avg<84)
	$grades="AB";
else if($avg>=65 && $avg<74)
	$grades="BB";
else if ($avg>=55 && $avg<65)
	$grades="BC";
else if($avg>=45 && $avg<54)
	$grades="CC";
else if ($avg>=40 && $avg<44)
	$grades="CD";
else if($avg>=35 && $avg<39)
	$grades="DD";
else 
	$grades="FF";

?>


<form method="POST" action="pr4.php">
<center><b>
<table border="1">
<tr>
<br>
<td align="center=10">SubjectCode</td>
<td align="center=10">SubjectName</td>
<td align="center=10">EnterMark</td>
<td align="center=10">Mark     </td>
<td align="center=10">Grade    </td>
</tr><br>
<tr>
<td align="center">4340701</td>
<td align="center">AOOP</td>
<td><input type="text" name="sub1" align="center"></td>
<td><?php echo $mark ?></td>
<td align="center"><?php echo $grade ?></td>
</tr><br>
<tr>
<td align="center">4340702</td>
<td align="center">CN</td>
<td><input type="text" name="sub2" align="center"></td>
<td><?php echo $mark1 ?></td>
<td align="center"><?php echo $grade1 ?></td>
</tr><br>
<tr>
<td align="center">4340703</td>
<td align="center">OOP</td>
<td><input type="text" name="sub3" align="center"></td>
<td><?php echo $mark2 ?></td>
<td align="center"><?php echo $grade2 ?></td>
</tr><br>
<tr>
<td align="center">4340704</td>
<td align="center">CPD</td>
<td><input type="text" name="sub4" align="center"></td>
<td><?php echo $mark3 ?></td>
<td align="center"><?php echo $grade3 ?></td>
</tr><br>
<tr>
<td></td>
<td align="center">Total:</td>
<td><?php echo $total ?></td>
</tr>
<tr>
<td></td>
<td align="center">AVG:</td>
<td><?php echo $avg ?></td>
</tr>
<tr>
<td></td>
<td align="center">Greade:</td>
<td><?php echo $grades ?></td>
</tr>
<tr>
<td>
<input type="submit" name"submit" />
</td>
</tr>
</b></center>
</table>
</form>

</body>
</html>