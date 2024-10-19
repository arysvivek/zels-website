<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $complaint = htmlspecialchars($_POST['complaint']);

    $to = "arya@zels.in";
    $subject = "New Complaint from " . $name;
    $body = "Name: $name\nEmail: $email\n\nComplaint:\n$complaint";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Complaint filed successfully!";
    } else {
        echo "Failed to file complaint.";
    }
}
?>
