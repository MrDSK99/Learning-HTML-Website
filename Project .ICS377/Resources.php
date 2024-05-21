<!DOCTYPE html>
<html>
<title>LearningHTML Resources</title>
<link rel="icon" type="image/x-icon" href="Logo.jpeg">
<style>
  * {
    box-sizing: content-box
  }

  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
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


  .content {
    display: flex;
    justify-content: center;
    padding: 20px;
    text-align: center;
  }

  h1 {
    text-align: center;
  }

  .lists-container {
    display: flex;
    justify-content: space-between;
    width: 100%;
  }

  .left-lists,
  .right-lists {
    flex: 1;
  }

  .left-lists h2,
  .right-lists h2 {
    margin-bottom: 10px;
    color: #333;
  }

  .reference-list,
  .tutorial-list {
    list-style: none;
    padding: 0;
  }

  .reference-list li,
  .tutorial-list li {
    margin-bottom: 5px;
  }

  .reference-list li a,
  .tutorial-list li a {
    color: blue;
    text-decoration: none;
  }

  .reference-list li a:hover,
  .tutorial-list li a:hover {
    text-decoration: underline;
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
      <a href="Courses.php">Courses</a>
      <a href="#">Quizzes</a>
      <a href="Resources.php">Resources</a>
      <a href="CommunityForum.php">Community Forum</a>
    </div>


    <!-- Right-aligned links -->
    <div class="topnav-right">
      <a href="Login.php"><button class="login-btn">Log In</button></a>
      <a href="SignUp.php"><button class="signup-btn">Sign Up</button></a>
    </div>

  </div>

  <br /><br /><br />
  <h1>Resources</h1>
  <div class="content">

    <div class="lists-container">

      <div class="left-lists">
        <h2>HTML References</h2>
        <ul class="reference-list">
          <li><a href="https://www.w3schools.com/html/" target="_blank">W3Schools - HTML References</a></li>
          <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Reference" target="_blank">MDN Web Docs - HTML
              References</a></li>
          <li><a href="https://www.w3schools.com/tags/" target="_blank">HTML Tags</a></li>
        </ul>
        <br /><br />
        <h2>HTML Video Tutorials</h2>
        <ul class="reference-list">
          <li><a href="https://www.youtube.com/watch?v=qz0aGYrrlhU" target="_blank">HTML Basics</a></li>
          <li><a href="https://www.youtube.com/watch?v=XXrpsQqAlIQ" target="_blank">HTML Elements and Attributes</a>
          </li>
        </ul>
        <br /><br />
        <h2>HTML Written Tutorials</h2>
        <ul class="reference-list">
          <li><a href="https://www.w3schools.com/html/html_basics.asp" target="_blank">HTML Basics</a></li>
          <li><a href="https://www.w3schools.com/html/html_elements.asp" target="_blank">HTML Elements</a></li>
          <li><a href="https://www.w3schools.com/html/html_attributes.asp" target="_blank">HTML Attributes</a></li>
        </ul>
      </div>

      <div class="right-lists">
        <h2>CSS References</h2>
        <ul class="tutorial-list">
          <li><a href="https://www.w3schools.com/css/" target="_blank">W3Schools - CSS References</a></li>
          <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference" target="_blank">MDN Web Docs - CSS
              References</a></li>
          <li><a href="https://www.w3schools.com/cssref/index.php" target="_blank">CSS Properties</a></li>
        </ul>
        <br /><br />
        <h2>CSS Video Tutorials</h2>
        <ul class="tutorial-list">
          <li><a href="https://www.youtube.com/playlist?list=PLP9IO4UYNF0XQNx1OinMm84lyGzWSWDms"
              target="_blank">W3Schools Video Tutorials</a></li>
          <li><a href="https://www.youtube.com/watch?v=1PnVor36_40" target="_blank">CSS Basics</a></li>
          <li><a href="https://www.youtube.com/watch?v=l1mER1bV0N0" target="_blank">CSS Selectors</a></li>
          <li><a href="https://www.youtube.com/watch?v=YNSnugnQYiI" target="_blank">Include CSS into HTML</a></li>
        </ul>
        <br /><br />
        <h2>CSS Written Tutorials</h2>
        <ul class="tutorial-list">
          <li><a href="https://w3schools.com/css/css_syntax.asp" target="_blank">CSS Syntax</a></li>
          <li><a href="https://www.w3schools.com/html/html_css.asp" target="_blank">How to add CSS into HTML</a></li>
          <li><a href="https://www.w3schools.com/css/css_selectors.asp" target="_blank">CSS Selectors</a></li>
        </ul>
      </div>
    </div>
  </div>

  <br /><br /><br /><br />
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
            <li><a href="Courses.php">Courses</a></li>
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