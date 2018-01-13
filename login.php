<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<section class="container">
    <form action="login.php" method="post">
        <div class="container-inputs">
            <label for="username">Username</label>
            <input type="text" id="username">
        </div>
        <div class="container-inputs">
            <label for="user-password">Password</label>
            <input type="text" id="user-password" name="password">
        </div>
        <div class="container-inputs">
            <input type="submit" value="Register" name="register">
        </div>
    </form>
</section>

</body>
</html>