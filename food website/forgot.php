<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register | Web Academy</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container  register-container">
            <form  method="post" action="eforgot.php">
                <div class="header">Reset password with email</div>
                <div class="socials-wrapper">
                    <!-- <ul>
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fab fa-google"></i></a></li>
                      </ul> -->

                      <!-- <header>
                        <h2>Register with Email</h2>     
                    </header> -->
                </div>

                <div class="button-input-group">
                    <div class="group input-group">
                        <input type="email" placeholder="Email" name="femail" required>
                    </div>
                    <div class="group input-group">
                        <input type="password" placeholder="New Password" name="npass" required pattern=".{8,}">
                    </div>
                    <div class="group input-group">
                        <input type="password" placeholder="rewrite Password" name="rpass" required pattern=".{8,}">
                    </div>
                    <div class="group button-group">
                        <input type="submit" class="signup-btn" value="Submit" />
                        
                    </div>
                </div>

            </form>
        </div>

        <div class="form-container  login-container">
            <form method="get" action="mforgot.php">
                <div class="header">Reset password with mobile number</div>
                <div class="socials-wrapper">
                    <!-- <ul>
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fab fa-google"></i></a></li>
                      </ul> -->

                      <!-- <header>
                        <h2>Login with Email</h2>     
                    </header> -->
                </div>

                <div class="button-input-group">
                    <div class="group input-group">
                        <input type="number" placeholder="Mobile Number" name="fmn" required pattern=".{10,}">
                    </div>
                    <div class="group input-group">
                        <input type="password" placeholder="New Password" name="npass" required pattern=".{8,}">
                    </div>
                    <div class="group input-group">
                        <input type="password" placeholder="rewrite Password" name="rpass" required pattern=".{8,}">
                    </div>
                    <div class="group button-group">
                        
                        <input type="submit" class="signup-btn" value="Submit" />
                        <!-- <button class="signin-btn">Sign in</button> -->
                    </div>
                    <!-- <div class="form-link forgot">
                        <a href="forgot.php" class="login-link">Forgot your password?</a>
                    </div> -->
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Reset with</h1>
                   

                    <div class="group button-group">
                        <button class="trigger" id="login">Mobile Number</button>
                    </div>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Reset with</h1>
                    

                    <div class="group button-group">
                        <button class="trigger" id="register">Email</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>