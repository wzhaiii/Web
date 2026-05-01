<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css">
            body {
                background-color: pink;
            }
            input[type = "submit"]{
                margin-left: 80px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <form method = "get" action = "bangdiem.php">
            <h3>Đăng nhập hệ thống xem điểm</h3>
            Tên đăng nhập <input type = "text" name = "ten" style = "margin-left: 10px">
            <br>
            Mật khẩu <input type = "text" name = "pass" style = "margin-left: 44px">
            <br>
            <input type = "submit" name = "submit" value = "Đăng nhập">
        </form>
    </body>
</html>