<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniLinksUp</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body style="background: url(./assets/bgs.jpg);">
    <div class="greetings">
        <h1>Welcome to <span>UniLinksUp!</span></h1>
    </div>

    <!-- Register Section -->
    <div class="container" id="signUp"  style="display: none;"> 
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class='bx bx-user'></i>
                <input type="text" name="username" id="username" placeholder="username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <i class='bx bx-envelope' style='color:#121212'  ></i>
                <input type="text" name="email" id="email" placeholder="email" required>
                <label for="username">Email</label>
            </div>
            <div class="input-group">
                <i class='bx bxs-lock'></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="username">Password</label>l
            </div>
            <div class="input-group">
                <i class='bx bxs-lock'></i>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm_password" required>
                <label for="username">Confirm Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            -------------or-------------
        </p>
        <div class="icons">
            <i class='bx bxl-facebook-circle bx-tada' style='color:#121212' ></i>
            <i class='bx bxl-google bx-tada' style='color:#121212' ></i>
        </div>
        <div class="links">
            <p>Already have account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    
    <!-- Login Section -->
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class='bx bx-envelope' style='color:#121212'  ></i>
                <input type="text" name="email" id="email" placeholder="email" required>
                <label for="username">Email</label>
            </div>
            <div class="input-group">
                <i class='bx bxs-lock'></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="username">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
            -------------or-------------
        </p>
        <div class="icons">
            <i class='bx bxl-facebook-circle bx-tada' style='color:#121212' ></i>
            <i class='bx bxl-google bx-tada' style='color:#121212' ></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>

    <!--Footer section-->
    <div class="footer">
    <p>&copy; 2024 UniLinksUp. All rights reserved.
    </div>

   
        <script src="script.js"></script>

</body>
</html>