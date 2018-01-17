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

//take value from form on submit

$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$gender = $_POST['Gender'];
$phone = $_POST['PhoneNumber'];
$email =$_POST['Email'];
$id = $_POST['Uid'];
$address = $_POST['Address'];


//check if the ID already exiist

$checksql ="SELECT * FROM STUDDETAILS WHERE ID='$id'";
$check = mysqli_query($conn,$checksql);
$checkrows=mysqli_num_rows($check);

if($checkrows>0)
{
	die($id . " Already exists.. Please enter a unique ID");
}

//insert values into database

$insertsql ="INSERT INTO STUDDETAILS (`FirstName`, `LastName`, `Gender`, `PhoneNumber`, `Email`, `ID`, `Address`) VALUES('$fname','$lname','$gender','$phone','$email','$id','$address')";


$result = mysqli_query($conn, $insertsql);

if(!$result)
{
	die("Query not executed" .mysqli_error());
}
else 
{
	echo "Data submitted successfully";
}

