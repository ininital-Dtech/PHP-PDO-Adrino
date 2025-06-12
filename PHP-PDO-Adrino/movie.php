<?php
$dsn = 'mysql:host=localhost;dbname=video_store';
$username = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    // Insert a new movie
    $stmt = $pdo->prepare("INSERT INTO movies (title, director, release_year, available) VALUES (?, ?, ?, ?)");
    $stmt->execute(['Inception', 'Christopher Nolan', 2010, true]);

    // Retrieve all movies
    $stmt = $pdo->query("SELECT * FROM movies");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['title'] . ' directed by ' . $row['director'] . ' (' . $row['release_year'] . ')<br>';
    }

    // Update movie availability
    $stmt = $pdo->prepare("UPDATE movies SET available = ? WHERE id = ?");
    $stmt->execute([false, 1]);

    // Delete a movie
    $stmt = $pdo->prepare("DELETE FROM movies WHERE id = ?");
    $stmt->execute([1]);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
