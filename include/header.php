<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>

    <header class="header">
        <div class="header_topbar">
            <div class="container">
                <div class="top">
                    <a href="index.php" class="header__logo">
                        <img src="assets/images/logo.png" alt="Logo" class="imgFluid" />
                    </a>
                    <div class="search_posts">
                        <form action="">
                            <input type="search" placeholder="Serch here posts">
                            <button><i class='bx bx-search'></i></button>
                        </form>

                        <a href="login.php" class="signup">sign up or login</a>

                        <select name="" id="">
                            <option value="" disabled>Select Language</option>
                            <option value="en|ar" data-gt-href="#">Arabic</option>
                            <option value="en|zh-CN" data-gt-href="#">Chinese (Simplified)</option>
                            <option value="en|nl" data-gt-href="#">Dutch</option>
                            <option value="en|en" data-gt-href="#" selected="">English</option>
                            <option value="en|fr" data-gt-href="#">French</option>
                            <option value="en|de" data-gt-href="#">German</option>
                            <option value="en|it" data-gt-href="#">Italian</option>
                            <option value="en|pt" data-gt-href="#">Portuguese</option>
                            <option value="en|ru" data-gt-href="#">Russian</option>
                            <option value="en|es" data-gt-href="#">Spanish</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-main">
                <ul class="header-main__nav">
                    <li><a href="product.php">Shop</a></li>
                    <li><a href="product.php">CLEARANCE</a></li>
                    <li><a href="product.php">WHOLESALE</a></li>
                    <li><a href="product.php">REWARDS PROGRAM</a></li>
                    <li><a href="track-order.php">Track order</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
                <a href="javascript:;" class="cart__link cart_menu"><span><i class='bx bx-cart'></i> <p>1</p></span> $40.95</a>
            </div>
        </div>
    </header>


    
    <section class="cart">
        <div class="sidebar_cart">
            <div id="mySidenav" class="sidenav">
                <div class="cart_heading">
                    <h3>Shopping cart</h3>
                    <a href="javascript:void(0)" class="closebtn"><span>×</span>close</a>
                </div>
                <div class="cart_pro">
                    <div class="cart_img">
                        <img src="assets/images/topC_img1.png" alt="">
                    </div>
                    <div class="cartr_cont">
                        <h5>product</h5>
                        <p><span>1x</span> $99.99</p>
                        <a href="javascript:;" class="close_pro">x</a>
                    </div>
                </div>

                <div class="cart_total">
                    <div class="total">
                        <h4>Subtotal:</h4>
                        <p>$99.99</p>
                    </div>
                    <div class="subtotal_btn">
                        <a href="cart.php" class="themebtn alt">view cart</a>
                        <a href="checkout.php" class="themebtn">Check out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>