<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("failed connection" . mysqli_connect_error());
    }
    else {echo "success";}
    // connected;
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `Kalarav_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Travel form</title>
</head>
<body>
    <img src="Kalarav.avif" alt="Kalarav,Halol">
    <div class="container">
        <h1>Welcome to Kalarav School</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip:</p>
        
        <form action="index.php" method="post">
            <input type="text" id="name" name="name" placeholder="Enter your name">
            <input type="number" id="age" name="age" placeholder="Enter your age">
            <input type="text" id="gender" name="gender" placeholder="Enter your gender">
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <input type="number" id="phone" name="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info here"></textarea>
            <button class="btn">Submit</button>
            <button class="res">Reset</button>
        </form>
    </div>
    
    <script src="scrip.js"></script>
</body>
</html>