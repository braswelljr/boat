
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Boat" content="Chat with Boat, an open source communication project">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/main.css">
    <title><?php echo SITENAME ?></title>

</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="bottom-left links">
            <div id="time"></div>
        </div>

        <div class="top-right links">
            <a href="<?php echo URLROOT ?>/users/login">Login</a>
            <a href="<?php echo URLROOT ?>/users/signup">Signup</a>
        </div>

        <div class="content">
            <div class="title m-b-md">
                <?php echo $data['title']; ?>
            </div>

            <div class="links">
                <a href="#">Docs</a>
                <a href="#">News</a>
                <a href="#">Blog</a>
            </div>
        </div>
    </div>
    <script src="<?php echo URLROOT ?>/js/time.js"></script>
</body>

</html>
