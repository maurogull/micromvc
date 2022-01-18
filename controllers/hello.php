<?php


require '../fw/fw.php';
require '../models/Employees.php';
require '../views/HelloPage.php';



$m = new Employees();  //this is an example, I'm not going to use this
$employees = $m->getAll(); //neither this


$aView = new HelloPage();
//$aView->employees = $employees; // I could send data to the view this way
$aView->render();