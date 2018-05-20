<?php
function  sturecord()
{ 
  $dt=mysqli_connect("localhost","root","","internships");
	
 if(isset($_POST["submit"]))
  {
	$name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $contact=$_POST["contact"];
    $city=$_POST["city"];
   
 	if(mysqli_query($dt,"INSERT INTO `student` (`id`, `name`, `email`, `password`, `contact`, `city`) VALUES (NULL, '".$name."', '".$email."', '".$password."', '".$contact."', '".$city."');"))
     { 
        echo '<script>window.alert("Successfully submitted");</script>';
     }
  }
}

function  emprecord()
{ 
  $dt=mysqli_connect("localhost","root","","internships");
	
 if(isset($_POST["submit"]))
  {
	$org=$_POST["org"];
	$name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $contact=$_POST["contact"];
    $city=$_POST["city"];
   
 	if(mysqli_query($dt,"INSERT INTO `employee` (`id`, `orgname`, `name`, `email`, `password`, `contact`, `city`) VALUES (NULL, '".$org."', '".$name."', '".$email."', '".$password."', '".$contact."', '".$city."');"))
     { 
        echo '<script>window.alert("Successfully submitted");</script>';
     }
  }
}

?>