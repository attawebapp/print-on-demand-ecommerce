<?php
$title = 'product - Unbox';
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
                    <h3 class="title">Product</h3>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="product_page">
    <div class="container">
        <div class="product_topbar">
            <div class="pro_links">
                <a href="index.php">home</a>
                <a href="javascript:;">shop</a>
            </div>
            <div class="pagenation">
                <ul>
                    <li><a href="javascript:;">show: </a></li>
                    <li><a href="javascript:;">9</a></li>
                    <li><a href="javascript:;">12</a></li>
                    <li><a href="javascript:;">18</a></li>
                    <li><a href="javascript:;">24</a></li>
                </ul>

                <div class="tabs_btn">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true"><i class='bx bxs-grid'></i></button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false"><i class='bx bxs-grid'></i></button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false"> <i class='bx bx-grid-alt'></i></button>
                        </div>
                    </nav>
                </div>

                <div class="default_sorting">
                    <select name="orderby" class="orderby" aria-label="Shop order">
                        <option value="menu_order">Default sorting</option>
                        <option value="popularity" selected="selected">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by latest</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="product_tabs">
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
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
                                            <a href="javascript:;" id="mycart"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-md-4">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-md-2">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
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
                                            <a href="javascript:;"><div class="addtocart" price="Add To Cart" btn-text="hello"></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>







<?php include 'include/footer.php'; ?>


 