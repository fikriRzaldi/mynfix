

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php if (!isset($_SESSION['is_login'])) { ?>
        <form action="../controller/LoginController.php" method="post">
            <label for="">Username</label>
            <input type="text" name="username" id="">
            <label for="">Password</label>
            <input type="password" name="password" id="">
            <button type="submit" name="login">Login</button>
        </form>
        <?php } else { ?>
        <a href="logout.php">Logout</a>
    <?php } 
    
    ?>
</body>
</html>