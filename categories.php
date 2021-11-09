<?php 
include('navbar/nav.php');
if(isset($_GET['id']) && $_GET['id']!=''){
	$cat_id=mysqli_real_escape_string($con,$_GET['id']);
	if($cat_id>0){
		$get_product=get_product($con,'',$cat_id);
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

<div class="body__overlay"></div>
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3"> <span>Hottest Giveaways</span> <span class="custom-badge text-uppercase">See More</span> </div>
            <div class="row">
                <?php if(count($get_product)>0){?>
                <div class="col-md-4">
                    <?php
				      foreach($get_product as $list){
			        ?>
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center time"> <i class="fa fa-clock-o"></i> <small class="ml-1">2 Days</small> </div> <img src="https://i.imgur.com/suuFVrQ.png" width="20">
                </div>
                <div class="text-center product-image">
                <a href="prod.php?id=<?php echo $list['id']?>">
                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                 </a>
                
                </div>
                <div class="text-center">
                    <h5><?php echo $list['name']?></h5> <span class="text-success">$<?php echo $list['price']?></span>
                    <span class="actual-price">$<?php echo $list['mrp']?></span>
                </div>
            </div>
            <?php } ?>
        </div>
                 <?php } else { 
						echo "Data not found";
					    }?>
    </div>
</div>
        <!-- End Product Grid -->

        <!-- End Banner Area -->
<?php require('footer/footer.php')?>        