<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css"></style>
    </head>
    <body>
        <?php
            class nhanvien {
                private $manv, $tennv, $ngay, $luong;
                public function Gan ($ma, $ten, $songay, $luongngay){
                    $this -> manv = $ma;
                    $this -> tennv = $ten;
                    $this -> ngay = $songay;
                    $this -> luong = $luongngay;
                }
                public function InNhanVien (){
                    echo $this -> manv. "<br>";
                    echo $this -> tennv. "<br>";
                    echo $this -> ngay. "<br>";
                    echo $this ->luong. "<br>";
                }
                public function TinhLuong (){
                    return $this -> ngay * $this -> luong;
                }
            }
            class nhanvienQL extends nhanvien {
                private $PhuCap;
                public function Gan ($ma, $ten, $songay, $luongngay){
                    parent::Gan($ma, $ten, $songay, $luongngay);
                    $this -> PhuCap = 2000;
                }
                public function InNhanVien (){
                    parent::InNhanVien();
                    echo $this -> PhuCap;
                }
                public function TinhLuong (){
                    return parent::TinhLuong() + $this -> PhuCap;
                }
            }
        ?>
        <?php
            if (isset($_GET['submit']) && ($_GET['submit'] == "Lương tháng")){
                $manv = $_GET['manv'];
                $tennv = $_GET['tennv'];
                $songay = $_GET['ngay'];
                $luong = $_GET['luong'];
                if (isset($_GET['nhanvien'])){
                    $h1 = new nhanvienQL ();
                    $h1 -> Gan ($manv, $tennv, $songay, $luong);
                    $h1 -> InNhanVien ();
                    echo "<br>";
                    $luongthang = $h1 -> TinhLuong();
                    echo $luongthang;
                }
                else {
                    $h1 = new nhanvien ();
                    $h1 -> Gan ($manv, $tennv, $songay, $luong);
                    $h1 -> InNhanVien ();
                    echo "<br>";
                    $luongthang = $h1 -> TinhLuong();
                    echo $luongthang;
                }
            }
            ?>
    </body>
</html>