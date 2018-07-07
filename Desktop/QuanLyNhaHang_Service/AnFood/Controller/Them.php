<?php
  require "../Connect.php";


  $data = array('ten'=>$_POST['ten'] , 'mota'=>$_POST['mota'] , 'gia'=>$_POST['gia']);

  connect_post('http://localhost:8080/NhaHang/public/api/monan/them',$data);

  header("Location: ../View/MonAn.php");
?>
