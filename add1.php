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
$sql="INSERT INTO add_data (gene_symbol,location,phenotype,mim_no,pubmed_id,inheritance,clinical_synopsis)
VALUES ('$_POST[gene_symbol]','$_POST[location]','$_POST[phenotype]','$_POST[mim_no]','$_POST[pubmed_id]','$_POST[inheritance]','$_POST[clinical_synopsis]')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>