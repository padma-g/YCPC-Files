<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<!--Form for creating quizzes-->
<div class = "panel-body" style="color:#808080;" >

  <h1 class = "page-header nicepadding"><?php global $title; echo $title; ?></h1>
  
  <p></p>

  <form class="form-horizontal" style = "padding-left:30px; padding-right:30px" method = "post" action = "../quizcreation.php">

    <fieldset>

      <div class="form-group">

        <div class = "col-md-4">

          <p>Formid</p>

        </div>

        <div class="col-md-8">

          <input name="pageid" type="text" value= <?php echo $_GET['id']; ?> class="form-control input-md"/>

          <span class="help-block">DO NOT CHANGE</span>  
          
        </div>

      </div>
    
      <div class="form-group">

        <div class = "col-md-4">

          <p>Questionid</p>

        </div>

        <div class="col-md-8">

          <input name="questionid" type="text" placeholder="Answer" class="form-control input-md"/>

          <span class="help-block">1 is multiple choice, 2 is checkboxes, 3 is free answer</span>  
          
        </div>

      </div>

      <div class="form-group">

        <div class = "col-md-4">

          <p><label>1.</label> Question Text</p>

        </div>

        <div class="col-md-8">

          <input name="text" type="text" placeholder="Answer" class="form-control input-md"/>
          <span class="help-block">Leave out 1. or etc. Make sure you only put in the question. Start out the answer with #CCCC# if it is the correct answer</span>  

        </div>

      </div>

      <div class="form-group">

        <div class = "col-md-4">

          <p><label>2.</label> Optional Code Text Reference</p>

        </div>

        <div class="col-md-8">

          <input name="codetext" type="text" placeholder="Answer" class="form-control input-md"/>
          <span class="help-block">Helper text can also be insert here</span>  

        </div>

      </div>

      <div class="form-group">

        <div class = "col-md-4">

          <p><label>3.</label> Answer 1</p>

        </div>

        <div class="col-md-4">

          <input name="answer1" type="text" placeholder="Answer" class="form-control input-md"/>
          <span class="help-block">Do not include As Bs Cs. Only list answer</span>  

        </div>

      </div>

      <div class="form-group">

        <div class = "col-md-4">

          <p><label>4.</label> Answer 2</p>

        </div>

        <div class="col-md-8">

          <input name="answer2" type="text" placeholder="Answer" class="form-control input-md"/>
          <span class="help-block">Do not include As Bs Cs. Only list answer</span>  

        </div>

      </div>

      <div class="form-group">

        <div class = "col-md-4">

          <p><label>5.</label> Answer 3</p>

        </div>

        <div class="col-md-8">

          <input name="answer3" type="text" placeholder="Answer" class="form-control input-md"/>
          <span class="help-block">Do not include As Bs Cs. Only list answer</span>  

        </div>

      </div>

      <div class="form-group">

        <div class = "col-md-4">

          <p><label>6.</label> Answer 4</p>

        </div>

        <div class="col-md-8">

          <input name="answer4" type="text" placeholder="Answer" class="form-control input-md"/>
          <span class="help-block">Do not include As Bs Cs. Only list answer</span>  

        </div>

      </div>



      <!-- Button (Double) -->
      <div class="form-group">

        <div class="col-md-12">  

          <button value = "Sent" name="submit" class="btn btn-success pull-right">Submit</button>

        </div>

      </div>

    </fieldset>

  </form>

</div>
