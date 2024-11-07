<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: index.php'); 
    exit();
}

$user_id = $_SESSION['user_id']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Date</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($user_id); ?>!</h2>
    <p>Please choose a date:</p>

    
    <form action="choose_date.php" method="POST">
        <label for="date">Select a date:</label>
        <input type="date" id="date" name="date" required><br><br>
        <button type="submit">Submit</button>
    </form>

    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $chosen_date = $_POST['date'];
        echo "<p>You have selected: <strong>" . htmlspecialchars($chosen_date) . "</strong></p>";
    }
    ?>

    
    <a href="logout.php"><button>Sign Out</button></a>
</body>
</html>
