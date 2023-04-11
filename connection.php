<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "response";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    //echo "Success";
} else {
    echo "failed";
}
$tablename = "registree";

$sql = "CREATE TABLE IF NOT EXISTS $tablename(First_Name VARCHAR(50) NOT NULL ,Middle_Name VARCHAR(50) NOT NULL,Last_Name VARCHAR(50) NOT NULL, Student_ID VARCHAR(10) PRIMARY KEY,EMAIL_ID VARCHAR(50) UNIQUE NOT NULL,Phone_Number INT(10) UNIQUE NOT NULL,DOB VARCHAR(8) NOT NULL,College VARCHAR(50) NOT NULL,Address VARCHAR(100) NOT NULL)";

if ($conn->query($sql) == TRUE) 
{
    echo "success";
} 
else { 
    {
        echo "failed";
    }
}
?>