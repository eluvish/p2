<!DOCTYPE html>
<html>
<head>

	<title>Password Generator - xkcd Style</title>
	<meta charset='utf-8'>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>

.container {
  text-align: center;
}

table.center {
   margin-left:auto;
   margin-right:auto;
   background-color: #eee;
   border-radius: 50px;
	 width:300px;
 }

td{
	padding-bottom:15px;
	padding-top: 15px;
}

.password {
 			text-align:center;
 			font-size:3rem;
 			margin-bottom:25px;
 			color:#f39c12;
 			font-family:consolas,courier;
 			display:inline-block;
 			padding:15px;
 			font-weight:800;
			background-color: #eee;
			border-radius: 50px;
 		}

p.explanation{
	text-align: justify;
	width: 400px;
	margin: auto;
}

</style>

<?php

	require('logic.php');

 ?>

</head>
<body>
  <div class="container">
<h1>Password Generator - xkcd Style</h1>

<p class="password">

	<?php
		// Prints out the xkcd style password with the requested parameters
if (!empty($_GET))
{
		foreach ($trimmed as $word)
		{
			echo $word;
		}
}
		?>
		</p>

<table class="center">
  <tr>
    <td>
      <form method='GET' action='index.php'>
      			<p>

      				<label for='number_of_words'># of Words</label>
      				<input maxlength=1 size="5" type='text' name='number_of_words' id='number_of_words' value=''>  (Max 9)
      				<br>

      				<input type='checkbox' name='add_number' id='add_number' >
      				<label for='add_number'>Add a number</label>
      				<br>
      				<input type='checkbox' name='add_symbol' id='add_symbol' >
      				<label for='add_symbol'>Add a symbol</label>
      			</p>
      <input type='submit' class='btn btn-primary' value='Generate'>
    </form>
    </td>
  </tr>
</table>

<h3>What does this app do?</h3>
<p class="explanation"> It generates an xkcd style password based on <a href="http://imgs.xkcd.com/comics/password_strength.png">this comic</a>. The theory is that we have been taught to
	create passwords that seem strong but are actually difficult to remembers. They tend to be relatively short so they are easy to crack with a brute force attack or other method. <br/><br/> The comic
	argues that choosing four random english words is both easier to remember and more difficult for a computer to guess. Example: correct horse battery staple would take 550 years for a computer to guess at
	1000 guesses per second. Check out the comic to get the whole story.</p>
</div>
</body>
</html>
