<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>help</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
	</head>

<script>

    var var1 = function(x){
            document.getElementById('valorventa').value=x;
            }
    var var2 = function(x){

            document.getElementById('valorventas').value=x;
            }
</script>

    <form action="incoming.php" method="post" >



<input type="text" name="valorventas" id="valorventas" value=""/>
<input type="text" name="valorventa" id="valorventa" value=""/>
<input type="text" name="valorventas3" id="valorventas3" value=""/>								


<select name="product" id="select"  style="width:400px; "class="col-sm-2" onchange="var1(this.options[this.selectedIndex].innerHTML); var2(this.value);" required/>

<option></option>
	<?php
	    include('../../cn/connect.php');
		$result = $db->prepare("SELECT * FROM products");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['product_id'];?>"><?php echo $row['product_code']; ?> | Expira : <?php echo $row['expiry_date']; ?> | Cupos :<?php echo $row['qty']; ?></option>
		
	<?php
				}
			?>
	
</select>
</html>