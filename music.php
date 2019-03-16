<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mike Smooth | Music</title>

  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</head>
<body id="musicPg">

<div class="container-fluid">
  <div class="row">
    <div class="header">
      <div class="logo col-lg-6">
        <a href="index.php"><img src="imgs/logo.png" alt="mike smooth logo"></a>
      </div>
      <div class="mHead col-lg-6">
        <h1>MUSIC</h1>
        <div class="line_o"></div>
      </div>
      <div class="nav nav_home col-lg-2">
        <?php
          include "partials/nav_b.php";
        ?>
      </div>
    </div>
  </div>
</div>
  
<div class="container musicPlayer">
  <div class="row">

    <div class="player">

      <div class="song song1">
        <div class="album1"></div>
        <div class="title">
          <h1>Mad Mary</h1>
          <p>Mike Smooth ft. Wiz</p>
        </div>
      </div>
      <div class="song song2">
      <div class="album2"></div>
        <div class="title">
          <h1>Platinum Buddha</h1>
          <p>Mike Smooth ft. Snoop</p>
        </div>
      </div>
      <div class="song song3">
      <div class="album3"></div>
        <div class="title">
          <h1>Snooze</h1>
          <p>Mike Smooth ft. RiRi</p>
        </div>
      </div>
      <div class="song song4">
      <div class="album4"></div>
        <div class="title">
          <h1>Charters</h1>
          <p>Mike Smooth ft. JayZ</p>
        </div>
      </div>

      <div class="controlP">
        <div class="trackLine"></div>
        <div class="progressBall"></div>
        <div class="controls">
          <i class="fas fa-backward"></i>
          <i id="play" class="fas fa-play"></i>
          <i id="pause" class="fas fa-pause"></i>
          <i class="fas fa-forward"></i>
        </div>
      </div>  
    </div>
    <div class="albumArt"></div>
    <div class="trackTitle">
      <h1 class="trackName">PLATINUM BUDDHA</h1>
      <h2 class="artist">MIKE SMOOTH FT. SNOOP DOGG</h2>
    </div>
  </div>
</div>

<div class="container-fluid albumz">
  <div class="row">
    <div class="albHead">
      <div class="line_o"></div>
      <h1>ALBUMS</h1>
    </div>
  </div>
  <div class="row">
    <div class="covers">
      <div class="albu albu1">
        <img src="imgs/album1.jpg" alt="album art 1">
        <h1>LOREM IPSUM.</h1>
      </div>
      <div class="albu albu2">
        <img src="imgs/album2.jpg" alt="album art 2">
        <h1>LOREM IPSUM.</h1>
      </div>
      <div class="albu albu3">
        <img src="imgs/album3.jpg" alt="album art 3">
        <h1>LOREM IPSUM.</h1>
      </div>
      <div class="albu albu4">
        <img src="imgs/album4.jpg" alt="album art 4">
        <h1>LOREM IPSUM.</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="covers">
      <div class="albu albu5">
        <img src="imgs/album5.jpg" alt="album art 5">
        <h1>LOREM IPSUM.</h1>
      </div>
      <div class="albu albu6">
        <img src="imgs/album6.jpg" alt="album art 6">
        <h1>LOREM IPSUM.</h1>
      </div>
      <div class="albu albu7">
        <img src="imgs/album7.jpg" alt="album art 7">
        <h1>LOREM IPSUM.</h1>
      </div>
      <div class="albu albu8">
        <img src="imgs/album8.jpg" alt="album art 8">
        <h1>LOREM IPSUM.</h1>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid footer_b">
  <div class="row">
    <?php
      include "partials/footer_b.php";
    ?>
  </div>
</footer>




</body>
</html>