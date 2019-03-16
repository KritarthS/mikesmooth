<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mike Smooth | About</title>
  
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body id="abtBg">

  <div class="container-fluid">
    <div class="row">
      <a href="index.php"><div class="logo_o col-lg-3"></div></a>
      <div class="nav col-lg-2">
        <img src="imgs/plays.png" alt="play icons">
        <?php
          include "partials/nav.php";
        ?>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <article class="abtme row">
      <div class="abtHead col-lg-12">
        <h1>ABOUT MIKE</h1>
        <div class="line_o_abt"></div>
      </div>

      <div class="abtCont row col-lg-12">
        <div class="abt_info col-lg-5">
          <p>
            DJ Mike Smooth is a sit amet consectetur adipisicing elit. Quasi
            numquam impedit voluptatem, maxime sapiente, est consequuntur velit
            laudantium, cumque iste deserunt dolor obcaecati. Suscipit, deleniti
            obcaecati! Quae soluta quibusdam asperiores? Quasi
            numquam impedit voluptatem, maxime sapiente, est consequuntur velit
            laudantium, cumque iste deserunt dolor obcaecati. Suscipit, deleniti
            obcaecati.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
            numquam impedit voluptatem, maxime sapiente, est consequuntur velit
            laudantium, cumque iste deserunt dolor obcaecati.
          </p>
        </div>

        <div class="imgBlock col-lg-7">
          <img src="imgs/mikeS1.png" alt="dj mike smooth" />
          <img src="imgs/mikeS2.png" alt="dj mike smooth" />
        </div>
      </div>
    </article>
  </div>

  <footer class="container-fluid footer abt_foot">
    <div class="row">
      <?php
        include "partials/footer.php";
      ?>
    </div>
  </footer>
  
</body>
</html>