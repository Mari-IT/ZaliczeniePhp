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
    <h2>Setting new password</h2>

    <?php foreach($errors as $error){ ?>
            <p><?php echo $error ?></p>
    <?php } ?>

    <form method="post">
        <input type="password" name="newpass" placeholder="new password"
                            value="<?php echo ($newpass ?? '') ?>">
        
        <input type="password" name="newpassrepeated" placeholder="repeat new password"
                            value="<?php echo ($newpassrepeated ?? '') ?>">
        

        <button type="submit">Change password</button>
    </form>
</div>

</body>
</html>
