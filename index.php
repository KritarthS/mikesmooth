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
<body id="home_bg">

  <div class="container-fluid">

    <div class="row">
      <div class="header">
        <div class="disk col-lg-2">
          <img src="imgs/vinyl.png" alt="vinyl disk">
        </div>
        <div class="logo col-lg-8">
          <a href="index.php"><img src="imgs/logo.png" alt="mike smooth logo"></a>
        </div>
        <div class="nav nav_home col-lg-2">
          <img src="imgs/plays.png" alt="play icons">
          <?php
            include "partials/nav.php";
          ?>
        </div>
      </div>
    </div>

  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="toursHead col-lg-6">
        <div class="line_o"></div>
        <h1>TOURS & UPDATES</h1>
      </div>
    </div>
  </div>

  <article class="container-fluid">
    <div class="row">
      
      <div class="map col-lg-8">
        <img id='tMap' src="imgs/wrldMap.png" alt="world map" />

        <div class="mark1">
          <img src="imgs/mark.png" alt="location mark" />
        </div>
        <div class="mark2">
          <img src="imgs/mark.png" alt="location mark" />
        </div>
        <div class="mark3">
          <img src="imgs/mark.png" alt="location mark" />
        </div>
        <div class="mark4">
          <img src="imgs/mark.png" alt="location mark" />
        </div>
        <div class="mark5">
          <img src="imgs/mark.png" alt="location mark" />
        </div>
        <div class="mark6">
          <img src="imgs/mark.png" alt="location mark" />
        </div>
        <div class="mark7">
          <img src="imgs/mark.png" alt="location mark" />
        </div>
        <div class="mark8">
          <img src="imgs/mark.png" alt="location mark" />
        </div>

        <img id="tourStamp" src="imgs/btour.png" alt="blackout tour logo">
      </div>

      <div class="tourInfo col-lg-4">
        <div class="info-cell i1">
          <h3>VANCOUVER - 5TH JAN 2019</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            amet tenetur quas.
          </p>
        </div>
        <div class="info-cell i2">
          <h3>NEW YORK - 10TH JAN 2019</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            amet tenetur quas.
          </p>
        </div>
        <div class="info-cell i3">
          <h3>RIO DE JANEIRO - 22ND JAN 2019</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            amet tenetur quas.
          </p>
        </div>
        <div class="info-cell i4">
          <h3>DUBAI - 27TH JAN 2019</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            amet tenetur quas.
          </p>
        </div>
        <div class="info-cell i5">
          <h3>MUMBAI - 6TH FEB 2019</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            amet tenetur quas.
          </p>
        </div>
        <div class="info-cell i6">
          <h3>BEIJING - 15TH FEB 2019</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            amet tenetur quas.
          </p>
        </div>
        <div class="info-cell i7">
          <h3>TOKYO - 23RD FEB 2019</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            amet tenetur quas.
          </p>
        </div>
        <div class="info-cell i8">
          <h3>SYDNEY - 30TH FEB 2019</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
            amet tenetur quas.
          </p>
        </div>
        <div class="btn_home">
          <a id="book1" href="book.php"
            >BOOK NOW <i class="fas fa-long-arrow-alt-right"></i
          ></a>
        </div>
      </div>
    </div>
  </article>

  <footer class="container-fluid footer home">
    <div class="row">
      <?php
        include "partials/footer.php";
      ?>
    </div>
  </footer>
  
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
</body>
</html>