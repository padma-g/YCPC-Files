<!--
  Copyright (c) 2014, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->

<?php
	global $title;
	global $pagetype;
	$title = "Minecraft Coding Camp";
	$pagetype = "Clubs";
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">

    	<!-- Custom CSS -->
    	<link href="css/standardPageTheme" rel="stylesheet">

    	<!-- Custom Fonts -->
	    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href='//fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	    <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<style>
	    @font-face {
		    font-family: monoglyceride;
		    src: url(../fonts/monoglyceride-webfont.eot);
		    src: url(../fonts/monoglyceride-webfont.eot?#iefix) format('embedded-opentype'), url(../fonts/monoglyceride-webfont.woff) format('woff'), url(../fonts/monoglyceride-webfont.ttf) format('truetype'), url(../fonts/monoglyceride-webfont.svg#svgFontName) format('svg')
		}
		@font-face {
		    font-family: hero;
		    src: url(../fonts/herolight-webfont.eot);
		    src: url(../fonts/herolight-webfont.eot?#iefix) format('embedded-opentype'), url(../fonts/herolight-webfont.woff) format('woff'), url(../fonts/herolight-webfont.ttf) format('truetype'), url(../fonts/herolight-webfont.svg#svgFontName) format('svg')
		}
		@font-face {
		    font-family: sansthin;
		    src: url(../fonts/lh-line1-sans-thin-webfont-webfont.eot);
		    src: url(../fonts/lh-line1-sans-thin-webfont-webfont.eot?#iefix) format('embedded-opentype'), url(../fonts/lh-line1-sans-thin-webfont-webfont.woff) format('woff'), url(../fonts/lh-line1-sans-thin-webfont-webfont.ttf) format('truetype'), url(../fonts/lh-line1-sans-thin-webfont-webfont.svg#svgFontName) format('svg')
		}
		@media (max-width:767px){
			.p1{
			  text-align:center !important;
			}
			.h2title{
			    text-align:center !important;
			}}
	    </style>
		<style type="css">body,html{background-color:white !important; }html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}</style>
		<?php 
			include "includecode/navbarStandard.html"; 
		?>
	</head>

	<body style = "!important;  padding-bottom:0%;">


       <?php include "includecode/navbarStandard.html"; ?>


    	




    	

		
		<?php
			echo "<div style = 'margin-top:50px !important;'";
			include "includecode/mcc.html";
		?><br><br><br>
<?php include "includecode/footer.html"; ?>

			</div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    <script>
$(function() {
    var $window = $(window); //Window object
  var scrollTime = 0.3;
  var scrollDistance = 280;

    var scrollTween;

    $window.on("mousewheel DOMMouseScroll", function(event) {
        if (!($('.modal').is(':visible'))) { // don't interfere if a modal is open
            event.preventDefault();

            var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
            var scrollTop = $window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta * scrollDistance);
            
            scrollTween = TweenMax.to($window, scrollTime, {
                scrollTo: {
                    y: finalScroll,
                    autoKill: true
                },
                ease: Power1.easeOut,
                overwrite: 5
            });
        }
    });
    
    // if you need to add click handlers or whatever, do it here
    
});
    </script>
	</body>

</html>
