<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST["fullname"];
    $email = $_POST["mail"];
    $phone = $_POST["contact"];
    $date = $_POST["date"];
    $location = $_POST["location"];
    $plan = $_POST["planning"];
    $details = $_POST["details"];
    $guest = $_POST["guests"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "enchantedevents";

    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO contact ([Date], [Description], Email, Event_Location, Event_Type, Guest, [Name], [Phone_Number])
    VALUES ($date,'".$details."', '".$email."','".$location."', '".$plan."','".$guest."','".$fullName."', $phone)";

    if (mysqli_query($conn, $sql)) {
    echo "<script>alert('');</script>";
    
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>