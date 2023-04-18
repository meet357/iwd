<html>
<head>
<title>salary</title>
</head>
<body><br>
<form method="POST">
<table>
<tr>
<td><input type="text" name="salary" value="" placeHolder="Enter basic salary"></td>
</tr><br>

<tr>
<td><input type="submit" name="submit" value="submit" /></td>
</tr>

</table>
</form>
<?php
if(isset ($_POST['submit']))
{
 $basic_salary=$_POST['salary'];
 $DA=0.5*$basic_salary;
 $HRA=0.1*$basic_salary;
 $ME=0.04*$basic_salary;
 $GRS=$basic_salary+$DA+$HRA+$ME;
 $INS=0.07*$GRS;
 $PF=0.05*$GRS;
 $DC=$INS+$PF;
 $NS=$GRS-$DC;

 echo"NET SALARY=".$NS;
 echo", GROSS SALARY=".$GRS;
 echo", INSURANCE=".$INS;

}
?>

</body>
</html>






