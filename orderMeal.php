<?php
require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $phone = $_POST['phone'];
    $nbOfPeople = $_POST["nbOfPeople"];
    $location = $_POST["location"];
    $message = $_POST["message"];

    // Ensure location is received properly
    if (!isset($location) || empty($location)) {
        echo "Location data is missing.";
        exit;
    }

    // Use backticks to escape table name if it's a reserved keyword
    $stmt = $con->prepare("INSERT INTO `order` (name, phone, nbOfPeople, location, message) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($con->error));
    }

    $stmt->bind_param("sssss", $username, $phone, $nbOfPeople, $location, $message);
    if ($stmt->execute() === false) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    } else {
        echo "Record inserted successfully.";
        echo '<script type="text/javascript">setTimeout(function() { window.location.href = "order.php"; }, 1000);</script>';
    }
    $stmt->close();
}
$con->close();
