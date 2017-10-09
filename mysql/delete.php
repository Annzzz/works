 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
$conn = new mysqli('localhost', 'root', 'anjubaby', 'Users');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM user_details WHERE id=5";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>