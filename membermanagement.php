<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $membership_status = $_POST["membership_status"];
    $notes = $_POST["notes"];


   
    $first_name= htmlspecialchars(trim($first_name));
    $last_name = htmlspecialchars(trim($last_name));
    $membership_status = htmlspecialchars(trim($membership_status));
    $notes= htmlspecialchars(trim($notes));

  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "auth";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO membermanagement (first_name, last_name, membership_status,  notes)
            VALUES ('$firstname', '$lastname', '$membershipstatus', '$notes')";

    if ($conn->query($sql) === TRUE) {
      
        header("Location: membersuccess.php");
        exit();
    } else {
       
        header("Location: error.php");
        exit();
    }

}
?>
