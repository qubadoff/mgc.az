<?php
session_start();
if(isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}
elseif (!$_SESSION['lang']){
    $_SESSION['lang'] = 'en';
}
include ('lang/lang_'.$_SESSION['lang'].'.php');