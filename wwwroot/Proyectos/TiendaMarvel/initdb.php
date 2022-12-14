<?php
require_once("MySQLdb.php");
//echo "<pre>".print_r($_POST,true)."</pre>";
//$_POST['Control'] = isset($_POST['submitUpdate']) && !empty($_POST['submitUpdate']) ? "Create" : "";
if(isset($_POST['submitCreate'])) $_POST["Control"]="Create";
if(isset($_POST['submitRead'])) $_POST["Control"]="Read";
if(isset($_POST['submitUpdate'])) $_POST["Control"]="Update";
if(isset($_POST['submitDelete'])) $_POST["Control"]="Delete";

$db = new MySQLdb();


?>