<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <title>CSE391 Assignment 3</title>
</head>
<body>
    <!-- connect to dbconnection  -->
    <?php
        include 'dbConnect.php';
    ?>
   




   <nav class="navbar">
        <ul>
            <li><a class="nav-link" href="index.php">Go to Home</a></li>
            
            <li><a class="nav-link" href="signup.php"> Didn't Sign Up ?</a></li>
            
        </ul>
    </nav>




    <div class="text-banner" id="update-profile">
                <?php
                    if(isset($_SESSION['incorrectpassword'])){
                        echo '<h2>Incorrect Password!</h2>';
                        unset($_SESSION['incorrectpassword']);
                    }
                    if(isset($_SESSION['notadmin'])){
                        echo '<h2>You don\'t have sufficient permissions to visit this page!</h2>';
                        unset($_SESSION['notadmin']);
                    }
                    if(isset($_SESSION['notloggedin'])){
                        echo '<h2>Please log in to continue!</h2>';
                        unset($_SESSION['notloggedin']);
                    }
                ?>
    </div>
    <div class="login-form-container">
        <form action="login_operation.php" method="post">
            <div class="login-form">
                <div class="login-form-header">
                    <h1>Login</h1>
                </div>
                <div class="login-form-body">
                    <div class="login-form-input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="login-form-input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="login-form-submit">
                        <input type="submit" name="login" value="Login">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="spacing"></div>
    <div style="text-align: center">
        <button onclick="loginasadmin()">Login as admin</button>
        <button onclick="loginasuser()">Login as user</button>
    </div>

    <div class="spacing"></div>
    <script src="script.js"></script> 
    <script src="https://kit.fontawesome.com/692c2638c1.js" crossorigin="anonymous"></script>  
    </body>
</html>