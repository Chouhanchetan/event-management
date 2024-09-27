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

    // Prepare the SQL query
    $sql = "INSERT INTO contact (`Date`, `Description`, `Email`, `Event_Location`, `Event_Type`, `Guest`, `Name`, `Phone_Number`)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters to the statement
    mysqli_stmt_bind_param($stmt, "ssssssss", $date, $details, $email, $location, $plan, $guest, $fullName, $phone);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
      echo "<script>alert('Record inserted successfully');</script>";
      header("Location: event.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
