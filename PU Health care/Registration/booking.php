<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
</head>
<body>
    <h2>Welcome to the Booking Page</h2>
    <form action="book.php" method="POST">
        <label for="service">Service:</label>
        <input type="text" name="service" required><br>

        <label for="datetime">Date and Time:</label>
        <input type="datetime-local" name="datetime" required><br>

        <button type="submit">Book</button>
    </form>
</body>
</html>
