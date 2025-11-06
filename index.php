<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "localhost";
$db   = "lempdb";
$user = "Irina";
$pass = "030212";

$time = "N/A";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
	$stmt = $pdo->query("SELECT NOW()");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$time = array_values($row)[0];
} catch (Exception $e) {
    $time = "Tietokantavirhe: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
  <meta charset="UTF-8">
  <title>LEMP-demo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #1e3a8a, #0f172a);
      color: #e5e7eb;
      text-align: center;
      padding: 60px;
    }
    h1 {
      color: #38bdf8;
    }
    .time-box {
      margin-top: 20px;
      padding: 10px 15px;
      background: #111827;
      border-radius: 8px;
      display: inline-block;
    }
  </style>
</head>
<body>
  <h1>LEMP-stack demo</h1>
  <p>Tämä sivu näyttää SQL-palvelimen kellonajan:</p>
  <div class="time-box">
    <?php echo htmlspecialchars($time); ?>
  </div>
</body>
</html>
co

