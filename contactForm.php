<?php
if (isset($_POST["submit"])) {
    // Get form data
    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email to recipient
    $mailTo = "tommyphelps16@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    // Send email
    if (mail($mailTo, $subject, $txt, $headers)) {
        header("Location: index.php?mailsend=success");
        exit();
    } else {
        header("Location: index.php?mailsend=error");
        exit();
    }
} else {
    // Redirect back if form not submitted
    header("Location: index.php");
    exit();
}
?>
