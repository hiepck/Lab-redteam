<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the submitted credentials
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real application, you would validate the credentials against a database or other secure storage.
    // For this example, we will hardcode the credentials for simplicity.

    // Replace these with your actual valid credentials
    $validUsernames = array("jose", "admin"); // Add more valid usernames if needed
    $validUsername = "jose";
    $validPassword = "password123";

    if ($username === $validUsername && $password === $validPassword) {
        // Successful login - Redirect to /elFinder
        setcookie("login_status", "success", time() + 3600, "/", "lookup.thm");
        header("Location: http://files.lookup.thm");
        exit(); // Important: Make sure to exit after redirection to prevent further script execution.
    } else {
        // Wrong username or password
        if (in_array($username, $validUsernames) && $password !== $validPassword) {
            echo "Wrong password. Please try again.";
        } else {
            echo "Wrong username or password. Please try again.";
        }

        echo "<br>Redirecting in 3 seconds.";
        header("Refresh: 3; url=http://lookup.thm"); // Use Refresh header to redirect after a delay
        exit();
    }
}
?>

