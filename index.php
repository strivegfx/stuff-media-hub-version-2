<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>stuff.co.nz</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="home">

    <nav data-state="dorment">

      <a id="navigation-cta" href="#">
        <div class="draw-icon">
          <div class="top-bar"></div>
          <div class="bottom-bar"></div>
        </div>
        <div class="stuff-logo">
          <img class="symbol"
          src="img/logos/stuff.svg"
          onerror="this.src='img/logos/stuff.png';this.onerror=null;">
        </div>
        <div class="shadow-bottom"></div>
      </a>

      <div id="navigation-links">

        <div class="center-content">

          <div class="container">

            <ul class="row">

              <li id="home-link" class="col-sm-4">
                <a href="#">
                  <div class="feature-icon">
                    <div class="shadow-shell">
                      <div class="icon-shadow"></div>
                    </div>
                    <div class="ring-light"></div>
                    <div class="ring-dark"></div>
                    <div class="base"></div>
                    <img class="symbol"
                      src="img/svg-icons/audience.svg"
                      onerror="this.src='img/png-icons/audience.png';this.onerror=null;">
                  </div>
                  <div class="link-name">
                    <div class="copy">
                      Home
                      <div class="underline"></div>
                    </div>
                  </div>
                </a>
              </li>

              <li id="media-kit-link" class="col-sm-4">
                <a href="#">
                  <div class="feature-icon">
                    <div class="shadow-shell">
                      <div class="icon-shadow"></div>
                    </div>
                    <div class="ring-light"></div>
                    <div class="ring-dark"></div>
                    <div class="base"></div>
                    <img class="symbol"
                      src="img/svg-icons/media-kit.svg"
                      onerror="this.src='img/png-icons/media-kit.png';this.onerror=null;">
                  </div>
                  <div class="link-name">
                    <div class="copy">
                      Media Kit
                      <div class="underline"></div>
                    </div>
                  </div>
                </a>
              </li>

              <li id="rate-card-link" class="col-sm-4">
                <a href="#">
                  <div class="feature-icon">
                    <div class="shadow-shell">
                      <div class="icon-shadow"></div>
                    </div>
                    <div class="ring-light"></div>
                    <div class="ring-dark"></div>
                    <div class="base"></div>
                    <img class="symbol"
                      src="img/svg-icons/rate-card.svg"
                      onerror="this.src='img/png-icons/rate-card.png';this.onerror=null;">
                  </div>
                  <div class="link-name">
                    <div class="copy">
                      Rate Card
                      <div class="underline"></div>
                    </div>
                  </div>
                </a>
              </li>

              <li id="tech-specs-link" class="col-sm-4">
                <a href="#">
                  <div class="feature-icon">
                    <div class="shadow-shell">
                      <div class="icon-shadow"></div>
                    </div>
                    <div class="ring-light"></div>
                    <div class="ring-dark"></div>
                    <div class="base"></div>
                    <img class="symbol"
                      src="img/svg-icons/tech-specs.svg"
                      onerror="this.src='img/png-icons/tech-specs.png';this.onerror=null;">
                  </div>
                  <div class="link-name">
                    <div class="copy">
                      Tech Specs
                      <div class="underline"></div>
                    </div>
                  </div>
                </a>
              </li>

              <li id="terms-and-conditions-link" class="col-sm-4">
                <a href="#">
                  <div class="feature-icon">
                    <div class="shadow-shell">
                      <div class="icon-shadow"></div>
                    </div>
                    <div class="ring-light"></div>
                    <div class="ring-dark"></div>
                    <div class="base"></div>
                    <img class="symbol"
                      src="img/svg-icons/terms-and-conditions.svg"
                      onerror="this.src='img/png-icons/terms-and-conditions.png';this.onerror=null;">
                  </div>
                  <div class="link-name">
                    <div class="copy">
                      Ts &amp; Cs
                      <div class="underline"></div>
                    </div>
                  </div>
                </a>
              </li>

              <li id="booking-link" class="col-sm-4">
                <a href="#">
                  <div class="feature-icon">
                    <div class="shadow-shell">
                      <div class="icon-shadow"></div>
                    </div>
                    <div class="ring-light"></div>
                    <div class="ring-dark"></div>
                    <div class="base"></div>
                    <img class="symbol"
                      src="img/svg-icons/booking.svg"
                      onerror="this.src='img/png-icons/booking.png';this.onerror=null;">
                  </div>
                  <div class="link-name">
                    <div class="copy">
                      Booking
                      <div class="underline"></div>
                    </div>
                  </div>
                </a>
              </li>

            </ul> <!-- end of row -->

          </div> <!-- end of container -->

        </div> <!-- end of center-content -->

      </div> <!-- end of navigation-links -->

    </nav> <!-- end of navigation -->

    <header id="feature-image">

      <?php echo file_get_contents("snipets/feature-image-circles.php"); ?>

      <h1>advertise online</h1>

      <div class="divider-shadow-top"></div>
      <div class="divider-shadow-bottom"></div>

    </header> <!-- end of feature image -->

    <?php echo file_get_contents("snipets/stuff-divider.php"); ?>

    <section id="introduction" class="container">

      <div class="row">

        <article class="col-md-6 audience information-feature">
          <div class="feature-icon">
            <div class="shadow-shell">
              <div class="icon-shadow"></div>
            </div>
            <div class="ring-light"></div>
            <div class="ring-dark"></div>
            <div class="base"></div>
            <img class="symbol"
              src="img/svg-icons/audience.svg"
              onerror="this.src='img/png-icons/audience.png';this.onerror=null;">
          </div>
          <h3>Our audience</h3>
          <p class="description">With over 1.4 million unique browsers every month, we are New Zealand's most loved and celebrated news and entertainment website providing a great platform to reach highly engaged users.</p>
        </article>

        <article class="col-md-6 reach-engagement information-feature">
          <div class="feature-icon">
            <div class="shadow-shell">
              <div class="icon-shadow"></div>
            </div>
            <div class="ring-light"></div>
            <div class="ring-dark"></div>
            <div class="base"></div>
            <img class="symbol"
              src="img/svg-icons/reach-engagement.svg"
              onerror="this.src='img/png-icons/reach-engagement.png';this.onerror=null;">
          </div>
          <h3>Reach &amp; Engagement</h3>
          <p class="description">We provide unmatched coverage on a regional and national level. Driven by our key content categories and our masthead sites, our advertisers are able to reach New Zealanders in both broad and narrow channels depending on your campaign objectives.</p>
        </article>

        <article class="col-md-6 here-to-help information-feature">
          <div class="feature-icon">
            <div class="shadow-shell">
              <div class="icon-shadow"></div>
            </div>
            <div class="ring-light"></div>
            <div class="ring-dark"></div>
            <div class="base"></div>
            <img class="symbol"
              src="img/svg-icons/here-to-help.svg"
              onerror="this.src='img/png-icons/here-to-help.png';this.onerror=null;">
          </div>
          <h3>We're here to help</h3>
          <p class="description">Getting your account manager involved  at the earliest opportunity is a key ingredient in any successful advertising campaign. We tailor specific advertising plans to meet your goals - whether its driving traffic to your website, a direct response solution, or increasing brand awareness - we can do it all.</p>
        </article>

        <article class="col-md-6 finding-niche information-feature">
          <div class="feature-icon">
            <div class="shadow-shell">
              <div class="icon-shadow"></div>
            </div>
            <div class="ring-light"></div>
            <div class="ring-dark"></div>
            <div class="base"></div>
            <img class="symbol"
              src="img/svg-icons/finding-niche.svg"
              onerror="this.src='img/png-icons/finding-niche.png';this.onerror=null;">
          </div>
          <h3>Finding your niche</h3>
          <p class="description">Our ad-serving technology allows advertisers to target specific Stuff.co.nz audiences in multiple ways - through content categories, behavioural targeting and by using keywords to align advertising with specific editorial content.</p>
        </article>

      </div>

    </section> <!-- end of introduction -->

    <?php echo file_get_contents("snipets/stuff-divider.php"); ?>

    <div id="enquires">

      <div class="container">

        <div class="circle-background">
          <img class="spacer" src="img/500x500px-spacer.gif">
          <div class="base"></div>
          <div class="ring-light"></div>
          <div class="ring-dark"></div>
        </div>

        <div class="title-container">
          <h3>enquires</h3>
          <p class="description">Want to find out more about advertising opportunities on stuff.co.nz?</p>
        </div>

        <div class="row">

          <a href="tel:+6499704032" class="contact-information phone col-sm-3 col-sm-offset-3">
            <div class="feature-icon white-base">
              <div class="shadow-shell">
                <div class="icon-shadow"></div>
              </div>
              <div class="ring-light"></div>
              <div class="ring-dark"></div>
              <div class="base"></div>
              <img class="symbol"
                src="img/svg-icons/enquiries-phone.svg"
                onerror="this.src='img/png-icons/enquiries-phone.png';this.onerror=null;">
            </div>
            <h3>Phone</h3>
            <div class="extra-detail">(09) 970 4032</div>
          </a>

          <a href="mailto:advertising@fairfaxdigital.co.nz" class="contact-information email col-sm-3">
            <div class="feature-icon white-base">
              <div class="shadow-shell">
                <div class="icon-shadow"></div>
              </div>
              <div class="ring-light"></div>
              <div class="ring-dark"></div>
              <div class="base"></div>
              <img class="symbol"
                src="img/svg-icons/enquiries-email.svg"
                onerror="this.src='img/png-icons/enquiries-email.png';this.onerror=null;">
            </div>
            <h3>Email</h3>
            <div class="extra-detail">advertising@fairfaxdigital.co.nz</div>
          </a>

        </div>

        <div class="divider-shadow-top"></div>
        <div class="divider-shadow-bottom"></div>

      </div>

    </div> <!-- end of enquires -->

    <?php echo file_get_contents("snipets/stuff-divider.php"); ?>

    <div id="media-tools">

      <div class="media-kit tool-shell">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-sm-offset-1 col-md-offset-2">
              <div class="feature-icon white-base">
                <div class="shadow-shell">
                  <div class="icon-shadow"></div>
                </div>
                <div class="ring-light"></div>
                <div class="ring-dark"></div>
                <div class="base"></div>
                <img class="symbol"
                  src="img/svg-icons/media-kit.svg"
                  onerror="this.src='img/png-icons/media-kit.png';this.onerror=null;">
              </div>
            </div>
            <div class="col-sm-8">
              <h2>Media Kit</h2>
              <p class="description">Need more convincing? Find out why stuff.co.nz dominates the market and is the perfect place to house your next campaign.</p>
              <a class="btn btn-white-on-red" href="#" role="button">more</a>
            </div>
          </div>
        </div>
      </div> <!-- end of media kit-->

      <div class="rate-card tool-shell">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-sm-offset-1 col-md-offset-2">
              <div class="feature-icon white-base">
                <div class="shadow-shell">
                  <div class="icon-shadow"></div>
                </div>
                <div class="ring-light"></div>
                <div class="ring-dark"></div>
                <div class="base"></div>
                <img class="symbol"
                  src="img/svg-icons/rate-card.svg"
                  onerror="this.src='img/png-icons/rate-card.png';this.onerror=null;">
              </div>
            </div>
            <div class="col-sm-8">
              <h2>Rate Card</h2>
              <p class="description">View our competitive pricing structure across the stuff ecosystem and find the right opportunity to fit your needs.</p>
              <a class="btn btn-white-on-yellow" href="#" role="button">more</a>
            </div>
          </div>
        </div>
      </div> <!-- end of rate-card-->

      <div class="tech-specs tool-shell">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-sm-offset-1 col-md-offset-2">
              <div class="feature-icon white-base">
                <div class="shadow-shell">
                  <div class="icon-shadow"></div>
                </div>
                <div class="ring-light"></div>
                <div class="ring-dark"></div>
                <div class="base"></div>
                <img class="symbol"
                  src="img/svg-icons/tech-specs.svg"
                  onerror="this.src='img/png-icons/tech-specs.png';this.onerror=null;">
              </div>
            </div>
            <div class="col-sm-8">
              <h2>Tech Specs</h2>
              <p class="description">Have a look at the technical details for each creative unit that we run across the stuff platform from static to flash and video.</p>
              <a class="btn btn-white-on-green" href="#" role="button">more</a>
            </div>
          </div>
        </div>
      </div> <!-- end of tech-specs-->

      <div class="terms-and-conditions tool-shell">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-sm-offset-1 col-md-offset-2">
              <div class="feature-icon white-base">
                <div class="shadow-shell">
                  <div class="icon-shadow"></div>
                </div>
                <div class="ring-light"></div>
                <div class="ring-dark"></div>
                <div class="base"></div>
                <img class="symbol"
                  src="img/svg-icons/terms-and-conditions.svg"
                  onerror="this.src='img/png-icons/terms-and-conditions.png';this.onerror=null;">
              </div>
            </div>
            <div class="col-sm-8">
              <h2>Ts &amp; Cs</h2>
              <p class="description">Get into the nitty gritty here inside out terms and conditions section.</p>
              <a class="btn btn-white-on-blue" href="#" role="button">more</a>
            </div>
          </div>
        </div>
      </div> <!-- end of terms-and-conditions-->

      <div class="booking tool-shell">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-sm-offset-1 col-md-offset-2">
              <div class="feature-icon white-base">
                <div class="shadow-shell">
                  <div class="icon-shadow"></div>
                </div>
                <div class="ring-light"></div>
                <div class="ring-dark"></div>
                <div class="base"></div>
                <img class="symbol"
                  src="img/svg-icons/booking.svg"
                  onerror="this.src='img/png-icons/booking.png';this.onerror=null;">
              </div>
            </div>
            <div class="col-sm-8">
              <h2>Booking</h2>
              <p class="description">Find out when and where to send your creative assets to get in front of our audience.</p>
              <a class="btn btn-white-on-purple" href="#" role="button">more</a>
            </div>
          </div>
        </div>
      </div> <!-- end of booking-->

    </div> <!-- end of media-tools -->

    <?php echo file_get_contents("snipets/stuff-divider.php"); ?>

    <?php echo file_get_contents("snipets/footer.php"); ?>

    <script type="text/javascript">

      (function(){

        var $featureImage = document.getElementById('feature-image'),
            $colors = ['red', 'yellow', 'green', 'blue', 'purple'],
            $length = $colors.length,
            $random = Math.floor(Math.random() * $length), // random number between 0 and 4
            $newClass = $colors[$random] + '-version';

        $featureImage.className += ' ' + $newClass;

      })();

    </script>

    <!-- add in animation triggers for scroll spy animation -->
    <!-- this is done via javascript because if the user does not have javascript installed the elements would never be triggered to enter the stage -->
    <script type="text/javascript">

      var $animationModules = (function(){

        var $id = ['feature-image', 'introduction', 'enquires', 'media-tools', 'footer'],
            $length = $id.length,
            $newClass = 'off-stage',
            $this, $i;

        for($i = 0; $i < $length; $i++){

          $this = document.getElementById($id[$i]);

          $this.className += ' ' + $newClass;
          
          if($this.classList){

            $this.classList.add($newClass);

          }else{

            $this.className += ' ' + $newClass;

          } // end of if

        } // end of loop

        return $id;

      })();

    </script>

    <!-- modernizr = feature detection -->
    <script src="js/modernizr-development.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bespoke/scrollspy.js"></script>
    <script src="js/bespoke/main.js"></script>

  </body>

</html>