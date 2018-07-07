<?php
	session_start();

	$ten= $_GET['search'];

	require "../Connect.php";

	

	$data=connect_get('http://localhost:8080/NhaHang/public/api/monan/danhsach?ten='.$ten);

	$_SESSION['to_view'] = $data;

	header("Location: ../View/ChiTietMonAn.php");

	
?>