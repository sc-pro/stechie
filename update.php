<?php
include_once "include/core.php";
require_once "include/info.php";
require_once "include/dbConnect.php";
    if(isset($_POST['update']) && isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $objective=htmlentities($_POST['objective']);
        $skills=htmlentities($_POST['skills']);
        $education=htmlentities($_POST['education']);
        $hobbies=htmlentities($_POST['hobbies']);
        $trainings=htmlentities($_POST['trainings']);
        $achievements=htmlentities($_POST['achievements']);
        $details=htmlentities($_POST['details']);
        $email=$_SESSION['email'];
        mysql_query("update `resume` set objective='$objective', skill='$skills', education='$education', hobbies='$hobbies',achievements='$achievements', trainings='$trainings',details='$details' where email='".mysql_real_escape_string($email)."'");
        ?>
        <h1 class="text-center text-success">Thank You.</h1>
        <h4 class="text-center text-warning">Copy the link given below. This is the link to your resume.</h4>
        <h4 class="text-center"><?php echo "<a href=http://www.stechie.in/search.php?search=".urlencode($email).">
        http://www.stechie.in/search.php?search=".urlencode($email)."
        </a>"; ?></h4>
        <a class="text-center" href="log.php"><button class="btn btn-info">Go back and edit</button></a>
        <?php      
    }else{
        header("Location:index.php");
    }
require_once "include/footer.php";?>
