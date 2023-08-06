<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="box" action="" method="post">
    <h1>Login</h1>
    <h3>
        <?php if(isset($_SESSION['success'])) :?>
            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
        <?php endif?>
    </h3>

    <div>Введите логин</div>
    <div>
        <?php if(isset($_SESSION['login'])) :?>
            <?php echo $_SESSION['login']; unset($_SESSION['login']); ?>
        <?php endif?>
        <input type="text" name="login" placeholder="login"">
    </div>

    <div>Введите пароль</div>
    <div>
        <?php if(isset($_SESSION['password'])) :?>
            <?php echo $_SESSION['password']; unset($_SESSION['password']); ?>
        <?php endif?>
        <input type="password" name="password" placeholder="password">
    </div>
    <input type="submit">
    <a href="/register">Are you not register?</a>
</form>
</body>
</html>