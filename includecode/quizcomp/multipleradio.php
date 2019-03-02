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

    <div class="radio">

      <label>

        <?php $variableid1 = $variableid1; $variablecontent1 = $variablecontent1; echo "<input type='radio' name='{$variableid1}' id= 'myradio'    value='{$variablecontent1}'/>";?>
        <?php $answer1 = $answer1; echo $answer1; ?>

      </label>

    </div>

    <div class="radio">

      <label>

        <?php $variableid2 = $variableid2; $variablecontent2 = $variablecontent2; echo "<input type='radio' name='{$variableid2}' id= 'myradio'    value='{$variablecontent2}'/>";?>
        <?php $answer2 = $answer2; echo $answer2; ?>

      </label>

    </div>

        <div class="radio">

      <label>

        <?php $variableid3 = $variableid3; $variablecontent3 = $variablecontent3; echo "<input type='radio' name='{$variableid3}' id= 'myradio'    value='{$variablecontent3}'/>";?>
        <?php $answer3 = $answer3; echo $answer3; ?>

      </label>

    </div>

    <div class="radio">

      <label>

        <?php $variableid4 = $variableid4; $variablecontent4 = $variablecontent4; echo "<input type='radio' name='{$variableid4}' id= 'myradio'    value='{$variablecontent4}'/>";?>
        <?php $answer4 = $answer4; echo $answer4; ?>

      </label>

    </div>

  </div>

</div>
