<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php  

  $correctanswer = $correctanswer;
  $correct = $correct;
  $answered = $answered;

/*  
  global $css1;
  global $css2;
  global $css3;
  global $css4;
*/
$check1 = "";
$check2 = "";
$check3 = "";
$check4 = "";


switch($correctanswer)
{
  case (1):

    $check1 = "checked";

    $css1 = '"radio quizcorrect"';
    $css2 = '"radio"';
    $css3 = '"radio"';
    $css4 = '"radio"';
    break;

  case (2):
$check2 = "checked";
    $css1 = '"radio"';
    $css2 = '"radio quizcorrect"';
    $css3 = '"radio"';
    $css4 = '"radio"';
    break;

  case (3):
$check3 = "checked";
    $css1 = '"radio"';
    $css2 = '"radio"';
    $css3 = '"radio quizcorrect"';
    $css4 = '"radio"';
    break;

  case (4):
$check4 = "checked";
    $css1 = '"radio"';
    $css2 = '"radio"';
    $css3 = '"radio"';
    $css4 = '"radio quizcorrect"';
    break;
}
$mark = '<span style = "color:green;" class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;&nbsp;';

if (!($correct == 1)){

  $mark = '<span style = "color:red;" class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;&nbsp;';


        switch($answered)
      {
          case (1):

            $css1 = '"radio quizincorrect"';
            break;

          case (2):

            $css2 = '"radio quizincorrect"';
            break;

          case (3):

            $css3 = '"radio quizincorrect"';
            break;

          case (4):

            $css4 = '"radio quizincorrect"';
            break;
        }


}
  

 
?>

<div class = "form-group">

  <div class = "col-md-5">

      <p><label><?php echo $mark; ?><?php $questionnumber = $questionnumber; echo $questionnumber; ?></label> <?php $questiontext = $questiontext; echo $questiontext; ?></p>

      <p><?php $helptext = $helptext; echo $helptext; ?></p>

  </div>

  <div class = "col-md-7">

    <div class= <?php echo $css1; ?>>

      <label>

        <input type='radio' value='option1' <?php echo $check1; ?>   disabled="disabled"/>
        <?php $answer1 = $answer1; echo $answer1; ?>

      </label>

    </div>

    <div class= <?php echo $css2; ?>>

      <label>

        <input type='radio' value='option2' <?php echo $check2; ?>   disabled="disabled"/>
        <?php $answer2 = $answer2; echo $answer2; ?>

      </label>

    </div>

    <div class= <?php echo $css3; ?>>

      <label>

        <input type='radio' value='option3' <?php echo $check3; ?>   disabled="disabled"/>
        <?php $answer3 = $answer3; echo $answer3; ?>

      </label>

    </div>

    <div class= <?php echo $css4; ?>>

      <label>

        <input type='radio' value='option4'  <?php echo $check4; ?>  disabled="disabled"/>
        <?php $answer4 = $answer4; echo $answer4; ?>

      </label>

    </div>

  </div>

</div>
