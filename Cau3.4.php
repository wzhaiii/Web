<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css"></style>
    </head>
    <body>
        <form method = "get">
            <table>
                <tr>
                    <td>Hệ số a</td>
                    <td><input type = "text" name = "a"></td>
                </tr>
                <tr>
                    <td>Hệ số b</td>
                    <td><input type = "text" name = "b"></td>
                </tr>
                <tr>
                    <td>Hệ số c</td>
                    <td><input type = "text" name = "c"></td>
                </tr>
                <tr>
                    <td colspan = "2" align = "center"><input type = "submit" name = "submit" value = "Giải"></td>
                </tr>
            </table>
        </form>
        <?php
            function giai($x, $y, $z){
                $delta = ($y * $y) - (4 * $x * $z);
                $x1 = 0;
                $x2 = 0;
                if ( $delta < 0 ){
                    return "Phương trình vô nghiệm";
                }
                else if ( $delta == 0){
                    $x1 = $x2 = - $y / ( 2 * $x);
                    return "Phương trình có nghiệm kép: x1 = x2 = ". $x1;
                }
                else {
                    $x1 = (- $y + sqrt ($delta)) / ( 2 * $x);
                    $x2 = (- $y - sqrt ($delta)) / ( 2 * $x);
                    return "Phương trình có nghiệm: x1 = ". $x1 . "và x2 = ". $x2;
                }
            }
            if (isset($_GET['submit']) && ($_GET['submit'] == "Giải")){
                $s1 = (float)$_GET['a'];
                $s2 = (float)$_GET['b'];
                $s3 = (float)$_GET['c'];
                $kq = giai ($s1, $s2, $s3);
                echo $kq;
            }
        ?>
    </body>
</html>