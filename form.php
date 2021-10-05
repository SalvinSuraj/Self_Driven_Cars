<?php
      if(isset($_POST['name'])){
      $server = "localhost";
      $username = "root";
      $password = "root";
      $database = "website_form1";

      $conn = mysqli_connect($server,$username,$password,$database);
      if(!$conn){
      die("connection to the database failed due to".mysqli_connect_error());
      }

      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address= $_POST['address'];
      $pincode = $_POST['pincode'];
       
       echo"The database has been successfully been connected to the file";
      $sql = "INSERT INTO form('Name','Gender','Phone','Email','Address','Pincode') VALUES ('$name','$gender','$phone','$email','$address','$pincode')";
     // echo '$sql';
      if($conn->query($sql) == true)
      {
         echo"Record is successfully inserted";
      }
      else{
          echo"Error $sql <br> $conn->error"; 
      }
      $conn->close();
    }
?>

