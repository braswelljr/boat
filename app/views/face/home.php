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
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/home.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <div class="container">
        <div class="header container-md" id="header">
            <div class="logo"><img src="<?php echo URLROOT; ?>/logo/sailboat.png" alt="logo"></div>
            <div class="title"><?php echo SITENAME; ?></div>
        </div>
    </div>
</body>
</html>
