<html>
<body>
<h1> Employee Records</h1>
<HR COLOR="YELLOW">
<form name=f1 action="search.php" method="POST">
Enter Employee name: <input type=text name=t1>
<input type=submit name=b1 value="Find">
</form> 
</body>
</html>

<?php
if(isset($_POST['b1']))
{
$ec=$_POST['t1'];

$con=mysqli_connect("localhost","root","","empdb");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM empdet WHERE ename LIKE '$ec%'");

echo "<table style='border:5px double silver;'>";
echo "<tr bgcolor=silver>";
echo "<th> Employee code </th>";
echo "<th> Name </th>";
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
echo "<center>";
echo "<HR COLOR=YELLOW>";
?>