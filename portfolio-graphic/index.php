<?php
  include_once('../pages/texts.php');

  $lang = 1;
  if(isset($_COOKIE['lang'])){
    $lang = htmlspecialchars($_COOKIE["lang"]);
  }
?>

<!DOCTYPE html>
<html lang="<?php echo $lang==0?'en':'fr'; ?>">
  <head>
    <title>MontrealWeb - Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="portfolio - small web agency, we make beautiful websites">
    
    <meta name="og:title" property="og:title" content="MontrealWeb - A web agency to make beautiful websites - portfolio Graphic design">
    <meta name="robots" content="index, follow">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
  </head>
  
  <script>
    function changeLang(lang) {
      var cvalue = lang==0 ? 1 : 0;
      document.cookie = "lang=" + cvalue + ";path=/";
      location.reload();
    }
  </script>

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
                    <div class="col-6 col-md-4">
                        <h1 class="my-0 site-logo"><a href="../">MontrealWEB</a></h1>
                    </div>
                    <div class="col-6 col-md-8">
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
                                    <li><a onClick="changeLang(<?php echo $lang; ?>)" class="nav-link"><img src="../images/<?php echo $lang==0?'qc_flag':'en_flag'; ?>.png"><?php echo $texts['lang'][$lang]; ?></a></li>
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
            <div class="row mb-5 webfolio">
                <div class="col-lg-6 section-title">
                    <span class="sub-title mb-2 d-block"><?php echo $texts['portfolio'][$lang]; ?></span>
                    <h2 class="title text-primary"><?php echo $texts['graphic_design'][$lang]; ?></h2>
                </div>
            </div>

                <div class="col-md-12">
                  <div class="row">
	                  <div class="gal">
                    <?php
                    $files = scandir('../images/portfolio/graphic');
                    array_splice($files, 0, 2);
                    $i = 0;
                    while($i<sizeof($files)){
                      $imgSrc = '../images/portfolio/graphic/'.$files[$i];
                      $title = explode("$",$files[$i])[0];
                    ?>
                      <div data-toggle="modal" data-target="#previewModal" onClick="showModal('<?php echo $title; ?>')">
                        <img src="<?php echo $imgSrc; ?>" alt="" >
                        <span class="icon-search-plus"></span>
                      </div>
                    <?php
                      $i++;
                    }
                    ?>
	                  </div>	
                  </div>
                </div>

            </div>

        </div>
    </div> 
  
    <footer class="site-footer">
      <div class="container">
        <div class="row">
           
                <ul class="list-unstyled">
                    <li><a href="#home-section" class="nav-link"><?php echo $texts['home'][$lang]; ?></a></li>
                    <li><a href="#what-we-do-section" class="nav-link"><?php echo $texts['what_we_do'][$lang]; ?></a></li>
                    <li><a href="#portfolio-section" class="nav-link"><?php echo $texts['portfolio'][$lang]; ?></a></li>
                    <li><a href="#about-section" class="nav-link"><?php echo $texts['about_us'][$lang]; ?></a></li>
                    <li><a href="#clients-section" class="nav-link"><?php echo $texts['our_clients'][$lang]; ?></a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
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

  <script>
    function changeLang(lang) {
      var cvalue = lang==0 ? 1 : 0;
      document.cookie = "lang=" + cvalue + ";path=/";
      location.reload();
    }
    function showModal(website){
        var pageAd = "../portfolio/graphic/" + website;
        $('.modal-header').hide();
        $('#previewModal').find('.modal-body').css('height','90vh');
        $('#previewModal').find('.modal-body').find('object').hide();
        $('#previewModal').find('.modal-body').find('.photo').show().attr('src', pageAd);
        $('#previewModal').find('.modal-body').find('.photo').attr('src', pageAd);
    }

    // to prevent r-click
    /*
        $(function() {
            $(this).bind("contextmenu", function(e) {
                e.preventDefault();
            });
        }); 
*/
  </script>


<div id="previewModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4></h4>
      </div>
      <div class="modal-body">
          <object type="text/html" data=""></object>
          <img class="photo">
      </div>
    </div>

  </div>
</div>


  </body>
</html>