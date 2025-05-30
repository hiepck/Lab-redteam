<?php
// Replace 'subdomain.example.com' with your actual subdomain
$subdomain = 'lookup.thm';

// Set the URL to which you want to redirect
$redirectURL = 'http://' . $subdomain;

// Perform the redirection
header('Location: ' . $redirectURL);
exit();
?>

