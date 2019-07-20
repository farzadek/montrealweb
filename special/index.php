<?php
  include_once('../pages/texts.php');

  $lang = 1;
  if(isset($_COOKIE['lang'])){
    $lang = htmlspecialchars($_COOKIE["lang"]);
  }

  $files = scandir('.');
?>

<!DOCTYPE html>
<html lang="<?php echo $lang==0?'en':'fr'; ?>">
  <head>

    <title>MontrealWeb - Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="portfolio - small web agency, we make beautiful websites">
    
    <meta name="og:title" property="og:title" content="MontrealWeb - A web agency to make beautiful websites - portfolio">
    <meta name="robots" content="index, follow">

    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="apple-touch-icon" href="../images/logo.ico" />

    <script src="../js/jquery-3.3.1.min.js"></script>    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">  
  </head>
  
  <script>
    function changeLang(lang) {
      var cvalue = lang==0 ? 1 : 0;
      document.cookie = "lang=" + cvalue + ";path=/";
      location.reload();
    }
  </script>

  <style>
    .gal {
      -webkit-column-count: 3; /* Chrome, Safari, Opera */
      -moz-column-count: 3; /* Firefox */
      column-count: 3;
    }	
	  .gal img{ width: 100%; padding: 7px 0;}
    @media (max-width: 500px) {
		  .gal {
        -webkit-column-count: 2; /* Chrome, Safari, Opera */
        -moz-column-count: 2; /* Firefox */
        column-count: 2;
	    }
    }    
    #portfolio_page .loading{
      padding-top: .75em;
    }
  </style>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    
    
    <div class="site-navbar-wrap">
      
        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8 col-md-6">
                        <h1 class="my-0 site-logo"><a href="../"><img src="../images/logo.png" alt="montrealweb logo"/>MontrealWEB</a></h1>
                    </div>
                    <div class="col-4 col-md-6">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">

                                <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                                        <span class="icon-menu h3"></span> <span class="menu-text"></span>
                                    </a>
                                </div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                                    <li><a href="../#home-section" class="nav-link"><?php echo $texts['home'][$lang]; ?></a></li>
                                    <li><a href="../#what-we-do-section" class="nav-link"><?php echo $texts['what_we_do'][$lang]; ?></a></li>
                                    <li><a href="../#portfolio-section" class="nav-link"><?php echo $texts['portfolio'][$lang]; ?></a></li>
                                    <li><a href="../#about-section" class="nav-link"><?php echo $texts['about_us'][$lang]; ?></a></li>
                                    <li><a href="../#clients-section" class="nav-link"><?php echo $texts['our_clients'][$lang]; ?></a></li>
                                    <li><a href="../#contact-section" class="nav-link">Contact</a></li>
                                    <li><a onClick="changeLang(<?php echo $lang; ?>)" class="nav-link"><img src="../images/<?php echo $lang==0?'qc_flag':'en_flag'; ?>.png" alt="change language"><?php echo $texts['lang'][$lang]; ?></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light" id="portfolio_page">
        <div class="container">
            <div class="gal">
  
            <?php
                for($i=2; $i < sizeof($files); $i++){
                  echo '<img src="'.$files[$i].'" alt="">';
                }
            ?>
	          </div>
            <div class="loading"></div>
            <p>info@montrealweb.ca<br/>(438) 300 0456</p>
        </div>
    </div> 

  
    <footer class="site-footer">
      <div class="container">
        <div class="row">
           
                <ul class="list-unstyled">
                    <li><a href="../#home-section" class="nav-link"><?php echo $texts['home'][$lang]; ?></a></li>
                    <li><a href="../#what-we-do-section" class="nav-link"><?php echo $texts['what_we_do'][$lang]; ?></a></li>
                    <li><a href="../#portfolio-section" class="nav-link"><?php echo $texts['portfolio'][$lang]; ?></a></li>
                    <li><a href="../#about-section" class="nav-link"><?php echo $texts['about_us'][$lang]; ?></a></li>
                    <li><a href="../#clients-section" class="nav-link"><?php echo $texts['our_clients'][$lang]; ?></a></li>
                    <li><a href class="nav-link jsPrivacyPolicy" data-toggle="modal" onClick="showPrivacyModal(<?php echo $lang; ?>)" data-target="#privacyModal"><?php echo $texts['privacy_policy'][$lang]; ?></a></li>
                    <li><a href="../#contact_form" class="nav-link">Contact</a></li>
                </ul>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
              <a href="https://www.instagram.com/farzadek/" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="https://www.linkedin.com/in/farzadkamali" target="_blank" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
            
            <p>Copyright &copy; 2016 - <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          
          </div>
          
        </div>
      </div>
    </footer>
  </div>



    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/stickyfill.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    
    <script src="../js/jquery.fancybox.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/lightslider.js"></script>

    <script>
      $(window).on('load', function() {
        $('.loading').fadeOut(1000, function(){
            $('.gal').fadeIn(1000);
        });
      });
      function changeLang(lang) {
        var cvalue = lang==0 ? 1 : 0;
        document.cookie = "lang=" + cvalue + ";path=/";
        location.reload();
      }

      // to prevent r-click
          $(function() {
              $(this).bind("contextmenu", function(e) {
                  e.preventDefault();
              });
          }); 
    </script>
    <style>
    .site-section{
      padding: 0 .25em .25em;
      text-align: center;
      font-size: 1.5em;
    }
    </style>
  </body>
</html>