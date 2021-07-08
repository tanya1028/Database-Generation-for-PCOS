<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biodb_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo 'Connected successfully<br/>';
$sql="INSERT INTO signup (name, email, mobile, symptoms, comments)
VALUES
('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[symptoms]','$_POST[comments]')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>