<?php
	
  $id = $_GET['id'];
  require "../Connect.php";
  $data = connect_get('http://localhost:8080/NhaHang/public/api/monan/xoa?id='.$id);

  header("Location: ../View/MonAn.php");
  
?>
