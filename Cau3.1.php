<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css">

        </style>
    </head>
    <body>
        <form method = "GET">
            <h2>Tính diện tích và chu vi của hình chữ nhật</h2>
            <table>
                <tr>
                    <td>Chiều dài</td>
                    <td><input type = "text" name = "chieudai"></td>
                </tr>
                <tr>
                    <td>Chiều rộng</td>
                    <td><input type = "text" name = "chieurong"></td>
                </tr>
                <tr>
                    <td colspan = "2" align = "center"><input type = "submit" name = "submit" value = "Tính"></td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_GET['submit']) && ($_GET['submit'] == "Tính")){
                $dai = $_GET['chieudai'];
                $rong = $_GET['chieurong'];
                $chuvi = ((float)$dai + (float)$rong) * 2;
                $dientich = (float)$dai * (float)$rong;
                echo "Diện tích:".$dientich."<br>";
                echo "Chu vi:".$chuvi;
            }
        ?>
    </body>
</html>