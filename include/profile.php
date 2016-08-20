<?php
$result=mysql_query("select * from `resume` where email='".mysql_real_escape_string($email)."' limit 1");
if(mysql_num_rows($result)){
?>
<div class="container">
    <div class="row"><h1 class="name"><?php echo mysql_result($result,0,'name');?></h1></div>
    <div class="row"><span class="detail"><?php echo mysql_result($result,0,'phone');?></span></div>
    <div class="row"><span class="detail"><?php echo mysql_result($result,0,'email');?></span></div>
    <form action="update.php" method="post">
        <div class="row"><h3 class="topic">Objective</h3></div>
        <hr>
        <!--        <textarea name="objective" cols="100" rows="10"></textarea>-->
        <div class="row"><div class="col-md-8 col-md-offset-2"><textarea name="objective" style="width: 100%;height: 7em;"><?php echo html_entity_decode(mysql_result($result,0,'objective'));?></textarea></div></div>
        <div class="row"><h3 class="topic">Education</h3></div>
        <hr>
        <div class="row"><div class="col-md-8 col-md-offset-2"><textarea name="education" style="width: 100%;height: 10em;"><?php echo html_entity_decode(mysql_result($result,0,'education'));?></textarea></div></div>
        <div class="row"><h3 class="topic">Professional Skills</h3></div>
        <hr>
        <div class="row"><div class="col-md-8 col-md-offset-2"><textarea name="skills" style="width: 100%;height: 10em;"><?php echo html_entity_decode(mysql_result($result,0,'skill'));?></textarea></div></div>
        
        <div class="row"><h3 class="topic">Achievements</h3></div>
        <hr>
        <!--        <textarea name="objective" cols="100" rows="10"></textarea>-->
        <div class="row"><div class="col-md-8 col-md-offset-2"><textarea name="achievements" style="width: 100%;height: 7em;"><?php echo html_entity_decode(mysql_result($result,0,'achievements'));?></textarea></div></div>
        <div class="row"><h3 class="topic">Trainings & Workshops</h3></div>
        <hr>
        <!--        <textarea name="objective" cols="100" rows="10"></textarea>-->
        <div class="row"><div class="col-md-8 col-md-offset-2"><textarea name="trainings" style="width: 100%;height: 7em;"><?php echo html_entity_decode(mysql_result($result,0,'trainings'));?></textarea></div></div>

        <div class="row"><h3 class="topic">Hobbies & Interests</h3></div>
        <hr>
        <div class="row"><div class="col-md-8 col-md-offset-2"><textarea name="hobbies" style="width: 100%;height: 10em;"><?php echo html_entity_decode(mysql_result($result,0,'hobbies'));?></textarea></div></div>

        <div class="row"><h3 class="topic">Personal Details</h3></div>
        <hr>
        <div class="row"><div class="col-md-8 col-md-offset-2"><textarea name="details" style="width: 100%;height: 10em;"><?php echo html_entity_decode(mysql_result($result,0,'details'));?></textarea></div></div>

        <input type="hidden" name="email" value="<?php echo $email?>">
        <div>
            <button type="submit" id="feedbackSubmit" class="center-block btn btn-primary btn-lg" name="update" style=" margin-top: 10px;"> Submit</button>
        </div>
    </form>
</div>
<?php
}