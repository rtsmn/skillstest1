<?php 

require_once "classes/Books.php";
$student = new Student();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $student->add($_POST['title'],$_POST['copyright'],$_POST['edition'],$_POST['price'],$_POST['quantity']);
        header('location: index.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <label for="title">Title</label>
    <input type="text" name="title"><br>
    <label for="copyright">Copyright</label>
    <input type="text" name="copyright"><br>
    <label for="edition">Edition</label>
    <input type="text" name="edition"><br>
    <label for="price">Price</label>
    <input type="text" name="price"><br> 
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity"><br>
  
    <button type="submit">submit</button>
</form>
</body>
</html>
