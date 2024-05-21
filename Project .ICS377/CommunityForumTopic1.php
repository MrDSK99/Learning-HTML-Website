<!DOCTYPE html>
<html>
<title>LearningHTML Community Forum - Topic 1</title>
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

  .new-post-button {
    margin-bottom: 20px;
  }

  .btn {
    background-color: blue;
    color: #fff;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    text-decoration: none;
  }

  .post-list {
    border: 1px solid black;
    padding: 10px;
  }

  .post-item {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid black;
  }

  .post-item h2 {
    margin-bottom: 5px;
  }

  .post-item p {
    margin-bottom: 0;
  }

  .pagination {
    text-align: center;
    margin-top: 20px;
  }

  .pagination .btn {
    display: inline-block;
    padding: 5px 10px;
    border: 1px solid #ccc;
    margin: 0 5px;
    text-decoration: none;
    font-weight: bold;
  }

  .pagination .page-numbers {
    display: inline-block;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .pagination .page-number {
    display: inline-block;
    padding: 5px 10px;
    border: 1px solid #ccc;
    margin: 0 5px;
    cursor: pointer;
    font-weight: bold;
  }

  .pagination .page-number.active {
    border-color: blue;
    color: black;
    font-weight: bold;
    border-width: 2px;
  }

  .pagination .prev-page.active,
  .pagination .next-page.active {
    pointer-events: none;
    opacity: 0.5;
  }

  .post-stats {
    margin-top: 10px;
  }

  .post-stats .replies,
  .post-stats .views {
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
  <h1>Community Forum - Topic 1</h1>
  <div class="container">


    <div class="new-post-button">
      <a href="#" class="btn">Create New Post</a>
    </div>

    <div class="post-list">
      <div class="post-item">
        <h2>Post 1 Title</h2>
        <p><strong>Username posted on Date at Time</strong></p>
        <p>Description</p>
        <br />
        <div class="post-stats">
          <span class="replies"># replies</span>
          <span class="views"># views</span>
        </div>
      </div>

      <div class="post-item">
        <h2>Another Post Title</h2>
        <p><strong>Username posted on Date at Time</strong></p>
        <p>Description</p>
        <br />
        <div class="post-stats">
          <span class="replies"># replies</span>
          <span class="views"># views</span>
        </div>
      </div>

      <div class="post-item">
        <h2>Yet Another Post Title</h2>
        <p><strong>Username posted on Date at Time</strong></p>
        <p>Description</p>
        <br />
        <div class="post-stats">
          <span class="replies"># replies</span>
          <span class="views"># views</span>
        </div>
      </div>
      <div class="pagination">
        <a href="#" class="btn prev-page active">Previous</a>

        <ul class="page-numbers">
          <li class="page-number active">1</li>
        </ul>

        <a href="#" class="btn next-page active">Next</a>
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