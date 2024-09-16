<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Fatima Child Development Center</title>
  
 <link href="css/style.css" rel="stylesheet">

</head>
<body>
  <header>
    <a href="#" class="logo">Fatima Child Development Center</a>
    <ul>
      <li></i><a href="{{route('index')}}">Home</a></li>
      <li><a href="{{route('enroll')}}">Enroll Now</a></li>
      <li><a href="student/new.html">What's New</a></li>
      <li><a href="student/about.html">About</a></li>
    </ul>
  </header>
  
  <section>
    <h2 id="text">Welcome Students</h2>
    <a href="#sec" id="btn">Explore</a>

  </section>
  <div id="sec" class="sec">
    <h2>Our school aims to achieve </h2>
    <h3> Vision</h3>
    <p>We envision Davao City as the premier socio-economic and tourism center in Mindanao East Asian Growth Area (EAGA)
      and Asia Pacific Region propelled by enlightened leaders and empowered citizenry committed to sustainable growth and development under the guidance of Divine Providence.
    </p><br><br>
    <h3>CSSDO Mission</h3>
    <p>We commit to better the quality of life of the disadvantaged citenzenry through a comprehensive and efficient delivery of social services by a compentent social welfare team towards a self-reliant and gender fair society.</p>
    <br><br>

    <h3>Goal</h3>
    <p>1. To enrich and strengthen the capabilities of socially disadvantaged individuals.
    <br><br>
    2. To develop the capability of depressed communities to bring about social change;
    <br> <br>
    3. To provide oppurtunities for youth and care for children to ensure their rights to survival, development, protection and participation. <br><br>
    4. To provide equal oppurtunities and services for the prevention and rehabilation of persons with disabilities; <br><br>
    5. To provide the welfare and rights of women, older persons, indigenous people and former rebels; <br><br>
    6. To provide timely and appropriate assistance to disaster affected families and communities; <br> <br>
    7. To develop and strengthen partnerships/linkages with other stakeholders; <br><br>
    8. To serve as learning laboratory for students and learners, researchers, and the like; share best practices and exchange knowledge and experiences for the public welfare. <br><br>
    </p>
  </div>


  <section>
    <div id="third" class="third">
      <h2>In every small hand is the power to shape the future.</h2>
      <h5>Fatima Child Development Center provide early childhood education to children aged 2 to 4 years old.</h5>
      <div class="row">
        <div class="main">
         <!-- Slideshow Container -->
        <div class="slideshow-container">
          <!-- Slide 1 -->
          <div class="mySlides fade">
            <img src="student/pic/ma1.jpg" style="width:100%">
          </div>
      
          <!-- Slide 2 -->
          <div class="mySlides fade">
            <img src="student/pic/ma2.jpg" style="width:100%">
          </div>
      
          <!-- Slide 3 -->
          <div class="mySlides fade">
            <img src="student/pic/ma3.jpg" style="width:100%">
          </div>
      
          <!-- Slide 4 -->
          <div class="mySlides fade">
            <img src="student/pic/ma4.jpg" style="width:100%">
          </div>
  
           <!-- Slide 5-->
           <div class="mySlides fade">
            <img src="student/pic/ma5.jpg" style="width:100%">
          </div>
          <br>
  
          <!-- Dots to indicate slides -->
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
          let slideIndex = 0;
          showSlides();
        
          function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
        
            // Hide all slides
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
        
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 } // Loop back to the first slide if at the end
        
            // Remove active status from dots
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
        
            // Show the current slide and highlight the corresponding dot
            slides[slideIndex - 1].style.display = "block"; 
            dots[slideIndex - 1].className += " active"; 
        
            setTimeout(showSlides, 3000); // Change slide every 5 seconds
          }
        </script>
        
          
       
  </section>


  
</body>
</html>