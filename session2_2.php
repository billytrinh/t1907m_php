<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lồng ghép html - php</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <h1>Thông tin sinh viên</h1>
    <?php
        // day la noi viet code php
    // ben ngoai pham vi nay la code html
       include_once("students.php"); // nap file php vao 1 file khac  include --> nap file
    ?>
    <?php foreach ($students as $s): // ket hop ma html - php  // goi thuoc tinh cua doi tuong dung ky hieu -> ?>
        <ul>
            <li><a href="#"><?php echo $s->name ?></a></li>
            <li><?php echo $s->age ?> tuổi</li>
            <li><?php echo $s->point ?> điểm</li>
        </ul>
    <?php endforeach;// lam the nay de khoi lan voi dau {} cua bon khac nhu if else ... ?>

</body>
</html>