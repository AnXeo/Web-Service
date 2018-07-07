<?php

  require "../Connect.php";
  $data = connect_get('http://localhost:8080/NhaHang/public/api/monan/danhsach');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PIZZA ORDER</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </head>
    <body >
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
                    <a class="navbar-brand" href="Pizza.jsp" style="margin-left: 15px"><b>PIZZA</b></a>
                </li> 
            </ul>
                 <form class="form-inline my-2 my-lg-0" action="../Controller/TimKiem.php" method="GET">
                 
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" >
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                
            </form>
        </div>
            </nav>
        </div>
        
        <div class="container" style="margin-top: 50px">
            <div class="page-header__wrapper">    
                <img src="image/pizzzzzzzzzzzz.jpg" style="width: 100%;height:250px">
            </div>
            <div class="row">
            
            <?php
            foreach($data as $monan)
            { ?>
           
                <div class="col-4" style=" margin-top: 40px">
                    <div class="card"   style="width: 20rem;height: 480px">
                        <img class="card-img-top" src="<?php echo $monan->hinh; ?>" style="width: 100%;height:250px;">
                            <div class="card-body" >
                                <h4 class="card-title" style="height: 30px"><?php echo $monan->ten; ?></h4>
                                <p class="card-text" style="height: 100px"><?php echo $monan->mota; ?></p>
                                <a style="color: white" class="btn btn-secondary"><?php echo $monan->gia; ?>( VND )</a>
                                <a href="DonHang.jsp?id=<%=listFood.get(i).getID()%>"  class="btn btn-secondary">Đặt hàng ngay!</a>
                            </div>
                    </div>
                </div>
             <?php } ?>

            </div>
       
            <div style="height: 50px"></div>
    
   
        </div>


        <div id="footer" style="margin-top: 20px; background-color: #333333">
    <!-- <div style="background-color: #333333; height: 50px ; text-align: center; padding-top: 15px;color: white;"> An xèo</div> -->
    
            <div class="card text-center"  style=" background-color: #818182">
        <div style="margin:auto;background-color: #818182">
                    <img src="image/Hotline_No.png" style="width: 380px ; height: 100px;">
        </div>
        <div class="card-body">
                    <p class="card-text" style="color: white">Công ty TNHH LUCKY PIZZA  Số ĐKKD: 0303902754656  SDT:1900222333</p>
                    <p class="card-text"  style="color: white">Địa chỉ: Tầng 2, Tòa nhà , Số 97 Man Thiện, Phường 22, Quận Tân Bình, TPHCM</p>
        </div>
            </div>

        </div>
    </body>
</html>
