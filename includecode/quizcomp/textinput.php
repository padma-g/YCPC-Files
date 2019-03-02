<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<div class="form-group">

	<div class = "col-md-5">

	  	<p><label><?php $questionnumber = $questionnumber; echo $questionnumber; ?></label> <?php $questiontext = $questiontext; echo $questiontext; ?></p>

	  	<p>If the answer is code, use all lower case when possible. Default variables are: x, y and z. If the answer is a number, use decimals rounded to the hundreths. No spaces.</p>

	</div>

	<div class="col-md-7">

	  	<?php $variableid1 = $variableid1; echo "<input type='text' name= '{$variableid1}' placeholder='Answer' class='form-control input-md'/>";?>
	  	<span class="help-block">Insert answer here, no spaces if the answer is a number!</span>  

	</div>

</div>



