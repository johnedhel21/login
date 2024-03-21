<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/logo png.png">
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
    	<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>EJ PRINTING SERVICES</title>
   
<!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-lava.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

</head>
<body>
<call-us-selector phonesystem-url="https://1411.3cx.cloud" party="ejprintingservices"></call-us-selector>
 
 <!--Incase you don't want real time updates to the live chat plugin when options are changed, use the below code snippet. Please note that each time you change the settings you will need to copy and paste the snippet code to your website--> 
 <!--<call-us 
 phonesystem-url="https://1411.3cx.cloud" 
 style="position:fixed;font-size:16px;line-height:17px;z-index: 99999;--call-us-main-accent-color:#D63004;--call-us-main-background-color:#FFFFFF;--call-us-plate-background-color:#D97E18;--call-us-plate-font-color:#E6E6E6;--call-us-main-font-color:#292929;--call-us-agent-bubble-color:#29292910;right: 20px; bottom: 20px;" 
 id="wp-live-chat-by-3CX" 
 minimized="true" 
 animation-style="slideup" 
 party="ejprintingservices" 
 minimized-style="bubbleright" 
 allow-call="false" 
 allow-video="false" 
 allow-soundnotifications="true" 
 enable-mute="true" 
 enable-onmobile="true" 
 offline-enabled="true" 
 enable="true" 
 ignore-queueownership="false" 
 authentication="both" 
 operator-name="EJ PRINTING SERVICES" 
 show-operator-actual-name="true" 
 aknowledge-received="true" 
 operator-icon="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAABQ9JREFUeF7tneFx1DAQhTdO/od0EDogFRAqgA6gBDoAKoEOgAqACpIOAhWQCnKcknMwTC6Wraf1W+t5JpNMRlqt3/u00vl8vgMz25iOZhU4EADNen974gKgbf8FQOP+CwABoE1g0wxoD9C0/doENm7/OgH4AXL1OyjOtZldAmKlfFKsY0Cs+xBpCZh7nJvZt7mdC/p92PZ9X9B/DV1hF+9KAOiFhCWT6YwAuBMKojsCAFgyAiBTgbtmX8zs5aQeDzRGAeAJgSrAXyOLqwASgFMzuyolMqO/ACAFwKsKCAAB0PyrANgGHLkEqAJkrF/gJlR7AAEAdjcjnADIEGnNTQTAmt3NODcBkCHSmpsIgDW7m3FuAiBDpDU3EQBrdjfj3ARAhkhq8ogCuhDUOB4CQABAFShekzKy0ZtBGSLlNlEFyFVqpe0EwEqNzT2tiADknlvEdjl3NKc7jN+iTk4fDEEp6RsHNnEFgK9xqNEEAErJoHEEQFDjUGkLAJSSQeMIgKDGodIWACglg8YRAEGNQ6UtAFBKBo0jAIIah0pbAKCUDBpHAAQ1DpW2AEApGTSOAAhqHCptAYBSMmgcARDUOFTaUABQSUWI43HP4lQdYGZOHTi1X3TwOQmD+jCAQKE9RRIgU6eGWQqCk90DH6fmW6V9ywAkQb0hOAM9NRQGgwCASZkViE5vuoSyZMQ28qoClFpTJoX1dzSaABiVaN0NBAChv+lJ5P0x/Dv9D/2kcAEABMBDTPSylZ7D/xyowb5Q6LwhKaOTEgD7bUFrLQAgCpipAoCE9Lqwgp5JUQF41nXdRal3aDG1BDguAV3XFestAAIvAQKgtP7d9Y+6BJgAEABaAgAMqAIAROxDFBOZkQt63yIAMkTPbSIAGn4V4PVNoqoAO8jYNoEesz+dugDYAXB4ePhms9l8zC3PD7VDiikAHncCqfXtSEdHR+c3NzdF39+MSsrLfFWAAWRMS4AAGK/DqMl2PxILAJ7mqwIAN4BTxUy7/P7H4waKfXMKPZNCXQdAzPqhsElM7xk8XizX2eJRcLuuS7e6vfM+dQHgp7gA8NOaciQBQGmLT1LpMfD/3938z8haAnyMWGoUAbCU8iTjCgASI5ZKY/SLrrQELGWNz7gCwEdn2lEEAK01Pom92N18unc0LQE+Riw1igBYSnmScUffv1AFIHGqUhoCoJKwUcIKgChOVcpTAFQSNkpYAbCAU8Pv4U03faSj//3TzNJPOj6Z2evK+VEDUPncQ4SvfVPMKABLqUSbmLMgAsBZcLbhBACbI875CABnwdmGEwBsjjjnIwCcBWca7nT7MvCqckK0m23axCobMgxfe/ansWh1pk1MAPgoIAB8PhlFqzNtYj78346iJcBRbMahBACjK045eZivTaCTmXOGEQBzVFtJH6/nAqgCkALjNfufDu49oJOi1VcB12Z27OQGtcbUyVU0yGv2U5d/+uQqAeBpPr3GrVUAb/O/br8r+FUlkCFhWwLA23z62R8iQQjmPpd7H0qVfoLRJ1gIwBMz+10Yo6Q7vb70CRaov0TJH6YbQtsQSU6AIG24Pk9oX7NpCG1DJDni0tIzPeTa3yetJ4XWqQFhJpYAwAMQxvz+ZSBjCcXb4hdRAPhpTTdSKPNVAbD8/Np+1Dx9xiDUoT0Azq5ws18VoHHzBQAGgJAzX9cBMOafmFm6uyjsoT3AfOvOtu/1X87vztFTAMzzIfzM70/7D5c4+gkyKzVhAAAAAElFTkSuQmCC" 
 gdpr-enabled="false" 
 message-userinfo-format="both" 
 message-dateformat="both" 
 lang="browser" 
 button-icon-type="default" 
 greeting-visibility="none" 
 greeting-offline-visibility="none" 
 chat-delay="2000" 
 enable-direct-call="false" 
 enable-ga="false" 
 ></call-us>--> 
 <script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>

 <!-- ***** Preloader Start ***** -->
 <div id="preloader">
     <div class="jumper">
         <div></div>
         <div></div>
         <div></div>
     </div>
 </div>
 <!-- ***** Preloader End ***** -->


 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <nav class="main-nav">
                     <!-- ***** Logo Start ***** -->
                     <a href="index.html" class="logo">
                         EJ Printing services
                     </a>
                     <!-- ***** Logo End ***** -->
                     <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                         <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                         <li class="scroll-to-section"><a href="#about" class="menu-item">About</a></li>
                         <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a>
                         </li>
                         <li class="submenu">
                             <a href="javascript:;">Drop Down</a>
                             <ul>
                                 <li><a href="" class="menu-item">About Us</a></li>
                                 <li><a href="" class="menu-item">Features</a></li>
                                 <li><a href="" class="menu-item">FAQ's</a></li>
                                 <li><a href="" class="menu-item">Blog</a></li>
                             </ul>
                         </li>
                         <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Order Now</a></li>
                         <li class="scroll-to-section"><a href="index.php">LOG IN </a>
                        
                        </li>
                     </ul>
                     <a class='menu-trigger'>
                         <span>Menu</span>
                     </a>
                     <!-- ***** Menu End ***** -->
                 </nav>
             </div>
         </div>
     </div>
 </header>
 <!-- ***** Header Area End ***** -->


 <!-- ***** Welcome Area Start ***** -->
 <div class="welcome-area" id="welcome">

     <!-- ***** Header Text Start ***** -->
     <div class="header-text">
         <div class="container">
             <div class="row">
                 <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                     data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                     <h1>PROVIDE HIGH QUALITY AND <em>GOOD SERVICE</em></h1>
                     <p>"We are capable of crafting the t-shirt of your dreams, and for more information, you can visit 
                          <a href="https://web.facebook.com/EJprintingServicesCustomeApparel">Ej Printing Facebook page"</a>
                            </p> 
                     <a href="#about" class="main-button-slider">KNOW US BETTER</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- ***** Header Text End ***** -->
 </div>
 <!-- ***** Welcome Area End ***** -->

 <!-- ***** Features Big Item Start ***** -->
 <section class="section" id="about">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                 data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                 <div class="features-item">
                     <div class="features-icon">
                         <h2>01</h2>
                         <img src="assets/images/tshirt1.png" alt="">
                         <h4>Trend Analysis</h4>
                         <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                         <a href="#testimonials" class="main-button">
                             Read More
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                 data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                 <div class="features-item">
                     <div class="features-icon">
                         <h2>02</h2>
                         <img src="assets/images/tshirt2.png" alt="">
                         <h4>Site Optimization</h4>
                         <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                         <a href="#testimonials" class="main-button">
                             Discover More
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                 data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                 <div class="features-item">
                     <div class="features-icon">
                         <h2>03</h2>
                         <img src="assets/images/tshirt3.png" alt="">
                         <h4>Email Design</h4>
                         <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                         <a href="#testimonials" class="main-button">
                             More Detail
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Features Big Item End ***** -->

 <div class="left-image-decor"></div>

 <!-- ***** Features Big Item Start ***** -->
 <section class="section" id="promotion">
     <div class="container">
         <div class="row">
             <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                 data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                 <img src="assets/images/leftimage1.png" class="rounded img-fluid d-block mx-auto" alt="App">
             </div>
             <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                 <ul>
                     <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                         <img src="assets/images/about-icon-01.png" alt="">
                         <div class="text">
                             <h4>Vestibulum pulvinar rhoncus</h4>
                             <p>Please do not redistribute this template ZIP file for a download purpose. You may <a
                             rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> us for
                         additional licensing of our template or to get a PSD file.</p>
                         </div>
                     </li>
                     <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                         <img src="assets/images/about-icon-02.png" alt="">
                         <div class="text">
                             <h4>Sed blandit quam in velit</h4>
                             <p>You can <a rel="nofollow"
                                     href="https://templatemo.com/tm-540-lava-landing-page">download Lava
                                     Template</a> from our website. Duis viverra, ipsum et scelerisque placerat, orci
                                 magna consequat ligula.</p>
                         </div>
                     </li>
                     <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                         <img src="assets/images/about-icon-03.png" alt="">
                         <div class="text">
                             <h4>Aenean faucibus venenatis</h4>
                             <p>Phasellus in imperdiet felis, eget vestibulum nulla. Aliquam nec dui nec augue
                                 maximus porta. Curabitur tristique lacus.</p>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Features Big Item End ***** -->

 <div class="right-image-decor"></div>

 <!-- ***** Testimonials Starts ***** -->
 <section class="section" id="testimonials">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 offset-lg-2">
                 <div class="center-heading">
                     <h2>What They Think <em>About Us</em></h2>
                     <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                         Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                 </div>
             </div>
             <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                 data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                 <div class="owl-carousel owl-theme">
                     <div class="item service-item">
                         <div class="author">
                             <i><img src="assets/images/testimonial-author-1.png" alt="Author One"></i>
                         </div>
                         <div class="testimonial-content">
                             <ul class="stars">
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                             </ul>
                             <h4>Jonathan Smart</h4>
                             <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus
                                 urna elit in mauris.”</p>
                             <span>Besta CTO</span>
                         </div>
                     </div>
                     <div class="item service-item">
                         <div class="author">
                             <i><img src="assets/images/testimonial-author-1.png" alt="Second Author"></i>
                         </div>
                         <div class="testimonial-content">
                             <ul class="stars">
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                             </ul>
                             <h4>Martino Tino</h4>
                             <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est
                                 interdum, rhoncus leo.”</p>
                             <span>Web Analyst</span>
                         </div>
                     </div>
                     <div class="item service-item">
                         <div class="author">
                             <i><img src="assets/images/testimonial-author-1.png" alt="Author Third"></i>
                         </div>
                         <div class="testimonial-content">
                             <ul class="stars">
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                             </ul>
                             <h4>George Tasa</h4>
                             <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                 congue a fringilla sed, maximus et urna.”</p>
                             <span>System Admin</span>
                         </div>
                     </div>
                     <div class="item service-item">
                         <div class="author">
                             <i><img src="assets/images/testimonial-author-1.png" alt="Fourth Author"></i>
                         </div>
                         <div class="testimonial-content">
                             <ul class="stars">
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                                 <li><i class="fa fa-star"></i></li>
                             </ul>
                             <h4>Sir James</h4>
                             <p>"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                 congue a fringilla sed, maximus et urna."</p>
                             <span>New Villager</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ***** Testimonials Ends ***** -->


 <!-- ***** Footer Start ***** -->
 <footer id="contact-us">
     <div class="container">
         <div class="footer-content">
             <div class="row">
                 <!-- ***** Contact Form Start ***** -->
                 <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="contact-form">
                         <form id="contact" action="" method="post">
                             <div class="row">
                                 <div class="col-md-3 col-sm-12">
                                     <fieldset>
                                         <input name="fn" type="text" id="fname" placeholder="First Name" required=""
                                             style="background-color: rgba(250,250,250,0.3);">
                                     </fieldset>
                                 </div>
                                 <div class="col-md-3 col-sm-12">
                                     <fieldset>
                                         <input name="ln" type="text" id="lname" placeholder="Last Name"
                                             required="" style="background-color: rgba(250,250,250,0.3);">
                                     </fieldset>
                                 </div>
                                 <div class="col-md-3 col-sm-12">
                                     <fieldset>
                                         <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                             required="" style="background-color: rgba(250,250,250,0.3);">
                                     </fieldset>
                                 </div>
                                 <div class="col-md-3 col-sm-12">
                                     <fieldset>
                                         <input name="number" type="text" id="num" placeholder="Phone Number"
                                             required="" style="background-color: rgba(250,250,250,0.3);">
                                     </fieldset>
                                 </div>  
                                 <div class="col-md-6 col-sm-12">
                                     <fieldset>
                                         <label required="" style="background-color: rgba(250,250,250,0.3);">Types of Full Sublimation</label>
                                     </fieldset>
                                  
                                 </div>  
                                 <div class="col-lg-12">
                                     <fieldset>
                                         <div style="width:100%;">
                                             <form>
                                                 <div class="">
                                     
                                                     <div class="col-lg-7">
                                                         <div id="row">
                                                             <div class="form-row" style="margin-bottom: -5%;">
                                                                 <div class="form-group col-md-3">
                                                                     <label for="inputSize">Shirts</label>
                                                                     <select id="inputSize" class="form-control"onchange ="calculateAmount(this.value)">
                                                                         <option value="">Choose your option</option>
                                                                         <option value="400" id="jersey">upper jersey</option>
                                                                         <option value="750">setjersey</option>
                                                                         <option value="600">warmer</option>
                                                                         <option value="550">polo</option>
                                                                 </select>
                                                                 </div>
                                                                 <div class="form-group col-md-3">
                                                                     <label for="inputSize">Sizes</label>
                                                                     <select id="inputSize" class="form-control">
                                                                     <option selected>Choose...</option> 
                                                                     <option>XS</option>
                                                                     <option>Small</option>
                                                                     <option>Medium</option>
                                                                     <option>Large</option>
                                                                     <option>XL</option>
                                                                     </select>
                                                                 </div>
                                                                 <div class="form-group col-md-3">
                                                                     <label for="inputZip">Qty</label>
                                                                     <input type="number" class="form-control" id="inputZip" min="0" value="0">
                                                                 </div>
                                                                 <div class="form-group col-md-2">
                                                                     <label>price</label>
                                                                     <input class="w3-input w3-border" name="tot_amount" id="tot_amount" type="text" readonly>
                                                                 </div>
                                                                 <div class="form-group col-md-1">
                                                                     <button class="btn btn-danger"
                                                                             id="DeleteRowGroup"
                                                                             type="button">
                                                                         <i class="bi bi-trash"></i>
                                                                     </button>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div id="newInputGroup"></div>
                                     
                                                         <button id="rowAdderGroup" type="button" class="btn btn-dark" style="font-size: 11px;">
                                                             <span class="bi bi-plus-square-dotted">
                                                             </span> ADD GROUP
                                                         </button>
                                          
                                              </form>
                                          </div>
                                     </fieldset>
                                 </div>
                                 <div class="col-lg-12">
                                     <fieldset>
                                         <button type="submit" id="form-submit" class="main-button">Book Now</button>
                                     </fieldset>
                                     
                                 </div>
                             </div>
                             
                         </form>
                         
                     </div>
                 </div>
      

                 <!-- ***** Contact Form End ***** -->
               
             </div>
             <div class="right-content col-lg-6 col-md-12 col-sm-12">
                 <h2>More About <em>Lava</em></h2>
                 <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                     Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                     <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                         rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page
                     for more detail.</p>
                 <ul class="social">
                     <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-rss"></i></a></li>
                     <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                 </ul>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-12">
                 <div class="sub-footer">
                     <p>Copyright &copy; 2020 Lava Landing Page

                     | Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
                 </div>
             </div>
         </div>
     </div>
 </footer>
<script type="text/javascript">
 

 $("#rowAdderGroup").click(function ()
  {
     
         newRowAddGroup =
        ' <div id="row">'+
             ' <div class="form-row"style="margin-bottom: -5%;">'+
                 ' <div class="form-group col-md-3">'+
                     '  <label for="inputSize">Shirts</label>'+
                     '<select id="inputSize" class="form-control"onchange ="calculateAmount(this.value)">'+
                                                                         '<option value="">Choose your option</option>'+
                                                                         '<option value="400" id="jersey">upper jersey</option>'+
                                                                         '<option value="750">setjersey</option>'+
                                                                         '<option value="600">warmer</option>'+
                                                                         '<option value="550">polo</option>'+
                                                                 '</select>'+
                      '</div>'+
                     ' <div class="form-group col-md-3">'+
                         '<label for="inputSize">Sizes</label>'+
                          '<select id="inputSize" class="form-control">'+
                           '<option selected>Choose...</option> '+
                         ' <option>Extra Small</option>'+
                            ' <option>Small</option>'+
                            '<option>Medium</option>'+
                              '<option>Large</option>'+
                             ' <option>Extra Large</option>'+
                             ' </select>'+
                             ' </div>'+
                                           '<div class="form-group col-md-3">'+
                                                                ' <label for="inputZip">Qty</label>'+
                                                                 '<input type="number" class="form-control" id="inputZip"min="0" value="0">'+
                                                             '</div>'+
                                                             '<div class="form-group col-md-2">'+
                                                                     '<label>price</label>'+
                                                                     '<input class="w3-input w3-border" name="tot_amount" id="tot_amount" type="text" readonly>'+
                                                                 '</div>'+
                                                             '<div class="form-group col-md-1">'+
                                                                 '<button class="btn btn-danger"id="DeleteRowGroup" type="button">'+
                                                                     '<i class="bi bi-trash"></i>'+
                                                                 '</button>'+
                                                             '</div>'+
                                                         '</div>'+
                                                     '</div>'
         $('#newInputGroup').append(newRowAddGroup);
     });
     $("body").on("click", "#DeleteRowGroup", function () {
         $(this).parents("#row").remove();
     });
     function calculateAmount(val){
     var tot_price = val

     var divobj = document.getElementById('tot_amount');
     divobj.value= tot_price

 }
 </script>

 <!-- jQuery -->
 <script src="assets/js/jquery-2.1.0.min.js"></script>

 <!-- Bootstrap -->
 <script src="assets/js/popper.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>

 <!-- Plugins -->
 <script src="assets/js/owl-carousel.js"></script>
 <script src="assets/js/scrollreveal.min.js"></script>
 <script src="assets/js/waypoints.min.js"></script>
 <script src="assets/js/jquery.counterup.min.js"></script>
 <script src="assets/js/imgfix.min.js"></script>

 <!-- Global Init -->
 <script src="assets/js/custom.js"></script>
    </main>
</body>
</html>