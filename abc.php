<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the email and password from the form data
	$email = $_POST["email"];
	$password = $_POST["password"];


	// If the user is authenticated, redirect them to the dashboard
	if ($authenticated) {
		$_SESSION["email"] = $email;
		header("Location: dashboard.php");
		exit;
	}

	// If the user is not authenticated, display an error message
	else {
		$_SESSION["error"] = "Invalid email or password";
		header("Location: login.php");
		exit;
	}
}
?>