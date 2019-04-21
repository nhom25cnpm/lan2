
        
    <!doctype html>
<html>
    <head>
        <title>Đăng kí</title>
        <link rel="stylesheet" href="css/dkdn.css">
        
    </head>
    <body>
        <div class="form">
                <h1>Trang đăng ký thành viên</h1>
                <form action="xuli.php" method="POST">
                    <table border="1">
                        <tr>
                            <td>
                                Tên đăng nhập : 
                            </td>
                            <td>
                                <input type="text" name="txtUsername" size="50"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mật khẩu :
                            </td>
                            <td>
                                <input type="password" name="txtPassword" size="50" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email :
                            </td>
                            <td>
                                <input type="text" name="txtEmail" size="50" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Họ và tên :
                            </td>
                            <td>
                                <input type="text" name="txtFullname" size="50" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ngày sinh :
                            </td>
                            <td>
                                <input type="text" name="txtBirthday" size="50" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Giới tính :
                            </td>
                            <td>
                                <select name="txtSex">
                                    <option value=""></option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nu">Nữ</option>
                                </select>
                            </td>
                        </tr>
                    </table>
           
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" /> 
          </form>
    </div> 
</body>               
      
</html>