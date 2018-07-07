<?php
	session_start();
	$data = $_SESSION['to_view'];
    // require "../Connect.php";
    // include '../Controller/TimKiem.php';

  // require "../Connect.php";
  // $ten= $_GET['search'];
  // $data = connect_get('http://localhost:8080/NhaHang/public/api/monan/danhsach?ten='.$ten);
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LUCKY PIZZA</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>

<div id="header" >
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
	    <form class="form-inline my-2 my-lg-0">
			    <img src="image/logo.png" style="width: 60px ; height: 60px">
		</form>
		
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  		</button>
	 	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">

		        <li class="nav-item">
		        	<a class="navbar-brand" href="MonAn.php" style="margin-left: 15px"><b>MÓN ĂN</b></a>
		        </li>
		       
		    </ul>
		     <form class="form-inline my-2 my-lg-0" action="../Controller/TimKiem.php" method="GET">
			     
			    	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" >
			      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    
    		</form>
		   
		</div>
	</nav>
</div>
<div class="container" style="margin-top: 20px  ; min-height: 500px;">

	 <!-- <div class="row"> 
            <div class="col-6"  > -->
            <h2 >Các món ăn tìm được :  </h2>
           <!--  </div>
            <div class="col-6" style="text-align: center" >
                <a href="ThemMonAn.php">
                   <button type="button" class="btn btn-warning" style="width: 300px;height:60px; font-size: 30px">THÊM MÓN ĂN</button>
                </a>
                </div>
            </div> -->
	
	<table class="table" style="margin-top: 30px">
		<tr  style="background-color: #e2e2e2;">
		     
		    <th>Tên món ăn</th> 
		   
		    <th >Giá</th>
		    <th>Mô tả</th>
		   
		</tr>
			<?php
	         foreach($data as $monan)
	      { ?>
			<tr>
			   
			    <td><?php echo $monan->ten; ?></td>
			   
			    <td><?php echo $monan->gia; ?></td>
			    <td><?php echo $monan->mota; ?></td>
			   
			</tr>

		   <?php } ?>

		  
			
	</table>


</div>

<div id="footer" style="margin-top: 20px">
	<div style="background-color: #e1e1e1; height: 50px ; text-align: center; padding-top: 15px;color: white;"> An xèo</div>
</div>

</body>
</html>