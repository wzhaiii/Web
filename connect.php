<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css">
        </style>
    </head>
    <body>
        <?php
            $connect = new mysqli('localhost','root','','qlnv');
            if ($connect->errno !== 0 ){
                die("Error: ".$connect->error);
            }
            $connect->set_charset('utf8');
        ?>
        <?php
            $sql = "select * from nhanvien";
            $result = $connect -> query ($sql);
            echo "<table border = '1'>
                    <tr>
                        <th>Mã nhân viên</th>
                        <th>Tên nhân viên</th>
                        <th>Chức năng</th>
                    </tr>";
            if ( $result -> num_rows > 0 ){
                while ($row = $result -> fetch_row()){
                    echo "<tr>
                            <td>$row[0]</td><td>$row[1]</td><td><a href = 'xoanv.php?manhanvien=$row[0]'>Xóa</a></td>
                          </tr>";
                }
            }
            else {
                echo "Không có dòng nào";
            }
        ?>
    </body>
</html>