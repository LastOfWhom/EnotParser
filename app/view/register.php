<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/asset/style.css">
</head>
<body>
<form class="box" action="" method="post">
    <h1>Register</h1>
        <div>Введите логин</div>
        <div>
            <?php if(isset($_SESSION['login'])) :?>
                <?php echo $_SESSION['login']; unset($_SESSION['login']); ?>
            <?php endif?>
            <input type="text" name="login" placeholder="login">
        </div>


        <div>Введите пароль</div>
        <div>
            <?php if(isset($_SESSION['password'])) :?>
                <?php echo $_SESSION['password']; unset($_SESSION['password']); ?>
            <?php endif?>
            <input type="password" name="password" placeholder="password">
        </div>


        <div>Повторите пароль</div>
        <div>
            <input type="password" name="password_confirmation" placeholder="password">
            <?php if(isset($_SESSION['password_confirmation'])) :?>
                <?php echo $_SESSION['password_confirmation']; unset($_SESSION['password_confirmation']); ?>
            <?php endif?>
        </div>

    <input type="submit">

</form>
</body>
</html>