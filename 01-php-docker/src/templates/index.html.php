<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $title ?></title>
</head>
<body>

<div class="wrapper">
    <form action="/secret.php" method="post">
        <input type="text" name="login" placeholder="login">
        <br>
        <input type="password" name="pass" placeholder="password"/>
        <br>
        <button type="submit">Log in</button>
    </form>
    <a href="resetpassword">Forgot your password?</a>
</div>

</body>
</html>
