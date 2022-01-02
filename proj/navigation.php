<?php

session_start();

$conn = mysqli_connect("localhost","root","","music");

if(!$conn)
	echo"Error connecting".mysqli_error();

if(isset($_POST['email']) && isset($_POST['password']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$login_query = mysqli_query($conn,"SELECT user_id,user_name FROM users WHERE pass_word='$password' AND email='$email'");
$login = mysqli_fetch_assoc($login_query);

if(mysqli_num_rows($login_query) != 0)
{
	echo"logged in";
	$_SESSION['user_id'] = $login['user_id'];
	$_SESSION['user_name'] = $login['user_name'];
}
}
?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



.glow {

  font-family: cursive;

  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
</head>
<body style="background-image: linear-gradient(rgb(26, 26, 26)
, rgb(191, 191, 191)
);">
<link rel="stylesheet" type="text/css" href="navigation.css">

<div class="glow">MUUSIC</div>

			<script>
 				   if ( window.history.replaceState ) 
				{
      				  window.history.replaceState( null, null, window.location.href );
  				}
			</script>

<div class="top_nav">
<div id="logged_in"> 
<?php if(isset($_SESSION['user_name']))
{
	echo"logged in as".$_SESSION['user_name']; 
}

?> </div>
<a href="proj.php" > Home </a>
<a href="genres.php"> Genres </a>

<?php 
if(isset($_SESSION['user_name']))
{
	echo"<a href=''> My reviews </a>";
	
	if((mysqli_num_rows(mysqli_query($conn,"SELECT artist_id,user_id FROM artist_users WHERE user_id=$_SESSION[user_id];")))!=0)
	{
		echo"<a href='my_music.php' > My music </a>";
	}
}
	?>


<?php
 if(isset($_SESSION['user_name']))
	 echo"<a id ='logout' style='background-color:tomato;border-radius:20px;font-size:17px;height:13px;position:relative;top:2px;left:980px;' href='logout.php'>logout</a>";
	
else
	
	{
		
		echo"<a id='login' style='background-color:tomato;border-radius:20px;font-size:17px;height:13px;position:relative;top:2px;left:1000px;' href = 'login\index.php'>Login</a>";
	
		
		echo"<a id='signup' style='background-color:tomato;border-radius:20px;font-size:17px;height:13px;position:relative;top:2px;left:1000px;' href='signup\index.php'>Sign Up </a>";	
	}
	

?>

<form action="search.php" method="post">
<input type="text" style="width:400px;"name="searching" placeholder="search...">
</form>


</div>

<br>