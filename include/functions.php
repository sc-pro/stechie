<?php
function userExistence($email,$password){
    $password=md5($password);
    $result=mysql_query("select count(*) from `resume` where email='".mysql_real_escape_string($email)."' && password='$password'");
    return mysql_result($result,0,0);
}
function userRegistered($email){
    $result=mysql_query("select count(*) from `resume` where email='".mysql_real_escape_string($email)."'");
    return mysql_result($result,0,0);
}
function getUserName($email){
    $result=mysql_query("select name from `resume` where email='".mysql_real_escape_string($email)."'");
    return mysql_result($result,0,0);
}