<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
$conn = new mysqli('localhost', 'root', 'anjubaby', 'Users');

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}   
if ($_POST) 
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
   
        $sql = "INSERT INTO user_details( firstname, lastname, email, password)
        VALUES ('$firstname', '$lastname', '$email', '$password')";
        if ($conn->query($sql) === TRUE) 
        {

                echo "Registration done successfully";
        }
       else
       {
        echo "Error: " . $sql . "<br>" . $conn->error;

       }
   }
  $conn->close();         
?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
First Name: <input type="text" name="firstname" placeholder="YOUR FIRSTNAME"><br><br>
Last Name: <input type="text" name="lastname" placeholder="YOUR LASTNAME"><br><br>
email: <input type="text" name="email" placeholder="EMAIL"><br><br>
password: <input type="password" name="password" placeholder="PASSWORD"><br><br> 
<input type="submit" value="REGISTER">
</form>
</body>
</html>