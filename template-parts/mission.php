


   <section class="section-1">
    <h1 class="mission-header">Our Mission</h1>
    <div class="our-mission-1-container">
        <p class="our-mission-1-container">The mission of Impact Zone is to asssist in our clients 
        in reflecting their dreams, visions, and ideas onto a webpage; <br> connecting 
        with and affecting the greater community through deliberate and meaningful action. 
        We do this by <br> offering services in web design and development using WordPress to 
        deliver dynamic and user-friendly <br> services</p>
    </div>
   </section>

   <!-- Beginning of Section 2 -->
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center">Manual Slideshow</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="http://impact-zone.local/wp-content/uploads/2022/08/image21-scaled.jpg" style="width:300px height:300px">
  <img class="mySlides" src="http://impact-zone.local/wp-content/uploads/2022/08/image3-1-scaled.jpg" style="width:300px height:300px">
  <img class="mySlides" src="http://impact-zone.local/wp-content/uploads/2022/08/image2-1-scaled.jpg" style="width:300px height:300px">
  <img class="mySlides" src="http://impact-zone.local/wp-content/uploads/2022/08/image1-1-scaled.jpg" style="width:300px height:300px">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>