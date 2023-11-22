<!DOCTYPE html>
<?php

// if(!empty($_POST["send"])) {
// 	$fname = $_POST["fname"];
// 	$lname = $_POST["lname"];
// 	$email = $_POST["email"];
// 	$contact = $_POST["contact"];
// 	$company = $_POST["company"];
// 	$city = $_POST["city"];
// 	$subject = $_POST["message"];

// 	$toEmail = "admin@justkapture.com";
// 	$mailHeaders = "From: " . $fname . "<". $email .">\r\n";
// 	$content= "Name :".$fname. " ".$lname."\n Email :".$email."\n Contact :".$contact."\n Company :".$company."\n City :".$city."\n Message :".$subject."\n";
// 	if(mail($toEmail, "Mail from JK Website", $content, $mailHeaders)) {
// 	    $message ="Your contact information is received successfully.";
// 	    $type = "success";
// 	}

// }
// ?>
<html lang="en">
  <head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5KZC2ZL');</script>
<!-- End Google Tag Manager --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>JustKapture Innovations</title>
    <!-- Favicon-->
    <link rel="icon" href="img/hash.png">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '775459389748063');
  fbq('track', 'PageView');
</script>
<img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=775459389748063&ev=PageView&noscript=1"
/>
<!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Ads: 857196793 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-857196793"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-857196793');
</script>
<!-- Event snippet for Submit lead form conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-857196793/qdJMCOjC-vYBEPmR35gD'});
</script>
  </head>
  <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KZC2ZL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Preloader
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-light" role="status"><span class="sr-only">Loading...</span></div>
    </div>	-->
    <!-- Header Area-->
    <?php include("navBarr.php"); ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Thank You For Submitting details</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="thankyou.php">ThankYou</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Area-->
    <div class="radix-contact-us-area section-padding-120-40">
      <div class="container">                       
        <div class="row justify-content-between">
           Contact Side Info
          <div class="col-12 col-lg-5 col-xl-4">
            <div class="contact-side-info mb-80">
              <h5>HEAD OFFICE – HYDERABAD</h5>
              <p class="mb-0"><b>Address:</b>CoKarma, 3rd Floor, Plot No. 255, Botanical Garden Rd, Sri Ramnagar – Block B, Kondapur, Hyderabad, Telangana 500084</p></br>
			  <p><b>Phone</b>:+91 8886666793</p>
			  <p><b>Email</b>l: manish@justkapture.com</p>
            </div>
          </div>
           Contact Form
          <div class="col-12 col-lg-7">
            <div class="contact-form mb-80">
              <form  action="" enctype="multipart/form-data" method="post">
                <div id="success_fail_info"></div>
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <label for="name">First Name</label>
                    <input class="form-control mb-30" id="fname" type="text" placeholder="" value="" name="fname" required>
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="email">Last Name:</label>
                    <input class="form-control mb-30" id="lname" type="" placeholder="" name="lname" value="" required>
                  </div>
				  <div class="col-12 col-lg-6">
                    <label for="name">Email Address</label>
                    <input class="form-control mb-30" id="email" type="email" placeholder="" value="" name="email" required>
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="email">Phone Number</label>
                    <input class="form-control mb-30" id="contact" type="number" placeholder="" name="contact" value="" required>
                  </div>
				  <div class="col-12 col-lg-6">
                    <label for="name">Company:</label>
                    <input class="form-control mb-30" id="companny" type="input" placeholder="" value="" name="company" required>
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="email">City:</label>
                    <input class="form-control mb-30" id="city" type="input" placeholder="" name="city" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="message">Message:</label>
                    <textarea class="form-control mb-30" id="message" placeholder="Message" name="message"></textarea>
                  </div>
                  <div class="col-12 text-center">
                      <a href="thankyou.php" ><input class="btn radix-btn white-btn" type="submit" name="send" class="btn-submit"
                    value="Send" /></a>
					 <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Google Maps-->
    <div class="google-maps-wrapper">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.9983393242846!2d78.3528643148774!3d17.459793588035197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9144d380f36f%3A0xc3963334ca5c796!2sJustKapture!5e0!3m2!1sen!2sin!4v1586191227644!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"" allowfullscreen=""></iframe>
    </div>
	<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="#"><img class="card-img-top" src="img/jaipur.jpg" alt=""></a>
              <div class="post-content p-4">
                  <h4 align="center">JAIPUR</h4></a>
                <p>Shop no.2,
Agarwal Market,
plot no.C-9/22 Chitrakoot Vaishali Nagar</p>
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="#"><img class="card-img-top" src="img/ah.jpg" alt=""></a>
              <div class="post-content p-4">
                  <h4 align="center">AHMEDABAD</h4></a>
                <p>
AHMEDABAD
B-705, Samarpan Tower,
132 feet ring road,
Naranpura</p>
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
		  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="#"><img class="card-img-top" src="img/pune.jpg" alt=""></a>
              <div class="post-content p-4">
                  <h4 align="center">PUNE</h4></a>
                <p>B-201,Kaasp county,
kaspte wasti Wakad</p>
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    <!-- Footer Area-->
   <?php include("footer.php");?>
    <!-- All JavaScript Files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/default/classy-nav.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/default/jquery.scrollup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/default/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animatedheadline.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-video.min.js"></script>
    <script src="js/default/cookiealert.js"></script>
    <script src="js/default/jquery.passwordstrength.js"></script>
    <script src="js/default/mail.js"></script>
    <script src="js/default/active.js"></script>
  </body>
</html>