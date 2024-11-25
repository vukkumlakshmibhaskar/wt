<?php
// Load the XML document
$xml = simplexml_load_file("users.xml") or die("Error: Cannot load XML file.");

// Get the User ID from the request (e.g., via GET or POST)
if (isset($_GET['user_id'])) {
    $userId = intval($_GET['user_id']);
    $found = false;

    // Search for the user in the XML
    foreach ($xml->user as $user) {
        if (intval($user->id) === $userId) {
            $found = true;
            echo "User Details:<br>";
            echo "ID: " . $user->id . "<br>";
            echo "Name: " . $user->name . "<br>";
            echo "Email: " . $user->email . "<br>";
            echo "Phone: " . $user->phone . "<br>";
            break;
        }
    }

    if (!$found) {
        echo "User with ID $userId not found.";
    }
} else {
    echo "Please provide a User ID.";
}
?>
