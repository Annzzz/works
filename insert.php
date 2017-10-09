<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
$conn = new mysqli('localhost', 'root', 'anjubaby', 'users');

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}   
if ($_POST) 
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    
   
        $sql = "INSERT INTO registration ( firstname, lastname, email)
        VALUES ('$firstname', '$lastname', '$email')";
        if ($conn->query($sql) === TRUE) 
        {

                echo "Registration done successfully";
        }
       else
       {
        echo "Error: " . $sql . "<br>" . $conn->error;

       }
   }
          
?>
    <form action="<?php $_PHP_SELF ?>" method="POST">
FirstName: <input type="text" name="firstname" placeholder="YOUR FIRSTNAME"><br><br>
Lastname: <input type="text" name="lastname" placeholder="YOUR LASTNAME"><br><br>
email: <input type="text" name="email" placeholder="EMAIL"><br><br>
<input type="submit" value="REGISTER">
</form>
</body>
</html>