<!DOCTYPE html>
<html>
<title>LearningHTML</title>
<link rel="icon" type="image/x-icon" href="Logo.jpeg">
<style>
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
    .logo-img {
    width: 50px;
    /* Adjust the width as needed */
    height: auto;
    margin-right: 10px;
    padding: 50px;
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


  /* Add more styles as needed */
  body.courses {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .container {
    display: flex;
  }
  .sidebar {
    width: 200px; /* Adjust the width as needed */
    padding: 20px;
  }
  .main-content {
    flex-grow: 1;
    padding: 20px;
    display: flex;
  
  }

  .course a {
    display: inline-block; /* This allows us to center the anchor tag containing the image */
    margin: 10px 0; /* Adds space above and below the image */
    text-decoration: none; /* Optional: Removes the underline from links */
  }
  .course img {
    max-width: 100%; /* Ensures the image is responsive and does not overflow its container */
    height: auto; /* Keeps the image aspect ratio */
  }

  .course-row {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px; /* Adjust the gap as necessary */
    padding: 20px;
    flex-wrap: wrap; /* Ensures the flex items wrap if the screen is too small */
  }
  .course-link {
    text-decoration: none; /* Removes the underline from links */
    color: inherit; /* Keeps the text color consistent with the rest of the content */
    text-align: center; /* Centers the text within the anchor element */
  }
  .course-image {
    width: 100%;
    max-width: 200px; /* Adjust the max-width as necessary */
    height: auto;
    border: 0; /* Remove border if there's any by default */
 /*  .course-list {
  display: flex;
  flex-direction: column;
  align-items: center;             
}

.course {
  width: 100%; 
} */

  .header {
    text-align: center;
    padding: 20px;
  }
  .course-list {
    margin: 20px;
  }
  .course {
    margin-bottom: 15px;
  }
  .course-header {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .header {
    position: relative; /* Needed for absolute positioning of the search bar */
    text-align: center;
    padding: 20px;
  }
  .search-bar {
    position: absolute;
    right: 20px; /* Adjust as necessary for the desired spacing from the right edge */
    top: 20px; /* Adjust as necessary for the desired spacing from the top */
  }
  .search-bar input {
    /* Add styles for the search input field here */
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

<!-- Body -->
<div class="header">
  <h1>Top courses to kick-off your career with HTML</h1>

  <div class="search-bar">
    <input type="search" placeholder="Search" />
    <!-- You can add a search button here if necessary -->
  </div>
  <!-- Search bar would go here -->
</div>

<div class="course-row">
  <a href="introduction-to-html.html" class="course-link">
    <img src="Intro HTML.png" alt="Introduction to HTML" class="course-image" />
    <div>Introduction to HTML</div>
  </a>
  <a href="introduction-to-css.html" class="course-link">
    <img src="Intro CSS.png" alt="Introduction to CSS" class="course-image" />
    <div>Introduction to CSS</div>
  </a>
</div>

<div class="container">
  <aside class="sidebar">
    <h2>Languages</h2>
    <ul>
      <li>HTML</li>
      <li>CSS</li>
      <!-- Additional languages can be listed here -->
    </ul>
  </aside>

  <div class="main-content">
    <div class="course-list">
      <div class="course">
        <div class="course-header">Introduction to HTML</div>
        <p>HTML, or HyperText Markup Language, is the backbone of the internet...</p>
      </div>
      <div class="course">
        <div class="course-header">Introduction to CSS</div>
        <p>Discover the magic of CSS (Cascading Style Sheets)...</p>
      </div>
      <!-- More courses would be listed here -->
    </div>
  </div>
</div>



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