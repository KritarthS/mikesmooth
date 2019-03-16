<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mike Smooth | Experiences</title>
  
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body id="expPg">

  <div class="container-fluid">
    <div class="row">
      <div class="expHead col-lg-12">
        <video src="video/video2.mp4" autoplay loop muted></video>
        <a href="index.php"><div class="logo_exp col-lg-3"></div></a>
        <div class="expHeadline col-lg-9">
          <h1>EXPERIENCES</h1>
          <div class="line_o_exp"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="pointer col-lg-12">
        <img src="imgs/plays.png" alt="play icons">
        <div class="nav nav_exp col-lg-2">
          <?php
            include "partials/nav.php";
          ?>
        </div>
      </div>
      <div class="bigX">
        <img src="imgs/big_x.png" alt="x mark">
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="gallery col-lg-12">
        <div class="galHead col-lg-6">
          <div class="line_w_exp"></div>
          <h1>GALLERIES</h1>
        </div>
        <section id="slider">
            <input type="radio" name="slider" id="s1">
            <input type="radio" name="slider" id="s2">
            <input type="radio" name="slider" id="s3" checked>
            <input type="radio" name="slider" id="s4">
            <input type="radio" name="slider" id="s5">
            <label for="s1" id="slide1"></label>
            <label for="s2" id="slide2"></label>
            <label for="s3" id="slide3"></label>
            <label for="s4" id="slide4"></label>
            <label for="s5" id="slide5"></label>
        </section>
      </div>
    </div>
  </div>

  <footer class="container-fluid footer exp_foot">
    <div class="row">
      <?php
        include "partials/footer.php";
      ?>
    </div>
  </footer>
  
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>