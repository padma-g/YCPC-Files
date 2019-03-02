<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<!--Format of any video lecture from course-->
<style type='text/css'>

@-moz-document url-prefix() {
    .videoWrapper{
        height:500px !important;
    }
}

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {  
                    .video-container {
    position: relative !important;
    padding-bottom: 56.25% !important;
    padding-top: 30px !important;
    height: 0 !important;
    overflow: hidden !important;
}
.videoWrapper{
    height:500px !important;
}
.video-container iframe,  
.video-container object,  
.video-container embed {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 500px !important;
}
}
@media screen and (-webkit-min-device-pixel-ratio:0) and (min-width: 950px){ 
 .footer{position:relative; bottom:0px;}
}

                </style>
<!--[if IE]>
<style>
                    .video-container {
    position: relative !important;
    padding-bottom: 30px !important;
    padding-top: 30px !important;
    height: 0 !important;
    overflow: hidden !important;
}

.video-container iframe,  
.video-container object,  
.video-container embed {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height:100% !important;
}
#videoframe{
    padding-bottom:0px !important;
}
</style>
<![endif]-->


<!-- include "htmlreference/video.html.php"; -->
<div id= "top-panel" class = "panel-body" style="color:#808080; margin-bottom:10px; " >
<?php include "includecode/load.html"; ?>
	<h2 class = "page-header nicepadding"><?php global $name; echo $name; ?></h2>

	<p></p>

	<div class = "videoWrapper video-container" style = "height:600px;">




	<iframe width="100%" height: "100%" id = "videoframe" src=<?php global $linkref; echo '"' . $linkref . '"'; ?> frameborder="0" allowfullscreen></iframe>
	</div>

	<!--Extra </div on purpose -->
	</div>


<?php 
    global $pageid;
    if ($pageid == 1302){

        echo "
        <style>
.footer{position:relative !important; bottom:auto !important;}
                </style>
    <div id= 'top-panel' class = 'panel-body' style='color:#808080; margin-bottom:10px; margin-top:30px;' >

    <h2 class = 'page-header nicepadding'>$name Part 2</h2>

    <p></p>

    <div class = 'videoWrapper  video-container'  style = 'height:600px;'>




    <iframe width='100%' height: '100%' id = 'videoframe' src='";


    echo 

    "//www.youtube.com/embed/eewP6yJ5uJ4" . "'

    frameborder='0' allowfullscreen></iframe>
    </div>


    "

    ;

    }
    if ($pageid == 1310){

        echo "
        <style>
.footer{position:relative !important; bottom:auto !important;}
                </style>
    <div id= 'top-panel' class = 'panel-body' style='color:#808080; margin-bottom:10px; margin-top:30px;' >

    <h2 class = 'page-header nicepadding'>$name Part 2</h2>

    <p></p>

    <div class = 'videoWrapper  video-container' style = 'height:600px;'>




    <iframe width='100%' height: '100%' id = 'videoframe' src='";


    echo 

    "//www.youtube.com/embed/Tirxkh5XcTU" . "'

    frameborder='0' allowfullscreen></iframe>
    </div>


    "

    ;

    }
    
?>



</div>

