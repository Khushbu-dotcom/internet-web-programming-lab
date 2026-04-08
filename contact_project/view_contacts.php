<?php

$xml = simplexml_load_file("contacts.xml");

echo "<h2>Stored Contacts</h2>";

foreach($xml->contact as $contact) {
    echo "Name: " . $contact->name . "<br>";
    echo "Email: " . $contact->email . "<br>";
    echo "Subject: " . $contact->subject . "<br>";
    echo "Message: " . $contact->message . "<br>";
    echo "<hr>";
}

?>