<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
            $manhanvien = $_GET['manhanvien'];
            include "connect.php";
            $sql = "DELETE FROM nhanvien WHERE MaNhanVien='$manhanvien'";
            if ($connect->query($sql) === TRUE)
                {
                echo "Xóa thành công";
                }
            else
            {
                echo "Error deleting record: " . $connect->error;
                } 
            $connect->close();
        ?>
    </body>
</html>
