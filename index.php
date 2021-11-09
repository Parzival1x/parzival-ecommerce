<?php 
include('navbar/nav.php');
?>

<body>


    <!-- hero section -->
    <header class="hero-section">
        <div class="content">
            <p class="sub-heading" color="black">best collection of all time </p>
        </div>
    </header>

    <section class="product">
        <h2 class="product-category">Our Latest Products</h2>

        <div class="product-container">
        <?php
							$get_product=get_product($con,4);
							foreach($get_product as $list){
							?>
            <div class="product-card">
                <div class="product-image">
                <a href="prod.php?id=<?php echo $list['id']?>">
                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                 </a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                <h2><a href="prod.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h2>
                    <p class="product-short-des">a short line about the cloth..</p>
                    <span class="price">$<?php echo $list['price']?></span><span class="actual-price">$<?php echo $list['mrp']?></span>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <!-- collections -->
    <section class="collection-container">
        <a href="#" class="collection">
            <img src="img/sofa.jpg" alt="">
            <p class="collection-title">Couch Furniture</p>
        </a>
        <a href="#" class="collection">
            <img src="img/table.jpg" alt="">
            <p class="collection-title">Tables</p>
        </a>
        <a href="prod.php" class="collection">
            <img src="img/bedroom.jpg" alt="">
            <p class="collection-title" >Bedroom Accessories</p>
        </a>
    </section>

    <?php
        include 'footer/footer.php';
    ?>
</body>

</html>