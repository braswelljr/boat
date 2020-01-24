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

        <form class="needs-validation" novalidate>
            <div class="form-group">
                <label for="email">Email or Username</label>
                <input type="text" class="form-control form-control-lg" required>
                <div class="valid-feedback">
                    Good!
                </div>
                <div class="invalid-feedback">
                    Please provide a valid Username or E-mail!
                </div>
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" class="form-control form-control-lg" required>
                <div class="valid-feedback">
                    Good!
                </div>
                <div class="invalid-feedback">
                    Please provide a valid password!
                </div>
            </div>
            <button class="btn btn-outline-primary btn-lg btn-block" type="submit">Login</button>
        </form>
    </div>

    <script src="<?php echo URLROOT; ?>/js/formvalidate.js"></script>
    <script src="<?php echo URLROOT; ?>/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/popper-1.16.0.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/bootstrap.js"></script>
</body>
</html>
