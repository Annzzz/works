 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php

// Create connection
$conn = new mysqli('localhost', 'root', 'anjubaby', 'Users');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE user_details SET lastname='babychan' WHERE id=11";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>