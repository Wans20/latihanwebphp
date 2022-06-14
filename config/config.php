<?php
date_default_timezone_set("Asia/Jakarta");
$set_url = "http://" . $_SERVER['HTTP_HOST'];
$set_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
define("URL", $set_url);

function security_login()
{
    if (empty($_SESSION['userlogin'])) {
        return header("Location: " . URL . "");
    } else {
        return "";
    }
}
function pesan($alert)
{
    echo '<script language="javascript">';
    echo 'alert("' . $alert . '")';  //not showing an alert box.
    echo '</script>';
    return header("Location: ../home.php?modul=mod_blog");
}