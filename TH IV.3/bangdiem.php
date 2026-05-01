<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css">
            h2 {
                color: blue;
            }
            p {
                color: blue;
            }
            table {
                border-collapse: collapse;
                border: 2px solid orange;
                background: #f4b266;
            }
            th, td {
                border: 2px solid orange;
            }
        </style>
    </head>
    <body>
        <?php
            $ten = $_GET['ten'];
            $mk = $_GET['pass'];
            $monhoc = [
                ["Cơ sở dữ liệu", 7],
                ["Phát triển ứng dụng web", 8],
                ["Lập trình Java", 7.5]
            ];
        ?>
        <h2>BẢNG ĐIỂM</h2>
        <p>Tên: <?php echo $ten; ?></p>
        <table>
            <tr>
                <th>STT</th>
                <th>Tên môn</th>
                <th>Điểm</th>
            </tr>
            <?php
                $stt = 1;
                foreach ($monhoc as $mon) {
                    echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>{$mon[0]}</td>";
                    echo "<td>{$mon[1]}</td>";
                    echo "</tr>";
                    $stt++;
                }
            ?>
            </table>
            <br>
            <a href="thongtinsinhvien.php?ten=<?php echo urlencode($ten);?>&pass=<?php echo urlencode($mk);?>"><i>Xem thông tin sinh viên</i></a>
    </body>
</html>