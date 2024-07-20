<!DOCTYPE html>
<html lang="en">
<head>
    <title>Department Of Agriculture</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">Admin Page</h2>
            
       
        </div>

        <div class="menu">
            <ul>
                
                <li><a href="adminview.php">Message View</a></li>
                <li><a href="registerpage.html">Register</a></li>
                <li><a href="loginpage.html">Log Out</a></li>
            </ul>
        </div>
        
        
    </div> 
      <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="Images/admin.1.jfif" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="Images/admin.png" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="Images/admin1.jfif" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <div class="sticky">  <h1>Admin Message View and Reply</h1>
  
    
    <div class="con">
        <div class="conta">
          <ul>
            <?php
            // Connect to the database
            $conn = new mysqli('127.0.0.1', 'root', '', 'message');

            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }

            // Fetch and display customer questions
            $sql = "SELECT * FROM message";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                   
                    echo '<form method="post" action="adminreplay.php">';
                    echo '<li>Question: ' . $row['question_text'] . '</li>';
                    echo '<li>Admin Reply: ' . $row['admin_reply'] . '</li>';
                    echo '<input type="hidden" name="question_id" value="' . $row['id'] . '">';
                    echo '<textarea name="admin_reply" placeholder="Reply"></textarea><br>';
                    echo '<button type="submit" name="submit">Send Reply</button>';
                    echo '</form>';
                }
            } else {
                echo "No customer questions yet.";
            }

            $conn->close();
            ?>
        </ul>

        </div>
    </div>
   
 


  <script>

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
  </script>
        </body>
    </html>