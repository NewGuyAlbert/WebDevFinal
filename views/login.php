<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/auth.css">
    <?php include(__DIR__ . './header.php') ?>
    <script src="./scripts/login.js"></script>
    <script src="./scripts/general.js"></script>
</head>
<body>
    <header>
        <?php include(__DIR__ . './navbar.php'); ?>  
    </header>
    <div class="auth-page">
        <div class="form">
            <form id="login-form">
                <input name="Email" type="email" placeholder="email"/>
                <input name="Password" type="password" placeholder="password"/>
                <button id="login-btn" type="button" value="Submit">login</button>
            </form>
        </div>
    </div>
    <footer>
        <?php include(__DIR__ . './footer.php') ?>
    </footer>
</body>
</html>