<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <a href="/logout">Logout</a>
                    </div>
                </div>
            </nav>
            <form method="post" action="">
                <h2>Currency</h2>
                <h3>Привет, <?php echo $name?></h3>
                <div class="form-group">
                    <label for="">From</label>
                    <select class="form-select" aria-label="Default select example" name="from">
                        <?php foreach ($curses as $value): ?>
                            <option selected><?php echo $value['CharCode'];  ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">To</label>
                    <select class="form-select" aria-label="Default select example" name="to">
                        <?php foreach ($curses as $value): ?>
                            <option selected><?php echo $value['CharCode'];  ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="text" name="amount" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
            <?php if(isset($rate)) :?>
                <div class="rate">
                    Курс равен : <?php echo $rate ?>
                </div>
            <?php endif;?>
        </div>
    </div>
</body>
</html>
