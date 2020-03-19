<?php

  $active = 'contact';

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

      <div class="banner-area" id="banner-area" style="background-image:url(images/banner/banner2.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Contact Us</h1>
                     <ol class="breadcrumb">
                        <li><a href="index-2.php">Home</a></li>
                        <li>contact</li>
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
      <section class="main-container" id="main-container">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Send Us Message</span>Contact Us</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row">
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title"> Find Us</h3>
                           <p> 6, Sangam Vihar, Ratiya Margh, New Delhi - 110062</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title"> Call Us</h3>
                           <p>(+91)-12-1234-56789</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title"> Mail Us</h3>
                           <p>info@anlnetwork.in</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
            </div>
            <!-- Row End-->
         </div>
         <!-- container end-->
         <div class="gap-60"></div>
         <div class="ts-form" id="ts-form">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     
                         <form  method="post" action="">
                        
                        <div class="error-container"></div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-name" id="name" name="name" placeholder="Name" type="text" required="">
                              </div>
                           </div>
                           <!-- Col end-->
                           <div class="col-lg-12">
                              <div class="form-group">
                                  <input class="form-control form-name" id="email" name="email" placeholder="Email" type="text" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                <input class="form-control form-name" id="phone" name="phone" placeholder="Contact No" type="text" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <textarea class="form-control form-message" id="message" name="package" placeholder="Comments" rows="8"></textarea>
                              </div>
                           </div>
                           <!-- Col 12 end-->
                        </div>
                        <!-- Form row end-->
                        <div class="text-right">
                          <!--  <button class="btn btn-primary tw-mt-30" type="submit">Contact US</button> -->
                            <input type="submit" class="btn btn-primary tw-mt-30" value="Contact US">
                        </div>
                     </form>
                     <!-- Form end-->
                  </div>
                  <div class="col-lg-6">
                     <div style="border:5px solid #eee; padding:5px;" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.6527495111222!2d77.27451811456952!3d28.64016778241485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcaf6adfd1b9:0x14729a4b94a9c6b3!2sani+Network!5e0!3m2!1sen!2sin!4v1476707407529" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
  
         </div>
      </section>
<div>&nbsp;</div>
<div>&nbsp;</div>
  


<?php

  require 'footer.php';

?>