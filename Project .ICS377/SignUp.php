<!DOCTYPE html>
<html>
<title>Sign Up to LearningHTML</title>
<link rel="icon" type="image/x-icon" href="Logo.jpeg">
<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
    }

    .topnav {
        background-color: black;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 50px;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav-left {
        margin-right: 50px;
        /* Add margin to the right of the first link */
    }


    .topnav-centered {
        text-align: center;
    }

    .topnav-centered a {
        display: inline-block;
        text-align: center;
    }

    .topnav-right {
        float: right;
        display: flex;
    }

    .login-btn,
    .signup-btn {
        padding: 8px 15px;
        margin-left: 10px;
        border: none;
        background-color: #555;
        color: #fff;
        cursor: pointer;
    }

    .login-btn:hover,
    .signup-btn:hover {
        background-color: #777;
    }

    @media screen and (max-width: 600px) {
        .topnav a {
            display: block;
            width: 100%;
            text-align: left;
            padding: 12px 16px;
        }

        .topnav-centered,
        .topnav-left,
        .topnav-right {
            position: static;
            display: block;
            width: 100%;
        }
    }

    .home-btn {
        display: flex;
        align-items: center;
        background: none;
        border: none;
        cursor: pointer;
        color: white;
        text-decoration: none;
    }

    .logo-img {
        width: 50px;
        /* Adjust the width as needed */
        height: auto;
        margin-right: 10px;
        padding: 50px;
    }


    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 12px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    a {
        color: aqua;
    }

    .container button {
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .container button:hover {
        opacity: 1;
    }

    /* Add padding to container elements */
    .container {
        padding: 66px;
        color: white;
    }

    footer {
        background-color: black;
        padding-left: 20px;
    }

    .footer-columns {
        display: flex;
        justify-content: flex-start;
    }

    .footer-column {
        margin-right: 50px;
        margin-left: 125px;
    }

    .footer-column h3 {
        margin-bottom: 10px;
        color: white;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
    }

    .footer-column ul li {
        margin-bottom: 5px;
    }

    .footer-column ul li a {
        color: white;
        text-decoration: none;
    }

    .footer-column ul li a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <!-- Top navigation -->
    <div class="topnav">

        <!-- Left-aligned links -->
        <a href="Home.php"><button class="home-btn">
                <img src="Logo.jpeg" class="logo-img">
                <h1 class="title">LearningHTML</h1>
            </button></a>

        <!-- Centered links -->
        <div class="topnav-centered">
            <a href="About.php">About</a>
            <a href="#">Courses</a>
            <a href="#">Quizzes</a>
            <a href="Resources.php">Resources</a>
            <a href="CommunityForum.php">Community Forum</a>
        </div>


        <!-- Right-aligned links -->
        <div class="topnav-right">
            <a href="Login.php"><button class="login-btn">Log In</button></a>
        </div>

    </div>

    <form>
        <div class="container">
            <center>
                <h1>Sign Up to LearningHTML</h1>
            </center>

            <hr>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="un"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="un" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <p>Choose an option that best describes you:</p>
            <input type="radio" id="Beginner" name="option" value="Beginner">
            <label for="html">Beginner</label><br>
            <input type="radio" id="Student" name="option" value="Student">
            <label for="css">Student</label><br>
            <input type="radio" id="professional" name="option" value="Professional">
            <label for="professional">Professional</label>
            <p></p>
            <a href="#"><button type="submit" name="create_account">Sign Up</button></a>
            <center>
                <p>Already have an account?</p>
            </center>
            <center><a href="Login.php">Log In</a></center>

        </div>
    </form>

    <footer>
        <div class="footer-columns">
            <a href="Home.php"><button class="home-btn">
                    <img src="Logo.jpeg" class="logo-img">
                </button></a>
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="About.php">About</a></li>
                    <p>
                        <li><a href="#">Courses</a></li>
                    <p>
                        <li><a href="#">Quizzes</a></li>
                    <p>
                        <li><a href="Resources.php">Resources</a></li>
                    <p>
                        <li><a href="CommunityForum.php">Community Forum</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Courses</h3>
                <ul>
                    <li><a href="#">Introduction to HTML</a></li>
                    <p>
                        <li><a href="#">Introduction to CSS</a></li>
                    <p>
                </ul>
            </div>


        </div>
    </footer>

</body>

</html>