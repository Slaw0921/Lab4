<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/mystyles.css" />
	<script type="text/javascript" src="js/myjs.js" /></script>

	<?php include ("dbconnection.php"); ?>

	<head> 
		<title>Menu with CSS </title>
	</head>


	<body bgcolor="#FFC900">
		<br><br><br>
	
	<h1 align="center"> JBU Online Store </h1>
	
	
	<div class="cart_image">
		<a href="javascript:void(0)" onclick="displayCart()">
		<img src="Images/shoppingCart.jpg" style="width:100px;height:100px;">
	</a></div>	

	<div class="MyCart" id="MyCart" style="display:none">
	
	</div>
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Books </a>
			<div class="menu-content">
				<a  href="add_book.php">Add Book</a><br>
				<a  href="remove_book.php">Remove Book</a><br>
				<a href="display_books.php">Display all Books</a><br>
			</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Electronics </a>
		<div class="menu-content">
			<a  href="add_book.php">Laptops</a><br>
			<a  href="remove_book.php">Tablets</a><br>
			<a href="display_books.php">Headphones</a><br>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a><br>
		</div>
		</li>
	</ul>
		<p align="center"> Welcome to JBU's Online store - open for faculty/staff and students!<p>
		<center>
		<?php
			$count=1;
		$sql_product = "SELECT * FROM products_tab";
		$result_product = $connect->query($sql_product);
		?>
		<table align="center" width=80% border=1>
		<tr>
		<?php
		
		while($row_product = $result_product->fetch_assoc())
		{
		?>
		
				<td> 
					<img src='<?php echo $row_product["product_image"]; ?>' width="20%" /><br>
					<?php echo $row_product["product_name"]; ?><br>
					<?php echo $row_product["unit_price"]; ?><br>
					<input type="button" value="Add to Cart" onClick="javascript:addToCart('<?php echo $row_product["product_name"]; ?>')" />
				</td>
			
		<?php
		
		if ($count >=3)
		{
			echo "</tr><tr>";
			$count=1;
		}
		else
		{
			$count++;
		}
		
		}
		?>
		</table>
<!--		<table><tr>
		<td>
			<a href="javascript:void(0)" onclick="popupfunction('1')">
			<img src="Images/ipad8thG.jpg" style="width:200px;height:200px;">
			</a><br>Ipad 8th Generation<br><br>
			<button style="width:85px;height:30px;" onclick="javascript:addToCart('Ipad 8th Generation')"> Add to Cart </button>
		</td>
		<td>
			<a href="javascript:void(0)" onclick="popupfunction('2')">
			<img src="Images/ipadAir4thG.jpg" style="width:200px;height:200px;">
			</a><br>Ipad Air 4th Generation<br><br>
			<button style="width:85px;height:30px;" onclick="javascript:addToCart('Ipad Air 4th Generation')"> Add to Cart </button>
		</td>
		<td>
			<a href="javascript:void(0)" onclick="popupfunction('3')">
			<img src="Images/ipad9thG.jpg" style="width:200px;height:200px;">
			</a><br>Ipad 9th Generation<br><br>
			<button style="width:85px;height:30px;" onclick="javascript:addToCart('Ipad 9th Generation')"> Add to Cart </button>
		</td></tr><tr>
		<td>
			<a href="javascript:void(0)" onclick="popupfunction('4')">
			<img src="Images/dellLaptop.jpg" style="width:275px;height:200px;">
			</a><br>Dell Laptop<br><br>
			<button style="width:85px;height:30px;" onclick="javascript:addToCart('Dell Laptop')"> Add to Cart </button>
		</td>
		<td>
			<a href="javascript:void(0)" onclick="popupfunction('5')">
			<img src="Images/macbook13inch.jpg" style="width:200px;height:200px;">
			</a><br>Macbook 13 inch<br><br>
			<button style="width:85px;height:30px;" onclick="javascript:addToCart('Macbook 13 inch')"> Add to Cart </button>
		</td>
		</tr></table>	 
		
		
		<div id="popup1" class="white_content">
		<p align=center><br><br>
			<img src="Images/ipad8thG.jpg" width=30% /><br>Ipad 8th Generation<br><br>Price:$1000<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('1')" class=linktext>close window</a>
		</p>
		</div>
		<div id="fade1" class="black_content"></div>
		
		<div id="popup2" class="white_content">
		<p align=center><br><br>
			<img src="Images/ipadAir4thG.jpg" width=30% /><br>Ipad Air 4th Generation<br><br>Price:$1000<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('2')" class=linktext>close window</a>
		</p>
		</div>
		<div id="fade2" class="black_content"></div>
		
		<div id="popup3" class="white_content">
		<p align=center><br><br>
			<img src="Images/ipad9thG.jpg" width=30% /><br>Ipad 9th Generation<br><br>Price:$1000<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('3')" class=linktext>close window</a>
		</p>
		</div>
		<div id="fade3" class="black_content"></div>
		
		<div id="popup4" class="white_content">
		<p align=center><br><br>
			<img src="Images/dellLaptop.jpg" width=30% /><br>Dell Laptop<br><br>Price:$1000<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('4')" class=linktext>close window</a>
		</p>
		</div>
		<div id="fade4" class="black_content"></div>
	
		<div id="popup5" class="white_content">
		<p align=center><br><br>
			<img src="Images/macbook13inch.jpg" width=30% /><br>Macbook 13 Inch<br><br>Price:$1000<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('5')" class=linktext>close window</a>
		</p>
		</div>
		<div id="fade5" class="black_content"></div> -->

		</center>
	</body>
</html>



