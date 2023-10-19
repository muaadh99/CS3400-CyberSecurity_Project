<?php
session_start();
if(!isset($_SESSION['user_data'])) {
    header("Location: login.php");
    exit;
}
?>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['user_data']['given_name']; ?>! Welcome to Pandora Company Limited.</h1>
</body>
</html>
