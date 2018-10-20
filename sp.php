<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$database = "hack";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if($_SERVER['REQUEST_METHOD']=='POST') {
    $stmt = $conn->prepare("insert into sp (id,ccode,pstate,pdesc,mini,sector,cate,peri) values(?,?,?,?,?,?,?,?)");
    $r = rand(1, 999999);
    $ra = date("y_h_i_sa");
    $id='i'.$r.$ra;
    $ccode='a';
    $pstate=$_POST['text1'];
    $pdesc=$_POST['text2'];
    $mini=$_POST['min'];
    $sector=$_POST['sec'];
    $cate=$_POST['cate'];
    $peri=$_POST['per'];
    $stmt->bind_param("ssssssss", $id,$ccode,$pstate,$pdesc,$mini,$sector,$cate,$peri);
    $stmt->execute();
}

?>