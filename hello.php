<?php

extract($_REQUEST);
$file = fopen("form-save.txt", "a") or die("Unable to open file!");

$dash = "\n----------------------------------------------------------------------------------------------------";
fwrite($file, "Name :");
fwrite($file, $name ."\n");
fwrite($file, "Email :");
fwrite($file, $email . "\n");
fwrite($file, "Phone Number :");
fwrite($file, $phone. "\n" );
fwrite($file, "Feed Back :");
fwrite($file, $address. "\n" . $dash . "\n");
//header("location: registrationUpdate.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hello.css">
    <title>Feedback Form</title>
</head>
<body>
    <div class="container">
        <form acton="">
            <h1>Feedback Form</h1>
            <hr>
            <h3 class="required">Requird Fields are followed by</h3>
            <p >
              <h3 class="required">Name:</h3>   <input type="text" name="name" placeholder="Example:Salvin Suraj" required>
            </p>
            <p>
                <h3 class="required">Email:</h3>  <input type="email" name="email" id="email"  placeholder="Example:salvinsuraj@gmail.com "required>
             </p>
             <p> <h3>Phone Number:</h3><input type="tel" name="phone" id="phone" maxlength="10" placeholder="Example:9847208543" required></p>
            <p>
                <legend><h3>Give Your Helpful Feedback</h3></legend>
                <textarea name="address" id="address" cols="60" rows="20" required></textarea>
            </p>
           
            
            
           
            <input type="submit" value="Submit">
            
        </form>
    </div>
</html>