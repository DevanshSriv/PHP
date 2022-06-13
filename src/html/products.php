<?php 
session_start();
if(!isset($_SESSION['cart'])){
$_SESSION['cart']=array();
}
include 'config.php';

foreach($_POST as $key=>$val){
	foreach($products as $prod){
		if($key==$prod['id']){
			if(count($_SESSION['cart'])==0)
			{
				array_push($_SESSION['cart'],array($prod['id'],$prod['name'],$prod['price'],$prod['quan']));
				echo ('first Item added');
			}
             
			else{
                $c=0;
				foreach($_SESSION['cart'] as &$ca){
					if($key==$ca[0]){
						echo $key , $ca[0];
						$c=1;
						$ca[3]+=1;
						
					}
				}
					if($c>0){
		
					}
					else{
						array_push($_SESSION['cart'],array($prod['id'],$prod['name'],$prod['price'],$prod['quan']));

						echo 'another item added';}
			
			}	
			
		}
	}
}

?>





<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php include 'header.php' ?>
	<div id="main">
		<form action='' method='POST'>
		<div id="products">
		<?php include 'config.php' ;
		foreach($products as $prod){
			echo '<div id="product-101" class="product"><img src='.$prod['image'].'><h3 class="title"><a href="#">'.$prod['name'].'</a></h3><span>'.$prod['price'].'</span><button class="add-to-cart" type="submit" name='.$prod['id'].'>Add To Cart</button></div>';
		}
		?>
		</form>
		</div>
		<div>
		<table id='cartDisplay' border=1px style='border-collapse:collapse'>
			<tr><th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
		<?php
	
		    foreach($_SESSION['cart'] as &$ca){
				echo '<tr>';
				foreach($ca as $val){
					echo '<td>'.$val.'</td>';
				}
				echo '</tr>';
	        }
			echo '<a href="destroy.php">To destroy press</a>';
		
		?>
		</table>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>