<?php
require_once 'model/DogDAO.php';

showErrors(1);

$action = $_REQUEST['action'];
if($action=='list'){
    $dogDAO = new DogDAO();
    $dogs=$dogDAO->getDogs();
    include "views/listView.php";
}

function showErrors($debug){
    if($debug==1){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
}

?>