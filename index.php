<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    <form action="reg.php" method="post">
        <input type="text" name="login" placeholder="enter your login"><br>
        <input type="text" name="pass" placeholder="enter your password"><br>
        <input type="text" name="repedpass" placeholder="reped your password"><br>
        <input type="text" name="email" placeholder="enter your email"><br>
        <button type="submit">registration</button><br><br>
    </form>
    <form action="login.php" method="post">
        <input type="text" name="login" placeholder="enter your login"><br>
        <input type="text" name="pass" placeholder="enter your password"><br>
        <button type="submit">enter</button>
    </form>
</body>
</html>