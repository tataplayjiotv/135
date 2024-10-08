<?php
// Get the 'id' parameter from the URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Check if id is not empty, then proceed with the redirection
if (!empty($id)) {
    // Redirect to the new URL with the dynamic id
    header("Location: http://cp.b1g.ooo/live/86439765/87549537/$id.ts");
    exit;
} else {
    // If no id is provided, you can handle the error or redirect to a default page
    echo "No ID provided!";
}
?>
