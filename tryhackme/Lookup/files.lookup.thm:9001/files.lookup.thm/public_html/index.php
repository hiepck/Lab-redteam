<?php
// Check if the "login_status" cookie is set and has the value "success"
if (isset($_COOKIE['login_status']) && $_COOKIE['login_status'] === 'success') {
    // Successful login - Redirect to a page in the files subdomain
    header('Location: http://files.lookup.thm/elFinder/elfinder.html'); // Change 'http://files.lookup.thm/destination-page' to the appropriate URL
    exit();
} else {
    // Cookie for successful login not found - Redirect to the page where the request came from
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'http://lookup.thm'; // Set a default page to redirect if no referer is available
    header('Location: ' . $referer);
    exit();
}
?>

