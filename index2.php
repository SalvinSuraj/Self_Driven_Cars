<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name="StaffDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE staff_db";
if (mysqli_query($conn,$sql))
 {
   echo "Database created successfully";
 } else {
  echo "Error creating database: " . mysqli_error($conn);
}

//sql to create the table
$sql = "CREATE TABLE TEACHERS_tbl(
id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(20) NOT NULL,
dept_name VARCHAR(10) NOT NULL)";

if(mysqli_query($conn,$sql)){
    echo "Table Teachers created successfully";
}else {
    echo "Error creating table ". mysqli_error($conn);
}

//Insert record
$sql = "INSERT INTO TEACHERS_tbl(first_name, last_name, dept_name) VALUES ('Ashok','Bingi','Maths')";

if(mysqli_query($conn, $sql)){
  echo " A new Record was added successfully into the table";
}
else{
  echo "Error:- ".$sql."<br>".mysqli_error($conn);
}

$sql = "DELETE FROM TEACHERS_tbl WHERE id=4";

if(mysqli_query($conn, $sql)){
  echo " The Record was deleted successfully from the table";
}
else{
  echo "Error:- ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
$conn->close();
?>