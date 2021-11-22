<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: LightYellow;
  padding: 20px;3
}
</style>
</head>
<body>
<img src="up1.jpg" width="100%">


<div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="fname">Enter Your Name</label>
    <input type="text" id="firstname" name="name" placeholder="Your name.."  required="required"/>

    <label for="lname">Enter Your Phone No</label>
    <input type="text" id="phone" name="phone" placeholder="Your Phone Number.."  required="required"/>
	
	
    <label for="lname">Product ID</label>
    <input type="text" id="id" name="id" placeholder="Please Enter Your Product Id.."  required="required"/>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
	  <option value="india">INDIA</option>
	  <option value="nepal">NEPAL</option>
    </select>
	
	
	<label for="country">State</label>
    <select id="state" name="state">
      <option value="bihar">Bihar</option>
      <option value="up">UP</option>
      <option value="delhi">Delhi</option>
	  <option value="gujrat">Gujrat</option>
	  <option value="jharkhand">Jharkhand</option>
    </select>

    <label for="subject">Enter Your Address Details</label>
    <textarea id="subject" name="address" placeholder="Write proper address .."   required="required"/ style="height:200px"></textarea>

    <input type="submit" value="Order Comfirm Now" name="Pay">        
	<a href="GASSmart.html"><input type="button" value=" Go Home Page " style="background-color: red; height:40px"></button></a>
	
	
  </form>
</div>

</body>
</html>


<?php
if(isset($_POST['Pay'])){
 include "config.php";
 $Name=$_POST['name'];
 $Phone=$_POST['phone'];
 $ProductId=$_POST['id'];
 $Country=$_POST['country'];
 $State=$_POST['state'];
 $Address=$_POST['address'];
 
 $sql=mysqli_query($con,"INSERT INTO GS1(Name,Phone,Productid,Country,State,Details)".
                 "VALUES('$Name','$Phone','$ProductId','$Country','$State','$Address')");
 
 if($sql){
	 echo" Order successful.";
 }
 else{
	 echo"Order Failed.";
 }
     

}
   
?>
