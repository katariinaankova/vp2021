<?php
  require_once("../../config.php");
  require_once("fnc_film.php")
  //echo $server_host;
  $author_name = "Katariina Ankova";
  $film_html = null;
  $film_html = read_all_films();
  
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $author_name; ?>, veebiprogrammeerimine</title>
</head>
<body>
  <h1><?php echo $author_name; ?>, veebiprogrammeerimine</h1>
  <p>Hei! Olen Katariina ning see on minnu veebileht!</p>
  <p>See leht on valminud õppetöö raames ja ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogiate instituudis</a>.</p>
  <p>Sügis 2021</p>
  <hr>
  <h2>Eesti filmid</h2>
  <?php echo $film_html; ?>
  
 
</body>
</html>