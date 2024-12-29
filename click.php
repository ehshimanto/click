<?php
// Counter file path
$counterFile = "counter.txt";

// Check if the counter file exists
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0); // Create file with 0 count if it doesn't exist
}

// Read the current counter value
$clickCount = (int)file_get_contents($counterFile);

// Check if the button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $clickCount++; // Increment the counter
    file_put_contents($counterFile, $clickCount); // Update the counter file
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Click Counter</title>
</head>
<body>
    <h1>PHP Button Click Counter</h1>
    <p>Button clicked: <strong><?php echo $clickCount; ?></strong> times</p>
    <form method="POST">
        <button type="submit">Click Me!</button>
    </form>
</body>
</html>