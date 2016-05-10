<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php 
    session_start();
    /*require_once 'Zend/Loader/Autoloader.php';
    $autoloader = Zend_Loader_Autoloader::getInstance();*/
    require_once 'vendor/autoload.php';
    $_SESSION['$client'] = new Google_Client();
    include "include/photo_wall_functions.php"; 
    include "include/google_functions.php";
    include "include/Google_calendar_functions.php";
    //For loging out.
    if (isset($_GET['logout'])) {
        unset($_SESSION['token']);
    }
?>
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<title>KLF Media</title>
</head>
  
<?php
function gen_header(){
    ?>
    <table class='top_table'>
        <tr class='top_table_row'>
        <td class='top_table_logo'>
        <img alt='klfMediaLogo' src='images/klfLogo.jpg' /></td>
        <td class='top_table_desc'>
        <div class='comp_desc_title'>
            <strong>COMPANY DESCRIPTION<br />
            <span class='comp_desc'>asdf asdf asdf asdf asdf asdf asdf 
                  asdf asdf asdf asdf</span></strong></div>
        </td>
        <td class='top_table_user'>
           <div class='user_info'>
<?php
            if (!isset($_SESSION['token'])) {
                $_SESSION['$client'] = googleLogIn();
            } else {
                $_SESSION['$client'] = getClient();        
                getUserInfo();
            }
?>
           </div>
        </td>
        </tr>
     </table>
<?php
}
?>