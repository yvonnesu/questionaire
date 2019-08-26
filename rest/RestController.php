<?php
require_once("SiteRestHandler.php");

$view = "";
if(isset($_GET["minimalism"]))
    $view = $_GET["minimalism"];
/*
 * RESTful service 控制器
 * URL 映射
*/
switch($view){

    case "all":

        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getAllQuestion();
        break;

    case "single":

        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getQuestion($_GET["id"]);
        break;

    case "" :
        //404 - not found;
        break;
}
?>
