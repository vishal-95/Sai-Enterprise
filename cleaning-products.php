<?php include("header.php");?>
	<!--banner-->
	<div class="banner about-bnr">
	<img src="images/innerbg-housekeeping.jpg" class="img-responsive">
    	<div class="container">
	
    	</div>
	</div>
	<!--banner-->
	<!--banner-bottom-->
	
	<!--//banner-bottom-->
    			<div class="clearfix"> </div>
                
            
    <div class="about-team"> 
		<div class="container">
			<h3 class="title1">Cleaning Products</h3>
			<div class="team-info">
				<div class="col-md-3 about-team-grids">
					<img src="images/p11.jpg" alt=""/>
					<div class="team-text">
						<h4><span>Floor Cleaner</span></h4>
						<p></p>
					</div>
					
				</div>
				<div class=" col-md-3 about-team-grids">
					<img src="images/p12.jpg" alt=""/>
					<div class="team-text">
						<h4><span>Toilet Cleaner</span></h4>
						<p></p>
					</div>
					
				</div>
				<div class="col-md-3 about-team-grids">
					<img src="images/p13.jpg" alt=""/>
					<div class="team-text">
						<h4><span>Glass Cleaner</span></h4>				
						<p></p>
					</div>
					
				</div>
				<div class="col-md-3 about-team-grids">
					<img src="images/p14.jpg" alt=""/>
					<div class="team-text">
						<h4><span>Phenyl </span></h4>
						<p></p>
					</div>
					
				</div>
                	<div class="col-md-3 about-team-grids">
					<img src="images/p30.jpg" alt=""/>
					<div class="team-text">
						<h4><span>Biodegradable Garbage Bags</span></h4>
						<p></p>
					</div>
					
				</div>
                	<div class="col-md-3 about-team-grids">
					<img src="images/p31.jpg" alt=""/>
					<div class="team-text">
						<h4><span>Brooms</span></h4>
						<p></p>
					</div>
					
				</div>
                	<div class="col-md-3 about-team-grids">
					<img src="images/p32.jpg" alt=""/>
					<div class="team-text">
						<h4><span>Dust Controlers & Vipers</span></h4>
						<p></p>
					</div>
					
				</div>
                	<div class="col-md-3 about-team-grids">
					<img src="images/p33.jpg" alt=""/>
					<div class="team-text">
						<h4><span>Buffing Pad </span></h4>
						<p></p>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
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
	<!--//projects-->
	<div class="services">
		<div class="container">
			
            
            
		</div>
	</div>
	<?php include("footer.php");?>