<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/general.css">
    <link rel="stylesheet" href="./../css/nav.css">
    <link rel="stylesheet" href="./../css/auth.css">
    <title>PHP - Final Project</title>
    <?php include('./../views/header.php') ?>
    <script src="./../scripts/signup.js"></script>
</head>
<body>
    <header>
        <?php include('./../views/navbar.php'); ?>  
    </header>
    <div class="auth-page">
        <div class="form">
            <form id="signup-form">   
                <input name="FirstName" type="text" placeholder="first name" required>
                <input name="LastName" type="text" placeholder="last name" required>
                <input name="Phone" type="text" placeholder="phone number ex: +45 00000000" required>
                <input name="Email" type="text" placeholder="email" required>
                <input name="Password" type="password" placeholder="password" pattern="[A-Za-z]{5,}" required>
                <input name="Company" type="text" placeholder="company">
                <input name="Address" type="text" placeholder="address" required>
                <input name="City" type="text" placeholder="city" required>
                <input name="State" type="text" placeholder="state">
                <input name="Country" type="text" placeholder="country" required>
                <input name="PostalCode" type="text" placeholder="postal code" required>
                <input name="Fax" type="text" placeholder="fax">
                <button id="signup-btn" type="button" value="Submit">Sign up</button>
            </form>
        </div>
    </div>
    <footer>
        <?php include('./../views/footer.php') ?>
    </footer>
</body>
</html>