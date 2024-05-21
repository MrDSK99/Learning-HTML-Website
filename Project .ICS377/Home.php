<!DOCTYPE html>
<html>
<title>LearningHTML</title>
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


  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }

  html {
    box-sizing: content-box;
  }

  .row {
    display: flex;
    flex-wrap: nowrap;
    /* Prevent wrapping to a new line */
    justify-content: space-between;
    /* Adjust alignment as needed */
  }

  .column {
    flex: 0 0 30%;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }

  .card img {
    width: 25%;
    /* Adjust image size as needed */
    border-radius: 8px;
    margin-right: auto;
    margin-left: auto;
    display: block;
    margin-bottom: 10px;
  }

  .about-section {
    padding: 50px;
    text-align: center;
    background-color: black;
    color: white;
  }

  .container {
    padding: 0 16px;
  }

  .container::after,
  .row::after {
    content: "";
    clear: both;
    display: table;
  }


  .button {
    background-color: blue;
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
  }

  .button:hover {
    background-color: #555;
  }

  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }

  .testimonials-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .testimonial {
    flex: 0 0 30%;
    padding: 20px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
  }

  .testimonial img {
    width: 25%;
    border-radius: 8px;
    margin-right: auto;
    margin-left: auto;
    display: block;
    margin-bottom: 10px;
  }

  .testimonial p {
    color: #333;
    margin-bottom: 10px;
  }

  .testimonial span {
    font-weight: bold;
  }

  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  .image-gallery {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
  }

  .image {
    flex: 0 0 30%; 
    text-align: center;
  }

  .image img {
    width: 25%;
    border-radius: 8px;
    margin-bottom: 10px;
  }

  .image p {
    font-size: 14px;
    color: #333;
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

  <div class="about-section">
    <h1>The best way to learn to code</h1>
    <p>Unlock the world of web development and bring your creative visions to life-start your journey with HTML today,
      and transform ideas into reality!</p>
    <p><b>It's free.</b></p>
    <p><a href="SignUp.php"><button class="button">Start learning now!</button></a></p>
  </div>
  <br /><br /><br />
  <h2 style="text-align:center">The perfect platform to boost your technical skills</h2> <br /><br />
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="beginnerIcon.png">
        <div class="container">
          <center>
            <h2>Beginner</h2>
          </center>
          <center>
            <p>Our platform provides an intuitive and supportive learning environment, perfect for beginners eager to
              embark on their journey into the world of technology, offering clear instructions, interactive tutorials,
              and a wealth of resources to transform novices into confident users.</p>
          </center>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="studentIcon.png">
        <div class="container">
          <center>
            <h2>Student</h2>
          </center>
          <center>
            <p>With a rich repository of educational content and practical exercises, our platform is an invaluable tool
              for students, aiding in the consolidation of theorectical knowledge through hands-on practice,
              collobaritve projects, and a variety of learning materials suited for academic success.</p>
          </center>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="professionalIcon.jpg">
        <div class="container">
          <center>
            <h2>Professional</h2>
          </center>
          <center>
            <p>Professionals will find our platform to be a robust resource, offering advanced tutorials,
              industry-relevant case studies, and a community of experts, all designed to hone skills, stay updated with
              the latest industry trends, and enhance career growth in a competitive landscape.</p>
          </center>
        </div>
      </div>
    </div>
  </div>

  <br><br><br>

  <hr>
  <br><br>
  <h2>
    <center> Testimonials</center>
  </h2>

  <div class="testimonials-container">
    <div class="testimonial">
      <img src="testimonial1.png">
      <p><b>Ariana Diop</b></p>
      <p>Description</p>
    </div>
    <div class="testimonial">
      <img src="testimonial2.png">
      <p><b>John Muller</b></p>
      <p>Description</p>
    </div>
    <div class="testimonial">
      <img src="testimonial3.png">
      <p><b>John Wick</b></p>
      <p>Description</p>
    </div>
  </div>
  <br><br><br>

  <hr>
  <br><br>

  <div class="image-gallery">
    <div class="image">
      <img src="CourseIcon.png">
      <p><b>Courses</b></p>
      <p>Learn, practice, annd aquire knowledge by enrolling different courses provided.</p>
    </div>
    <div class="image">
      <img src="QuizIcon.png">
      <p><b>Quizzes</b></p>
      <p>Test your knowledge by taking quizzes.</p>
    </div>
    <div class="image">
      <img src="ForumIcon.png">
      <p><b>Community Forum</b></p>
      <p>Connect and engage with the community through a forum by asking questions, providing answers and knowledge,
        dicussing different topics, and more.</p>
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