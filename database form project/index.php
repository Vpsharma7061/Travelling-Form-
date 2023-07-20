<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `manalitrip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <!-- Details of student for travelling  -->
       <!-- It is the travelling form where we store the data of student who wants to travell -->
        <img class="bg" src="bg.jpg" alt="IIIT Bhagalpur" srcset="">
    <div class="container">
        <h1>Welcome to IIIT BHAGALPUR manali Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the Trip</p>
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="text" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other info here"></textarea>
        <button class="btn">submit</button>
        <!-- <button class="button">Reset</button> -->



        </form>


        <!-- // post : ye secure hota hai ar isme password vej skte hai
        // post : form submission ke liye used hota hai  
        // get : ye url pe show hota hai  -->

        <!--**** short information about id and class***** 

        id : ye uniquely identify krta hai element ko
        class: hum bht sare element ko same class de skte hai ar usko ek sath access kr skte hai
         -->









    </div>
     <script src="script.js"></script>

      


</body>
</html>