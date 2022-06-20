<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtLink = $_POST['txtLink'];
$txtDescription = $_POST['txtDescription'];
$txtLinkProfile = $_POST['txtLinkProfile'];
$txtDescriptionProfile = $_POST['txtDescriptionProfile'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldLink`, `fldDescription`, `fldLinkProfile`, `fldDescriptionProfile`) VALUES ('0', '$txtName', '$txtEmail', '$txtLink', '$txtDescription', '$txtLinkProfile', '$txtDescriptionProfile')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>