<?php
include_once 'model/databaseConn.php';

//Variables
$sql;
$id = randomNumber();
$fname;
$lname;
$address;
$city;
$state;
$zipcode;


$sql = "SELECT * FROM user_info WHERE id=$id";
//Grab query info
$result = $conn->query($sql);


//output data depending on id
while ($row = $result->fetch_assoc()) {
    $fname = $row['FirstName'];
    $lname = $row['LastName'];
    $address = $row['Address'];
    $city = $row['City'];
    $state = $row['State'];
    $zipcode = $row['ZipCode'];
}

$conn->close();

function randomNumber() {
    $number = mt_rand(0, 100);
    return $number;
}
?>

