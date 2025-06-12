<?php
$dsn = 'mysql:host=localhost;dbname=company_db';
$username = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    // Insert a new timelog
    $stmt = $pdo->prepare("INSERT INTO timelogs (employee_name, log_date, log_time, type) VALUES (?, ?, ?, ?)");
    $stmt->execute(['Jane Smith', '2025-06-11', '09:00:00', 'IN']);

    // Retrieve all timelogs
    $stmt = $pdo->query("SELECT * FROM timelogs");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['employee_name'] . ' logged ' . $row['type'] . ' at ' . $row['log_time'] . ' on ' . $row['log_date'] . '<br>';
    }

    // Update a timelog
    $stmt = $pdo->prepare("UPDATE timelogs SET type = ? WHERE id = ?");
    $stmt->execute(['OUT', 1]);

    // Delete a timelog
    $stmt = $pdo->prepare("DELETE FROM timelogs WHERE id = ?");
    $stmt->execute([1]);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
