<!DOCTYPE html>
<html lang="en">
<head>
    <title>Department Of Agriculture</title>
    <link rel="stylesheet" href="farmer.css">
</head>
<body>
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">Farmer Page</h2>
       
        </div>

        <div class="menu">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="adminview.php">Message View</a></li>
                <li><a href="loginpage.html">Log out</a></li>
            </ul>
        </div>
        
        
    </div> <br><br><br><br><br><br><br>

    <div class="opt">
  <div class="option">
    <a href="service.html">services</a>
    <a href="about.html">about</a>
  </div>
  </div>
  
 
    <div class="con">
    <form method="post" action="questionpage.php">
        <h1>Ask a Question</h1>
        <label for="question">Your Question:</label>
        <textarea id="question" name="question" required></textarea><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    </div>

   
  <div class="footerv">
    <div class="footercontent">
        <h3>code opacity</h3>
        <p>learn ipsum dolor sit, ametkjgfjhwevdfjwehvdjvfwekuyfvewkygcfewk</p>
        <ul class="social">
             <li>  <a href="https://www.facebook.com/profile.php?id=100040778122566&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a></li> 
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              

        </ul>
    </div>
    <div class="footerbottom">
        <p>&copy;2023|Designed By Krisha Anthony<span></span> </p>
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

