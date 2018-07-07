<?php
    
    $id = $_GET['id'];
  require "../Connect.php";
  $monan = connect_get('http://localhost:8080/NhaHang/public/api/monan/chitiet?id='.$id);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SUA MON AN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
        
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
                            <a class="navbar-brand" href="MonAn.php" style="margin-left: 15px"><b> MÓN ĂN</b></a>
                        </li>
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="../Controller/TimKiem.php" method="GET">
                 
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" >
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                
                    </form>
                </div>
            </nav>
        </div>

        
        <div class="container"  style="min-height: 450px">
            <div style="height: 60px; background-color: white" >
        <h2 style="text-align: center; margin-top: 50px">Thông tin món ăn</h2>
            </div>
                <form action="../Controller/Sua.php" method="POST">

                    ID :<input  name='id'   readonly="readonly" value="<?php echo $monan->id; ?>"><br>

                    <div class="form-group">
                        <label for="inputdefault">Tên món ăn:</label>
                        <input class="form-control" name="ten" type="text" value ="<?php echo $monan->ten; ?>">
                    </div>

                   

                    <div class="form-group">
                        <label for="inputlg">Giá:</label>
                        <input class="form-control input-lg" name="gia" type="text" value ="<?php echo $monan->gia; ?>" id="Gia">
                    </div>

                    <div class="form-group">
                        <label for="inputlg">Mô tả:</label>
                        <input class="form-control input-lg" name="mota" type="text" value ="<?php echo $monan->mota; ?>" id="MoTa">
                    </div>
                  

                    
                    <input style="width: 100%;height: 40px;min-height: 1000px margin-top: 30px; background-color: #212529;color: white;text-align: center;font-size: 23px"
                           type="submit" value="Lưu thông tin" /> 
                </form>
                
        </div>
      <div id="footer" style="margin-top: 20px;margin-right: 20px">
            <div style="background-color: #e1e1e1; height: 50px ; text-align: center; padding-top: 15px;color: white;"> An xèo</div>
            </div>
        
    </body>
</html>
