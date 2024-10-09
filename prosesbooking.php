<?php
session_start();
include 'db.php'; 


$flight = $_POST['flight'];
$departure = $_POST['departure'];
$arrival = $_POST['arrival'];
$date = $_POST['date'];
$price = $_POST['price'];
$destination = $_POST['destination'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$seat = $_POST['seat']; 

$stmt = $conn->prepare("INSERT INTO bookings (flight, departure, arrival, date, price, destination, name, email, phone, seat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $flight, $departure, $arrival, $date, $price, $destination, $name, $email, $phone, $seat);

if ($stmt->execute()) {
    $_SESSION['booking_success'] = "Tiket berhasil dipesan!";
   
    header("Location: weboutput.php?flight=$flight&departure=$departure&arrival=$arrival&date=$date&destination=$destination&name=$name&seat=$seat");
    exit();
} else {
    echo "Error: " . $stmt->error; 
}

$stmt->close(); 
$conn->close(); 
?>
