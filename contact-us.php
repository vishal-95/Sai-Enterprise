<?php include("header.php");?>
<!--banner--> 
<!--banner-bottom--> 
<!--contact-->
<div class="contact">
   <div class="container">
    <h3 class="title1">Contact <span>Us</span></h3>
    <div class="contact-info">
       <div class="col-md-8 contact-grids">
        <div class="contact-form">
           <h3 class="title1">Enquiry Form</h3>
           <form id="form1" name="form1" method="post" action="contact-mail.php">
            <input name="name" type="text" id="Name" placeholder="Name" />
            <input name="mobile" type="text" id="Mobile" placeholder="Contact No" />
            <input name="email" type="text" id="Email" placeholder="Email" />
            <textarea id="Enquiry" name="enquiry" placeholder="Enquiry">
            </textarea>
            <input name="submit" id="submit" type="submit">
          </form>
           <script language="JavaScript">
 new validateForm(document.forms['form1']);
 </script> 
         </div>
      </div>
       <div class="col-md-4 contact-grids">
        <div class="cnt-address">
           <h3 class="title1">Address</h3>
           <h4>SAI Enterprises</h4>
           <p><strong>New Delhi </strong></p>
           <p>A-69, Vishwakarma Colony New MB Road New Delhi -110044.</p>
           <p>Contact No : +91 011-26364863 ,+91 9811763738 , +91 7838444138  <span>Website: www.sai-enterprise.com</span> E-mail : <a href="mailto:info@antstationers.com">info@sai-enterprise.com</a> </p>          
           
           
           
           
           
           
         </div>
      </div>
       <div class="clearfix"> </div>
     </div>
  </div>
 </div>
<div class="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.3169801917925!2d77.28556186507961!3d28.50010943247019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce12cd3180dcd%3A0xe66eb6ce52e4ad4e!2sBlock+B%2C+Vishwakarma+Colony%2C+Pul+Pehlad+Pur%2C+New+Delhi%2C+Delhi+110044%2C+India!5e0!3m2!1sen!2suk!4v1505552602665" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>
<!--//contact--> 
<!--//banner-bottom-->
<div class="clearfix"> </div>
<div class="projects">
   <div class="container"> 
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script> 
    <!-- use jssor.slider.debug.js instead for debug --> 
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 5,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('img/b03.html') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 150px;
            height: 100px;
            cursor: pointer;
            background: url('img/a03.html') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
    </style>
    
 
    
  </div>
 </div>
<!--//projects-->
<div class="services">
   <div class="container"> </div>
 </div>
<!--//services--> 
<?php include("footer.php");?>
