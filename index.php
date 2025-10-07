
<?php
// submit.php

// Database connection settings
$servername = "localhost";   // change if not local
$username   = "root";        // your MySQL username
$password   = "";            // your MySQL password
$dbname     = "portfolio";   // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname   = $conn->real_escape_string($_POST['fname']);
  $lname   = $conn->real_escape_string($_POST['lname']);
  $email   = $conn->real_escape_string($_POST['email']);
  $phone   = $conn->real_escape_string($_POST['number']);
  $message = $conn->real_escape_string($_POST['message']);

  // Insert into database
  $sql = "INSERT INTO messages (fname, lname, email, phone, message) 
          VALUES ('$fname', '$lname', '$email', '$phone', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message sent successfully!');</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal-Portfolio | ibrahim-anas</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- typing effect -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
  <div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
  </div>
  <nav class="navbar">
    <div class="max-width">
      <div class="logo"><a href="#">A<span>NAS.</span></a></div>
      <ul class="menu">
        <li><a href="#home" class="menu-btn">Home</a></li>
        <li><a href="#about" class="menu-btn">About</a></li>
        <li><a href="#skills" class="menu-btn">Skills</a></li>
        <li><a href="#project" class="menu-btn">Projects</a></li>
        <li><a href="#contact" class="menu-btn">Contact</a></li>
      </ul>
      <div class="menu-btn">
        <i class="fas fa-bars"></i> 
      </div>
    </div>
  </nav>
<!-- Home section start -->
  <section class="home" id="home">
    <div class="max-width">
      <div class="home-content">
        <div class="text-1">Hello! my name is</div>
        <div class="text-2">Anas</div>
        <div class="text-3">And I'm a <span class="typing"></span></div>
        <a href="mailto:anas07860313@gmail.com">Hire me</a>
  
        <!-- Social Links positioned below the button -->
      </div>
      <div class="social-links">
       <a href="https://wa.me/message/R7E34N7U3DTII1" class="fab fa-whatsapp" target="_blank" rel="noopener"></a>
        <a href="https://instagram.com/ibra_anax" class="fab fa-instagram" target="_blank" rel="noopener"></a>
        <a href="https://facebook.com/ibra_anax" class="fab fa-facebook" target="_blank" rel="noopener"></a>
        <a href="https://www.linkedin.com/in/ibrahim-anas" class="fab fa-linkedin" target="_blank" rel="noopener"></a>
      </div>
    </div>
  </section>
  

 <!-- about section start -->
 <section class="about" id="about">
  <div class="max-width">
    <h2 class="title">About me</h2>
    <div class="about-content">
      <div class="column left">
        <img class="about-img" src="profile.jpg" alt="Profile">
      </div>
      <div class="column right">
        <div class="text">I'm Anas & i'm a <span class="typing-2"></span></div>
        <p>I am a passionate web designer, With a strong background in front-end development, I 
            specialize in HTML, CSS, JavaScript. I would like to work independently or as part of a 
            team, My goal is to create visually appealing and responsive websites that provide an 
            exceptional user experience across all devices. </p>
        <a href="SampleCV.pdf">Download CV</a>
      </div>
    </div>
  </div>
 </section>


  <!-- SKILLS SECTION -->
  <section id="skills" class="skills-section">
    <div class="skills-content">
      <h2 class="title">Skills</h2>
      <p>I have completed Full-Stack Web Design. And I am a passionate web designer with experience in building responsive websites.</p>
      <div class="skills-grid">
        <div class="skill-item">
          <img src="html.png" alt="HTML Icon">
          <span>HTML</span>
        </div>
        <div class="skill-item">
          <img src="text.png" alt="CSS Icon">
          <span>CSS</span>
        </div>
        <div class="skill-item">
          <img src="js.png" alt="JavaScript Icon">
          <span>JavaScript</span>
        </div>
        <div class="skill-item">
          <img src="python.png" alt="Python Icon">
          <span>Python</span>
        </div>
        <div class="skill-item">
          <img src="database.png" alt="SQL Icon" class="sql-logo">
          <span>SQL</span>
        </div>
        <div class="skill-item">
          <img src="php.png" alt="PHP Icon">
          <span>PHP</span>
        </div>
      </div>
    </div>
  </section>

  <!-- PROJECT SECTION -->
  <!-- <section class="project" id="project">
    <div class="max-width">
      <h2 class="title">My Projects</h2>
      <div class="carousel  owl-carousel">
        <div class="card">
          <div class="box">
            <img src="Images/job_portal.png" alt="">
            <div class="text">Job portal</div>
            <p>"The Online Job Portal connects job seekers with employers, allowing users to search, apply, and upload resumes. Built with HTML, CSS, JS, PHP, and MySQL, it features a user-friendly interface."</p>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="Images/meal_cart.jpg" alt="">
            <div class="text">Grocery Store Website</div>
            <p>"I crafted a stylish grocery store website using HTML, CSS, and JavaScript, featuring an attractive layout that showcases fresh products, providing an enjoyable and engaging shopping experience."</p>         
           </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="Images/invoice.jpg" alt="">
            <div class="text">Invoice generator</div>
            <p>"This Flask-based web application generates an invoice PDF from user input. It calculates totals and tax rates, using the WeasyPrint library to create a PDF from an HTML template."</p>
           
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="Images/project-2.jpg" alt="">
            <div class="text">Medical managment</div>
            <p>"The Pharmacy Management System, built with Python, Tkinter, and SQLite, manages adding, searching, and deleting medicines, focusing on a user-friendly interface and smooth data management."</p>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="Images/fashion.jpg" alt="">
            <div class="text">Design</div>
            <p>" Designed in Figma, this site features a sleek, modern aesthetic that highlights the latest in fashion and accessories with vibrant visuals and intuitive navigation for a great user experience."</p>
          </div>
        </div>
      </div>
    </div>
  </section>
 -->

  <!--- Contact Section --> 
  <section class="contact" id="contact">
    <div class="max-width">
      <h2 class="title">Contact Me</h2>
      <div class="contact-content">
        <div class="column left">
          <div class="text">Get in Touch</div>
          <p>Feel Free to Contact !...</p>

          <div class="icons">
            <div class="row">
              <i class="fas fa-user"></i>
              <div class="info">
                <div class="head">Name</div>
                <div class="sub-title">Anas</div>
              </div>
            </div>
            <div class="row">
              <i class="fas fa-map-marker-alt"></i>
              <div class="info">
                <div class="head">Address</div>
                <div class="sub-title">Manjeshwar,Kerala,India</div>
              </div>
            </div>
            <div class="row">
              <i class="fas fa-envelope"></i>
              <div class="info">
                <div class="head">Email</div>
                <div class="sub-title">anas07860313@gmial.com</div>
              </div>
            </div>
          </div>
        </div>
        <div class="column right">
          <div class="text">Message me</div>
          <form action="index.php" method="POST">
            <div class="fields">
              <div class="field fname">
                <input type="text" placeholder="First Name" required id="fname" name="fname">
              </div>
              <div class="field lname">
                <input type="text" placeholder="Last Name" required id="lname" name="lname">
              </div>
            </div>
            <div class="field email">
                <input type="email" placeholder="Email" required id="email" name="email">
              </div>
            <div class="field number">
              <input type="tel" placeholder="phone" required id="number" name="number">
            </div>
            <div class="field textarea">
              <textarea cols="30" rows="10" placeholder="Message" required id="message" name="message"></textarea>
            </div>
            <div class="button">
              <button type="submit" action="index.php" method="POST">Send message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

 <!--Footer section  -->
  <footer>
    <span>Created By <a href="#home">Anas</a> | &copy; 2025 All rights reserved </span>
  </footer>
  <script src="script.js"></script>
  
</body>
</html>