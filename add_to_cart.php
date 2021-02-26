<?php 
	session_start(); //to ensure you are using same session
	if(empty($_SESSION['Fname'])) {
		header("location:login1.html");	
	}else {
		
		$id=intval($_GET['product_id']); 
        if(isset($_SESSION['cart'][$id])){  
            $_SESSION['cart'][$id]['quantity']++; 
        }else{  
		
			$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
			$db=mysql_select_db('arc',$con) or die("Failed to connect to MySQL: " . mysql_error());
            $sql_s="SELECT * FROM prod WHERE prod_id=$id"; 
            $query_s=mysql_query($sql_s); 
            if(mysql_num_rows($query_s)!=0){ 
                $row_s=mysql_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['prod_id']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['prod_price'] 
                    ); 
                
				echo 'Product has been added to cart';
                  
            }else{ 
                  
                echo "This product id it's invalid!"; 
                  
            }
		}?>
			
		<h1>Cart</h1>
		<table border='1' width='100%'>
			<tr>
				<td>Sr No</td>
				<td>Product Name</td>
				<td>Qty * Price</td>
				<td>Total</td>
			</tr>
			<?php 			  
				if(isset($_SESSION['cart'])){ 
					  
					$sql="SELECT * FROM prod WHERE prod_id IN ("; 
						foreach($_SESSION['cart'] as $id => $value) { 
							$sql.=$id.","; 
						} 
					  
					$sql=substr($sql, 0, -1).") ORDER BY prod_name ASC"; 
					
					$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
					$db=mysql_select_db('arc',$con) or die("Failed to connect to MySQL: " . mysql_error());
					
					$query=mysql_query($sql); 
					$i=1; $grand_total=0;
					while($row=mysql_fetch_array($query)){ ?> 
						<tr>
							<td><?php echo $i++; ?></td> 
							<td><?php echo $row['prod_name'] ?></td> 
						
							<td><?php echo $_SESSION['cart'][$row['prod_id']]['quantity'] ?> * <?php echo $row['prod_price']; ?> </td> 
							<td><?php echo $row_total = $_SESSION['cart'][$row['prod_id']]['quantity']*$row['prod_price']; $grand_total+=$row_total; ?></td>
						</tr>
					<?php } ?>
					<tr>
						<td colspan='3'>Grand total</td>
						<td><?php echo $grand_total; ?></td>
					</tr>
					<hr /> 
					<a href="product.php?page=cart">Continue Shopping</a> 
				<?php  
				}else{ 
					  
					echo "<p>Your Cart is empty. Please add some products.</p>"; 
					  
				} 			  
			?>
			</table>	
<?php } ?>