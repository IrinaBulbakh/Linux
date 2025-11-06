<?php
$host = "localhost";
$db   = "lempdb";
$user = "Irina";
$pass = "030212";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    echo "✅ Соединение с базой данных установлено!<br>";
    $stmt = $pdo->query("SELECT NOW() AS time");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Текущее время SQL-сервера: " . $row['time'];
} catch (PDOException $e) {
    echo "❌ Ошибка подключения: " . $e->getMessage();
}
?>
