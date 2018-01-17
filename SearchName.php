<?php
$servername = "localhost";
$username = "root";
$password = "system";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn)
	{
    die("Connection failed: " . mysqli_error());
	}
//else
	//{
	//echo 'Connected successfully </br>';
	//}

$database_name = "studinfo";
$data = mysqli_select_db($conn,$database_name);
if(!$data)
{
	die("cant select student" . mysqli_error());
}
//else
//{
//	echo"database selected" . '</br>';
//}

$Name=$_POST['EnteredName'];
$sql = "SELECT * FROM STUDDETAILS WHERE FirstName = '$Name'" ;

$result = mysqli_query($conn, $sql) or die("Query not executed". mysqli_error());

$i=0;

while($row = mysqli_fetch_array($result))
{
	echo '<br/>' ."Name :" . $row['FirstName'] ." ". $row['LastName'].'<br/>';
	echo "Gender :" . $row['Gender'].'<br/>';
	echo "Phone No :" . $row['PhoneNumber'].'<br/>';
	echo "Email :" . $row['Email'].'<br/>';
	echo "ID :" . $row['ID'].'<br/>';
	echo "Address :" . $row['Address'];
	echo '</br>';
	$i++;
}
if($i==0)
{
	echo "No Data Availabe for name :" . $Name;
}
?>