<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/auth.css">
    <?php include(__DIR__ . './header.php') ?>
    <script src="./scripts/signup.js"></script>
    <script src="./scripts/general.js"></script>
</head>
<body>
    <header>
        <?php include(__DIR__ . './navbar.php'); ?>  
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
        <?php include(__DIR__ . './footer.php') ?>
    </footer>
</body>
</html>