<?php

$host = 'localhost';
$dbname = 'home';
$username = 'root';
$password = '1112';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DATABASEGA ULANDI<br><br>";
} catch (PDOException $e) {
    echo "DATEBASEGA ULANMADI: " . $e->getMessage();
    exit();
}

try {

    $query = "SELECT * FROM world";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    echo "<table border='1'>";
    echo "<tr><th>nomber1</th><th>nomber2</th><th>nomber3</th></tr>";

    foreach ($stmt as $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nomber1']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nomber2']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nomber3']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

