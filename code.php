<?php
include('connection.php');

if(isset($_POST['adddetails']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $message = $_POST['message'];

	 $sql = "INSERT INTO contactus (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";
	 if (mysqli_query($con, $sql)) {
?>
         <script>
             alert("New record created successfully !");
         </script>
         
 <?php    
        header("Location: contactus.php");   
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($con);
	 }
	 mysqli_close($con);
}


?>