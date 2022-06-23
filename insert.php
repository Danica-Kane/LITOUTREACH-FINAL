<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "____DBNAME____";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){

   if(!empty(isset($_POST['name'])) && !empty(isset($_POST['email'])) && !empty(isset($_POST['link'])) && !empty(isset($_POST['description']))){

       $name = $_POST['name'];
       $email = $_POST['email'];
       $link = $_POST['link'];
       $description = $_POST['description'];
       $profileLink = $_POST['profileLink'];
       $descriptionProfile = $_POST['descriptionProfile'];


       $query = "insert into ___TABLENAME___(name, email, link, description, profileLink, descriptionProfile) values('$name', '$email', '$link', '$description', '$linkProfile', '$descriptionProfile')";

       $run = mysqli_query($conn, $query) or die(mysqli_error());

       if($run){
           echo "Form submitted succsessfully" ;
       } else {
           echo "Form not submitted";
       }

   } else {

       echo "all fields required";
   }

}
?>
