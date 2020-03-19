<?php

  $active = 'home';

  require 'header.php';

?>


<!--Quick Pay--------------------------------------------------------------------------------->
<div class="modal fade" id="myModal4" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="animation-play-state:#000000;border-color:#000000;margin-top:61px;background:#009ecd;border-bottom:5px solid #009ecd;">
      <div class="modal-header">
       <button style="color:#000000;margin-top:-35px;" type="button" class="close" data-dismiss="modal">&times;</button>

     </div>
     <div class="modal-body" style="height:289px;background:#fff">
      <table width="100%" height="auto" border="0" cellpadding="4" cellspacing="4">
        <tr><td width="52%" valign="top"><img src="images/1.png"style="width:226px;height:260px;" class="dd"></td><td style="vertical-align:top;margin-left:5px;border-radius: 10px;"><table width="100%" height="195px">
          <h2 style="color:#009ecd;font-size:21px;" class="ddd">Quick Pay</h2>
          <form name="quickpay" method="post" action="https://aninetwork.in/quick-pay.php" target="_blank" onSubmit="return validateFrm(this);">
            <tr><td align="center"><input type="text" required name="userid" id="m__UserName" value="" placeholder="User Id" style="width: 100%;padding: 5px;padding-left: 13px;"></td></tr>
            <tr><td align="center"><input type="phone" required name="phone" id="m__Mobile No." value="" placeholder="Registered Mobile No." style="width: 100%;padding: 5px;padding-left: 13px;"></td></tr> 
            <tr><td align="right"style="height:44px;">

              <a href="#" onClick="openNews()" style="font-size:12px; color:#000000; padding-right:17px;font-weight:bold;">Don't know user id / mobile no.?</a>

            </td></tr>
            <tr><td align="center"><input type="submit" name="submit" style="background:#009ecd;border:none; padding:5px 15px;" value="Procced" class="but_question_mark"></td></tr> 
          </form>
        </table>
      </td></tr>
    </table>
  </div>

</div>

</div>
</div>

<!--Quick Complaint-----------------------------------------------------------------------------------> 


<div class="modal fade" id="myModal" role="dialog" >
  <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content" style="animation-play-state:#000000;border-color:#000000;margin-top:61px;background:#ff0000;border-bottom:5px solid #FF0000;">
      <div class="modal-header">
        <button style="color:#000000;margin-top:-35px;" type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body" style="height:289px;background:#fff">
        <table width="100%" height="auto" border="0" cellpadding="4" cellspacing="4">
          <tr><td width="52%" valign="top"><img src="images/1.png" style="width:226px;height:260px;" class="dd"></td><td style="vertical-align:top;margin-left:5px; -webkit-border-radius:5%; -moz-border-radius:5%; -ms-border-radius:5%;" ><table width="100%" height="195px" style="">
            <h2 style="color:#ff0000;font-size:21px;"  class="ddd">Quick Complaint</h2>
            <form name="quickpay" method="post" action="https://aninetwork.in/loginqry.php" onSubmit="return validateFrm(this);">

              <tr><td align="center"><input type="text" required name="userid" id="m__UserName" value="" placeholder="User Id" style="width: 100%;padding: 5px;padding-left: 13px;"></td></tr>
              <tr><td align="center"><input type="phone" required name="phone" id="m__Mobile No." value="" placeholder="Registered Mobile No." style="width: 100%;padding: 5px;padding-left: 13px;"></td></tr> 
              <tr><td align="right"style="height:44px;">

                <a href="#" onClick="openNews()" style="font-size:12px; color:#000000; padding-right:17px;font-weight:bold;">Don't know user id / mobile no.?</a>

              </td></tr>
              <tr><td align="center"><input type="submit" name="submit" style="background:#FF0000;border:none; padding:5px 15px;" value="Procced" class="but_question_mark"></td></tr> 
            </form>

          </table>
        </td></tr>
      </table>
    </div>
    
  </div>
  
</div>
</div>
  
<!--Quick Recharge Request------------------------------------------------------------------------------>

<div class="modal fade" id="myModal2" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="animation-play-state:#000000;border-color:#000000;margin-top:61px;background:#009688;border-bottom:5px solid #009688;">
      <div class="modal-header">
        <button style="color:#000000;margin-top:-35px;" type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body" style="height:330px;background:#fff">
        <table width="100%" height="auto" border="0" cellpadding="4" cellspacing="4">
          <tr><td width="52%" valign="top" style="text-align:right;"><img src="images/3.png" style="height:302px;" class="dd"></td><td style="vertical-align:top;margin-left:5px; -webkit-border-radius:5%; -moz-border-radius:5%; -ms-border-radius:5%;" ><table width="100%" height="195px" style="">
            <h2 style="color:#009688;font-size:18px;"  class="ddd">Quick Recharge Request</h2>
            <form name="quickpay" method="post" action="https://aninetwork.in/recharge_req.php" onSubmit="return validateFrm(this);">

              <tr>
                <td align="center" >
                  <input type="text" required name="userid" id="m__UserName" value="" placeholder="User Id" style="width: 100%;padding: 5px;padding-left: 13px;">
                </td>
              </tr>
              <tr>
                <td align="center">
                  <input type="phone" required name="phone" id="m__Mobile No." value="" placeholder="Registered Mobile No." style="width: 100%;padding: 5px;padding-left: 13px;">
                </td>
              </tr> 
              <tr>
                <td align="right"style="height:44px;">
                <a href="#" onClick="openNews()" style="font-size:12px; color:#000000; padding-right:17px;font-weight:bold;">Don't know user id / mobile no.?</a>

                </td>
              </tr>
              <tr>
                <td align="center">
                  <input type="submit" name="submit" style="background:#FF0000;border:none; padding:5px 15px;" value="Procced" class="but_question_mark">
                </td>
              </tr> 
            </form>

          </table>
        </td></tr>
      </table>
    </div>

  </div>

</div>
</div>
         <!-- Header end-->
      </div>


<div class="carousel slide" id="main-slide" data-ride="carousel">
         <!-- Indicators-->
         <ol class="carousel-indicators visible-lg visible-md">
            <li class="active" data-target="#main-slide" data-slide-to="0"></li>
            <li data-target="#main-slide" data-slide-to="1" class=""></li>
            <li data-target="#main-slide" data-slide-to="2" class=""></li>
         </ol>
         <!-- Indicators end-->
         <!-- Carousel inner-->
         <div class="carousel-inner">
		  
            <div class="carousel-item active" style="background-image:url(images/banner/new-ani-banner-4.jpg); ">
               <div class="container">
                  <div class="slider-content text-right">
                     <div class="col-md-12">
                       <h2 class="slide-title title-light" style="color: #000!important;">We are the best broadband<br> internet provider company.</h2>
                       <h3 class="slide-sub-title" style="color: #000!important;">WELCOME TO Anl NETWORK</h3>
                      <p><a class="slider btn btn-primary" href="contactus.php">Enquiry Now</a></p>
                      </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url(images/banner/new-ani-banner-2.jpg); ">
               <div class="container">
                  <div class="slider-content text-left">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light" style="color: #000!important;">The world at your fingertips,<br> nothing is out of reach with Anl Network</h2>
                        <h3 class="slide-sub-title" style="color: #000!important;">INSPIRE THE NEXT</h3>
                        <p><a class="slider btn btn-primary" href="contactus.php">Enquiry Now</a>
                        </p>

                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url(images/banner/new-ani-banner-3.jpg);">
               <div class="container">
                  <div class="slider-content text-right">

                     <div class="col-md-12">
                        <h2 class="slide-title title-light" style="color: #000!important;">With broadband Speed upto 100Mbps <br> No phone line required.</h2>
                        <h3 class="slide-sub-title" style="color: #000!important;">Lease Line Internet</h3>
                        <p><a class="slider btn btn-primary" href="contactus.php">Enquiry Now</a>
                        </p>

                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
         </div>
         <!-- Carousel inner end-->
         <!-- Controllers-->
         <a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a>
         <a  class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>
      </div>      <!-- Carousel end-->

      <section class="ts-intro" id="ts-intro">
         <div class="container">
            <div class="row">
               <div class="col-md-5 ch-item aos-item" data-aos="fade-right" style="text-align:center;">
               <img src="images/browser.png" style="width: 100%;">               </div>
               <div class="col-md-7 ch-item aos-item" data-aos="fade-left">
                  <div class="intro-details">
          <h2 class="column-title"><span>Welcome to </span>Anl NETWORK </h2>
                     <p>
                        <strong>Anl Network Pvt. Ltd </strong> Started in 2002, is one of the fast growing fixed wireless broadband service providers in Delhi. The company solely focuses on delivering high-speed internet & internet solutions to the businesses and families of the area.                     </p>
                     
                     <p><a class="btn btn-primary" href="aboutus.php"> Read More</a></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Container end-->
      </section>
      <!-- Service end-->

      <section class="ts-features-col">
         <div class="row text-center">
                  <div class="col-md-12">
                     <h2 class="section-title"><span>Our Services</span>What We Do</h2>
                  </div>
                  <!-- Col End -->
               </div>
         <div class="row">
        <div class="col-sm-3">
            <div class="serviceBox">
                <img src="images/services/service2.jpg">
                <div class="service-content">
                    <span class="service-icon">
                        <i class="fa fa-globe"></i>                    </span>
                    <h3 class="title" style="color:#fff;">BROADBAND INTERNET</h3>
                    <p class="description">
                        Anl Network Broadband primarily focuses on providing fixed wireless broadband to areas of the City that are currently under served by traditional Telecom and Cable companies.                    </p>
                </div>
            </div>
        </div>
 
        <div class="col-sm-3">
            <div class="serviceBox middle">
                <div class="service-content">
                    <span class="service-icon">
                        <i class="fa fa-briefcase"></i>                    </span>
                    <h3 class="title" style="color:#fff;">LEASE LINE INTERNET</h3>
                    <p class="description">
                        We provide lease line service. The lease line is a contract between the service provider and the client, combining two or more locations monthly line sharing rent.                    </p>
                </div>
                <img src="images/services/service3.jpg">            </div>
        </div>
    
    <div class="col-sm-3">
            <div class="serviceBox">
                <img src="images/services/service4.jpg">
                <div class="service-content">
                    <span class="service-icon">
                        <i class="fa fa-globe"></i>                    </span>
                    <h3 class="title" style="color:#fff;">GET SOCIETY WI-FI ENABLED</h3>
                    <p class="description">
                   Anl Network Offers Wi-Fi Internet Facility. Its is a popular technology, by using an electronic device to exchange data, or connect to the internet wirelessly via radio.                    </p>
                </div>
            </div>
        </div>
    
    <div class="col-sm-3">
            <div class="serviceBox middle">
                <div class="service-content">
                    <span class="service-icon">
                        <i class="fa fa-briefcase"></i>                    
                      </span>
                    <h3 class="title" style="color:#fff;">Anl iX</h3>
                    <p class="description">
                        Anl IX is carrier neutral, data center neutral Internet Exchange point for Indian ISPs, local and international content providers. Anl IX welcomes anyone having Autonomous System                    </p>
                </div>
                <img src="images/services/aniiX.png">            </div>
        </div>
    </div>
         <!-- Container end-->
      </section>

     

      <section id="ts-facts-area" class="ts-facts-area-bg" style="background:url(images/key/showcase-banner.jpg);">
         <div class="container">
            <div class="row facts-wrapper text-center">
               <div class="col-lg-3 col-md-3">
                  <div class="ts-facts-bg"><span class="facts-icon"><img style="width:70px;" src="images/user.png"></span>
                     <div class="ts-facts-content">
                        <h4 class="ts-facts-num"><span class="counterUp">20000</span>+</h4>
                        <p class="facts-desc">Happy Home Users</p>
                     </div>
                  </div>
                  <!-- Facts 1 end-->
               </div>
               <!-- Col 1 end-->
               <div class="col-lg-3 col-md-3">
                  <div class="ts-facts-bg"><span class="facts-icon"><img style="width:70px;" src="images/handshake.png"></span>
                     <div class="ts-facts-content">
                        <h4 class="ts-facts-num"><span class="counterUp">500</span>+</h4>
                        <p class="facts-desc">Satisfied Corporate Clients</p>
                     </div>
                  </div>
                  <!-- Facts 2 end-->
               </div>
               <!-- Col 2 end-->
               <div class="col-lg-3 col-md-3">
                  <div class="ts-facts-bg"><span class="facts-icon"><img style="width:70px;" src="images/research.png"></span>
                     <div class="ts-facts-content">
                        <h4 class="ts-facts-num"><span class="counterUp">100</span>%</h4>
                        <p class="facts-desc">Speedy Browsing</p>
                     </div>
                  </div>
                  <!-- Facts 3 end-->
               </div>
               <!-- Col 3 end-->
               <div class="col-lg-3 col-md-3">
                  <div class="ts-facts-bg"><span class="facts-icon"><img style="width:70px;" src="images/network.png"></span>
                     <div class="ts-facts-content">
                        <h4 class="ts-facts-num"><span class="counterUp">10000</span></h4>
                        <p class="facts-desc">KM Network Coverage</p>
                     </div>
                  </div>
                  <!-- Facts 4 end-->
               </div>
               <!-- Col 4 end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container 2 end-->
      </section>



      
<section >
   <div class="row text-center">
        <div class="col-md-12">
            <h2 class="section-title">Our USPs</h2>
         </div>
  </div>
<div class="midicoArea">
    <div class="mainArea">
          <ul>
        
        
        <li><a href="#"> <img src="images/key/key-c.png" width="114" height="114" alt=""> <span>Dedicated Speeds </span> <span>up to 150 Mbps</span> </a></li>
        <li><a href="#"> <img src="images/key/key-d.png" width="114" height="114" alt=""> <span>Live Bandwidth</span> <span>Monitoring</span> </a></li>
        <li><a href="#"> <img src="images/key/key-i.png" width="114" height="114" alt=""> <span>Customizable </span> <span>Plans</span> </a></li>
        <li class="mariof"><a href="#"> <img src="images/key/key-f.png" width="114" height="114" alt=""> <span>Broadband </span> <span>for HD</span> </a></li>
        <li><a href="#"> <img src="images/key/key-a.png" width="114" height="114" alt=""> <span>Next Generation Hyper </span> <span>Broadband Internet</span> </a> </li>
        <li><a href="#"> <img src="images/key/key-e.png" width="114" height="114" alt=""> <span>Value for </span> <span>Money offering</span> </a></li>
        <li><a href="#"> <img src="images/key/key-b.png" width="114" height="114" alt=""> <span>Dedicated Wi-Fi Router </span> <span>for every customer</span> </a></li>
        <li><a href="#"> <img src="images/key/key-h.png" width="114" height="114" alt=""> <span>Dedicated Speeds </span> <span>on All Packs</span> </a></li>
        <li><a href="#"> <img src="images/key/key-j.png" width="114" height="114" alt=""> <span>Reliable 24 x 7 </span> <span>Customer Support</span> </a></li>
        <li><a href="#"> <img src="images/key/key-g.png" width="114" height="114" alt=""> <span>Fiber to the </span> <span>Neighbor (FTTN)</span> </a></li>
      </ul>
          <div class="clear"></div>
        </div>
  </div>
</section>
<p>&nbsp;</p>







      <!-- Customer Benefits -->

     <!--  <section class="main-container" id="main-container">

       <div class="container">
        <div class="row">
         <div class="col-lg-12">
          <h2 class="section-title"><span>Customer</span>Benefits</h2>
          <div class="gap-15"></div>
          <div class="row">
            <div class="col-lg-6 filter hdpe aos-item aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
              <div class="ts-feature-box" style="border:1px solid #3E50B5;">
                <div class="row">
                  <div class="col-md-3" style="text-align:center; border-right:1px solid #3E50B5; line-height:150px;"><img src="images/internet-connection-speed.png" alt=""></div>
                  <div class="col-md-9">
                    <div class="ts-feature-info">
                      <h3 class="ts-feature-title">High speed internet access</h3>
                      <p>Surf, play, download, stream and make friends with lightening fast speeds.</p>
                    </div>
                  </div>
                </div>
              </div>     -->
              <!-- feature box-1 end-->
            <!-- </div>
            <div class="col-lg-6 filter hdpe aos-item aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
              <div class="ts-feature-box" style="border:1px solid #3E50B5;">
                <div class="row">
                  <div class="col-md-3" style="text-align:center; border-right:1px solid #3E50B5; line-height:150px;"><img src="images/corruption.png" alt=""></div>
                  <div class="col-md-9">
                    <div class="ts-feature-info">
                      <h3 class="ts-feature-title">No Hidden Charges</h3>
                      <p>You only have pay for what you see. Do not pay anything extra!</p>
                    </div>
                  </div>
                </div>
              </div>     -->
              <!-- feature box-1 end-->
           <!--  </div>
          </div>
          <div>&nbsp;</div>
          <div class="row">
           <div class="col-lg-6 filter hdpe aos-item aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="ts-feature-box" style="border:1px solid #3E50B5;">
              <div class="row">
                <div class="col-md-3" style="text-align:center; border-right:1px solid #3E50B5; line-height:150px;"><img src="images/renewable-energy.png" alt=""></div>
                <div class="col-md-9">
                  <div class="ts-feature-info">
                    <h3 class="ts-feature-title">Unlimited Bandwidth</h3>
                    <p>ani Network provides more attractive plans for all Unlimited Users.</p>
                  </div>
                </div>
              </div>
            </div>     -->
            <!-- feature box-1 end-->
         <!--  </div> -->
          <!-- col-1 end-->
          <!-- <div class="col-lg-6 filter hdpe aos-item aos-init aos-animate" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="ts-feature-box" style="border:1px solid #3E50B5;">
              <div class="row">
                <div class="col-md-3" style="text-align:center; border-right:1px solid #3E50B5; line-height:150px;"><img src="images/internet.png" alt=""></div>
                <div class="col-md-9">
                  <div class="ts-feature-info">
                    <h3 class="ts-feature-title">Unlimited for a single Household</h3>
                    <p>Our services are truly unlimited for a single household.</p>
                  </div>
                </div>
              </div>
            </div>     -->
            <!-- feature box-1 end-->
          <!-- </div> -->
          <!-- col-2 end-->
        <!-- </div> -->
        <!-- container row end-->
      <!-- </div> -->
      <!-- Col end-->

      <!-- Col end-->
    <!-- </div> -->
    <!-- Main row end-->
  <!-- </div> -->

  <!-- Facts area end-->


  <!-- Section Team end-->
<!-- </section> -->

      <!-- News end-->
      
      <section id="ts-testimonial-slide" class="ts-testimonial-slide solid-bg" style="background-image: url(images/key/slide3.jpg); width: auto;">
         <div class="container">
          <h2 class="section-title" style="color: #fff;">What People Says</h2>
            <div class="row">
               <div class="col-lg-12">
                  <div class="testimonial-slide owl-carousel owl-theme owl-loaded owl-drag">
                     

                     <div class="row quote-item-area">
                        <div class="col-md-5">
                           <div class="quote-thumb">
                              <img class="quote-thumb-img" src="images/clients/testimonial1.png" alt="Julia Mayer">                           
                            </div>

                        </div>

                        <div class="col-md-7">
                           <div class="quote-item-content">
                              <h3 class="quote-name" style="color: #fff;">Gajendra </h3>
                              <p class="quote-message" style="color: #fff;">
                                 " We are using internet services from Anl Network. With their quality support we are never away from the internet. Thanks to the supportive staff "</p>
                           </div>
                           <!-- Quote content end -->
                        </div>
                        <!-- Col end -->
                     </div>
                      <div class="row quote-item-area">
                        <div class="col-md-5">
                           <div class="quote-thumb">
                              <img class="quote-thumb-img" src="images/clients/testimonial1.png" alt="Julia Mayer">                           
                            </div>
                        </div>
                        <div class="col-md-7">
                           <div class="quote-item-content">
                              <h3 class="quote-name" style="color: #fff;">Shubhash </h3>
                              <p class="quote-message"style="color: #fff;">
                                " We are using internet services from Anl Network. With their quality support we are never away from the internet. Thanks to the supportive staff "</p>
                           </div>
                           <!-- Quote content end -->
                        </div>
                        <!-- Col end -->
                     </div>

                      <div class="row quote-item-area">
                        <div class="col-md-5">
                           <div class="quote-thumb">
                              <img class="quote-thumb-img" src="images/clients/testimonial1.png" alt="Julia Mayer">                           
                            </div>
                        </div>
                        <div class="col-md-7">
                           <div class="quote-item-content">
                              <h3 class="quote-name" style="color: #fff;">Rajesh </h3>
                              <p class="quote-message" style="color: #fff;">
                                " We are using internet services from Anl Network. With their quality support we are never away from the internet. Thanks to the supportive staff "</p>
                           </div>
                           <!-- Quote content end -->
                        </div>
                        <!-- Col end -->
                     </div>

<!--                      <div class="owl-nav">
                      <div class="owl-prev"><i class="icon icon-left-arrow2"></i></div>
                      <div class="owl-next"><i class="icon icon-right-arrow2"></i></div>
                   </div> -->

                   </div>
               </div>
            </div>
         </div>
      </section>

      
      <!-- Partners end-->

      <div>&nbsp;</div>

  
<?php

  require 'footer.php';
  
?>