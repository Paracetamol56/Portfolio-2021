<?php
/*
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "mathe0@gmx.fr";
    $headers = "From : $email \r\n";
    $text = "Tu as reçu un email de $name \n\n Message : \n $message";

    mail($mailTo, $subject, $text, $headers);
}
header("Location: contact.html");
*/

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'https://paracetamol56.github.io/Portfolio-2021'

    $email_subject = "Nouveau contact"

    $email_body =   "Nom d'utilisateur : $name.\n".
                    "Email : $visitor_email.\n".
                    "Message :\n $message\n";
    
    $to = "matheo.galu56@gmail.com"

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>