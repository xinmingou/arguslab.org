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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap-responsive.css" rel="stylesheet"> 
  
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
<body>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

  <div class="container main-content">

  <div class="row">
    <div class="col-md-12">
      <a href="#"><img class="head-image" src="img/argus_header.png" alt="Argus Cybersecurity Lab"></a>
    </div>
  </div>

  <div class="row">
    <!-- Navigation Menu -->
    <div id="navigation-menu" class="col-md-3 blog-siderbar">
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="slideshow">
          <?php
            if ($dir = opendir('img/rotator')) {
              while (false != ($img = readdir($dir))) {
                $extension = pathinfo($img);
                if (($img != ".") && ($img != "..")) {
                  if (file_exists('img/rotator/thumbnails/' . $img)) {
                    print '<a href="img/rotator/' . $img . '">';
                    print '<img class="head-image" src="img/rotator/thumbnails/' . $img . '" alt="Argus Cybersecurity Lab" />';
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
        <div class="col-md-8">
          <h6 class="section-header">About Us</h6>
          <p class="justify">
            The Argus group was founded by <a href="http://www.cse.usf.edu/~xou/">
            Dr. Xinming (Simon) Ou</a> in 2006 to carry out cyber security research. Our
            focus is on the defense aspect of the cyber space, and our philosophy is to
            start from real problems, and create solutions that last. Our research
            attempts to address the root causes of the various cybersecurity problems,
            and we work closely with industry to ensure our work both addresses the most
            pressing problems of the time, and provides the scientific basis for solutions
            that can stand the test of time.
          </p>
          <p class="justify">
            We believe that successful cyber defense can only be achieved through automated 
            coordination of various observation and action points in a network environment,
            and through fundamentally changing the way IT systems are created and managed
            to obviate the many security problems we face today.
            "Point solutions" like firewalls and traditional IDS systems are limited in 
            effectiveness since they only look at one aspect of the system and lack the
            analytic capability of "connecting the dots" among various information sources. 
            Moreover, they tend to focus
            more on dealing with the <i>manifested problems</i> rather than eradicating 
            their <i>root causes</i>. Our research aims at providing the
            enabling technologies for automated security analytics, with solid theoretical 
            foundation and empirical study. We also investigate ground-breaking new security 
            technologies that could fundamentally change the game of cyber warfare to defender's 
            advantage. 
          </p>
          <p class="justify">
            Argus research has been supported by the National Science Foundation, 
            Department of Defense, Department of Homeland Security, Department of Energy, 
            National Institute of Standards and Technology, and HP Labs.
            The group is named after the giant <a href="https://en.wikipedia.org/wiki/Argus_Panoptes">Argus</a>
            in Greek mythology, who has a hundred eyes that constantly watch for enemies.
          </p>
          <h6 class="section-header">Our Motto</h6>
          <b>Start from REAL problems, create solutions that LAST</b>
        </div>
        <!-- In The News Widget -->
        <div class="col-md-4">
          <h6 class="section-header">News</h6>
          <div>
          <ul>
            <li><a href="http://www.cse.usf.edu/~sathyachandr/">Sathya</a> presented his
	        <a href="https://www.usenix.org/conference/soups2016/technical-sessions/presentation/sundaramurthy">paper</a>
                at <a href="https://www.usenix.org/conference/soups2016">SOUPS'16</a>.</li>
            </li>
            <li>
              Dr. Ou gave a <a href="http://www.gramsec.uni.lu/keynote.php">keynote speech</a>
	      at <a href="http://www.gramsec.uni.lu/">GramSec'16</a>
            </li>
          </ul>
          </div>
        </div>
      </div>
    </div>    
  </div>

  <footer>
    &copy; Argus Cyber Security Lab 2016
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
    $(window).load(function() {
      $('.slideshow').cycle({
        speed: 750,
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        width: 'auto',
        height: 'auto',
        fit: 1,
      });
    });

    $(document).ready(function() {
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
