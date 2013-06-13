<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Argus Group</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
<body>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

  <div class="container main-content">

  <div class="row">
    <div class="span12">
      <a href="#"><img src="img/argus_header.png" alt="Argus Cybersecurity Lab"></a>
    </div>
  </div>

  <div class="row">
    <!-- Navigation Menu -->
    <div id="navigation-menu" class="span3">
    </div>

    <!-- Main Content -->
    <div class="span9">
      <div class="row">
        <div class="span9 text-center">
          <div class="slideshow">
          <?php
            if ($dir = opendir('img/rotator')) {
              while (false != ($img = readdir($dir))) {
                if ($img != "." && $img != "..") {
                  if (file_exists('img/rotator/thumbnails/' . $img)) {
                    print '<a href="img/rotator/' . $img . '">';
                    print '<img width="700" height="350" src="img/rotator/thumbnails/' . $img . '" alt="Argus Cybersecurity Lab" />';
                    print '</a>';
                  } 
                }
              }
            }
          ?>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- About Us -->
        <div class="span6">
          <h6 class="section-header">About Us</h6>
          <p>
            The Argus group was founded by <a href="http://people.cis.ksu.edu/%7Exou/">Dr. Xinming (Simon)
            Ou</a> in 2006 to carry out cyber security research. Our
            focus is on the defense aspect of the cyber warfare, and
            our philosophy is that successful cyber defense can only
            be achieved through automated coordination of various
            observation and action points in an enterprise
            environment.
          </p>
          <p>
            "Point solutions" like firewalls and
            traditional IDS systems are limited in effectiveness since
            they only look at one aspect of the system and lack the
            capability of "connecting the dots" among various
            information sources to gain a global picture of a system's
            security status. Our research aims at providing the
            enabling technologies for such automated correlation and
            analysis, with solid theoretical foundation and empirical
            study. 
          </p>
          <p>
            The group is named after the giant <a href="https://en.wikipedia.org/wiki/Argus_Panoptes">Argus</a>
            in Greek mythology, who has a hundred eyes that constantly 
            watch for enemies.
          </p>
          <h6 class="section-header">CyberSecurity Research Group</h6>
          <b>Start from REAL problems, create solutions that LAST</b>
        </div>
        <!-- In The News Widget -->
        <div class="span3">
          <h6 class="section-header">In The News</h6>
          <div id="news">
          </div>
        </div>
      </div>
    </div>    
  </div>

  <footer>
    &copy; Argus Cyber Security Lab 2013 &bull; 127 Nichols Hall &bull; Manhattan, KS 66506 &bull; 785-532-7774
  </footer>

  </div> <!-- /container -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.slideshow').cycle({
        speed: 750,
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        width: 700,
        height: 350
      });

      $.ajax({
        type: "GET",
        url: "getRSS.php",
        dataType: "xml",
        success: function(xml) {
          var list = "<ul>";
          $(xml).find('item:lt(8)').each(function() {
            var title = $(this).find('title').text();
            var url = $(this).find('link').text();
            list += '<li><a href="' + url + '">' + title + '</a></li>';
          });
          list += '</ul>';
          $("#news").html(list);
        }
      });
      
    });
  </script>
</body>
</html>
