
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Ẩm thực Thành Vinh</title>
    <link href="css/trangchu.css" rel="stylesheet" />
    <link href="css/trangcon.css" rel="stylesheet" />
</head>
<body>
  <div id="web">

  	<div id="dau">
           <div style="float:left;width:400px;height:55px;margin:25px 0 0 15px">
              <a href="#" style="color: #fff">ANNGON.COM</a>
           </div>
           <div id="search">	
           	      <input type="text" id="s-ip" placeholder="Tìm kiếm" autocomplete="off"> 
           	      <input id="bt" type="submit" value="Tìm"> 
           	</div>
           	<div id="dndk">
	              <ul>
		                 <li><a href="dkdn/dangnhap.php" style="text-decoration: none;">Đăng nhập</a></li>
		                 <li>|</li>
		                 <li><a href="dkdn/dangki.php" style="text-decoration: none;">Đăng kí</a></li>
	              </ul>
                
           	</div>
           
        </div>
    <div id="ws">
        <div class="menu">
                <ul>
                    <b><li><a href="trangchu.php">Trang chủ</a></li>
                    <li><a href="monantheomua.php"/>Món ăn theo mùa</a>
                            <ul class="tt">
                               
                                <li style="border-left:none"><a href="#"/>Món ăn mùa hè</a></li>
                                <li style="border-left:none"><a href="#"/>Món ăn mùa thu</a></li>
                              
                            </ul>
                    </li>
                    <li><a href="#">Món chay</a></li>
                    <li><a href="#">Món ngon</a><ul class="tt">
                               
                                <li style="border-left:none"><a href="#"/>Món ngon cuối tuần</a></li>
                                <li style="border-left:none"><a href="#"/>Salad</a></li>
                              
                            </ul></li>
                    <li><a href="#">Làm bánh</a></li>
                    <li><a href="#">Thảo luận</a></li>
                    <li><a href="#">Viết review</a></li></b>
                </ul>

            </div>
            <div id="tus">
            	<div style="width: 1000px;margin: auto; height: 100px;"></div>
            </div>
           
            <div id="than">
                <div id="bvct">
                	<h2>Tiêu đề</h2>
                	<p>đọc văn 1</p>
                	<p>doạn văn 2</p>
                	<img src="">
                	<p>doạn van 3</p>
                	<p>doạn văn 4</p>
                </div>
                <div id="cbvk">
                	<p>cac bài viet khác</p>
                	<ul>
                		<li><a href="">bai 1</a></li>
                		<li><a href="">bai 1</a></li>
                		<li><a href="">bai 1</a></li>
                	</ul>
                </div>
                <div id="comment">
                	<fieldset>
                		<legend>Comment</legend>
                		<form>
                			<table>
                				<tr>
                					<td>Name</td>
                					<td><input type="text" size="25"></td>
                				</tr>
                				<tr>
                					<td>mess</td>
                					<td><textarea cols="60" rows="5"></textarea></td>
                				</tr>
                				<tr>
                					<td></td>
                					<td><input type="submit" value="Bình luận" name=""></td>
                				</tr>
                			</table>
                		</form>
                	</fieldset>
                </div>
                <div id="show_cm">
                	<div class="com">
                		<img src="anh/muc.jpg">                	
                		<div class="noidung">
                			<p>Ten ngươi comment</p>
                			<p>noi dung</p>
                		</div>
                		<div style="clear: left;"></div>
                	</div>
                	<div class="com">
                		<img src="anh/muc.jpg">                	
                		<div class="noidung">
                			<p>Ten ngươi comment</p>
                			<p>noi dung</p>
                		</div>
                		<div style="clear: left;"></div>
                	</div>
                	<div class="com">
                		<img src="anh/muc.jpg">                	
                		<div class="noidung">
                			<p>Ten ngươi comment</p>
                			<p>noi dung</p>
                		</div>
                		<div style="clear: left;"></div>
                	</div>
                </div>

            </div>
         </div>
         <div id="kt" style="width:1000px;height:28px; margin: auto; background-color:#CC1300; color: #FFF ">
              hhhhh
        </div>
  </div>
 </body>
</html>