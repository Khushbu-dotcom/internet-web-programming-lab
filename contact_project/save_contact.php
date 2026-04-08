<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


// ---------------- EMAIL PART ----------------
$to = "yourgmail@gmail.com";   // replace with your email
$headers = "From: $email";

$mail_message = "Name: $name\n";
$mail_message .= "Email: $email\n";
$mail_message .= "Subject: $subject\n";
$mail_message .= "Message: $message";

mail($to, $subject, $mail_message, $headers);


// ---------------- XML PART ----------------
$xml = simplexml_load_file("contacts.xml");

$contact = $xml->addChild("contact");

$contact->addChild("name", $name);
$contact->addChild("email", $email);
$contact->addChild("subject", $subject);
$contact->addChild("message", $message);

$xml->asXML("contacts.xml");

echo "Contact Saved Successfully!";
echo "<br><a href='view_contacts.php'>View Contacts</a>";

?>