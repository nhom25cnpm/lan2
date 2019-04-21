
<?php
     require('templates/header.php')
?>
		    <div id="ws" style="height: 45px;"> 
		        <?php
    				 require('templates/menu.php')
				?>
			</div>
			<div style="height: 400px;">
		       <div id="dnn">
		           	<fieldset style="width: 400px;height: 200px;margin:100px auto 100px ;">
		           	  	<legend style="margin-left: 10px;">Đăng ký</legend>
		           	  	<form>
		           	  		<table>
		           	  			<tr style="margin:auto;">
		           	  				<td>Tên đăng nhập</td>
		           	  				<td><input type="text" size="25" name=""/></td>
		           	  			</tr>
		           	  			<tr>
		           	  				<td>Mật khẩu</td>
		           	  				<td><input type="password" size="25" name=""/></td>
		           	  			</tr>
		           	  			<tr>
		           	  				<td>Email</td>
		           	  				<td><input type="text" size="25" name=""/></td>
		           	  			</tr>
		           	  			<tr>
		           	  				<td>Ngày sinh</td>
		           	  				<td>
		           	  					<select>
		           	  						<option>Ngày</option>
		           	  						<?php
												for($i=1;$i<=31;$i++)
												{
													echo"<option>$i</option>";
												}
		           	  						?>
		           	  					</select>
		           	  					<select>
		           	  						<option>Tháng</option>
		           	  						<?php
												for($k=1;$k<=12;$k++)
												{
													echo"<option>$k</option>";
												}
		           	  						?>
		           	  					</select>
		           	  					<select>
		           	  						<option>Năm</option>
		           	  						<?php
												for($j=1950;$j<=date("Y");$j++)
												{
													echo"<option>$j</option>";
												}
		           	  						?>
		           	  					</select>

		           	  				</td>
		           	  			</tr>
		           	  			<tr>
		           	  				<td>Giới tính</td>
		           	  				<td>
		           	  					<input type="radio" name="gioitinh"/>Nam
		           	  					<input type="radio" name="gioitinh"/>Nữ
		           	  				</td>
		           	  			</tr>
		           	  			<tr>
		           	  				<td></td>
		           	  				<td><input type="submit" size="25" value="Đăng ký" /></td>
		           	  			</tr>
		           	  		</table>
		           	  	</form>
		           	</fieldset>
		        </div>

		    </div>
		    <?php
    				 require('templates/footer.php')
				?>
		</div>
	</body>
</html>