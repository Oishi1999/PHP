<?php include_once "php_codes/validation_addbook.php" ;?>
<html>
	<head></head>
	<body>
	<center>
	    <h1> Add Book </h1>
			<form action="" method="post">
				<table>
				    <tr>
					      <td>Book Name:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="<?php echo $err_bookname?>" name="bookname"></td>
						<td><span style="color:red;"><?php echo $err_bookname;?></span>

						</td>
					</tr>
					<tr>
					     <td>Category:</td>
					</tr>
					<tr>
						
						<td>
							<select>
								<option disabled selected>Architecture</option>
								<option>Sports</option>
								<option>Astrology</option>
								<option>Business</option>						
							</select>
						</td>
					</tr>
					<tr>
					      <td>Publisher:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="" name="uname"></td>

						</td>
					</tr>
					<tr>
					      <td>Edition:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="" name="uname"></td>

						</td>
					</tr>
					<tr>
					      <td>ISBN:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="" name="uname"></td>
						</td>
					</tr>
					<tr>
					      <td>PAGES:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="" name="uname"></td>
						</td>
					</tr>
					<tr>
					      <td>PRICE:</td>
					</tr>
					<tr>
						
						<td><input type="text" value=""uname"></td>
						
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="add" value="Add">
						</td>
					</tr>
				</table>
			</form>
			</center>
	</body>
</html>