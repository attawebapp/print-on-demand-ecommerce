<?php
$title = 'product Detail - Unbox';
include 'include/header.php';
?>

<section class="inner__banner">
    <div class="inner__overlay">
        <img src="assets/images/inner__banner.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="inner_banner__heading">
                    <h3 class="title">Product Detail</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product_detail">
    <div class="container">
        <div class="tabs_cont">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail_slider">
                        <swiper-container class="mySwiper" effect="cards" grab-cursor="true">
                            <swiper-slide> <a href="javascript:;" class="detail_img">
                                    <img src="assets/images/topC_img2.png" alt="">
                                </a></swiper-slide>
                            <swiper-slide> <a href="javascript:;" class="detail_img">
                                    <img src="assets/images/topC_img1.png" alt="">
                                </a></swiper-slide>
                            <swiper-slide> <a href="javascript:;" class="detail_img">
                                    <img src="assets/images/topC_img3.png" alt="">
                                </a></swiper-slide>
                            <swiper-slide> <a href="javascript:;" class="detail_img">
                                    <img src="assets/images/topC_img4.png" alt="">
                                </a></swiper-slide>
                        </swiper-container>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="detail_heading">
                        <ul>
                            <li><a href="index.php">Home </a></li>
                            <li><a href="product.php">T shirts </a></li>
                            <li><b>place your heading here</b></li>
                        </ul>
                        <h3>place your heading here</h3>
                        <h4>$40.95</h4>
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p>


                        <div class="quinity_main">
                            <div class="q_input">
                                <button class="minus" onclick="decrementValue()"><i
                                        class='bx bx-chevron-down'></i></button>
                                <input type="text" id="counter" value="1">
                                <button class="plus" onclick="incrementValue()"><i
                                        class='bx bx-chevron-up'></i></button>
                            </div>
                            <a href="javascript:;" class="themebtn cart_menu">add to cart</a>
                            
                        </div>
                        <div class="hunting">
                            <p><b>Category:</b></p>
                            <a href="javascript:;">T Shirts</a>
                        </div>
                        <ul>
                            <li>Share:</li>
                            <li><a href="javascript:;"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-pinterest'></i></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-instagram'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="pro_detail_section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="top_collection_card alt">
                    <div class="top_collection_card__header">
                        <div class="image">
                            <img src="assets/images/topC_img1.png" alt="">
                        </div>
                        <div class="search">
                            <a href=""><i class='bx bx-search-alt-2'></i></a>
                        </div>

                        <div class="top_collection_card__body alt">
                            <a href="product-detail.php" class="title">place your heading here</a>
                            <a href="product-detail.php" class="subtitle">T Shirts</a>
                            <p class="price">$40.95</p>
                            <div class="cart_btn_pro">
                                <a href="javascript:;">
                                    <div class="addtocart" price="Add To Cart" btn-text="hello"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="top_collection_card alt">
                    <div class="top_collection_card__header">
                        <div class="image">
                            <img src="assets/images/topC_img2.png" alt="">
                        </div>
                        <div class="search">
                            <a href=""><i class='bx bx-search-alt-2'></i></a>
                        </div>

                        <div class="top_collection_card__body alt">
                            <a href="product-detail.php" class="title">place your heading here</a>
                            <a href="product-detail.php" class="subtitle">T Shirts</a>
                            <p class="price">$40.95</p>
                            <div class="cart_btn_pro">
                                <a href="javascript:;">
                                    <div class="addtocart" price="Add To Cart" btn-text="hello"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="top_collection_card alt">
                    <div class="top_collection_card__header">
                        <div class="image">
                            <img src="assets/images/topC_img3.png" alt="">
                        </div>
                        <div class="search">
                            <a href=""><i class='bx bx-search-alt-2'></i></a>
                        </div>

                        <div class="top_collection_card__body alt">
                            <a href="product-detail.php" class="title">place your heading here</a>
                            <a href="product-detail.php" class="subtitle">T Shirts</a>
                            <p class="price">$40.95</p>
                            <div class="cart_btn_pro">
                                <a href="javascript:;" id="mycart">
                                    <div class="addtocart" price="Add To Cart" btn-text="hello"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="top_collection_card alt">
                    <div class="top_collection_card__header">
                        <div class="image">
                            <img src="assets/images/topC_img4.png" alt="">
                        </div>
                        <div class="search">
                            <a href=""><i class='bx bx-search-alt-2'></i></a>
                        </div>

                        <div class="top_collection_card__body alt">
                            <a href="product-detail.php" class="title">place your heading here</a>
                            <a href="product-detail.php" class="subtitle">T Shirts</a>
                            <p class="price">$40.95</p>
                            <div class="cart_btn_pro">
                                <a href="javascript:;">
                                    <div class="addtocart" price="Add To Cart" btn-text="hello"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'include/footer.php'; ?>