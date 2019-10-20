<?php include("header.php");?>

	<!--banner-->
	<div class="banner about-bnr">
	<img src="images/innerbg.jpg" class="img-responsive">
    	<div class="container">
	
    	</div>
	</div>
	<!--banner-->
	<!--banner-bottom-->
	
	<!--//banner-bottom-->
    			<div class="clearfix"> </div>
                
            
    <div class="about-team"> 
		<div class="container">
        <div class="left_abut">
			<h3 class="title1">About <span>Us</span></h3>
            <br>
			<p>Our aim is to be the most preferred vendor for business seeking to outsource their office support services.SAi Enterprises business mission and primary goals and everything we do will reflect this. Our standardized service delivery procedures back our passion par excellence for exceptional customer satisfaction .To ensure our clients, we assign a dedicated relationship team member who gives undivided attention, faster turn-around time and takes ownership for all their office team of team member who understand and address your pain point and offers solutions that are customised to suit your individuals need </p>

<br>
</div>

        <div class="rgt_abut">

<h2>Salient Features:</h2>

<ul>
<li>Assured quality and quantity at the lowest possible prices.</li>
<li>Thousands of items always available in stock of all leading and reputed brands.</li>
<li>Convenient to order either by e‐mail, fax, phone or any other suitable mode.</li>
<li>Doorstep delivery at the earliest possible time.</li>
<li>Fleet of own vehicles to deliver the goods.</li>
<li>Educated and trained staff for customer support.</li>
</ul>

            </div>
            <br>
            <br>
            <p><strong>SAI Enterprises always believes in services expansion with quality. In this phase we also offers our corporate service in Delhi Noida & NCR.</strong></p>
		</div>
	</div>
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
	</div>
	<!--//projects-->
	<div class="services">
		<div class="container">
			
            
            
		</div>
	</div>
	<!--//services-->
<?php include("footer.php");?>