<?php
$fname=$_POST['nm'];
$lname=$_POST['lm'];
$pass=$_POST['pw'];
$phno=$_POST['pn'];
$email=$_POST['ei'];
$addr=$_POST['ad'];
$gender=$_POST['r1'];

echo"submitted succesfully";
echo"<table border=1>";
echo "<tr><td>";
echo "<table>";
echo "<tr><td>First name:</td></tr>$fname</td></tr>";
echo "<tr><td>Last name:</td></tr>$lname</td></tr>";
echo "<tr><td>password:</td></tr>$pass</td></tr>";
echo "<tr><td>phone no:</td></tr>$phno</td></tr>";
echo "<tr><td>address:</td></tr>$addr</td></tr>";
echo "<tr><td>email:</td></tr>$ei</td></tr>";
echo "<tr><td>Gender:</td></tr>$r1</td></tr>";
echo "</tr></td>";
echo "</table>";
?>