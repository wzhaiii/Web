<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <style type = "text/css">
            form {
                background-color: orange;
                display: inline-block;
            }
            input[type = "submit"]{
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
        <form method = "get" action = "nhanvien.php">
            Mã nhân viên <input type = "text" name = "manv" style = "margin-left: 30px"> <br><br>
            Tên nhân viên <input type = "text" name = "tennv" style = "margin-left: 26px"> <br><br>
            Số ngày làm việc <input type = "text" name = "ngay" style = "margin-left: 7px"> <br><br>
            Lương ngày <input type = "text" name = "luong" style = "margin-left: 40px"> <br><br>
            Nhân viên quản lý <input type = "checkbox" name = "nhanvien"> <br><br>
            <input type = "submit" name = "submit" value = "Lương tháng">
        </form>
    </body>
</html>