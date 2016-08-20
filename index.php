<?php
    require_once "include/core.php";
    require_once "include/info.php";
    if(isset($_SESSION['email'])){
        header("Location:log.php");
    }
?>
<div class="jumbotron">
<div class="row">
    <div class="col-md-12">
        <div class="col-lg-offset-1 lol col-xs-12 col-lg-6">
            <div class="row text-center">
                <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12"> </div>
                <div class="text-center col-lg-12">
                    <form role="form" id="feedbackForm" class="text-center" method="post" action="log.php">
                        <div class="form-group">
<!--                            <label for="registerName">Name</label>-->
                            <input type="text" class="form-control" id="registerName" name="registerName" placeholder="Name" required>
                            <span class="help-block" style="display: none;">Please enter your name.</span></div>
                        <div class="form-group">
<!--                            <label for="registerEmail">E-Mail</label>-->
                            <input type="email" class="form-control" id="registerEmail" name="registerEmail" placeholder="Email Address" required>
                            <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
                        <div class="form-group">
<!--                            <label for="registerPhone">Phone number</label>-->
                            <input type="number" maxlength="10" class="form-control" id="registerPhone" name="registerPhone" placeholder="Phone number" required>
                            <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
                        <div class="form-group">
<!--                            <label for="registerPassword">Password</label>-->
                            <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Password" required>
                            <span class="help-block" style="display: none;">Please enter a valid password.</span></div>
                        <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" name="register" style=" margin-top: 10px;"> Register</button>
                    </form>
                    <!-- END CONTACT FORM -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php require_once "include/footer.php";?>
