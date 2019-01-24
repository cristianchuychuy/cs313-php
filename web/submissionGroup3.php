<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$places = $_POST["places"];
$comments = htmlspecialchars($_POST["comments"]);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Submission</title>
  </head>
<body>
<h2>Submission</h2>
<p>The user name is: <?=$name ?></p>
<p>The user email is: <a href="mailto:<?=$email ?>"><?=$email ?></a></p>
<p>The user major is: <?=$major ?></p>
<p>Places that the user has visited:</p>
<ul>

<?php
foreach ($places as $place)
{
	$place_clean = htmlspecialchars($place);
	echo "<li><p>$place_clean</p></li>";
}
?>		

	</ul>

	<p>Comments: <?=$comments?></p>


</body>
</html>