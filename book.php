<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mike Smooth | Checkout</title>

  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body id="chkoutPg">
  <div class="container-fluid">

    <div class="row">
      <div class="header">
        <div class="logo col-lg-4">
          <a href="index.php"><img src="imgs/logo.png" alt="mike smooth logo"></a>
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
      <div class="frm">
        <div class="offer">
          <p id="p01">EARLY BIRD PASSES</p>
          <p id="p02">25%OFF</p>
          <p id="p03">ONLY TILL 13TH NOV</p>
        </div>
        <img id="frmblk" src="imgs/frm_box.png" alt=" form box">
        <form>
          <input type="text" name="name" id="name" placeholder=NAME:>
          <input type="text" name="email" id="email" placeholder=EMAIL:>
          <select name="ticketCategory" id="ticCat">
            <option value="sel">SELECT CATEGORY</option>
            <option value="general">GENERAL PASS - $250</option>
            <option value="standard">STANDARD PASS - $550</option>
            <option value="platinum">PLATINUM PASS - $950</option>
            <option value="vip">VIP PASS - $1250</option>
          </select>
          <select name="locations" id="locals">
            <option value="loca">SELECT LOCATION</option>
            <option value="vancouver">VANCOUVER</option>
            <option value="newyork">NEW YORK</option>
            <option value="rio">RIO DE JANEIRO</option>
            <option value="dubai">DUBAI</option>
            <option value="mumbai">MUMBAI</option>
            <option value="beijing">BEIJING</option>
            <option value="tokyo">TOKYO</option>
            <option value="sydney">SYDNEY</option> 
          </select>
          <a href="#success" rel="modal:open"><input id="save" type="submit" value="BOOK NOW"></a>
        </form>
      </div>
      <img id="disk3" src="imgs/zig_circle_w.png" alt="rotating disk">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div id="success" class="modal">
      <i class="fas fa-clipboard-check"></i><p>Awesome! Your ticket has been booked.</p>
      </div>
    </div>
  </div>
</body>
</html>