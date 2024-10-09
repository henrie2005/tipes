<?php
session_start(); 
include 'db.php'; 


$email = isset($_SESSION['email']) ? $_SESSION['email'] : null; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Pesawat</title>
    <link rel="stylesheet" href="weboutput.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="ticket-container">
            <div class="header">
                <img src="img/logotipes.png" alt="Ftipes Logo" class="logo">
                <img src="img/citilink.png" alt="Citilink Logo" class="airline-logo">
            </div>

            <?php
            if ($email) {
               
                $stmt = $conn->prepare("SELECT * FROM bookings WHERE email = ?"); 
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                  
                    while ($row = $result->fetch_assoc()) {
                        $date = date('l, d F Y', strtotime($row['date'])); 
                        $departure = $row['departure']; 
                        $destination = $row['destination'];
                        $name = $row['name'];
                        $flight = $row['flight'];
                        $seat = $row['seat'];
                        $time = '16:00'; 

                        echo "<h2>$date, $time</h2>";
                        ?>
                        <p>Ekonomi</p>
                        <div class="flight-details">
                            <div class="flight-info">
                                <p>Jam</p>
                                <p class="highlight"><?php echo htmlspecialchars($departure); ?></p>
                            </div>
                            <div class="flight-info">
                                <p>Ke</p>
                                <p class="highlight"><?php echo htmlspecialchars($destination); ?></p>
                            </div>
                            <div class="flight-info">
                                <p>Nama</p>
                                <p class="highlight"><?php echo htmlspecialchars($name); ?></p>
                            </div>
                            <div class="flight-info">
                                <p>Kursi</p>
                                <p class="highlight"><?php echo htmlspecialchars($seat); ?></p>
                            </div>
                        </div>
                        <h3>Tiket anda telah dipesan</h3>
                        <hr>
                        <?php
                    }
                } else {
                    echo "<p>Belum ada tiket yang dipesan.</p>";
                }
                $stmt->close();
            } else {
                echo "<p>Email tidak ditemukan.</p>";
            }
            ?>
            <a href="index.php">
                <button type="button">OK</button>
            </a>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
