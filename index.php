<?php 
require_once 'classes/Student.php';

$student = new Student();
$students = $student->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Book List</title>

</head>
<body>
    <h2>Book List</h2>
    <a href="add.php">Add Book</a>
    <table border="1"> 
        <tr>
            <th>isbn</th>
            <th>title</th>
            <th>copyright</th>
            <th>edition</th>
            <th>price</th>
            <th>quantity</th>
            <th>ACTION</th>

        </tr>
        <?php while ($row = $students->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['isbn']); ?></td>
            <td><?php echo htmlspecialchars($row['title']); ?></td>
            <td><?php echo htmlspecialchars($row['copyright']); ?></td>
            <td><?php echo htmlspecialchars($row['edition']); ?></td>
            <td><?php echo htmlspecialchars($row['price']); ?></td>
            <td><?php echo htmlspecialchars($row['quantity']); ?></td>
            <td>
                <a href="delete.php?id=<?php echo htmlspecialchars($row['isbn']); ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
