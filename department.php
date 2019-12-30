<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>


	<?php
		$dept = "cse";


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "department";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

		echo "<b>".$dept."</b>";
		echo "<br>";
		echo "<br>";

		$sql = "select * from faculty where dept = '{$dept}'";
		$r = mysqli_query($conn,$sql);

		echo "<table>";
		echo "<tr>";
		echo "<td>S. No.</td>";
		echo "<td>Faculty Name</td>";
		echo "</tr>";

		while($row = mysqli_fetch_row($r)){
			echo "<tr>";
			echo "<td>".$row[1]."</td><td>".$row[3]."</td>";
			echo "</tr>";
		}

		echo "</table>";

	?>