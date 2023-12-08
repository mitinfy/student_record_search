<html>
<head>
  <style>
    body{background-image: linear-gradient(to right, skyblue, lightgreen);}
  </style>
  </head>
<body>
<center>
<h1> Employee records </h1>  <hr>

<form name=f1 action="show_all.php" method="POST">
  Enter Employee code: <input type="text" name="t1">
  <input type="submit" name="s1" value="Find">
</form>

<?php
if(isset($_POST['s1']))
{
$ec=$_POST['t1'];


$con=mysqli_connect("localhost", "root", "", "empdb");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM empdet where ecode='$ec'");


echo "<table border=1>";
echo "<tr>";	
echo "<th> Employee code </th>";
echo "<th> Employee name </th>";
echo "<th> Salary </th>";
echo "</tr>";
while($row = mysqli_fetch_array($result))
  {
echo "<tr>";
echo "<td>" .$row['ecode']. "</td>";
echo "<td>" .$row['ename']. "</td>";
echo "<td>" .$row['sal']. "</td>";
}
}
echo "</table>";
?>