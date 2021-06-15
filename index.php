<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Online Shopping</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                       support@northsouth.edu
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +880-2-55668200
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="product-list.php" class="nav-item nav-link">Products</a>
                            <a href="product-detail.php" class="nav-item nav-link">Product Detail</a>
                            
                            
                            <a href="admin_index.php" class="nav-item nav-link">Add/Delete product by Admin</a>

                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>New Arrivals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="usedelectronics.png" height="400" width="600" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Lastest Leptops</p>
                                    <a class="btn" href="https://www.daraz.com.bd/catalog/?spm=a2a0e.searchlist.search.1.691719dfCGIWXh&q=electronics%20accessories&_keyori=ss&from=suggest_normal&sugg=electronics%20accessories_0_1"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/phone.jpg" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Latest Arrived</p>
                                    <a class="btn" href="https://www.daraz.com.bd/mobile-cases-covers/?q=phone+accessories&from=suggest_normal"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="img/pexels-designecologist-1779487.jpg" height="400" width="600" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>New Arrible 2021</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/sharee 201.jpg" />
                                <a class="img-text" href="https://www.daraz.com.bd/products/indian-weight-less-jorjet-sharee-black-i156450979-s1086030294.html?spm=a2a0e.searchlist.bestshown_1.1.60a1745enie0Un&search=1">
                                    <p>Indian Weight less jorjet sharee</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/sharee.jpg" />
                                <a class="img-text" href="https://www.daraz.com.bd/products/high-quality-fashionable-dhupiyan-silk-saree-i141046857-s1064704254.html?spm=a2a0e.searchlist.list.7.7b952e075rFxse&search=1">
                                    <p>Fashionable Dhupiyan Silk Saree</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
     
        <!-- Feature End-->      
        
        <!-- Category Start-->
       <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/phone1.jpg" />
                            <a class="category-name" href="https://www.daraz.com.bd/products/samsung-galaxy-m21-4gb-ram64gb-rom-64-super-amoled-display-triple-camera-6000-mah-battery-i132288505-s1053210381.html?spm=a2a0e.s">
                                <p>Buy Now</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/dress.jpg" />
                            <a class="category-name" href="https://www.daraz.com.bd/products/zanzea-women-long-sleeve-keyhole-long-maxi-dress-retro-floral-print-shirt-dress-kaftan-i115254883-s1033546804.html?spm=a2a0e.searchlist.list.3.386ea3ecedjPCZ&search=1">
                                <p>Buy Now</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/earrings.jpg" />
                            <a class="category-name" href="https://www.daraz.com.bd/products/stud-earrings-for-women-for-girls-birthday-gift-jeweler-ornament-women-fashion-ladies-earring-i162874433-s1095124221.html?spm=a2a0e.searchlist.list.20.624c6a638xCCdP&search=1">
                                <p>Buy Now</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/emoji.jpg" />
                            <a class="category-name" href="https://www.daraz.com.bd/products/smiley-emoji-yellow-round-pillow-sofa-decorative-pillows-stuffed-plush-emoji-cushion-birthday-gift-for-kids-lovers-i124860464-s1045083506.html?spm=a2a0e.searchlist.list.46.624c6a638xCCdP&search=1">
                                <p>Buy Now</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/lighting.jpg" />
                            <a class="category-name" href="https://www.daraz.com.bd/products/multicolor-led-fairy-lights-string-celebrations-party-decor-gifts-decoration-lights-birthday-eid-puja-christmases-celebrations-decoration-lights-i126151983-s1046267218.html?spm=a2a0e.searchlist.list.52.624c6a638xCCdP&search=1">
                                <p>Buy Now</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/gift_box.jpg">
                            <a class="category-name" href="https://www.daraz.com.bd/products/birthdays-gift-love-box-i142958916-s1067058572.html?spm=a2a0e.searchlist.list.78.624c6a638xCCdP&search=1">
                                <p>Buy Now</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>call us for any queries</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+880-2-55668200</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
             
        
        <!-- Newsletter Start -->
        
        <!-- Newsletter End --> 
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Featured Product</h1>
                </div>
                      
            </div>
        </div>

        <!-- Featured Product End -->       
   
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php include('db_connect.php'); ?>        
<?php

$res=mysqli_query($connection, "SELECT * FROM product");
while($row=mysqli_fetch_array($res)){

?>

							<div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#"><?php echo $row['product_name']; ?></a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                       
                                            <img src="product_image/<?php echo $row['image']; ?>" alt="photo of product" width="200" height="300">
                                       
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span><?php echo $row['product_price']; ?></h3>
                                        <a class="btn" href="specific_product_detail.php?id=<?php echo $row['id'];  ?>">Details</a>
                                    </div>
                                </div>
                            </div>



<?php
}

?>                            
<?php mysqli_close($connection); ?>                          
                            
                        
                           
                    
                    
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        <!-- Review Start -->
       <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/rifat.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Rifat Hossian</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                   Good service.Original product.fully satisfied
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/sumi.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Custome Name</h2>
                                <h3>Sumi</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Well behaviour.Fully satisfied about ther product service.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/ahasan.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Ahasan</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                  Good job.WEll service.Frindly behaviour.Carry on.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Bashundhara, Dhaka-1229, Bangladesh</p>
                                <p><i class="fa fa-envelope"></i>registrar@northsouth.edu</p>
                                <p><i class="fa fa-phone"></i>+880-2-55668200 </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    
                                    <a href="https://www.facebook.com/ahasan.islam.786/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/mdahasanulislam/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/whoisahasanul/"><i class="fab fa-instagram"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                      
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                  
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
