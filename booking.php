<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mike Smooth | Home</title>
  
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body id="bookPg">

<div class="container-fluid">

  <div class="row">
    <div class="header">
      <div class="logo col-lg-4">
        <a href="index.php"><img src="imgs/logo.png" alt="mike smooth logo"></a>
      </div>
      <div id="halfx">
        <img src="imgs/half_x.png" alt="play icons">
      </div>
      <div class="nav col-lg-2">
        <?php
          include "partials/nav_b.php";
        ?>
      </div>
    </div>
  </div>

</div>

<div class="container-fluid">
  <div class="row">
    <img id="zig1" src="imgs/zig1.png" alt="background pattern">
    <div class="box1">
      <img id="bookbox1" src="imgs/book_box_1.png" alt="booking container 1">
      <h1>CONCERTS & TOURS</h1>
      <p>For updates and bookings to Mike's upcoming concerts, click the link below</p>
      <a id="btn_w" href="book.php">BOOK NOW</a>
    </div>
    <div class="box2">
      <img id="bookbox2" src="imgs/book_box_2.png" alt="booking container 1">
      <h1>BOOKINGS & PRIVATE SHOWS</h1>
      <div class="txt_block1">
        <h2>Molly Mahone:</h2>
        <p id="p1">- Email : molly@smooth.com</p>
        <p id="p2">- Phone : +1 778 798 8988</p>
      </div>
      <div class="txt_block2">
        <h2>For Personal Queries<br>Mike Smooth:</h2>
        <p>- Email : mike@smooth.com</p>
      </div>
    </div>
    <img id="zig_circle" src="imgs/zig_circle_o.png" alt="moving disk">
  </div>
</div>


<footer class="container-fluid footer_b bkng">
  <div class="row">
    <?php
      include "partials/footer_b.php";
    ?>
  </div>
</footer>
  
</body>
</html>