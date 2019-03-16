$(function() {
  $(".i1").hover(
    function() {
      $(".mark1").addClass("scaled");
    },
    function() {
      $(".mark1").removeClass("scaled");
    }
  );

  $(".i2").hover(
    function() {
      $(".mark2").addClass("scaled");
    },
    function() {
      $(".mark2").removeClass("scaled");
    }
  );

  $(".i3").hover(
    function() {
      $(".mark3").addClass("scaled");
    },
    function() {
      $(".mark3").removeClass("scaled");
    }
  );

  $(".i4").hover(
    function() {
      $(".mark4").addClass("scaled");
    },
    function() {
      $(".mark4").removeClass("scaled");
    }
  );

  $(".i5").hover(
    function() {
      $(".mark5").addClass("scaled");
    },
    function() {
      $(".mark5").removeClass("scaled");
    }
  );

  $(".i6").hover(
    function() {
      $(".mark6").addClass("scaled");
    },
    function() {
      $(".mark6").removeClass("scaled");
    }
  );

  $(".i7").hover(
    function() {
      $(".mark7").addClass("scaled");
    },
    function() {
      $(".mark7").removeClass("scaled");
    }
  );

  $(".i8").hover(
    function() {
      $(".mark8").addClass("scaled");
    },
    function() {
      $(".mark8").removeClass("scaled");
    }
  );

  // -----------------------------------------------------------------------
  // MUSIC PLAYER-----------------------------------------------------------
  $("#play").click(function() {
    $(".progressBall").addClass("move");
  });

  $("#pause").click(function() {
    $(".progressBall").removeClass("move");
  });

  //----- player controls ---/
  //----- album art ---------/

  $(".song1").click(function() {
    $(".albumArt").css("background-image", "url(imgs/alb1.png)");
    $(".trackName").replaceWith('<h1 class="trackName">MAD MARY</h1>');
    $(".artist").replaceWith(
      '<h2 class="artist">MIKE SMOOTH FT. WIZ KHALIFA</h2>'
    );
  });

  $(".song2").click(function() {
    $(".albumArt").css("background-image", "url(imgs/alb2.png)");
    $(".trackName").replaceWith('<h1 class="trackName">PLATINUM BUDDHA</h1>');
    $(".artist").replaceWith(
      '<h2 class="artist">MIKE SMOOTH FT. SNOOP DOGG</h2>'
    );
  });

  $(".song3").click(function() {
    $(".albumArt").css("background-image", "url(imgs/alb3.png)");
    $(".trackName").replaceWith('<h1 class="trackName">SNOOZE</h1>');
    $(".artist").replaceWith('<h2 class="artist">MIKE SMOOTH FT. RIHANNA</h2>');
  });

  $(".song4").click(function() {
    $(".albumArt").css("background-image", "url(imgs/alb4.png)");
    $(".trackName").replaceWith('<h1 class="trackName">CHARTERS</h1>');
    $(".artist").replaceWith('<h2 class="artist">MIKE SMOOTH FT. JAY-Z</h2>');
  });
});
