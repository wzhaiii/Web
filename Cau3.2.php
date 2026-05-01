<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css">
        </style>
    </head>
    <body>
        <form method = "GET">
            Nhập tên cần tìm <input type = "text" name = "ten">
            <br>
            <input type = "submit" name = "submit" value = "Tìm">
        <?php
            $ban = array("Tuấn" => 21, "Tú" => 19, "Tâm" => 22, "Tùng" => 20);
            function xuatmang ($array){
                foreach ($array as $ten => $tuoi){
                    echo $ten." ".$tuoi."<br>";
                }
            }
            function timten ($array, $name){
                foreach ($array as $ten => $tuoi ){
                    if ( $name == $ten ){
                        echo "Tìm thấy".$name."trong mảng";
                        return true;
                    }
                }
                echo "Không có";
            }
            if (isset($_GET['submit']) && ($_GET['submit'] == "Tìm")){
                $name = $_GET['ten'];
                timten ($ban,$name);
                echo "<h3>Xuất mảng</h3>";
                xuatmang($ban);
            }
        ?>
    </body>
</html>