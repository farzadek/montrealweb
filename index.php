<?php
  include_once('pages/texts.php');
  $name = '';
  $email = '';
  $phone = '';
  $message = '';
  $error['name'] = '';
  $error['phone'] = '';
  $error['email'] = '';
  $error['mail'] = '';
  $error['message'] = '';
  $findError = false;
  $succ = false;
  $submitted = false;
  $lang = 1;
  if(isset($_COOKIE['lang'])){
    $lang = htmlspecialchars($_COOKIE["lang"]);
  }
?>

<!DOCTYPE html>
<html lang="<?php echo $lang==0?'en':'fr'; ?>">
  <head>
    <!-- analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142854475-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-142854475-1');
    </script>

    <!-- tag anager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KBD2M2B');</script>

    <?php echo $lang==0?'<title>MontrealWeb - A family Web and Graphic design agency in Longueuil</title>':'<title>MontrealWeb - Une agence familiale de graphisme et Web à Longueuil</title>';?>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="en,fr">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A reasonable price for a perfect website. We are specialist in making beautiful websites and professional graphic design.">
    
    <meta name="og:title" property="og:title" content="A reasonable price for a perfect website. We are specialist in making beautiful websites and professional graphic design.">
    <meta name="robots" content="index, follow">

    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="shortcut icon" href="images/logo.ico" />
    <link rel="apple-touch-icon" href="images/logo.ico" />
  </head>

  <script>
    function changeLang(lang) {
      var cvalue = lang==0 ? 1 : 0;
      document.cookie = "lang=" + cvalue + ";path=/";
      location.reload();
    }
  </script>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBD2M2B"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
            <div class="col-8 col-md-6">
              <h1 class="my-0 site-logo"><a href="<?php echo $_SERVER['PHP_SELF']?>"><img src="images/logo.png" alt="montrealweb logo"/>MontrealWEB</a></h1>
            </div>
            <div class="col-4 col-md-6">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span> <span class="menu-text"></span>
                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-none">
                    <li><a href="#home-section" class="nav-link"><?php echo $texts['home'][$lang]; ?></a></li>
                    <li><a href="#what-we-do-section" class="nav-link"><?php echo $texts['what_we_do'][$lang]; ?></a></li>
                    <li><a href="#portfolio-section" class="nav-link"><?php echo $texts['portfolio'][$lang]; ?></a></li>
                    <li><a href="#about-section" class="nav-link"><?php echo $texts['about_us'][$lang]; ?></a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    <li><a onClick="changeLang(<?php echo $lang; ?>)" class="nav-link jsChangeLangHeader"><img src="images/<?php echo $lang==0?'qc_flag':'en_flag'; ?>.png"><?php echo $texts['lang'][$lang]; ?></a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover" id="home-section">
      <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">
          <div class="slide overlay jsBk1"></div>
          <div class="slide overlay jsBk2"></div>
          <div class="slide overlay jsBk3"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 align-self-center">
            <div class="intro">
              <div class="heading">
                <h1>MontréalWEB</h1>
              </div>
              <div class="text">
                <p class="sub-text mb-5"><?php echo $texts['slogan'][$lang]; ?></p>
                <p><a href="#contact_form" class="btn btn-primary btn-xs"><?php echo $texts['tell_us_what_you_need'][$lang]; ?>!</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-blocks-cover -->

    
    <div class="site-section bg-light" id="what-we-do-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block"><?php echo $texts['what_we_do'][$lang]; ?></span>
            <h2 class="title text-primary"></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 ml-auto">
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <span class="icon-photo_album display-4 text-primary d-block mb-4"></span>
                  <h3><?php echo $texts['web_design'][$lang]; ?></h3>
                  <p><?php echo $texts['web_design_text'][$lang]; ?></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <span class="icon-laptop_mac display-4 text-primary d-block mb-4"></span>
                  <h3><?php echo $texts['web_development'][$lang]; ?> (FrontEnd)</h3>
                  <p><?php echo $texts['web_development_fr_text'][$lang]; ?></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <span class="icon-layers display-4 text-primary d-block mb-4"></span>
                  <h3><?php echo $texts['web_development'][$lang]; ?> (Backend)</h3>
                  <p><?php echo $texts['web_development_bk_text'][$lang]; ?></p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <span class="icon-mobile display-4 text-primary d-block mb-4"></span>
                  <h3><?php echo $texts['responsive_Web'][$lang]; ?></h3>
                  <p><?php echo $texts['responsive_Web_text'][$lang]; ?></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <span class="icon-pencil display-4 text-primary d-block mb-4"></span>
                  <h3><?php echo $texts['update_website_contents'][$lang]; ?></h3>
                  <p><?php echo $texts['update_website_contents_text'][$lang]; ?></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <span class="icon-search2 display-4 text-primary d-block mb-4"></span>
                  <h3><?php echo $texts['debug_improvement'][$lang]; ?></h3>
                  <p><?php echo $texts['debug_improvement_text'][$lang]; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-section -->


    
    <div class="site-section" id="portfolio-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block"><?php echo $texts['some_of_our_works'][$lang]; ?></span>
            <h2 class="title text-primary mb-3"><?php echo $texts['some_of_our_works_text'][$lang]; ?></h2>
          </div>
        </div>

        <div id="portfolio_page">
          <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 section-title">
                    <span class="sub-title mb-2 d-block"><?php echo $texts['portfolio'][$lang]; ?></span>
                    <h2 class="title text-primary">Web</h2>
                </div>
            </div>
            <div class="row mb-5 web">
                <ul id="lightSlider1">
                    <?php
                    $files = scandir('images/portfolio/web');
                    array_splice($files, 0, 2);
                    for($i=0;$i<5;$i++){
                        $imgSrc = 'images/portfolio/web/'.$files[$i];
                        $title = explode("$",$files[$i])[0];
                        $s = explode('$',$files[$i])[1];
                        $s = substr($s,0,-4);
                        $s = explode('_',$s);
                    ?>
                    <li>
                        <img src="<?php echo $imgSrc;?>" alt="Image web design<?php echo $title;?> " class="img-fluid">
                        <a class="preview jsPreviewWebIndex" data-toggle="modal" data-target="#previewModal" onClick="showModal('<?php echo $title; ?>', 'web_template')"><span class="icon-search-plus"></span></a>
                        <h3><?php echo $title; ?></h3>
                        <p class="tags">
                            <?php
                            for($j=0;$j<sizeof($s);$j++){
                                echo '<em>'.$s[$j].'</em>';
                            } 
                            ?>
                        </p>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="container">
                  <a href="./portfolio-web/" class="btn btn-link btn-lg"><?php echo $texts['see_all'][$lang]; ?></a>
                </div>
            </div>
            <hr/>
            <div class="row mb-5">
                <div class="col-lg-6 section-title">
                    <h2 class="title text-primary"><?php echo $texts['graphic_design'][$lang]; ?></h2>
                </div>
            </div>
            <div class="row mb-5 graphic">
                <ul id="lightSlider2">
                    <?php
                    $files = scandir('images/portfolio/graphic');
                    array_splice($files, 0, 2);
                    for($i=0;$i<5;$i++){
                        $imgSrc = 'images/portfolio/graphic/'.$files[$i];
                        $title = explode('$',$files[$i])[0];
                    ?>
                    <li>
                        <img src="<?php echo 'images/portfolio/graphic/'.$files[$i];?>" alt="Image graphic design <?php echo $title;?>" class="img-fluid">
                        <a class="preview jsPreviewGraphicIndex" data-toggle="modal" data-target="#previewModal" onClick="showModal('<?php echo $title; ?>', 'graphic')"><span class="icon-search-plus"></span></a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="container">
                  <a href="./portfolio-graphic/" class="btn btn-link btn-lg"><?php echo $texts['see_all'][$lang]; ?></a>
                </div>
            </div>



          </div>
        </div>



      </div>
    </div>

<!--    
    <div class="site-section bg-light" id="clients-section">
      <div class="container">
         <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <h2 class="title text-primary mb-3"><?php echo $texts['our_clients'][$lang]; ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 mb-4">
            <blockquote class="blockquote">
              <p><img class="img-fluid mr-3" src="images/vm.png" alt="Image">Ville de Montréal</p>
            </blockquote>          
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <blockquote class="blockquote">
              <p><img class="img-fluid mr-3" src="images/desjardins.png" alt="Image">Desjardins</p>
            </blockquote>
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <blockquote class="blockquote">
              <p><img class="img-fluid mr-3" src="images/yp.png" alt="Image">Yellow pages</p>
            </blockquote>          
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <blockquote class="blockquote">
              <p><img class="img-fluid mr-3" src="images/cae.png" alt="Image">CAE Business jet</p>
            </blockquote>
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <blockquote class="blockquote">
              <p><img class="img-fluid mr-3" src="images/dgeq.png" alt="Image">Le directeur général des élections du Québec</p>
            </blockquote>
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <blockquote class="blockquote">
              <p><img class="img-fluid mr-3" src="images/eip.jpg" alt="Image">EIP Mondial</p>
            </blockquote>
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <blockquote class="blockquote">
              <p><img class="img-fluid mr-3" src="images/aircanada.jpg" alt="Image">Air Canada</p>
            </blockquote>
          </div>
          <div class="col-lg-6 col-md-6 mb-4">
            <blockquote class="blockquote">
              <p><img class="img-fluid mr-3" src="images/iregular.png" alt="Image">Iregular</p>
            </blockquote>
          </div>
          
        </div>
      </div>
    </div>
-->

    <div class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5">
              <img src="images/hero_4.jpg" alt="Image aboutus montrealweb" class="img-fluid" class="img-fluid">
            </div>
          <div class="col-lg-5 ml-auto section-title">
            <span class="sub-title mb-2 d-block"><?php echo $texts['about_us'][$lang]; ?></span>
            <h2 class="title text-primary mb-3"><?php echo $texts['we_are_expert_in_web'][$lang]; ?></h2>
            <p class="mb-4"><?php echo $texts['we_are_expert_in_web_text'][$lang]; ?></p>
    
    
            <div class="d-flex">
              <ul class="list-unstyled ul-check success mr-5">
                <li><?php echo $texts['web_design'][$lang]; ?></li>
                <li><?php echo $texts['web_development'][$lang]; ?></li>
                <li>UI & UX</li>
                <li><?php echo $texts['frontend_development'][$lang]; ?></li>
                <li><?php echo $texts['graphic_design'][$lang]; ?></li>
                <li><?php echo $texts['photography'][$lang]; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .END site-section -->

        <div class="site-section">
          <div class="container">
            <div class="row mb-5">
              <div class="col section-title">
                <span class="sub-title mb-2 d-block"><?php echo $texts['meet_the_team'][$lang]; ?></span>
                <h2 class="title text-primary"><?php echo $texts['we_are_expert_in_what_we_do'][$lang]; ?></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 mb-5 person">
                <img src="images/far.jpg" alt="Image farzad kamali" class="img-fluid mb-2">
                <h3>FARZAD Kamali</h3>
                <span class="mb-4 d-block"><?php echo $texts['programmer_developer'][$lang]; ?></span>
                <p><?php echo $texts['farzad_text'][$lang]; ?></p>
              </div>

              <div class="col-lg-4 mb-5 person">
                <img src="images/lili.jpg" alt="Image lili ashadi" class="img-fluid mb-2">
                <h3>LILI Ashadi</h3>
                <span class="mb-4 d-block"><?php echo $texts['sales_manager_accountant'][$lang]; ?></span>
                <p><?php echo $texts['lili_text'][$lang]; ?></p>
              </div>

              <div class="col-lg-4 person">
                <img src="images/celine.jpg" alt="Image cÉLINE and CAROLINE" class="img-fluid mb-2">
                <h3>CÉLINE & CAROLINE</h3>
                <span class="mb-4 d-block"><?php echo $texts['motivators'][$lang]; ?></span>
                <p><?php echo $texts['motivators_text'][$lang]; ?></p>
              </div>
            </div>

            
          </div>
        </div>

    <div class="site-section bg-light" id="insta-data">
      <div class="container">
        <div class="row mb-5">
          <div class="col section-title">
            <span class="sub-title mb-2 d-block"><?php echo $texts['social_network'][$lang]; ?></span>
            <h2 class="title text-primary"><?php echo $texts['insta_posts'][$lang]; ?></h2>
          </div>
        </div>
        <ul id="instafeed"></ul>
      </div>
    </div>        


    <div class="site-section" id="contact-section">
      <div class="container">
          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block"><?php echo $texts['get_in_touch'][$lang]; ?></span>
            <div class="row mb-5 mt-4 map">
                <div class="col-md-8 col-sm-12 col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44721.66035145057!2d-73.47358308354264!3d45.52811726347654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9048420ab8a53%3A0xc13f72bb8128c066!2sLongueuil%2C+QC+J4M+2Z3!5e0!3m2!1sen!2sca!4v1560868457170!5m2!1sen!2sca"></iframe>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <a class="btn btn-sm" href="tel:1-438-300-0456"><span class="icon-phone2"></span> (438) 300 - 0456 </a>
                </div>
            </div>
            <h2 class="title text-primary"><?php echo $texts['contact_us'][$lang]; ?></h2>
          </div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'].'#contact_form'; ?>" class="contact-form" id="contact_form" novalidate>
          <div class="row mb-4">
            <div class="col-12">
              <label><?php echo $texts['name'][$lang]; ?></label>
              <input type="text" name="name" id="contact_name" class="form-control <?php echo $error['name']?'err':''; ?>" value="<?php echo $name; ?>">
            </div>
            <div class="name_err"></div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <label><?php echo $texts['phone'][$lang]; ?></label>
              <input type="phone" value="<?php echo $phone; ?>" name="phone" class="form-control <?php echo $error['phone']?'err':''; ?>">
            </div>
            <div class="phone_err"></div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <label>Email</label>
              <input type="email" name="email" value="<?php echo $email; ?>" class="form-control <?php echo $error['email']?'err':''; ?>">
            </div>
            <div class="email_err"></div>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <label>Message</label>
              <textarea class="form-control <?php echo $error['message']?'err':''; ?>"  name="message" id="" cols="30" rows="10"><?php echo $message; ?></textarea>
            </div>
            <div class="message_err"></div>
          </div>
          <input type="hidden" name="lang" value="<?php echo $lang; ?>">

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary jsContactSubmit" name="submitted">Send Message</button>
            </div>
          </div>
          <div class="sendEmailResult"></div>
        </form>
      </div>
    </div> <!-- END .site-section -->
  
    <footer class="site-footer">
      <div class="container">
        <div class="row">
           
                <ul class="list-unstyled">
                    <li><a href="#home-section" class="nav-link"><?php echo $texts['home'][$lang]; ?></a></li>
                    <li><a href="#what-we-do-section" class="nav-link"><?php echo $texts['what_we_do'][$lang]; ?></a></li>
                    <li><a href="#portfolio-section" class="nav-link"><?php echo $texts['portfolio'][$lang]; ?></a></li>
                    <li><a href="#about-section" class="nav-link"><?php echo $texts['about_us'][$lang]; ?></a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    <li><a href class="nav-link jsPrivacyPolicy" data-toggle="modal" onClick="showPrivacyModal(<?php echo $lang; ?>)" data-target="#privacyModal"><?php echo $texts['privacy_policy'][$lang]; ?></a></li>
                    <li><a href onClick="changeLang(<?php echo $lang; ?>)" class="nav-link jsChangeLangFooter"><img src="images/<?php echo $lang==0?'qc_flag':'en_flag'; ?>.png" alt="change language"> <?php echo $texts['lang'][$lang]; ?></a></li>
                </ul>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
              <a href="https://www.instagram.com/farzadek/" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="https://www.linkedin.com/in/farzadkamali" target="_blank" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
            
            <p>Copyright &copy; 2015 - <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/lightslider.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/lightslider.js"></script>
  <script src="js/main.js"></script>

    <script>
    window.addEventListener("load", function(){

      var width = $(window).width();
      var img = ['hero1768.jpg', 'hero2768.jpg', 'hero3768.jpg'];
      if(width > 1366){
        img = ['hero_1.jpg', 'hero_2.jpg', 'hero_3.jpg'];
      } else{
        if(width <= 1366 && width > 1024){
          img = ['hero11400.jpg', 'hero21400.jpg', 'hero31400.jpg'];
        } else{
            if(width <= 1024 && width > 768){
              img = ['hero11024.jpg', 'hero21024.jpg', 'hero31024.jpg'];
            } 
        }
      }
      $('.owl-carousel').find('.jsBk1').append('<img src="images/'+img[0]+'" alt="Image" class="img-fluid">');
      $('.owl-carousel').find('.jsBk2').append('<img src="images/'+img[1]+'" alt="Image" class="img-fluid">');
      $('.owl-carousel').find('.jsBk3').append('<img src="images/'+img[2]+'" alt="Image" class="img-fluid">');

      var token = '3648306560.1c1827a.4a2783080b7646dcac204724ad4a63fc';
      $.ajax({
        url: 'https://api.instagram.com/v1/users/self/media/recent',
        dataType: 'jsonp',
        type: 'GET',
        data: {access_token: token},
        success: function(data){
          for( x in data.data ){
            if( data.data[x].tags.indexOf("montrealweb")>-1 ){
              $('#instafeed').append('<div><img src="'+data.data[x].images.low_resolution.url+'" alt="instagram post image"></div>');
            }
          }
        },
        error: function(data){
          console.log(data);
        }
      });

      $("#contact_form").submit(function( event ) {

        $(".name_err").empty();
        $(".phone_err").empty();
        $(".email_err").empty();
        $(".message_err").empty();
        $(".sendEmailResult").empty();

        event.preventDefault();
        $.ajax({
          type: "POST",
          url: 'http://farzadkamali.000webhostapp.com/sendemail.php',
          data: $(this).serialize(),
            success: function(response){
              if(response){
                if(response.indexOf('<') == -1){
                    var result = JSON.parse(response).error; 

                    if(result.name != ""){
                      $(".name_err").html("<p class='err'><span class='icon-times-circle-o'></span>"+result.name+"</p>");
                    }
                    if(result.phone){
                      $(".phone_err").html("<p class='err'><span class='icon-times-circle-o'></span>"+result.phone+"</p>");
                    }
                    if(result.email){
                      $(".email_err").html("<p class='err'><span class='icon-times-circle-o'></span>"+result.email+"</p>");
                    }
                    if(result.message){
                      $(".message_err").html("<p class='err'><span class='icon-times-circle-o'></span>"+result.message+"</p>");
                    }
                    if(!result.message && !result.name && !result.phone && !result.email){
                      $(".sendEmailResult").html("<p class='succ'><span class='icon-check-circle-o'></span> Your message received! We will contact you as soon as possible</p>");
                    }
                } 
                else {
                  $(".sendEmailResult").html("<p class='err'><span class='icon-times-circle-o'></span> Unfortunately our server didn\'t respond. You can send your message to info@montrealweb.ca directly.</p>");
                }
              }
              else{
                $(".sendEmailResult").html("<p class='succ'><span class='icon-check-circle-o'></span> Your message received! We will contact you as soon as possible</p>");
                setTimeout(function() {
                    $(".sendEmailResult .succ").hide(500).empty();
                    $('#contact_form').trigger("reset");
                }, 4000);
              }

            },
            error: function(error) {
                $(".sendEmailResult").html("<p class='err'><span class='icon-times-circle-o'></span> Unfortunately our server didn\'t respond. Please try later!</p>");
            }
        });
      });


    });
			

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
            loop: true,
            slideEndAnimation: true,
            pause: 2000,
    
            keyPress: false,
            controls: true,
            prevHtml: '<span class="icon-arrow-circle-left"></span>',
            nextHtml: '<span class="icon-arrow-circle-right"></span>',
    
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

            speed: 500, //ms'
            auto: false,
            loop: true,
            slideEndAnimation: true,
            pause: 4500,
            pauseOnHover: true,
    
            keyPress: false,
            controls: true,
            prevHtml: '<span class="icon-arrow-circle-left"></span>',
            nextHtml: '<span class="icon-arrow-circle-right"></span>',
    
            rtl:false,
            adaptiveHeight:false,
    
            vertical:false,
            verticalHeight:500,
            vThumbWidth:100,
    
            thumbItem:5,
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
    function showModal(website, folder){
        var pageAd = "portfolio/"+folder+"/" + website;
        if(folder == 'web_template'){
            $('.modal-header').show();
            $('#previewModal').find('.modal-body').find('object').show();
            $('#previewModal').find('.modal-body').find('.photo').css('display', 'none');
            $('#previewModal').find('.modal-body').find('object').attr('data', pageAd);
            $('#previewModal').find('h4').text(website);
        } else {
            $('.modal-header').hide();
            $('#previewModal').find('.modal-body').css('height','90vh');
            $('#previewModal').find('.modal-body').find('object').hide();
            $('#previewModal').find('.modal-body').find('.photo').show().attr('src', pageAd);
            $('#previewModal').find('.modal-body').find('.photo').attr('src', pageAd);
        }
    }

    function showPrivacyModal(lang){
        var pageAd = "pages/privacy.html";
        if(lang == '1'){
          pageAd = "pages/privacy_fr.html";
        }
        $('#privacyModal').find('.modal-body').find('object').attr('data', pageAd);
    }

    // to prevent r-click

    $(function() {
      $(this).bind("contextmenu", function(e) {
        e.preventDefault();
      });
    }); 

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
          <img class="photo" alt="preview image">
      </div>
    </div>

  </div>
</div>

<div id="privacyModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4><?php echo $texts['privacy_policy'][$lang]; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <object type="text/html" data=""></object>
      </div>
    </div>

  </div>
</div>


  </body>
</html>
