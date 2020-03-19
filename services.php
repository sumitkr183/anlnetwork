<?php

  $active = 'service';

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
    <!--Header end--> 
  </div>
  <div class="banner-area" id="banner-area" style="background-image:url(images/banner/banner5.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="banner-heading">
            <h1 class="banner-title">Service</h1>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li>service</li>
            </ol>
          </div>
        </div>
        <!-- Col end--> 
      </div>
      <!-- Row end--> 
    </div>
    <!-- Container end--> 
  </div>
  <!-- Banner area end-->
  <section class="main-container no-padding" id="main-container">
    <div class="ts-services ts-service-pattern" id="ts-services">
      <div class="container">

        <!-- <div class="gap-60"></div> -->
   
        <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
       <div class="row text-center">
          <div class="col-md-12">
            <h2 class="section-title"><span>Our Services</span>What We Do</h2>
          </div>
        </div>
    </div>
    <div class="gap-60"></div> 
    <div class="container">
      <div class="row" >
       <!--   <div class="col-md-1 padleft-right">
        </div> -->
        <div class="offset-md-1 col-md-5 col-sm-6 padleft-right" >
          <figure class="imghvr-fold-up">
            <img src="images/services/service2.jpg"  width="100%" style="width: 100%;">
            <figcaption>
              <h3 class="service-title">BROADBAND INTERNET</h3>
              <p align="justify" class="yoyo">Anl Network Broadband primarily focuses on providing fixed wireless broadband to areas of the City that are currently under served by traditional Telecom and Cable companies.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-5 col-sm-6 padleft-right" >
          <figure class="imghvr-fold-up">
            <img src="images/services/service3.jpg"  width="100%" style="width: 100%;">
            <figcaption>
              <h3 class="service-title">LEASE LINE INTERNET</h3>
              <p align="justify" class="yoyo">We provide lease line service. The lease line is a contract between the service provider and the client, combining two or more locations monthly line sharing rent.</p>

            </figcaption>
          </figure>
        </div>

        <div class="offset-md-1 col-md-5 col-sm-6 padleft-right" >
          <figure class="imghvr-fold-up">
            <img src="images/services/service4.jpg"  width="100%" style="width: 100%;">
            <figcaption>
                <h3 class="service-title">GET YOUR SOCIETY WI-FI ENABLED</h3>
                <p align="justify" class="yoyo">Anl Network Offers Wi-Fi Internet Facility. Its is a popular technology, by using an electronic device to exchange data, or connect to the internet wirelessly via radio waves allow.</p>
            </figcaption>
           
          </figure>
        </div>
        <div class="col-md-5 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="images/services/service6.jpg"  width="100%" style="width: 100%;">
            <figcaption>
               <h3 class="service-title" id="triple">Anl iX</h3>
                <p align="justify" class="yoyo">Anl IX is carrier neutral, data center neutral Internet Exchange point for Indian ISPs, local and international content providers. Anl IX welcomes anyone having Autonomous System (AS)</p>
            </figcaption>
            
          </figure>
        </div>
      </div>
	  
	  <div class="row">
	  <div class="col-md-12" style="text-align:center; padding:3% 0;"><h2><u>Triple Play Services</u></h2></div>
	  </div>
	  
	 <div class="row">
	 <div class="col-md-4" style="text-align:center;">
	 <div><img src="images/img1.jpg" style="height:100px;"></div>
	 <h3>Fiber to The Home</h3>
	 <p>fiber to the home (FTTH), apartment buildings and businesses to provide unprecedented high-speed Internet access.</p>
	 </div>
	 <div class="col-md-4" style="text-align:center;">
	 <div><img src="images/img2.png" style="height:100px;"></div>
	 <h3>High Speed Fiber Internet</h3>
	 <p>Fiber communication is a method of transmitting information from one place to another by sending pulses of light through an optical fiber. </p>
	 </div>
	 <div class="col-md-4" style="text-align:center;">
	 <div><img src="images/img3.jpg" style="height:100px;"></div>
	 <h3>IPTV, OTT</h3>
	 <p>Coming Soon</p>
	 </div>
	 <div class="col-md-4" style="text-align:center; margin-top:3%;">
	 <div><img src="images/img4.png" style="height:100px;"></div>
	 <h3>Intercom & Telephony</h3>
	 <p>Perfect for sales, marketing and support Explore how Intercom can help your organization delight customers at every touchpoint.</p>
	 </div>
	 <div class="col-md-4" style="text-align:center; margin-top:3%;">
	 <div><img src="images/img5.png" style="height:100px;"></div>
	 <h3>Digital HD Cable TV (CTV)</h3>
	 <p>Digital Transmission for crystal clear picture quality Large number of High Definition (HD) channel services.</p>
	 </div>
	 <div class="col-md-4" style="text-align:center; margin-top:3%;">
	 <div><img src="images/img6.jpg" style="height:100px;"></div>
	 <h3>Enterprise</h3>
	 
	 <p>We started by building the nation’s largest Gig-speed network to deliver fast, reliable connections.</p>
	 </div>
	 
	 </div> 
	  
	  
    </div>
  </section>
  <!--/ Courses-->   


        <!-- Content Row 2 end--> 
      </div>
      <!-- Container end--> 
    </div>
  </section>


  
<?php

  require 'footer.php';

?>