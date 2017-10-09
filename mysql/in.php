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

    
   
        $sql = "INSERT INTO user_details ( firstname, lastname, email, password)
        VALUES ('anju', 'baby', 'anju@gmail.com','anju')";
        if ($conn->query($sql) === TRUE) 
        {

                echo "Registration done successfully";
        }
       else
       {
        echo "Error: " . $sql . "<br>" . $conn->error;

       }
   
  $conn->close();        
?>

</body>
</html>