<!DOCTYPE html>
<html>
<title>LearningHTML Community Forum</title>
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


  .container {
    width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  h1 {
    text-align: center;
  }


  .topic-list {
    border: 1px solid #ccc;
    padding: 10px;
  }

  .topic-item {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    display: flex;
    justify-content: space-between;
  }

  .topic-item h3 {
    margin-bottom: 5px;
  }

  .topic-item p {
    margin-bottom: 0;
  }

  .topic-stats {
    text-align: right;
  }

  .posts,
  .last-post {
    display: inline-block;
    margin-right: 10px;
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
      <a href="SignUp.php"><button class="signup-btn">Sign Up</button></a>
    </div>

  </div>

  <br /><br /><br />
  <h1>Community Forum</h1>
  <div class="container">


    <h2>Topics</h2>

    <div class="topic-list">


      <div class="topic-item">
        <div class="topic-header">
          <a href="CommunityForumTopic1.php">
            <h3>Topic 1</h3>
          </a>
          <p>Description</p>
        </div>
        <div class="topic-stats">
          <span class="posts"># of Posts</span>
          <span class="last-post">Last Posted by: Username on Date at Time</span>
        </div>
      </div>

      <div class="topic-item">
        <div class="topic-header">
          <a href="">
            <h3>Topic 2</h3>
          </a>
          <p>Description</p>
        </div>
        <div class="topic-stats">
          <span class="posts"># of Posts</span>
          <span class="last-post">Last Posted by: Username on Date at Time</span>
        </div>
      </div>

      <div class="topic-item">
        <div class="topic-header">
          <a href="">
            <h3>Topic 3</h3>
          </a>
          <p>Description</p>
        </div>
        <div class="topic-stats">
          <span class="posts"># of Posts</span>
          <span class="last-post">Last Posted by: Username on Date at Time</span>
        </div>
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