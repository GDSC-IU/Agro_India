<?php
//mysqli_connect('localhost', 'root', '');
//if (mysqli_connect_error()) {
//    echo "connected";
//}
//else {
//    echo "failed";
//}

// Create connection
$conn = new mysqli("localhost", "root", "", "hackathon");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Code to insert data
$name = $_POST["username"];
$id = $_POST["id"];
$type = $_POST["type"];
$phn_no = $_POST["mob_no"];
$pwd = $_POST["pwd"];
$sql = "INSERT INTO user (NAME, ID, TYPE, PHN_NO, PWD)
VALUES ('$name', '$id', '$type', '$phn_no', '$pwd')";
//$conn->query($sql);
if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
    echo '<script type="text/javascript">
    alert("Account created successfully!!!");</script>';
    if ($type === "customer") {
        echo '<script type="text/javascript">
        window.open("customer.php", "_self");
        </script>';
    }
    else {
        echo '<script type="text/javascript">
        window.open("seller.php", "_self");
        </script>';
    }
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Code to delete data
//$sql = "DELETE FROM user WHERE NAME='John'";
//$conn->query($sql);

$conn->close();
?>