<?php
include '../conn.php';

$uid = $_REQUEST['uid'];
$goods_id = $_REQUEST['gid'];
$count = $_REQUEST['count'];

$sql = "insert into orders(user_id,goods_id,count) values(".$uid.",".
$goods_id.",".$count.")";


if ($conn->query($sql) === TRUE) {
    echo "购买成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
