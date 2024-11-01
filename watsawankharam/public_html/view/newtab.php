<?php
// newtab.php

// Check if the 'eventsid' parameter is set in the URL
if (isset($_GET['eventsid'])) {
    // Retrieve the 'eventsid' value from the URL
    $eventsid = $_GET['eventsid'];

    // Now you can use $eventsid for further processing, such as querying the database, etc.
    // Example: Fetch data based on $eventsid
    // $result = // Your database query using $eventsid
    
    // Example: Display the received eventsid
    echo "Received eventsid: " . $eventsid;
} else {
    // Redirect or handle the case when 'eventsid' is not present in the URL
    echo "No eventsid parameter provided";
}
?>
