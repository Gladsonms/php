<html>
<center><b><u>ARRAY ELEMENTS</u></b></center>
<?php
$a=array('sai','vinu','ashly','lena','anu','anu',’vinu’,’manu’,’manu’,’anju’);
?>
<u>DISPLAYING ARRAY ELEMENTS</u>
<?php
foreach($a as $names)
{
echo"<br>"; echo"$names";
}
reset($a); print("<br>");
?>
<u>SORTED ARRAY</u>
<?php
$c=sort($a); foreach($a as $c)
{
print("<br>");
print("$c");
}
print("<br>");
?>
<u>REMOVING DUPLICATE ELEMENTS</u>
<?php
$dup=array_unique($a); foreach($dup as $nem)
{
print("<br>");
print("$nem");
}
print("<br>");
?>
<u>ARRAY IN REVERSE ORDER</u>
<?php print("<br>");
$rev=rsort($a); foreach($a as $rev)
{
print("$rev");
print("<br>");
}
?>
<u>REMOVING LAST ELEMENT<u>
<?php print("<br>"); array_pop($a); foreach($a as $b)
{
print("$b");
print("<br>");
}
?>
</html>