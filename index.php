

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
        <h2 class="product-category">best selling</h2>

        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="img/card01.png" class="product-thumb" alt="">
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">bed</h2>
                    <p class="product-short-des">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
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