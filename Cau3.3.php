<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css">

        </style>
    </head>
    <body>
        <form method = "get">
            Chiều dài: <input type = "text" name = "cd">
            <br>
            Chiều rộng: <input type = "text" name = "cr">
            <br>
            Chiều cao: <input type = "text" name = "cc">
            <br>
            <input type = "submit" name = "submit" value = "Tính">
        </form>
        <?php
            class Hinhchunhat {
                private $dai, $rong;
                public function __construct ($d, $r){
                    $this -> dai = $d;
                    $this -> rong = $r;
                }
                public function Chuvi() {
                    return ($this -> dai + $this -> rong) * 2;
                }
                public function Dientich (){
                    return $this -> dai * $this -> rong;
                }
            }
        ?>
        <?php
            class Hinhlapphuong extends Hinhchunhat {
                private $cao;
                public function __construct ($d, $r, $c){
                    parent::__construct($d, $r);
                    $this -> cao = $c;
                }
                public function Dientich (){
                    return parent::Dientich() * 2 + parent::Chuvi() * $this -> cao;
                }
                public function Thetich (){
                    return parent::Dientich() * $this -> cao;
                }
            }
            if (isset($_GET['submit']) && ($_GET['submit'] == "Tính")){
                $d = (float) $_GET['cd'];
                $r = (float) $_GET['cr'];
                $c = (float) $_GET['cc'];
                $h1 = new Hinhlapphuong ($d, $r, $c);
                $dientich = $h1 -> Dientich();
                $thetich = $h1 -> Thetich();
                echo "Diện tích:". $dientich . "<br>";
                echo "Thể tích:". $thetich;
            }
        ?>
    </body>
</html>