<!DOCTYPE html>
<?php
if(!empty($_POST["send"])) {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$contact = $_POST["contact"];
	$company = $_POST["company"];
	$city = $_POST["city"];
	$subject = $_POST["message"];

	$toEmail = "libramanishagarwal@gmail.com,madhurivudattu36@gmail.com,lubhaniindustries@gmail.com";
	$mailHeaders = "From: " . $fname . "<". $email .">\r\n";
	$content= "Name :".$fname. " ".$lname."\n Email :".$email."\n Contact :".$contact."\n Company :".$company."\n City :".$city."\n Message :".$subject."\n";
	if(mail($toEmail, "Mail from JK Website", $content, $mailHeaders)) {
	    $message ="Your contact information is received successfully.";
	    $type = "success";
	    header("Location: thankyou.php");
	}

}
?>
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
    <title>GoKapture</title>
    <!-- Favicon-->
    	<link rel="icon" href="img/gokapture/favicon.png">
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
  src="https://www.facebook.com/tr?id=775459389748063&ev=PageView&noscript=1" alt="contact"
/>
<!-- End Facebook Pixel Code -->


<!--marketing team-->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '323335196628477');
fbq('track', 'PageView');
</script>
<img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=323335196628477&ev=PageView&noscript=1"
 alt="contact" />
<!-- End Meta Pixel Code -->
<!---->
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
    <?php include("tempnavbar.php"); ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb--area white-bg-breadcrumb">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Available in different cities</h2>
              </div>
              <!--<nav aria-label="breadcrumb">-->
                <!--<ol class="breadcrumb justify-content-center">-->
                <!--  <li class="breadcrumb-item"><a href="index">Home</a></li>-->
                <!--  <li class="breadcrumb-item active" aria-current="page"><a href="contact">Contact Us</a></li>-->
                <!--</ol>-->
            <!--  </nav>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>
    <!-- Google Maps-->
    <div class="google-maps-wrapper">
        <h2 style = "text-align:center; "></h2>
      <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.9983393242846!2d78.3528643148774!3d17.459793588035197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9144d380f36f%3A0xc3963334ca5c796!2sJustKapture!5e0!3m2!1sen!2sin!4v1586191227644!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"" allowfullscreen=""></iframe>-->
    </div>
	<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-jaipur"><img class="card-img-top" src="img/gokapture/contact/jaipur.jpg" alt="photo-booth-in-jaipur"></a>
              <div class="post-content p-4">
                  <h4 align="center">Vaishali Nagar,<br/> Jaipur</h4></a>
<!--                <p>Shop no.2,-->
<!--Agarwal Market,-->
<!--plot no.C-9/22 Chitrakoot Vaishali Nagar</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-delhi"><img class="card-img-top" src="img/gokapture/contact/delhi.jpg" alt="photo-booth-in-delhi"></a>
              <div class="post-content p-4">
                  <h4 align="center">Sector-40,<br/> Gurgoan</h4></a>
<!--                <p>-->
<!--AHMEDABAD-->
<!--B-705, Samarpan Tower,-->
<!--132 feet ring road,-->
<!--Naranpura</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
		  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-mumbai"><img class="card-img-top" src="img/gokapture/contact/mumbai.jpg" alt="photo-booth-in-mumbai"></a>
              <div class="post-content p-4">
                  <h4 align="center">West Santacruz,<br/> Mumbai</h4></a>
<!--                <p>B-201,Kaasp county,-->
<!--kaspte wasti Wakad</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      <!--4th column-->
      	<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-pune"><img class="card-img-top" src="img/gokapture/contact/pune.jpg" alt="photo-booth-in-pune"></a>
              <div class="post-content p-4">
                  <h4 align="center">Wakad,<br/> Pune</h4></a>
<!--                <p>Shop no.2,-->
<!--Agarwal Market,-->
<!--plot no.C-9/22 Chitrakoot Vaishali Nagar</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-bangalore"><img class="card-img-top" src="img/gokapture/contact/bangalore.jpg" alt="photo-booth-in-bangalore"></a>
              <div class="post-content p-4">
                  <h4 align="center">HSR,<br/> Bangalore</h4></a>
<!--                <p>-->
<!--AHMEDABAD-->
<!--B-705, Samarpan Tower,-->
<!--132 feet ring road,-->
<!--Naranpura</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
		  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-hyderabad"><img class="card-img-top" src="img/gokapture/contact/hyd.jpg" alt="photo-booth-in-hyderabad"></a>
              <div class="post-content p-4">
                  <h4 align="center">Kondapur,<br/> Hyderabad</h4></a>
<!--                <p>B-201,Kaasp county,-->
<!--kaspte wasti Wakad</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <!--3 section-->
      	<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-ahmedabad"><img class="card-img-top" src="img/gokapture/contact/guj.jpg" alt="photo-booth-in-ahmedabad"></a>
              <div class="post-content p-4">
                  <h4 align="center">Ahmedabad, <br/>Gujrat</h4></a>
<!--                <p>Shop no.2,-->
<!--Agarwal Market,-->
<!--plot no.C-9/22 Chitrakoot Vaishali Nagar</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-goa"><img class="card-img-top" src="img/gokapture/contact/goa.jpg" alt="photo-booth-in-goa"></a>
              <div class="post-content p-4">
                  <h4 align="center">West Goa</h4></a>
<!--                <p>-->
<!--AHMEDABAD-->
<!--B-705, Samarpan Tower,-->
<!--132 feet ring road,-->
<!--Naranpura</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
		  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-visakhapatnam"><img class="card-img-top" src="img/gokapture/contact/viz.jpg" alt="photo-booth-in-visakhapatnam"></a>
              <div class="post-content p-4">
                  <h4 align="center">Visakhapatnam,<br/> Andhra Pradesh </h4></a>
<!--                <p>B-201,Kaasp county,-->
<!--kaspte wasti Wakad</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      <!--2nd column-->
      	<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-chennai"><img class="card-img-top" src="img/gokapture/contact/chennai.jpg" alt="photo-booth-in-chennai"></a>
              <div class="post-content p-4">
                  <h4 align="center">Chennai,<br/> Tamilnadu</h4></a>
<!--                <p>Shop no.2,-->
<!--Agarwal Market,-->
<!--plot no.C-9/22 Chitrakoot Vaishali Nagar</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-bhopal"><img class="card-img-top" src="img/gokapture/contact/bhopal.jpg" alt="photo-booth-in-bhopal"></a>
              <div class="post-content p-4">
                  <h4 align="center">Bhopal,<br/> Madhya Pradesh</h4></a>
<!--                <p>-->
<!--AHMEDABAD-->
<!--B-705, Samarpan Tower,-->
<!--132 feet ring road,-->
<!--Naranpura</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
		  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-kolkata"><img class="card-img-top" src="img/gokapture/contact/kol.jpg" alt="photo-booth-in-kolkata"></a>
              <div class="post-content p-4">
                  <h4 align="center">Kolkata,<br/> West Bengal</h4></a>
<!--                <p>B-201,Kaasp county,-->
<!--kaspte wasti Wakad</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      
      
      
      
      
      
      <!--3nd column-->
      	<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-chandigarh"><img class="card-img-top" src="img/gokapture/contact/punjab.jpg" alt="photo-booth-in-chandigarh"></a>
              <div class="post-content p-4">
                 <h4 align="center">Chandigarh,<br/> Punjab</h4></a>
<!--                <p>Shop no.2,-->
<!--Agarwal Market,-->
<!--plot no.C-9/22 Chitrakoot Vaishali Nagar</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-mumbai"><img class="card-img-top" src="img/gokapture/contact/mumbai.jpg" alt="photo-booth-in-mumbai"></a>
              <div class="post-content p-4">
                   <h4 align="center">West Santacruz,<br/> Mumbai</h4></a>
<!--                <p>-->
<!--AHMEDABAD-->
<!--B-705, Samarpan Tower,-->
<!--132 feet ring road,-->
<!--Naranpura</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
		  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-thailand"><img class="card-img-top" src="img/gokapture/contact/thai.jpg" alt="photo-booth-in-thailand"></a>
              <div class="post-content p-4">
                  <h4 align="center">Thailand</h4></a>
<!--                <p>B-201,Kaasp county,-->
<!--kaspte wasti Wakad</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      
      
      <!---->
      
      
      <!--3nd column-->
      	<div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-dubai"><img class="card-img-top" src="img/gokapture/contact/dubai.png" alt="photo-booth-in-dubai"></a>
              <div class="post-content p-4">
                 <h4 align="center">Dubai</h4></a>
<!--                <p>Shop no.2,-->
<!--Agarwal Market,-->
<!--plot no.C-9/22 Chitrakoot Vaishali Nagar</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-udaipur"><img class="card-img-top" src="img/gokapture/contact/udhi.jpg" alt="photo-booth-in-udaipur"></a>
              <div class="post-content p-4">
                   <h4 align="center">Udaipur,<br/>Rajasthan</h4></a>
<!--                <p>-->
<!--AHMEDABAD-->
<!--B-705, Samarpan Tower,-->
<!--132 feet ring road,-->
<!--Naranpura</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
		  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-jodhpur"><img class="card-img-top" src="img/gokapture/contact/jod.jpg" alt="photo-booth-in-jodhpur"></a>
              <div class="post-content p-4">
                   <h4 align="center">Jodhpur,<br/>Rajasthan</h4></a>
<!--                <p>B-201,Kaasp county,-->
<!--kaspte wasti Wakad</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      
      
      
      
      <!--3nd column-->
      	<div class="container">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-jaisalmer"><img class="card-img-top" src="img/gokapture/contact/jai.jpg" alt="photo-booth-in-jaisalmer"></a>
              <div class="post-content p-4">
                 <h4 align="center">Jaisalmer,<br/>Rajasthan</h4></a>
<!--                <p>Shop no.2,-->
<!--Agarwal Market,-->
<!--plot no.C-9/22 Chitrakoot Vaishali Nagar</p>-->
                <div class="post-meta d-flex align-items-center justify-content-between"></div>
              </div>
            </div>
          </div>
          </div>
          </div>
<!--          <div class="col-12 col-sm-8 col-md-6 col-lg-4">-->
<!--            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-udaipur"><img class="card-img-top" src="img/gokapture/contact/udhi.jpg" alt=""></a>-->
<!--              <div class="post-content p-4">-->
<!--                   <h4 align="center">Udaipur,<br/>Rajasthan</h4></a>-->
<!--                <p>-->
<!--AHMEDABAD-->
<!--B-705, Samarpan Tower,-->
<!--132 feet ring road,-->
<!--Naranpura</p>-->
<!--                <div class="post-meta d-flex align-items-center justify-content-between"></div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--		  <div class="col-12 col-sm-8 col-md-6 col-lg-4">-->
<!--            <div class="card blog-card mb-5 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms"><a href="photo-booth-in-jodhpur"><img class="card-img-top" src="img/gokapture/contact/jod.jpg" alt=""></a>-->
<!--              <div class="post-content p-4">-->
<!--                   <h4 align="center">Jodhpur,<br/>Rajasthan</h4></a>-->
<!--                <p>B-201,Kaasp county,-->
<!--kaspte wasti Wakad</p>-->
<!--                <div class="post-meta d-flex align-items-center justify-content-between"></div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
        
<!--      </div>-->
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
     
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