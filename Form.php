<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
	<?php include 'Form/Form.css' ?>
</head>
<body>

	<div class="1"></div>

	<div class="2">
		<h1>Student Record</h1>
		<form method="POST">
			<table>
				<tr><td>Name:<input type="text" name="Name" placeholder="Enter Student Name"></td></tr>
				<tr><td>Id:<input type="text" name="Id" placeholder="Enter Student Id"></td></tr>
				<tr><td>Maths:<input type="text" name="Maths" placeholder="Enter Marks"></td></tr>
				<tr><td>Physics:<input type="text" name="Physics" placeholder="Enter Marks"></td></tr>
				<tr><td>Social:<input type="text" name="Social" placeholder="Enter Marks"></td></tr>
				
				<!--<ul>
				<li>Name:<input type="text" name="Name" placeholder="Name"></li>
				<li>Id:<input type="text" name="Id" placeholder="Id"></li>
				<li>Maths:<input type="text" name="Maths" placeholder="Maths"></li>
				<li>Physics:<input type="text" name="Physics" placeholder="Physics"></li>
				<li>Social:<input type="text" name="Social" placeholder="Social"></li>
				<li><input type="submit" name="submit" value="submit"></li>
			    </ul>-->
			</table>
			<input type="submit" name="submit">
			
		</form>
	</div>

</body>
</html>

<?php

$username = "root";
$password = "";
$server = "localhost";
$database = "marks_info";

$con = mysqli_connect($server, $username, $password, $database);

//include 'connection.php';


if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Id = $_POST['Id'];
    $Maths = $_POST['Maths'];
    $Physics = $_POST['Physics'];
    $Social = $_POST['Social'];

    $insertquery = "insert into form(Name,Id,Maths,Physics,Social)VALUES('$Name','$Id','$Maths','$Physics','$Social')";

    $result = mysqli_query($con,$insertquery);

    if ($result) {
        ?>
        <script>
            alert("Data inserted Properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data not inserted");
        </script>
        <?php
    }
}

?>