<?php

require_once "includes/auth.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>

<body>

<h1>Dashboard</h1>

<h2>
    Welcome,
    <?= htmlspecialchars(
        $_SESSION["user_name"],
        ENT_QUOTES,
        "UTF-8"
    ) ?>
</h2>

<p>
    Your role:
    <?= htmlspecialchars(
        $_SESSION["user_role"],
        ENT_QUOTES,
        "UTF-8"
    ) ?>
</p>

<hr>

<a href="students.php">
    Students
</a>

<br><br>

<a href="logout.php">
    Logout
</a>

</body>
</html>