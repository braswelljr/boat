<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/form.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <div class="container">
        <div class="site-name">
            <img src="<?php echo URLROOT; ?>/logo/sailboat.png" alt="..." height="43px">
            <?php echo SITENAME; ?>
        </div>

        <div class="header" id="title">
            <?php echo $data['title']; ?>
        </div>

        <form class="needs-validation" action="<?php echo URLROOT; ?>/users/login" method="post" novalidate>
            <div class="form-group">
                <label for="email" style="font-size: 1.5em;">Email or Username</label>
                <input type="text" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" name="name" placeholder="Email or Username" value="<?php echo $data['name']; ?>" required>
                <div class="valid-feedback">
                    Good!
                </div>
                <div class="invalid-feedback">
                    <?php echo $data['name_err']; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="email" style="font-size: 1.5em;">Password</label>
                <input type="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" required>
                <div class="valid-feedback">
                    Good!
                </div>
                <div class="invalid-feedback">
                    <?php echo $data['password_err']; ?>
                </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" name="Submit" type="submit" value="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></button>
        </form>
        <div class="footer">
            You can <a href="<?php echo URLROOT; ?>/users/signup">SIGNUP</a> here if you don't have an account with <a href="<?php echo URLROOT ?>">BOAT</a>
        </div>
    </div>

    <script src="<?php //echo URLROOT; ?>/js/formvalidate.js"></script>
</body>
</html>
