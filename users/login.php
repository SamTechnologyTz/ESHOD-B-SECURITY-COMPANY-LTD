<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingia - ESHOD & B SECURITY COMPANY LIMITED</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="login-container">
    <h2>Ingia kwenye Akaunti</h2>
    <p>Weka taarifa zako za kuingia ili kufikia akaunti yako.</p>
    <form action="process_login.php" method="POST">
        <label for="email">Barua Pepe:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Nenosiri:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Ingia</button>
        <p>Hujaandikishwa? <a href="register.php">Jisajili hapa</a>.</p>
    </form>
</div>

</body>
</html>
