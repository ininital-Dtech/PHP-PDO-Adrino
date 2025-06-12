<?php
$dsn = 'mysql:host=localhost;dbname=library';
$username = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $username, $password, $options,);

    // Insert a new book
    $stmt = $pdo->prepare("INSERT INTO books (title, author, published_year, genre) VALUES (?, ?, ?, ?)");
    $stmt->execute(['The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Fiction']);

    // Retrieve all books
    $stmt = $pdo->query("SELECT * FROM books");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['title'] . ' by ' . $row['author'] . '<br>';
    }

    // Update a book's details
    $stmt = $pdo->prepare("UPDATE books SET genre = ? WHERE id = ?");
    $stmt->execute(['Classic', 1]);

    // Delete a book
    $stmt = $pdo->prepare("DELETE FROM books WHERE id = ?");
    $stmt->execute([1]);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
