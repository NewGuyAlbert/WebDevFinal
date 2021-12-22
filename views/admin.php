<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./../css/general.css">
    <link rel="stylesheet" href="./../css/nav.css">
    <link rel="stylesheet" href="./../css/auth.css">
    <?php include('./../views/header.php') ?>
    <script src="./../scripts/admin.js"></script>
    <script src="./../scripts/general.js"></script>
</head>
<body>
    <header>
        <?php include('./../views/navbar.php'); ?>  
    </header>
    <div class="auth-page">
        <div class="form">
            <form id="admin-form">
                <input name="Password" type="password" placeholder="password"/>
                <button id="admin-btn" type="button" value="Submit">Enter Admin Password</button>
            </form>
        </div>
    </div>
    <footer>
        <?php include('./../views/footer.php') ?>
    </footer>
</body>
</html>