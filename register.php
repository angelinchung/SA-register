<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Registration</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/signup_style.css">
</head>
<body>
        <div class="container">
            <div class="title">Registration</div>
            <div class="content">
            <form action="../classes/RegistrationInc.php" method="POST">
                <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" placeholder="Confirm your password" required>
                </div>
                </div>
                <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                </label>
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
                <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Prefer not to say</span>
                    </label>
                </div>
                <div class="row" style="height: 10px">
                    <input id="input-1" type="file" class="file">
                </div>
                </div>
                <div class="button">
                <input type="submit" value="submit">
                </div>
            </form>
            </div>
            <div class="mb-2">
                            </div>
                            <div><center>Already have an account?</center>
                                <br>
                                <a href="signin.php" class="link-primary"><center>Sign In</center></a>
                            </div>
        </div>

</body>
