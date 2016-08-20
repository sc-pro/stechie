<?php
require_once "include/core.php";
require_once "include/info.php";
require_once "include/dbConnect.php";
if(isset($_GET['search'])){
    $search=$_GET['search'];
    if($search!==""){
        $result=mysql_query("select * from `resume` where email='$search' limit 1");
        if(mysql_num_rows($result)){

            ?>
<div class="container">
    <div class="row"><h1 class="name"><?php echo mysql_result($result,0,'name');?></h1></div>
    <div class="row"><span class="detail"> <?php echo mysql_result($result,0,'phone');?></span></div>
    <div class="row"><span class="detail"><?php echo mysql_result($result,0,'email');?></span></div>
    <div class="row"><h3 class="topic">Objective</h3></div>
    <hr>
    <div class="row col-md-offset-1"><p><?php echo html_entity_decode(mysql_result($result,0,'objective'));?></p>
    </div>
    <div class="row"><h3 class="topic">Education</h3></div>
    <hr>
    <div class="row col-md-offset-1"><p><?php echo html_entity_decode(mysql_result($result,0,'education'));?></p>
    </div>
    <div class="row"><h3 class="topic">Professional Skills</h3></div>
    <hr>
    <div class="row col-md-offset-1"><p><?php echo html_entity_decode(mysql_result($result,0,'skill'));?></p>
    </div>

    <div class="row"><h3 class="topic">Achievements</h3></div>
    <hr>
    <div class="row col-md-offset-1"><p><?php echo html_entity_decode(mysql_result($result,0,'achievements'));?></p>
    </div>

    <div class="row"><h3 class="topic">Trainings & Workshops</h3></div>
    <hr>
    <div class="row col-md-offset-1"><p><?php echo html_entity_decode(mysql_result($result,0,'trainings'));?></p>
    </div>


    <div class="row"><h3 class="topic">Hobbies & Interest</h3></div>
    <hr>
    <div class="row col-md-offset-1"><p><?php echo html_entity_decode(mysql_result($result,0,'hobbies'));?></p>
    </div>
    <div class="row"><h3 class="topic">Personal Details</h3></div>
    <hr>
    <div class="row col-md-offset-1"><p><?php echo html_entity_decode(mysql_result($result,0,'details'));?></p>
    </div>
</div>
<?php
        }else{
            ?>
            <h2 class="text-center text-danger">No user exist with such email address. Please try another.</h2>
            <?php
        }
    }else{
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}
?>
<?php require_once "include/footer.php";?>