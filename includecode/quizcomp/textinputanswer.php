<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php 

$correct = $correct;
$mark = '<span style = "color:green;" class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;&nbsp;';

if (!($correct == 1)){

  $mark = '<span style = "color:red;" class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;&nbsp;';

}

?>

<div class="form-group">

	<div class = "col-md-5">

	  	<p><label><?php echo $mark; ?><?php $questionnumber = $questionnumber; echo $questionnumber; ?></label> <?php $questiontext = $questiontext; echo $questiontext; ?></p>

	</div>

	<div class="col-md-7">

		Right Answer:&nbsp;<input type="text" value=<?php $answer1 = $answer1; echo '"' . $answer1 . '"'; ?> name="tb1" readonly />&nbsp;&nbsp;
	  	Your Answer:&nbsp;<input type="text" value=<?php $answer = $answer; echo '"' . $answer . '"'; ?> name="tb1" readonly />

	</div>

</div>



