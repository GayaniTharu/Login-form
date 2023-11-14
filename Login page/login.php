<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Here, you can add your authentication logic.
    // For a simple example, we'll check if the username and password match a predefined value.

    if ($username === "your_username" && $password === "your_password") {
        echo "Login successful!";
    } else {
        echo "Login failed. Please try again.";
    }
}
?>
