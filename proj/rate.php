<?php 

include 'navigation.php';

if(isset($_GET['album_id_session']))
{
	$album_id_val = $_GET['album_id_session'];
?>

<head>
<link rel="stylesheet" type="text/css" href="rate.css">
</head>

<div class="music_info">

<?php
 $conn = mysqli_connect("localhost","root","","music");
 
 if(!$conn)
  echo"Error connecting to the database".mysqli_error();
 
 $result = mysqli_query($conn,"SELECT * FROM album,artist where album.artist_id =artist.artist_id AND album.album_id=$album_id_val");

 
while($row = mysqli_fetch_assoc($result))
{
	echo"<img src=$row[art_link] id='album_art'>";
?>

<div class="info">

<?php

	echo"<small id='album'>$row[album_name]</small>";
	echo"<br>";
	echo"<small id='artist'>$row[artist_name]</small><br><br>";
	echo"<p>$row[description]</p>";
	echo"<b>Release: </b>$row[release_date]<br>";
	echo"<b>Genre:  </b>$row[genre] <br>";
	echo"<b>Record Label:  </b>$row[label] <br>";
	echo"<p> </p>";
}
?>
</div>
</div>



<br>
<br>
<br>
<br>


<div class="write">

<br>

<h2> Write a review </h2>

<br> 

<form class="rating" action="insert_review_into.php" method="post">
  <textarea rows="20" cols="120" style="padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 10px;
  background-color: #f8f8f8;
  resize: none;" name="review" placeholder="Write your review here"></textarea>
  
  <br>
  <input style="background-color: tomato;
  border-radius:5px;
  border: none;
  color: white;
  padding: 16px 32px;
  margin: 4px 2px;"type="submit">
  
</form>

</div>

<br><br><br><br><br><br>
<?php  

include 'reviews.php';

?>


<?php } ?>


</body>
</html>