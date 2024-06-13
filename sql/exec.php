<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostgreSQL Query Executor</title>
</head>
<body>
    <h1>Execute PostgreSQL Query</h1>
    <form action="" method="post">
        <label for="query">SQL Query:</label><br>
        <textarea id="query" name="query" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Execute">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include("../include/connexion.inc.php");

        // Connect to PostgreSQL database
        $conn = $bdd;

        if (!$conn) {
            echo "An error occurred connecting to the database.";
            exit;
        }

        // Get the SQL query from the form
        $query = $_POST['query'];

        try {
            // Execute the query
            $queries = explode(';', $query);
            foreach ($queries as $q) {
                $q = trim($q);
                if (!empty($q)) {
                    $stmt = $bdd->prepare($q);
                    $stmt->execute();
                }
            }

            // Display the results
            echo "<h1>Query Results</h1>";
            echo "<p>Query executed successfully.</p>";

        } catch (Exception $e) {
            echo "An error occurred executing the query.";
            echo $e->getMessage();
            exit;
        }
    }
    ?>
</body>
</html>
</html>

