<?php
  include_once('texts.php');

  $lang = 1;
  if(isset($_COOKIE['lang'])){
    $lang = htmlspecialchars($_COOKIE["lang"]);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MontrealWeb - A web agency to make beautiful websites</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="small web agency, we make beautiful websites">
    
    <meta name="og:title" property="og:title" content="MontrealWeb - A web agency to make beautiful websites">
    <meta name="robots" content="index, follow">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/lightslider.css">
    
    
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="../css/style.css">
    
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
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
                                    <li><a href="#home-section" class="nav-link"><?php echo $texts['home'][$lang]; ?></a></li>
                                    <li><a href="#what-we-do-section" class="nav-link"><?php echo $texts['what_we_do'][$lang]; ?></a></li>
                                    <li><a href="#portfolio-section" class="nav-link"><?php echo $texts['portfolio'][$lang]; ?></a></li>
                                    <li><a href="#about-section" class="nav-link"><?php echo $texts['about_us'][$lang]; ?></a></li>
                                    <li><a href="#clients-section" class="nav-link"><?php echo $texts['our_clients'][$lang]; ?></a></li>
                                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
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
            <div class="row mb-5">
                <div class="col-lg-6 section-title">
                    <span class="sub-title mb-2 d-block"><?php echo $texts['portfolio'][$lang]; ?></span>
                    <h2 class="title text-primary"><?php echo $texts['web_design'][$lang]; ?></h2>
                </div>
            </div>
            <div class="row mb-5">
                <ul id="lightSlider1">
                    <li data-toggle="modal" data-target="#previewModal" onClick="showModal('s_lawmake.jpg', 'Project name')">
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                        <h3>Project name</h3>
                        <p class="tags">
                            <em>HTML5</em><em>CSS3</em><em>Javascript</em><em>jQuery</em><em>PHP</em><em>MySQL</em><em>LESS</em><em>Sketch</em><em>Photoshop</em><em>Photography</em>
                        </p>
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                        <h3>Project name</h3>
                        <p class="tags">
                            <em>HTML5</em><em>CSS3</em><em>Javascript</em><em>jQuery</em><em>PHP</em><em>MySQL</em><em>LESS</em><em>Sketch</em><em>Photoshop</em><em>Photography</em>
                        </p>
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                        <h3>Project name</h3>
                        <p class="tags">
                            <em>HTML5</em><em>CSS3</em><em>Javascript</em><em>jQuery</em><em>PHP</em><em>MySQL</em><em>LESS</em><em>Sketch</em><em>Photoshop</em><em>Photography</em>
                        </p>
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                        <h3>Project name</h3>
                        <p class="tags">
                            <em>HTML5</em><em>CSS3</em><em>Javascript</em><em>jQuery</em><em>PHP</em><em>MySQL</em><em>LESS</em><em>Sketch</em><em>Photoshop</em><em>Photography</em>
                        </p>
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                        <h3>Project name</h3>
                        <p class="tags">
                            <em>HTML5</em><em>CSS3</em><em>Javascript</em><em>jQuery</em><em>PHP</em><em>MySQL</em><em>LESS</em><em>Sketch</em><em>Photoshop</em><em>Photography</em>
                        </p>
                    </li>
                </ul>
            </div>
            <hr/>
            <div class="row mb-5">
                <div class="col-lg-6 section-title">
                    <h2 class="title text-primary"><?php echo $texts['graphic_design'][$lang]; ?></h2>
                </div>
            </div>
            <div class="row mb-5">
                <ul id="lightSlider2">
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                </ul>
            </div>
            <hr/>
            <div class="row mb-5">
                <div class="col-lg-6 section-title">
                    <h2 class="title text-primary"><?php echo $texts['photography'][$lang]; ?></h2>
                </div>
            </div>
            <div class="row mb-5">
                <ul id="lightSlider3">
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                    <li>
                        <img src="../images/s_lawmake.jpg" alt="Image" class="img-fluid" class="img-fluid">
                    </li>
                </ul>
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

  <script src="../js/jquery-3.3.1.min.js"></script>
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
    function changeLang(lang) {
      var cvalue = lang==0 ? 1 : 0;
      document.cookie = "lang=" + cvalue + ";path=/";
      location.reload();
    }
    $(document).ready(function() {
        var item = 3;
        if( $(window).width() < 768){ item = 2;}
        if( $(window).width() < 480){ item = 1;}
        $(window).resize(function() {
            item = 3;
            if( $(window).width() < 768) { item = 2;} 
            if( $(window).width() < 480) { item = 1;} 
        });
        $("#lightSlider1").lightSlider({
            item: item,
            autoWidth: false,
            slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 10,
            cancelable:false,
    
            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////
    
            speed: 400, //ms'
            auto: false,
            loop: false,
            slideEndAnimation: true,
            pause: 2000,
    
            keyPress: false,
            controls: true,
            prevHtml: '',
            nextHtml: '',
    
            rtl:false,
            adaptiveHeight:false,
    
            vertical:false,
            verticalHeight:500,
            vThumbWidth:100,
    
            thumbItem:10,
            pager: true,
            gallery: false,
            galleryMargin: 5,
            thumbMargin: 5,
            currentPagerPosition: 'middle',
    
            enableTouch:true,
            enableDrag:true,
            freeMove:true,
            swipeThreshold: 40,
    
            responsive : [],
    
            onBeforeStart: function (el) {},
            onSliderLoad: function (el) {},
            onBeforeSlide: function (el) {},
            onAfterSlide: function (el) {},
            onBeforeNextSlide: function (el) {},
            onBeforePrevSlide: function (el) {}
        });

        $("#lightSlider2").lightSlider({
            item: item,
            autoWidth: false,
            slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 10,
    
            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////
            cancelable:false,

            speed: 400, //ms'
            auto: false,
            loop: false,
            slideEndAnimation: true,
            pause: 2000,
    
            keyPress: false,
            controls: true,
            prevHtml: '',
            nextHtml: '',
    
            rtl:false,
            adaptiveHeight:false,
    
            vertical:false,
            verticalHeight:500,
            vThumbWidth:100,
    
            thumbItem:10,
            pager: true,
            gallery: false,
            galleryMargin: 5,
            thumbMargin: 5,
            currentPagerPosition: 'middle',
    
            enableTouch:true,
            enableDrag:true,
            freeMove:true,
            swipeThreshold: 40,
    
            responsive : [],
    
            onBeforeStart: function (el) {},
            onSliderLoad: function (el) {},
            onBeforeSlide: function (el) {},
            onAfterSlide: function (el) {},
            onBeforeNextSlide: function (el) {},
            onBeforePrevSlide: function (el) {}
        });

        $("#lightSlider3").lightSlider({
            item: item,
            autoWidth: false,
            slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 10,
    
            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////
    
            speed: 400, //ms'
            auto: false,
            loop: false,
            slideEndAnimation: true,
            pause: 2000,
            cancelable:false,

    
            keyPress: false,
            controls: true,
            prevHtml: '',
            nextHtml: '',
    
            rtl:false,
            adaptiveHeight:false,
    
            vertical:false,
            verticalHeight:500,
            vThumbWidth:100,
    
            thumbItem:10,
            pager: true,
            gallery: false,
            galleryMargin: 5,
            thumbMargin: 5,
            currentPagerPosition: 'middle',
    
            enableTouch:true,
            enableDrag:true,
            freeMove:true,
            swipeThreshold: 40,
    
            responsive : [],
    
            onBeforeStart: function (el) {},
            onSliderLoad: function (el) {},
            onBeforeSlide: function (el) {},
            onAfterSlide: function (el) {},
            onBeforeNextSlide: function (el) {},
            onBeforePrevSlide: function (el) {}
        });

    });    
    function showModal(img, tlt){
        $('#previewModal').find('img').attr('src', '../images/'+img);
        $('#previewModal').find('h4').text(tlt);
    }

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
          <img>
      </div>
    </div>

  </div>
</div>


  </body>
</html>