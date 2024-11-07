<?php
require '../config/app.php';
?>
<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingia - <?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="login-container">
    <h2>Ingia kwenye Akaunti</h2>
    <p>Weka taarifa zako za kuingia ili kufikia akaunti yako.</p>
    <form action="" method="POST">
        <label for="email">Barua Pepe:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Nenosiri:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Ingia</button>
        <p>Hujaandikishwa? <a href="register.php">Jisajili hapa</a>.</p>
    </form>
</div>
<script scr="../application/users.js"></script>
</body>
</html>
