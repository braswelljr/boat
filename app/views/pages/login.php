<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <div class="container">
        <div class="header" id="title">
            <?php echo $data['title']; ?>
        </div>

        <form class="form-control">
            <label for="email"></label>
            <input type="text" class="form-control" autocomplete>
        </form>
    </div>


    <script src="<?php echo URLROOT; ?>/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/popper-1.16.0.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/bootstrap.js"></script>
</body>
</html>
