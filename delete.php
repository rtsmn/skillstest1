<?php 
 require_once "classes/Books.php";
$student = new Student();
$student->delete($_GET['id']);
header('location: index.php');

?>