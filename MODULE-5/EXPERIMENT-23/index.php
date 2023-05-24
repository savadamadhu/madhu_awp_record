<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student registration </title>
</head>
<body>
<?php
$connection =  mysqli_connect("localhost","root","","madhu");
if($connection){
    echo "<center><h1>Database connected</h1></center>";
}
else{
  die("<h1> Database not connected </h1>");
}
?>
<?php 
if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $gender = $_POST['gender'];
 $DOB = $_POST['DOB'];
 $password = $_POST['password'];
}

$query = "INSERT INTO student(name,email,phone,address,gender,DOB,password) 
VALUES('$name','$email','$phone','$address','$gender','$DOB','$password')";
$result = mysqli_query($connection,$query);

if($result)
{
  echo("<center><br><h2>your data is submitted<h2></center>");
  
}
else{
  die("<br>your data is not submitted");
}

?>
    <center> <h2> student Registration Form</h2>
    
    <form  action="student.php" method="post">
        <label for="name">Name:</label>
<input type="text"  name="name"  id="name"><br>
<label for="email">mail:</label>
<input type="email"  name="email"  id="email"><br>

<label for="phone">Phone:</label>
<input type="tel"  name="phone"  id="phone"><br>

<label for="address">Address:</label>
<input type="text"  name="address"  id="address"><br>

<label for="gender">Gender:</label>
<select  name="gender"  id="gender">

  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="other">Other</option>
</select><br>
<label for="DOB">Date of Birth</label>
<input type="date"  name="DOB"  id="DOB"><br>

<label for="password">Password:</label>
<input type="password"  name="password" id="password" required><br>
<input type="submit" name ="submit" value="submit">
</form>
</center>

</body>
</html>
