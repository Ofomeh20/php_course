<?php

?>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: echo.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h2>
    <p>You are now logged in.</p>
</body>
</html>