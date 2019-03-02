<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php

//Progress in each subject based on cookies of pages visited form the arrays

global $percent2; 
$pagesarray = array(1000,1301, 1302, 1303, 1201, 1101, 1401, 1304, 1305, 1306, 1204, 1104, 1404, 1307, 1308, 1309, 1207, 1107, 1407, 1310, 1311, 1312, 1210, 1110, 1410);

$percent2 = "10%"; 

$count = 0;
foreach($pagesarray as $val) {
 
    if (isset($_COOKIE[$val])){

        $count = $count + 1;

    }
}
?>

<?php
global $percent6; 
$pagesarray = array(6000, 6301, 6302, 6303, 6201, 6101, 6401, 6304, 6305, 6306, 6204, 6104, 6404, 6307, 6308, 6309, 6207, 6107, 6407, 6310, 6311, 6312, 6210, 6110, 6410);
$percent5 = "10%"; 
$count = 0;
foreach($pagesarray as $val) {
 
    if (isset($_COOKIE[$val])){
        $count = $count + 1;
    }
}
$count = ($count / 24) * 100;
$count = round($count, 2);
$percent5 = $count . '%';
?>

<?php
global $percent7; 
$pagesarray = array(7000, 7301, 7302, 7303, 7201, 7101, 7401, 7304, 7305, 7306, 7204, 7104, 7404, 7307, 7308, 7309, 7207, 7107, 7407, 7310, 7311, 7312, 7210, 7110, 7410);
$percent5 = "10%"; 
$count = 0;
foreach($pagesarray as $val) {
 
    if (isset($_COOKIE[$val])){
        $count = $count + 1;
    }
}
$count = ($count / 24) * 100;
$count = round($count, 2);
$percent5 = $count . '%';
?>

<?php
global $percent8; 
$pagesarray = array(8000, 8301, 8302, 8303, 8201, 8101, 8401, 8304, 8305, 8306, 8204, 8104, 8404, 8307, 8308, 8309, 8207, 8107, 8407, 8310, 8311, 8312, 8210, 8110, 8410);
$percent5 = "10%"; 
$count = 0;
foreach($pagesarray as $val) {
 
    if (isset($_COOKIE[$val])){
        $count = $count + 1;
    }
}
$count = ($count / 24) * 100;
$count = round($count, 2);
$percent5 = $count . '%';
?>

<?php
global $percent4; 
$pagesarray = array(4000,4301, 4302, 4303, 4201, 4101, 4401, 4304, 4305, 4306, 4204, 4104, 4404, 4307, 4308, 4309, 4207, 4107, 4407, 4310, 4311, 4312, 4210, 4110, 4410);

$percent4 = "10%"; 

$count = 0;
foreach($pagesarray as $val) {
 
    if (isset($_COOKIE[$val])){

        $count = $count + 1;

    }
}

$count = ($count / 24) * 100;
$count = round($count, 2);
$percent4 = $count . '%';
?>


<?php

global $percent3; 
$pagesarray = array(3000, 3301, 3302, 3303, 3201, 3101, 3401, 3304, 3305, 3306, 3204, 3104, 3404, 3307, 3308, 3309, 3207, 3107, 3407, 3310, 3311, 3312, 3210, 3110, 3410);

$percent3 = "10%"; 

$count = 0;
foreach($pagesarray as $val) {
 
    if (isset($_COOKIE[$val])){

        $count = $count + 1;

    }
}

$count = ($count / 24) * 100;
$count = round($count, 2);
$percent3 = $count . '%';
?>

<?php

global $percent5; 
$pagesarray = array(5000, 5301, 5302, 5303, 5201, 5101, 5401, 5304, 5305, 5306, 5204, 5104, 5404, 5307, 5308, 5309, 5207, 5107, 5407, 5310, 5311, 5312, 5210, 5110, 5410);

$percent5 = "10%"; 

$count = 0;
foreach($pagesarray as $val) {
 
    if (isset($_COOKIE[$val])){

        $count = $count + 1;

    }
}

$count = ($count / 24) * 100;
$count = round($count, 2);
$percent5 = $count . '%';
?>

<style>
    .lead{margin-top:-3%;font-size:15px;color:#8D8D8D;font-weight:400;}
</style>

<div class = "row" style = "margin-left:0% !important; margin-top:20px; width:100%;">



    <div class = "col-sm-8" style = "padding-left:5px; padding-right:5px;">
        <div class = "row">
            <div>
            </div></div>
            <h1 style = "margin-top:10px; margin-bottom: 50px; color:#FFFFFF; font-family:monoglyceride; text-align:center; line-height:100%" id = "titletext"><b>Courses Dashboard</b></h1> 
            <div class="row panel panel-default">

                <div class = "panel-body">

                    <div class="span5">

                        <h4><p style="color:#428bca; margin-bottom:5px; margin-top:15px;">Beginners Python</p><a href = "../beginnerspython" class = "btn btn-success pull-right" style = "margin-left:10px;">Start</a></h4>

                        <p style = "margin-right:10px;">The YCPC Beginners Python Course is designed to help people get into programming and programmers who have programmed before a fresh review of the basics. Python’s user-friendly syntax makes Python a great language to start off with, and will help build a firm foundation for future programming endeavors.</p>

                    </div>

                    <div class="span3">

                      Progress: <span class="pull-right strong"><?php global $percent2; $percent2 = $percent2;echo $percent2; ?></span>

                      <div class="progress progress-striped active grayback">
                       
                        <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style = <?php global $percent2; global $percentage; $percentage = '"width: ' . $percent2 . ';"'; echo $percentage; ?>>
                            

                            <span class="sr-only"> <?php global $percent2; $percent2 = $percent2;echo $percent2; ?>Complete

                            </span>

                        </div>
                        
                    </div>  

                </div>

                

            </div>              

        </div>


        
        <div class="row panel panel-default">

            <div class = "panel-body">

                <div class="span5">

                  <h4><p style="color:#428bca; margin-bottom:0px; margin-top:15px;">Web Fundamentals</p><a href = "../webFundamentals" class = "btn btn-success pull-right" style = "margin-left:10px;">Start</a></h4>


                  <p>A course designed for students completely new to programming, this Web Fundamentals Course helps teach the basics of web development. In the course, students will learn HTML, CSS and JS - the basis of web development. The course will prepare students for more advanced server-side concepts like PHP and ASP.</p>

              </div>
              <div class="span3">

                  Progress: <span class="pull-right strong"><?php global $percent3; $percent3 = $percent3;echo $percent3; ?></span>

                  <div class="progress progress-striped active grayback">
                   
                    <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style = <?php global $percent3; global $percentage; $percentage = '"width: ' . $percent3 . ';"'; echo $percentage; ?>>
                        

                        <span class="sr-only"> <?php global $percent3; $percent3 = $percent3;echo $percent3; ?>Complete

                        </span>

                    </div>
                    
                </div>  

            </div>

        </div>

    </div>  
    <div class="row panel panel-default">

        <div class = "panel-body">

            <div class="span5">

              <h4><p style="color:#428bca; margin-bottom:0px; margin-top:15px;">Beginners' Java</p><a href = "../begJava" class = "btn btn-success pull-right" style = "margin-left:10px;">Start</a></h4>

              <p>YCPC's Beginners' Java Course is geared towards those with a weak coding background. A bridge to Object Oriented Programming, Java's simple easy to learn syntax also makes the language very beginners-friendly. This course will not only establish a firm foundation but also cover advanced Object Oriented Programming concepts.</p>

          </div>

          <div class="span3">

            Progress: <span class="pull-right strong"><?php global $percent5; $percent5 = $percent5;echo $percent5; ?></span>

            <div class="progress progress-striped active grayback">
               
                    <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style = <?php global $percent5; global $percentage; $percentage = '"width: ' . $percent5 . ';"'; echo $percentage; ?>>
                        

                        <span class="sr-only"> <?php global $percent3; $percent3 = $percent3;echo $percent3; ?>Complete

                        </span>

                    </div>
                
            </div>  

        </div>

    </div>

</div>
<div class="row panel panel-default">

        <div class = "panel-body">

            <div class="span5">

              <h4><p style="color:#428bca; margin-bottom:0px; margin-top:15px;">Advanced Web Development</p><a href = "../advancedweb" class = "btn btn-success pull-right" style = "margin-left:10px;">Start</a></h4>

              <p>YCPC's Advanced Web Development course was made for programmers who have taken the Web Fundamentals Course. This course will go more in depth in server-side concepts such as PHP and MySQL.</p>

          </div>

          <div class="span3">

            Progress: <span class="pull-right strong"><?php global $percent4; $percent4 = $percent4;echo $percent4; ?></span>

            <div class="progress progress-striped active grayback">
               
                    <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style = <?php global $percent4; global $percentage; $percentage = '"width: ' . $percent4 . ';"'; echo $percentage; ?>>
                        

                        <span class="sr-only"> <?php global $percent4; $percent4 = $percent4;echo $percent4; ?>Complete

                        </span>

                    </div>
                
            </div>  

        </div>

    </div>

</div>
<div class="row panel panel-default">

        <div class = "panel-body">

            <div class="span5">

              <h4><p style="color:#428bca; margin-bottom:0px; margin-top:15px;">Advanced Python</p><a href = "../AdvPy" class = "btn btn-success pull-right" style = "margin-left:10px;">Start</a></h4>

              <p>A sequel to YCPC's very first course, Beginners' Python, this course goes deeper into lists, mouse input, and drawing, and also teaches the fundamentals of object-oriented programming.</p>

          </div>

          <div class="span3">

            Progress: <span class="pull-right strong"><?php global $percent4; $percent4 = $percent4;echo $percent4; ?></span>

            <div class="progress progress-striped active grayback">
               
                    <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style = <?php global $percent4; global $percentage; $percentage = '"width: ' . $percent4 . ';"'; echo $percentage; ?>>
                        

                        <span class="sr-only"> <?php global $percent4; $percent4 = $percent4;echo $percent4; ?>Complete

                        </span>

                    </div>
                
            </div>  

        </div>

    </div>

</div>
 <div class="row panel panel-default">

        <div class = "panel-body">

            <div class="span5">

              <h4><p style="color:#428bca; margin-bottom:0px; margin-top:15px;">Advanced Java</p><a href = "../advJava" class = "btn btn-success pull-right" style = "margin-left:10px;">Start</a></h4>

              <p>YCPC's Advanced Java Course is geared towards those who have completed our Beginners' Java course. This course reviews the content of Beginners' Java but also covers advanced topics, such as recursion, sorting, and interfaces, among others.</p>

          </div>

          <div class="span3">

            Progress: <span class="pull-right strong"><?php global $percent6; $percent6 = $percent6;echo $percent6; ?></span>

            <div class="progress progress-striped active grayback">
               
                    <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style = <?php global $percent6; global $percentage; $percentage = '"width: ' . $percent5 . ';"'; echo $percentage; ?>>
                        

                        <span class="sr-only"> <?php global $percent6; $percent6 = $percent6;echo $percent6; ?>Complete

                        </span>

                    </div>
                
            </div>  

        </div>

    </div>

</div>
      <div class="row panel panel-default">

        <div class = "panel-body">

            <div class="span5">

              <h4><p style="color:#428bca; margin-bottom:0px; margin-top:15px;">Introduction to Linux</p><a href = "../BegLinux" class = "btn btn-success pull-right" style = "margin-left:10px;">Start</a></h4>

              <p>YCPC's Introduction to Linux course is a mix of an introduction to cybersecurity and networking and an introduction to the terminal and shell scripting. This course covers the basics of Bash Script, virtualization, and several terminal commands, as well as many other topics.</p>

          </div>

          <div class="span3">

            Progress: <span class="pull-right strong"><?php global $percent5; $percent5 = $percent5;echo $percent5; ?></span>

            <div class="progress progress-striped active grayback">
               
                    <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style = <?php global $percent5; global $percentage; $percentage = '"width: ' . $percent5 . ';"'; echo $percentage; ?>>
                        

                        <span class="sr-only"> <?php global $percent3; $percent3 = $percent3;echo $percent3; ?>Complete

                        </span>

                    </div>
                
            </div>  

        </div>

    </div>

</div>
</div>
<div class = "col-sm-3 col-sm-offset-1"  style = "padding-left:5px; padding-right:5px;">


    <div class = "row panel panel-default">

        <div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">
            <p style = "font-size:20px; color:#428bca;">Beginners Python:</p>
            <ul style = "color: rgb(90, 90, 90); padding-left:20px;">
                <li dir="ltr">
                    <p dir="ltr">
                     Intro, Variables, Assignments
                 </p>
             </li>
             <li dir="ltr">
                <p dir="ltr">
                 Functions, Logic, and Conditionals
             </p>
         </li>
         <li dir="ltr">
            <p dir="ltr">
                Interactive Applications, Buttons, Input Fields
            </p>
        </li>
        <li dir="ltr">
            <p dir="ltr">
                Canvas Drawing, Timers
            </p>
        </li>
        <li dir="ltr">
            <p dir="ltr">
                Basics of Lists, Keyboard Control
            </p>
        </li>
        <li dir="ltr">
            <p dir="ltr">
                Mouse input, more lists, dictionaries, images
            </p>
        </li>
        <li dir="ltr">
            <p dir="ltr">
                Classes and Tiled Images
            </p>
        </li>
        <li dir="ltr">
            <p dir="ltr">
                More classes, Sprites
            </p>
        </li>
        <li dir="ltr">
            <p dir="ltr">
                Animation
            </p>
        </li>
        
    </ul>

</div>

</div>
<div class = "row panel panel-default">

    <div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">
        <p style = "font-size:20px; color:#428bca;">Web Fundamentals:</p>
        <ul style = "color: rgb(90, 90, 90); padding-left:20px;">
           <li dir="ltr">
                <p dir="ltr">     HTML Essentials, Basic HTML Tags, Images, Lists, and Tables   </p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Alignment, Javascript Overview, XHTML, and Special Code Characters   </p>
            </li>
    <li dir="ltr">
                <p dir="ltr">HTML5, Moving and Storing, Videos and Audio   </p>
            </li>
    <li dir="ltr">
                <p dir="ltr">CSS, Style Sheets, Document Properties, Text Disply   </p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Pseudo-, Images and Media, CSS3   </p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Javascript, Variables, If-Else Statements   </p>
            </li>
       <li dir="ltr">
                <p dir="ltr">HTML DOM + BOM, Objects, Libraries   </p>
            </li>

        </ul>

    </div>

</div>
<div class = "row panel panel-default">

    <div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">
        <p style = "font-size:20px; color:#428bca;">Beginners Java:</p>
        <ul style = "color: rgb(90, 90, 90); padding-left:20px;">
           <li dir="ltr">

                <p dir="ltr">Installation and Setup</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Syntax and Statements</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Classes and Objects</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Object Oriented Programming</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Inheritance</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Collections and Exceptions</p>
            </li>
       <li dir="ltr">
                <p dir="ltr">Variable Arguments</p>
            </li>
       <li dir="ltr">
                <p dir="ltr">Final Keyword</p>
            </li>
        </ul>

    </div>

</div>


<div class = "row panel panel-default">

    <div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">
        <p style = "font-size:20px; color:#428bca;">Advanced Web Development:</p>
        <ul style = "color: rgb(90, 90, 90); padding-left:20px;">
           <li dir="ltr">

                <p dir="ltr">Intro, Installations, and Setup</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">PHP Looping and Array Basics</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">PHP Variables and Keywords</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Examples and Review of PHP Basics</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Retrieving Data from Users with Post Variables</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Cookies and Session Ids</p>
            </li>
       <li dir="ltr">
                <p dir="ltr">SQL Commands and Basic Database Concepts</p>
            </li>
       <li dir="ltr">
                <p dir="ltr">Creating Tables, Adding to Databases, and Modifying Tables</p>
            </li>
        </ul>

    </div>

</div>
  <div class = "row panel panel-default">

    <div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">
        <p style = "font-size:20px; color:#428bca;">Advanced Python:</p>
        <ul style = "color: rgb(90, 90, 90); padding-left:20px;">
           <li dir="ltr">

                <p dir="ltr">Coming Soon!</p>
            </li>
    
        </ul>

    </div>

</div>
<div class = "row panel panel-default">

    <div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">
        <p style = "font-size:20px; color:#428bca;">Advanced Java:</p>
        <ul style = "color: rgb(90, 90, 90); padding-left:20px;">
           <li dir="ltr">

                <p dir="ltr">Review of Beginners' Java</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Conditional Logic</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Arrays and ArrayLists</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">For, While and Do-While Loops</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Inheritance</p>
            </li>
    <li dir="ltr">
                <p dir="ltr">Abstract Classes and Interfaces</p>
            </li>
       <li dir="ltr">
                <p dir="ltr">Recursion</p>
            </li>
       <li dir="ltr">
                <p dir="ltr">Bubble, Selection, Insertion, Merge and Quick Sort</p>
            </li>
           <li dir="ltr">
                <p dir="ltr">Heaps and Heap Sort</p>
            </li>
        </ul>

    </div>

</div>
  <div class = "row panel panel-default">

    <div class = "panel-body" style = "padding:5%; color: #0099CC; padding-left:10%;">
        <p style = "font-size:20px; color:#428bca;">Introduction to Linux:</p>
        <ul style = "color: rgb(90, 90, 90); padding-left:20px;">
           <li dir="ltr">

                <p dir="ltr">Coming Soon!</p>
            </li>
    
        </ul>

    </div>

</div>
</div>
</div>

<br><br><br><br><br>
<style>
    .modal{
      overflow:auto;
  }


  .modal-dialog {
      width: 100% !important;
      height: 100% !important;
      padding: 0 !important;
      overflow:auto;
  }

  .modal-content {
      height: 100% !important;
      border-radius: 0 !important;
      overflow:auto;
  }

  .modal-body{
      width: 100% !important;
      height: 100% !important;
      overflow:auto;
      padding: 0 !important;
  }

</style>
<div class="modal fade" id="1Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style = "margin-top:0%; margin-bottom:0%;">
    <div class="modal-content">
      <div class="modal-body" style = "padding-left:3% !important;">


        <h2>
            Web Site Terms and Conditions of Use<i style = 'color:red; position: absolute; top: 1%; right: 1%; font-size:40px; width:5%; height:5%;' data-dismiss="modal" class="fa fa-times-circle fa-3x pull-right"></i>
        </h2>

        <h3>
            1. Terms
        </h3>

        <p>
            By accessing this web site, you are agreeing to be bound by these 
            web site Terms and Conditions of Use, all applicable laws and regulations, 
            and agree that you are responsible for compliance with any applicable local 
            laws. If you do not agree with any of these terms, you are prohibited from 
            using or accessing this site. The materials contained in this web site are 
            protected by applicable copyright and trade mark law.
        </p>

        <h3>
            2. Use License
        </h3>

        <ol type="a">
            <li>
                Permission is granted to temporarily download one copy of the materials 
                (information or software) on Youth Competitive Programming Circle's web site for personal, 
                non-commercial transitory viewing only. This is the grant of a license, 
                not a transfer of title, and under this license you may not:
                
                <ol type="i">
                    <li>modify or copy the materials;</li>
                    <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                    <li>attempt to decompile or reverse engineer any software contained on Youth Competitive Programming Circle's web site;</li>
                    <li>remove any copyright or other proprietary notations from the materials; or</li>
                    <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                </ol>
            </li>
            <li>
                This license shall automatically terminate if you violate any of these restrictions and may be terminated by Youth Competitive Programming Circle at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
            </li>
        </ol>

        <h3>
            3. Disclaimer
        </h3>

        <ol type="a">
            <li>
                The materials on Youth Competitive Programming Circle's web site are provided "as is". Youth Competitive Programming Circle makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Youth Competitive Programming Circle does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
            </li>
        </ol>

        <h3>
            4. Limitations
        </h3>

        <p>
            In no event shall Youth Competitive Programming Circle or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Youth Competitive Programming Circle's Internet site, even if Youth Competitive Programming Circle or a Youth Competitive Programming Circle authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
        </p>
        
        <h3>
            5. Revisions and Errata
        </h3>

        <p>
            The materials appearing on Youth Competitive Programming Circle's web site could include technical, typographical, or photographic errors. Youth Competitive Programming Circle does not warrant that any of the materials on its web site are accurate, complete, or current. Youth Competitive Programming Circle may make changes to the materials contained on its web site at any time without notice. Youth Competitive Programming Circle does not, however, make any commitment to update the materials.
        </p>

        <h3>
            6. Links
        </h3>

        <p>
            Youth Competitive Programming Circle has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Youth Competitive Programming Circle of the site. Use of any such linked web site is at the user's own risk.
        </p>

        <h3>
            7. Site Terms of Use Modifications
        </h3>

        <p>
            Youth Competitive Programming Circle may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.
        </p>

        <h3>
            8. Governing Law
        </h3>

        <p>
            Any claim relating to Youth Competitive Programming Circle's web site shall be governed by the laws of the State of California without regard to its conflict of law provisions.
        </p>

        <p>
            General Terms and Conditions applicable to Use of a Web Site.
        </p>



        <h2>
            Privacy Policy
        </h2>

        <p>
            Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.
        </p>

        <ul>
            <li>
                Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
            </li>
            <li>
                We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.       
            </li>
            <li>
                We will only retain personal information as long as necessary for the fulfillment of those purposes. 
            </li>
            <li>
                We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. 
            </li>
            <li>
                Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. 
            </li>
            <li>
                We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
            </li>
            <li>
                We will make readily available to customers information about our policies and practices relating to the management of personal information. 
            </li>
        </ul>

        <p>
            We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. 
        </p>        

    </div>
</div>
</div>
</div>
