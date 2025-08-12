<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style1.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</head>

<body class="body_deg">
    <center>
        <div class="form_deg">
            <center class="title_deg">
                Login Form
                <h4>
                    <?php
                        error_reporting(0);    
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                    ?>        
                </h4>
            </center>

            <form action="login_check.php" method="POST" class="login_form"> 
                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password">
                </div>

                <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>
