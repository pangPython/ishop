<?php
//通过id获取用户名
function getUserNameById($conn,$user_id){
      $sql = "select * from user where id = ".$user_id;
      $result = $conn->query($sql);
      if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
          return $row['uname'];
        }
      }
}

function getGoodsNameById($conn,$goods_id){
  $sql = "select * from goods where id = ".$goods_id;
  $result = $conn->query($sql);
  if ($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
      return $row['goods_name'];
    }
  }
}
