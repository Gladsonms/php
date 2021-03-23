<html>
<head>
<title>login</title>
<style type="text/css"> input
{
padding:10px;
border-top:none;
border-left:none;
border-right:none;
margin:10px;
font-weight:bold;
font-size:16px;
}
</style>
</head>
<body>
<center>
<form action="" method="POST">
<field set style="width:50%;margin-top::50px";>
<h4>login to continue</h4>
<input type="text" name="uname" maxlength="20" placeholder="username">
<br>
<input type="text" name="password" maxlength="20" placeholder="password">
<br>
<input type="submit" name="submit" value="login">
<input type="reset">
</fieldset>
</form>
</center>
</body>
</html>
<?php
$con=mysql_connect("localhost","root",'')or die("error".mysql_error($con));
mysql_select_db("log");
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$password=$_POST['password'];
$sql="select * from users where username='$uname' AND password='$password'";
$res=mysql_query($sql) or die (mysql_error($con));
$val=mysql_num_rows($res); if($val>0)
{
echo("<script>alert('login success')</script>");
}
else
{
echo("<script>alert('failed')</script>");
}
}
?>
