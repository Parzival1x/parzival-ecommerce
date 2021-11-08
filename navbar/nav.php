<?php
require('connection.inc.php');
require('functions.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="navbar/nav.css">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" href="../Products/product.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

    <script src="home.js"></script>
    <script src="footer/footer.js"></script>
    <script src="navbar/nav.js"></script>

    <title>Royal Furniture...</title>
</head>
        <body>
            <nav class="navbar">
                <div class="nav">
                    <img src="img/logo.jpg" class="brand-logo" alt="">
                    <div class="nav-items">
                        <div class="search">
                            <input type="text" class="search-box" placeholder="search brand, product">
                            <button class="search-btn">search</button>
                        </div>
                        <a href="Login/login.php"><img src="img/user.jpg" alt=""></a>
                        <a href="Cart.php"><img src="img/cart.png" alt=""></a>
                    </div>
                </div>
                <ul class="links-container">
                    <li class="link-item"><a href="index.php" class="link">Home</a></li>
                    <?php
						foreach($cat_arr as $list){
					?>
                    <li class="link-item "> <a href="categories.php?id=<?php echo $list['id']?>" class="link"><?php echo $list['categories']?> </a></li>
                    <?php
						}
					?>
                    
                    <li class="link-item"><a href="#" class="link">accessories</a></li>
                </ul>
                </nav>
        </body>
        </html>