<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST["name"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$email = $_POST["email"];
$event = $_POST["event"];
$gender = $_POST["gender"];
$age = $_POST["age"];
}

// Create a connection to the database
$conn = new mysqli('localhost', 'root', '', 'prg1');
// Check the connection
if($conn){
    echo("connection sucessfull \n");
    $sql1 ="insert into `prg1` (name, contact, address, email, event, gender, age)
            values ('$name','$contact','$address','$email','$event','$gender','$age')";
    $result=mysqli_query($conn,$sql1);
    if($result){
    echo "Registration successful!";
    }
    else{
        die(mysqli_error($conn));
    }
}
else {
    die("Connection failed: " . $conn->connect_error);
}
// Close the database connection
$conn->close();
?>
