<?php
#if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "mathe0@gmx.fr";
    $headers = "From : ".$email;
    $text = "Tu as reçu un email de ".$name.".\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: contact.html");
#}
header("Location: contact.html");
?>