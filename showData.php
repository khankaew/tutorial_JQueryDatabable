<!DOCTYPE html>
<?php
    $_SERVER['REQUEST_URI'];
    require './dbConnect.php';
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($connect, $sql);
?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tutorial MYSQL</title>
    </head>
    <body>
        <h1>แสดงข้อมูล</h1>
        <table border="1">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Job</th>
                <th>Salary</th>
                <th></th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['job']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
