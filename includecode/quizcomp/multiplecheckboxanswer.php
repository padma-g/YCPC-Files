<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php  
  
  $correct1 = $correct1;
  $correct2 = $correct2;
  $correct3 = $correct3;
  $correct4 = $correct4;

  $correct = $correct;

  if ($correct1){

    $css1 = 'checkbox quizcorrect"';

  }else{

    $css1 = 'checkbox quizincorrect"';

  }
  
  if ($correct2){

    $css2 = 'checkbox quizcorrect"';

  }else{

    $css2 = 'checkbox quizincorrect"';

  }

  if ($correct3){

    $css3 = 'checkbox quizcorrect"';

  }else{

    $css3 = 'checkbox quizincorrect"';

  }

  if ($correct4){

    $css4 = 'checkbox quizcorrect"';

  }else{

    $css4 = 'checkbox quizincorrect"';

  }    

  $mark = '<span style = "color:green;" class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;&nbsp;';

  if (!($correct == 1)){

    $mark = '<span style = "color:red;" class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;&nbsp;';

  }
?>

<div class = "form-group">

  <div class = "col-md-5">

      <p><label><?php echo $mark; ?><?php $questionnumber = $questionnumber; echo $questionnumber; ?></label> <?php $questiontext = $questiontext; echo $questiontext; ?></p>

      <p><?php $helptext = $helptext; echo $helptext; ?></p>

  </div>

  <div class = "col-md-7">

    <div class= <?php $css1 = '"checkbox ' . $css1; echo $css1; ?> >

      <label>

        <input type="checkbox" <?php $check1 = $check1; echo $check1; ?>  disabled="disabled" value="" />
        <?php $answer1 = $answer1; echo $answer1; ?>

      </label>

    </div>

  

    <div class= <?php $css2 = '"checkbox ' . $css2; echo $css2; ?>>

      <label>

        <input type="checkbox" <?php $check2 = $check2; echo $check2; ?>  disabled="disabled" value="" />
        <?php $answer2 = $answer2; echo $answer2; ?>

      </label>

    </div>

  

    <div class= <?php $css3 = '"checkbox ' . $css3; echo $css3; ?>>

      <label>

        <input type="checkbox" <?php $check3 = $check3; echo $check3; ?>  disabled="disabled" value="" />
        <?php $answer3 = $answer3; echo $answer3; ?>

      </label>

    </div>



    <div class= <?php $css4 = '"checkbox ' . $css4; echo $css4; ?>>

      <label>

        <input type="checkbox" <?php $check4 = $check4; echo $check4; ?>  disabled="disabled" value="" />
        <?php $answer4 = $answer4; echo $answer4; ?>

      </label>

    </div>

  </div>

</div>
