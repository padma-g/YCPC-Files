<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<div class = "form-group">

  <div class = "col-md-5">

      <p><label><?php $questionnumber = $questionnumber; echo $questionnumber; ?></label> <?php $questiontext = $questiontext; echo $questiontext; ?></p>

      <p><?php $helptext = $helptext; echo $helptext; ?></p>

  </div>

  <div class = "col-md-7">

    <div class="checkbox">

      <label>

        <?php $variablecontent1 = $variablecontent1; echo "<input type='checkbox' name = '{$variablecontent1}'  id = 'check'  value='{$variablecontent1}'/>";?>
        <?php $answer1 = $answer1; echo $answer1; ?>

      </label>

    </div>

  

    <div class="checkbox">

      <label>

        <?php $variablecontent2 = $variablecontent2; echo "<input type='checkbox' name= '{$variablecontent2}'  id = 'check'  value='{$variablecontent2}'/>";?>
        <?php $answer2 = $answer2; echo $answer2; ?>

      </label>

    </div>

  

    <div class="checkbox">

      <label>

        <?php $variablecontent3 = $variablecontent3; echo "<input type='checkbox' name= '{$variablecontent3}' id = 'check'   value='{$variablecontent3}'/>";?>
        <?php $answer3 = $answer3; echo $answer3; ?>

      </label>

    </div>



    <div class="checkbox">

      <label>

        <?php $variablecontent4 = $variablecontent4; echo "<input type='checkbox' name= '{$variablecontent4}'   id = 'check' value='{$variablecontent4}'/>";?>
        <?php $answer4 = $answer4; echo $answer4; ?>

      </label>

    </div>

  </div>

</div>
