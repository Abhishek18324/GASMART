<?php
$dbc=mysqli_connect('localhost','root','','database name')
   or die("Error Connecting to Preferred database...");


$FirstName=$_POST['firstname'];
$LastName=$_POST['lastname'];
$Email=$_POST['email'];
$passWord=$_POST['password']; 


// Make sure Someone isn't registered using this username.....

$query="SELECT * FROM student_login_details WHERE USERNAME ='$email'"; 
$query="SELECT * FROM student_login_details WHERE PASSWORD='$passWord'";
$data=mysqli_query($dbc,$query);
 $result=mysqli_fetch_array($data);
 
 
 //Insert User Sign up details into the database.....   

if($result== 0){
$query="INSERT INTO student_login_details(FIRST_NAME,LAST_NAME, EMAIL,PASSWORD)".
       "VALUES('$firstName','$lastName','$email','$passWord')";


		 
		 
	mysqli_query($dbc,$query);
	echo('<h1>Your account had been registerd as '.$userName.'.</h1>');
$query="INSERT INTO students_profile(EMAIL,PASSWORD)".
        "VALUES('$email','$passWord')";
   mysqli_query($dbc,$query);		
   mysqli_close($dbc);
   
	exit();}
 else{
	
//An account already exist for this username,so display a warning message.....
 
 echo("<h1>*An account  already exist with this username/password. Please use the different one.*</h1>");
	

	}
  
 header("refresh:3;url=../Student Login.php"); 
 ?>