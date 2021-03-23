<html>
<body bgcolor="cyan">
<h1>SELECTED FRUITS ARE:</h1>
<?php
$a=$_GET["s1"];
if(isset($a))
{
foreach($a as $b) echo($b."<br>");
}
?>
</body>
</html>