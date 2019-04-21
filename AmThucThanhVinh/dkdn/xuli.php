<?php
    include('ketnoi.php');
          
    // Thiết lập charset utf8
header('Content-Type: text/html; charset=utf-8');
  
// Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
// tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
// dùng đã click register(submit)
if (isset($_POST['do-register']))
{
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
	
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    $fullname   = addslashes($_POST['txtFullname']);
    $birthday   = addslashes($_POST['txtBirthday']);
    $sex        = addslashes($_POST['txtSex']);
       
    // Validate Thông Tin Username và Email có bị trùng hay không
      
    // Kết nối CSDL
    $conn = mysqli_connect('localhost', 'root', 'vertrigo', 'demo') or die ('Lỗi kết nối');
    mysqli_set_charset($conn, "utf8");
      
    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";
      
    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="dangki.php";</script>';
          
        // Dừng chương trình
        die ();
    }
    else {
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO member (txtUsername, txtPassword, txtEmail, fullname, birthday) VALUES ('$username','$password','$email','$fullname', '$birthday')";
          
        if (mysqli_query($conn, $sql)){
            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="register.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangki.php";</script>';
        }
    }
}
?>