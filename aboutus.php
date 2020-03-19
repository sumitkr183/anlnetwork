<?php

  $active = 'about';

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

      <div class="banner-area" id="banner-area" style="background-image:url(images/banner/banner1.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">About Us</h1>
                     <ol class="breadcrumb">
                        <li><a href="index-2.php">Home</a></li>
                        <li>About Us</li>
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
            <div class="row">
               <div class="col-lg-7">
                  <h2 class="column-title title-small">ABOUT <u style="color:#E40044;">Anl NETWORK</u></h2>
                  <p style="text-align:justify;">Anl Network Broadband primarily focuses on providing fixed wireless broadband to areas of the city that are currently under served by traditional telecom and cable companies. The company's current network footprint covers in Delhi and NCR region targeting to cover the addressable market of entire country homes, as well as small to mid-size businesses. We are always driving towards a better and more exciting future for our clients. We have pioneered the art of providing affordable broadband service in market. </p>
              <p style="text-align:justify;">Anl Network Broadband is currently working as "B" Class ISP of Delhi NCR for broadband and other services. As 100% owned and operated in Delhi, the firm with independent Director Mr. Rajeev Garg, having large business experience of Satellite & Telecom industry since 2002 provides sound governance and brings a wealth of experience from both the public and private sectors.</p>
                 
                  
                  <!-- container row end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-5" style="padding-top:7%;">
                  <img class="img-fluid" src="images/pages/about_2.png" alt="">
               </div>
               <!-- Col end-->
            </div>
         <hr>
         
         <div class="row">
                     <div class="col-lg-12">
                <h2 class="column-title title-small">BENEFITS OF <u style="color:#E40044;">CHOOSING BROADBAND</u></h2>
<div class="ts-feature-box">
<ul>
<li>Broadband is characterized as a high transmission capacity association with the Internet. Broadband is less demanding and speedier to use than the conventional phone and modem as data might be sent and downloaded much snappier.</li>
<li>Broadband could be furnished over your telephone line, through link or by means of satellite. It includes extensive volumes of data being conveyed at high speeds to your PC. This permits sites, content, representation, music and films to be encountered continuously.</li>
<li>Broadband, hence, has numerous offers that might be exploited in the home or office broadband likewise accompanies an alluring bundle of worth added administrations to make your broadband experience all the more satisfying. </li>
<li>Browse an extensive variety of engaging plans, from information confine plans to boundless plans to multi-month plans to unique day/ night plans, intended to meet your particular Internet prerequisites and fit your plan.</li>
                       </ul>
                        </div>
                        <!-- feature box-1 end-->
                     </div>
                     <!-- col-2 end-->
                  </div>
            <!-- Main row end-->
         </div>
         <!-- Section Team end-->
      </section>
      <div class="gap-60"></div>


<?php

  require 'footer.php';

?>