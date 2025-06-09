<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $anatomy = $_POST['anatomy'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, age, phone, gender, email, anatomy, weight, height, address, password)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisssssdds", $name, $age, $phone, $gender, $email, $anatomy, $weight, $height, $address, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
