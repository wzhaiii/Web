<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css">
            div {
                color: blue;
            }
        </style>
    </head>
    <body>
        <div>
            Thông tin sinh viên
            <?php
                $ten = $_GET['ten'] ?? '';
                $mk = $_GET['pass'] ?? '';
            ?>
            <br>
            <p>Tên: <?php echo $ten; ?></p>
            <p>Mật khẩu: <?php echo $mk; ?></p>
        </div>
    </body>
</html>