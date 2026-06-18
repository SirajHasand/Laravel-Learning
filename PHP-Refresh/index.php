<?php
$username = $_GET['user'] ?? 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($username); ?> 👋</h2>

<p>Login successful!</p>

</body>
</html>