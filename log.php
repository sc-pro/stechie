<script type="text/javascript" src="js/nicEdit.js"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
<?php
    include_once "include/core.php";
    require_once "include/dbConnect.php";
    require_once "include/functions.php";
if(isset($_POST['login'])){
    $email=trim($_POST['email']);
    $password=$_POST['password'];
    $result=userExistence($email,$password);
    if($result==1){
        $_SESSION['email']=$email;
        $_SESSION['name']=getUserName($email);
        require_once "include/info.php";
        require_once "include/profile.php";
    }else{
        require_once "include/info.php";
       ?>
        <h3 class="text-center text-danger">Email address and password do not match.</h3>
        <h4 class="text-center text-warning">Redirecting you to home page</h4>
        <?php
        header("Refresh:3;url=index.php");
    }
}elseif(isset($_SESSION['email'])){
    require_once "include/info.php";
    $email=$_SESSION['email'];
    require_once "include/profile.php";
}elseif(isset($_POST['register'])){
    $name=trim($_POST['registerName']);
    $email=trim($_POST['registerEmail']);
    $phone=trim($_POST['registerPhone']);
    $password=$_POST['registerPassword'];
    if(userRegistered($email)!=0){
        require_once "include/info.php";
        ?>
        <h3 class="text-center text-danger">User already registered with this email.</h3>
        <h4 class="text-center text-warning">Redirecting you to home page</h4>
        <?php
        header("Refresh:3;url=index.php");
    }else {
        $password = md5($password);
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        require_once "include/info.php";
        mysql_query("insert into `resume` (name,email,phone,password) VALUES ('$name','$email','$phone','$password')");
        ?>
        <div class="container">
            <div class="row"><h1 class="name"><?php echo $name ?></h1></div>
            <div class="row"><span class="detail"><?php echo $phone ?></span></div>
            <div class="row"><span class="detail"><?php echo $email ?></span></div>
            <form action="update.php" method="post">
                <div class="row"><h3 class="topic">Objective</h3></div>
                <hr>
                <!--        <textarea name="objective" cols="100" rows="10"></textarea>-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><textarea name="objective"
                                                                    style="width: 100%;height: 7em;"></textarea></div>
                </div>
                <div class="row"><h3 class="topic">Education</h3></div>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><textarea name="education"
                                                                    style="width: 100%;height: 10em;"></textarea></div>
                </div>
                <div class="row"><h3 class="topic">Professional Skills</h3></div>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><textarea name="skills"
                                                                    style="width: 100%;height: 10em;"></textarea></div>
                </div>
                <div class="row"><h3 class="topic">Achievements</h3></div>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><textarea name="achievements"
                                                                    style="width: 100%;height: 10em;"></textarea></div>
                </div><div class="row"><h3 class="topic">Trainings & Workshops</h3></div>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><textarea name="trainings"
                                                                    style="width: 100%;height: 10em;"></textarea></div>
                </div>
                <div class="row"><h3 class="topic">Hobbies & Interests</h3></div>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><textarea name="hobbies"
                                                                    style="width: 100%;height: 10em;"></textarea></div>
                </div>
                <div class="row"><h3 class="topic">Personal Details</h3></div>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><textarea name="details"
                                                                    style="width: 100%;height: 10em;"></textarea></div>
                <input type="hidden" name="email" value="<?php echo $email ?>">
                <div>
                    <button type="submit" id="feedbackSubmit" class="center-block btn btn-primary btn-lg" name="update"
                            style=" margin-top: 10px;"> Submit
                    </button>
                </div>
            </form>
        </div>
        <?php
    }
}else{
    require_once "include/info.php";
    header("Location:index.php");
}
?>
<?php require_once "include/footer.php";?>
