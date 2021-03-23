<html>
<body>
<h2>ENTER THE NUM</h2><br>
<form action = "" method = "POST">
<input type="text" name="number"/>
<input type="submit"/>
</form>
</body>
</html>

<?php if($_POST)
{
$number=$_POST['number'];
$temp=$number;
$sum=0; while($temp!=0)
{
$rem=$temp%10; //find reminder
$sum=$sum+($rem*$rem*$rem);
$temp=$temp/10;
}
if($number==$sum)
echo "AMSTRONG NUMBER";
else
echo "NOT AN AMSTRONG NUMBER";
}
?>