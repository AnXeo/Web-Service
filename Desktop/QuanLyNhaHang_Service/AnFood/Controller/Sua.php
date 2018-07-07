<?php

  require "../Connect.php";


  $data = array('ten'=>$_POST['ten'] , 'mota'=>$_POST['mota'] , 'gia'=>$_POST['gia'],'id'=>$_POST['id']);

  connect_post('http://localhost:8080/webservices/public/api/monan/sua',$data);

  header("Location: ../View/MonAn.php");
?>
