<?php  include 'navigation.php';?>


<head>
<link rel="stylesheet" type="text/css" href="genres.css">

</head>

<?php

$latest_result = mysqli_query($conn,"SELECT * FROM album JOIN artist ON album.artist_id = artist.artist_id ORDER BY release_date LIMIT 3");

while($latest = mysqli_fetch_assoc($latest_result))
{
}
	?>

	<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="https://consequenceofsound.net/wp-content/uploads/2018/04/180415_atmosphere_nataliesomekh-09666.png?w=807" style="width:100%; height:70%;border-radius:5px;">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="https://ak2.picdn.net/shutterstock/videos/10487672/thumb/1.jpg" style="width:100%; height:70%;border-radius:5px;">
    <div class="text"></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="https://media.placeb.ch/images/vynil-schallplatten-sammeln.2e16d0ba.fill-1000x600.jpg" style="width:100%; height:70%;border-radius:5px;">
    <div class="text"></div>
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<br><br>

<script >
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


	

<div class="links">
 <a href=""> New Releases </a> <br>
 <a href=""> All time high scores</a> <br>
 <a href=""> Index of Artists </a> <br>
 <a href=""> Year high scores </a> <br>
</div>


<div class="top_rated">
<?php  include 'top_rated.php';?>

</div>

</body>
</html>
