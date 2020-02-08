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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/next.css">
    <title><?php echo SITENAME; ?></title>

</head>
<body>
    <div class="navbar shadow-lg p-3 mb-5 bg-white rounded">
        <text class="boat"><img class="logo" src="<?php echo URLROOT; ?>/logo/sailboat.png" alt="logo"><text><?php echo SITENAME; ?></text></text>
    </div>
    <div class="container-fluid">
        <!--<div class="row">
            <div class="col w-25 p-3" style="color: #45aaf2;">
                <img src="<?//php echo URLROOT; ?>/logo/sailboat.png" alt="..." class="profile-picture rounded-circle border border-primary rounded-lg">
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>
