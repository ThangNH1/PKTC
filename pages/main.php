<div id="main">
  <?php include("sidebar/sidebar.php") ?>
  <div class="maincontent">
    <?php
      if(isset($_GET['quanly'])){
        $temp = $_GET['quanly'];
      }else{
        $temp = '';
      }
      if($temp == 'danhmucsanpham'){
        include("main/danhmuc.php");
      }elseif($temp == 'giohang'){
        include("main/giohang.php");
      }elseif($temp == 'tintuc'){
        include("main/tintuc.php");
      }elseif($temp == 'lienhe'){
        include("main/lienhe.php");
      }else{
        include("main/index.php");
      }
    ?>
  </div>
</div>
