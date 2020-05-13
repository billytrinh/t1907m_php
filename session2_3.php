<?php // lay du lieu tu mysql dua vao php
require_once("lib/connect.php");
$students = getAll("students");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien tu CSDL</title>
</head>
<body>
    <?php foreach ($students as $s):?>
        <ul>
            <li><?php echo $s["id"]; ?></li>
            <li><?php echo $s["name"]; ?></li>
            <li><?php echo $s["age"]; ?></li>
            <li><?php echo $s["mark"]; ?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>


