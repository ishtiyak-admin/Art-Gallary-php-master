<?php
	$servername = null;
$username = $app['ishtiyak'];
$password = $app['admin123'];
$dbname = $app['testbyish'];
$dbport = null;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 
	$dbport, "/cloudsql/mysql-php-test-2020:asia-south1:testsql1");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "\nConnected successfully\n";


echo "\ntesting gcloud php\n";

?>
<form action="index.php" enctype="multipart/form-data" method="post">
    Files to upload: <br>
   <input type="file" name="uploaded_files" size="40">
   <input type="submit" value="Send">
</form>
	
?>


art_galley