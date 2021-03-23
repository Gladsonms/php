<html>
<head>
<title>STUDENT DEAILS</title>
</head>
<body>
<center>
<fieldset style = "margin-top:50px;
width:50%;
padding : 20px;">
<form action=" " method ="POST">
<input type ="text" name="regno" maxlength="2" placeholder = "Enter RollNumber"><br>
<input type ="submit" value = "Show DEtails" name ="submit">
</center>
</form>
</fieldset>
</body>
</html>
<?php if(isset($_POST['submit']))
{
$rno=$_POST['regno'];
mysql_connect('localhost','root',''); mysql_select_db("db");
$sql="select * from student where roll_no='$rno'";
$res=mysql_query($sql);
$c=mysql_num_rows($res); if($c=0)
{
echo "plz provide a valid roll no";
}
else
{
while($val=mysql_fetch_array($res))
{
echo "<center><b4>Student Details</h4>
<table border = 1>
<tr>
<th> Roll Number</th>
<th> Name of the student</th>
<th> Total marks</th>
<th> Grade</th></tr>
<tr>";
echo "<td>".$val['roll_no']."</td>";
echo "<td>".$val['name']."</td>";
echo"<td>".$val['mark']."</td>";
echo"<td>".$val['grade']."</td>"; echo "</tr>";
echo "</table>"; echo "</center>";
}
}
}
?>