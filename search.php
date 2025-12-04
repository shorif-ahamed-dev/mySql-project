<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usersearch = trim($_POST['usersearch']);


    try {
        require_once 'includes/dbh.inc.php';

        $query = "SELECT * FROM users WHERE name = :usersearch;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':usersearch', $usersearch);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
        // die();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>

    <section>
        <?php
        if (!empty($results)) {
            echo "<h2>Search Results for '" . htmlspecialchars($usersearch) . "':</h2>";
            echo "<ul>";
            foreach ($results as $row) {
                echo "<li>Name: " . htmlspecialchars($row['name']) . ", Email: " . htmlspecialchars($row['email']) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<h2>No results found for '" . htmlspecialchars($usersearch) . "'</h2>";
        }
        ?>
    </section>

</body>

</html>