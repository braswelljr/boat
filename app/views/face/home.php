<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="<?php echo SITENAME; ?>" content="Homepage">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/home.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/logo/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/logo/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/logo/fontawesome/css/regular.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/logo/fontawesome/css/solid.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/logo/fontawesome/css/svg-with-js.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/logo/fontawesome/css/brands.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-auto sidebar" style="">
                <img class="sailboat side-icons" src="<?php echo URLROOT; ?>/public/logo/sailboat.png" alt="applogo">
                <i class="fas fa-user"></i>
            </div>
            <div class="col">

            </div>
        </div>
    </div>

    <script src="<?php echo URLROOT; ?>/public/js/all.js"></script>
    <script src="<?php echo URLROOT; ?>/public/js/fontawesome.js"></script>
    <script src="<?php echo URLROOT; ?>/public/js/regular.js"></script>
    <script src="<?php echo URLROOT; ?>/public/js/solid.js"></script>
    <script src="<?php echo URLROOT; ?>/public/js/svg-with-js.js"></script>
    <script src="<?php echo URLROOT; ?>/public/js/brands.js"></script>
</body>
</html>
