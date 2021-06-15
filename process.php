

<?php include('db_connect.php'); ?>

<?php

if(isset($_POST['submit'])){
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_description = $_POST['product_description'];

	$filename = $_FILES["product_image"]["name"]; 
    $tempname = $_FILES["product_image"]["tmp_name"];     
        $folder = "product_image/".$filename;

        // Get all the submitted data from the form 
       
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 

	$query="INSERT INTO product (product_name, product_price, product_description, image) VALUES('{$product_name}','{$product_price}','{$product_description}','{$filename}');";

	$performQuery=mysqli_query($connection, $query);

	if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
      
	if(!$performQuery)
		echo 'Query unsuccessful';
	else
		echo 'Query successful';

	$insertedId=mysqli_insert_id($connection);
}

?>

<script type="text/javascript">
	window.location="form.php";
</script>
	