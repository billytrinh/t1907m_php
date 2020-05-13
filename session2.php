<?php
// array php : ko giới hạn số lượng phần tử. - giống JS
// array php: kết hợp của array JS và  hashmap java
$ary = []; // khai bao bang ary
$ary[0] = 10;
$ary[1] = "T1907M";
$ary[] = 3.14;// tu dong nap vao vi tri index tiep theo
for ($i=0;$i< count($ary);$i++){
    echo $ary[$i];
}

foreach ($ary as $e){  //  array as element  -- nguoc voi java - c#
    echo $e;
}

$ary["point"] = 100; // giong hashmap cua java
$ary[] = 11;
var_dump($ary);// console.log();
$arr = [];
$arr[] = 1;
$arr[] = $ary;
$arr[] = "hello";

$student = [
    "name"=> "Hoang Trong Ha",
    "age" => 15,
    "id"  => 1
]; // mang kieu hashmap -> hay dung de dinh nghia du lieu cho 1 phan tu
$student["point"] = 10;
var_dump($student);
if($student["point"] > 5){
    echo $student["name"];
}else{
    echo "Khong cho sinh vien";
}
alert();
sendMessage();
sendMessage("hello world!");
// dinh nghia 1 ham` -- giong het javascript
function alert(){
    echo "Thong bao khan cap";
}

function sendMessage($msg = "haha"){ // tham so co the nap gia tri mac dinh ban dau
    echo $msg;
}
// thong dich ( runtime ) xong file nay chuyen ket qua thanh ma html