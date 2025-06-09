<?php 
 require_once "classes/Student.php";
$student = new Student();
$student->delete($_GET['id']);
header('location: index.php');

?>