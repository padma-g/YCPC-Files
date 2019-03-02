<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<div id= "main" class = "panel-body" style="color:#808080;">

	<h2 class = "page-header nicepadding"><?php global $name; echo $name; ?></h2>

	<p></p>

  	<form class="form-horizontal" style = "padding-left:30px; padding-right:30px" method = "post" action = <?php $quizid = ($_GET['id']); echo '"' . "../results/" . $quizid . '"';?>/>

    <fieldset>

	<?php
	
	global $quizid;
	$quizid = ($_GET['id']);

	if (include "quiz.php"){

		
	}else{
		include "error.html.php";

	}






	echo questiongenerator($quizid);



	?>
	<div class="form-group">

        <div class="col-md-12">  

          	<button value = "Sent" name="submit" class="btn btn-success pull-right">Submit</button>

        </div>

  	</div>


	</fieldset>


	</form>



	<!--Extra </div on purpose -->
	</div>


</div>



