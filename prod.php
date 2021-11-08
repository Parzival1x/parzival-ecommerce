<?php 
require('navbar/nav.php');
if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="prod.css">
    
    <script src="prod.js"></script>

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="navbar/nav.css">
    <link rel="stylesheet" href="footer/footer.css">
    <script src="home.js"></script>
    <script src="footer/footer.js"></script>
    <script src="navbar/nav.js"></script>


    <title>Product Page</title>
</head>

<body>
    <div id="wave"></div>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image"> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" alt="full-image"> </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                <li><img onclick="changeImage(this)" src="img/bedroom.jpg" width="70" class="active" alt=""></li>
                                <li><img onclick="changeImage(this)" src="img/sofa.jpg" width="70" alt=""></li>
                                <li><img onclick="changeImage(this)" src="img/table.jpg" width="70" alt=""></li>
                                <li><img onclick="changeImage(this)" src="img/light-logo.jpg" width="70" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                        <h3><?php echo $get_product['0']['name']?></h3> <span class="heart"><i class='bx bx-heart'></i></span>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p><?php echo $get_product['0']['short_desc']?></p>
                        </div>
                        <h3><?php echo $get_product['0']['price']?></h3>
                        <div class="ratings d-flex flex-row align-items-center">
                            <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <iclass='bx bxs-star'></iclass=> 
                                    <i class='bx bxs-star'>
                                    </i> <i class='bx bx-star'></i>
                            </div> <span>441 reviews</span>
                        </div><br>
                        <div class="buttons d-flex flex-row mt-5 gap-3"> <button class="btn btn-outline-dark">Buy
                                Now</button> <button class="btn btn-dark">Add to Basket</button> </div><br><br><br>
                        <div class="search-option"> <i class='bx bx-search-alt-2 first-search'></i>
                            <div class="inputs"> <input type="text" name=""> </div> <i
                                class='bx bx-share-alt share'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php
    include 'footer/footer.php';
?>
</html>