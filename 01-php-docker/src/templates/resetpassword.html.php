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
        <h2>Resetting your password</h2>
        <form action="/resetpassword.php" method="post">
            <input type="email" name="email" placeholder="Twój email">
            <br>
            <button type="submit">Confirm</button>
        </form>
    </div>
</body>
</html>
