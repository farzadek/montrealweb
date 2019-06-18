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

  if (isset($_POST['submitted'])){
      $submitted = true;
      $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
      $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
      $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
      $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
      if(!$name){
          $error['name'] = "Don't you want to tell us your name?";
          $findError = true;
      }
      if(!$phone && !$email){
          $error['email'] = "We need your phone number or email address to contact you!";
          $findError = true;
      } else {
          if($phone && !preg_match("/^\(?([2-9][0-8][0-9])\)?[-. ]?([2-9][0-9]{2})[-. ]?([0-9]{4})$/", $phone)){
              $error['phone'] = "It seems that Phone no. is not correct!";
              $findError = true;
          }
          if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $error['email'] = "It seems that Email format is not correct!";
              $findError = true;
          }
      }
      if(!$message){
          $error['message'] = "Would you like to tell us how can we help?";
          $findError = true;
      }

      $msg = '';
      if(!$findError){
          $msg = '<p style="font-size:12px">NAME: <strong>$name</strong></p><p style="font-size:12px">EMAIL: <strong>$email</strong></p>';
          $msg .= '<p style="font-size:12px">PHONE: <strong>$phone</strong></p><p style="font-size:13px">$message</p>';
          if(mail("farzadek@gmail.com","from MontrealWeb.ca",$msg)){
              $succ = true;
              $msg = '';
              if($email){
                  if($name){$msg .= '<p>Dear <strong>'.$name.'</strong></p>';}
                  $msg .= '<p>We received your message and we\'ll contact you as soon as possible.</p>';
                  $msg .= '<p>Have a nice day.</p>';
                  $msg .= '<p>Lili Ashadi - MontrealWEB.ca</p>';
                  mail($email,"Message from MontrealWeb.ca",$msg);
              }
          } else { 
              $succ = false; 
              $error['mail'] = 'Sorry! The system couldn\'t deliver your message. Please try later!';
          }
      }

  }

?>

<!DOCTYPE html>
<html lang="<?php echo $lang==0?'en':'fr'; ?>">
  <head>
    <title>MontrealWeb - A web agency to make beautiful websites</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="small web agency, we make beautiful websites">
    
    <meta name="og:title" property="og:title" content="MontrealWeb - A web agency to make beautiful websites">
    <meta name="robots" content="index, follow">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    

    <link rel="stylesheet" href="css/style.css">
    
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
</div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-4">
              <h1 class="my-0 site-logo"><a href="<?php echo $_SERVER['PHP_SELF']?>">MontrealWEB</a></h1>
            </div>
            <div class="col-6 col-md-8">
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
                    <li><a href="#clients-section" class="nav-link"><?php echo $texts['our_clients'][$lang]; ?></a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    <li><a onClick="changeLang(<?php echo $lang; ?>)" class="nav-link"><img src="images/<?php echo $lang==0?'qc_flag':'en_flag'; ?>.png"><?php echo $texts['lang'][$lang]; ?></a></li>
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
          <div class="slide overlay">
            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">  
          </div>
          <div class="slide overlay">
            <img src="images/hero_2.jpg" alt="Image" class="img-fluid">  
          </div>
          <div class="slide overlay">
            <img src="images/hero_3.jpg" alt="Image" class="img-fluid">  
          </div>
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
                <p><a href="#contact-section" class="btn btn-primary btn-xs"><?php echo $texts['tell_us_what_you_need'][$lang]; ?>!</a></p>
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

        <div class="row mb-5">

          <?php
            $files = scandir('images/portfolio/web');
            array_splice($files, 0, 2);
            for($i=0;$i<sizeof($files);$i++){
                $imgSrc = 'images/portfolio/web/'.$files[$i];
                $s = explode('$',$files[$i])[0];
          ?>
                <div class="col-lg-6 col-md-6 mb-4 mb-lg-0 mb-5">
                  <img src="<?php echo 'images/portfolio/web/'.$files[$i];?>" alt="Image" class="img-fluid">
                  <h3><?php echo $s; ?></h3>
                </div>
          <?php
            }
          ?>        
        </div>
        <a href="pages/portfolio.php" class="btn btn-primary btn-xs"><?php echo $texts['visit_portfolio_page'][$lang]; ?></a>
      </div>
    </div>

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


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5">
              <img src="images/hero_4.jpg" alt="Image" class="img-fluid" class="img-fluid">
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
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-2">
                <h3>FARZAD Kamali</h3>
                <span class="mb-4 d-block"><?php echo $texts['programmer_developer'][$lang]; ?></span>
                <p><?php echo $texts['farzad_text'][$lang]; ?></p>
              </div>

              <div class="col-lg-4 mb-5 person">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-2">
                <h3>LILI Ashadi</h3>
                <span class="mb-4 d-block"><?php echo $texts['sales_manager_accountant'][$lang]; ?></span>
                <p><?php echo $texts['lili_text'][$lang]; ?></p>
              </div>

              <div class="col-lg-4 person">
                <img src="images/celine.jpg" alt="Image" class="img-fluid mb-2">
                <h3>Céline & Caroline</h3>
                <span class="mb-4 d-block"><?php echo $texts['motivators'][$lang]; ?></span>
                <p><?php echo $texts['motivators_text'][$lang]; ?></p>
              </div>
            </div>

            
          </div>
        </div>



    <div class="site-section" id="contact-section">
      <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'].'#contact_form'; ?>" class="contact-form" id="contact_form" novalidate>
          <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block"><?php echo $texts['get_in_touch'][$lang]; ?></span>
            <div class="row mb-5 mt-4 map">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44721.66035145057!2d-73.47358308354264!3d45.52811726347654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9048420ab8a53%3A0xc13f72bb8128c066!2sLongueuil%2C+QC+J4M+2Z3!5e0!3m2!1sen!2sca!4v1560868457170!5m2!1sen!2sca"></iframe>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <a class="btn btn-sm" href="tel:1-438-300-0456">(438) 300-0456</a>
                </div>
            </div>
            <h2 class="title text-primary"><?php echo $texts['contact_us'][$lang]; ?></h2>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <input type="text" name="name" class="form-control <?php echo $error['name']?'err':''; ?>" value="<?php echo $name; ?>" placeholder="<?php echo $texts['name'][$lang]; ?>">
            </div>
            <?php echo $error['name']?'<p class="err">'.$error['name'].'</p>':'';?>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <input type="phone" value="<?php echo $phone; ?>" name="phone" class="form-control <?php echo $error['phone']?'err':''; ?>" placeholder="<?php echo $texts['phone'][$lang]; ?>">
            </div>
            <?php echo $error['phone']?'<p class="err">'.$error['phone'].'</p>':'';?>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <input type="email" name="email" value="<?php echo $email; ?>" class="form-control <?php echo $error['email']?'err':''; ?>" placeholder="Email">
            </div>
            <?php echo $error['email']?'<p class="err">'.$error['email'].'</p>':'';?>
          </div>

          <div class="row mb-4">
            <div class="col-12">
              <textarea class="form-control <?php echo $error['message']?'err':''; ?>"  name="message" id="" cols="30" rows="10" placeholder="Message"><?php echo $message; ?></textarea>
            </div>
            <?php echo $error['message']?'<p class="err">'.$error['message'].'</p>':'';?>
          </div>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-sm" name="submitted">Send Message</button>
            </div>
          </div>
          <?php echo ($submitted && $succ)?'<p class="succ">Your message received! We will contact you as soon as possible</p>':'';?>
          <?php echo ($submitted && $error['mail'])?'<p class="succ">'.$error['mail'].'</p>':'';?>
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/stickyfill.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

     
  </body>
</html>