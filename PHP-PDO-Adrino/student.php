<?php
$dsn = 'mysql:host=localhost;dbname=school';
$username = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    // Insert a new attendance record
    $stmt = $pdo->prepare("INSERT INTO attendance (student_name, date, status) VALUES (?, ?, ?)");
    $stmt->execute(['John Doe', '2025-06-11', 'Present']);

    // Retrieve all attendance records
    $stmt = $pdo->query("SELECT * FROM attendance");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['student_name'] . ' was ' . $row['status'] . ' on ' . $row['date'] . '<br>';
    }

    // Update an attendance record
    $stmt = $pdo->prepare("UPDATE attendance SET status = ? WHERE id = ?");
    $stmt->execute(['Absent', 1]);

    // Delete an attendance record
    $stmt = $pdo->prepare("DELETE FROM attendance WHERE id = ?");
    $stmt->execute([1]);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
