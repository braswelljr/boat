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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/home.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="shadow-lg p-3 mb-5 bg-white rounded header">
            <img class="logo" src="<?php echo URLROOT; ?>/logo/sailboat.png" alt="logo"><?php echo SITENAME; ?>
        </div>
    </div>
</body>
</html>
