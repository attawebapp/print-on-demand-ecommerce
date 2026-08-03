<?php
$title = 'Add - Unbox';
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
                    <h3 class="title">Add To Card</h3>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="cart_product">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cart_main">
                    <div class="cart_table">
                        <table>
                            <tr class="cart_headings">
                                <th>
                                    <h5>Product</h5>
                                </th>
                                <th>
                                    <h5>Price</h5>
                                </th>
                                <th>
                                    <h5>Quantity</h5>
                                </th>
                                <th>
                                    <h5>Subtotal</h5>
                                </th>
                            </tr>
                            <tr class="cart_data">
                                <td class="cart_img">
                                    <div class="cart_pro_img">
                                        <a href="javascript:;">X</a> <img src="assets/images/topC_img2.png" alt="">
                                        <h5>Place Your Title Here</h5>
                                    </div>
                                </td>
                                <td>
                                    <p>$65.00</p>
                                </td>
                                <td>
                                    <div class="cart-icons">
                                        <button onclick="decrementValue(this)"><i
                                                class='bx bx-chevron-left'></i></button>
                                        <input type="text" value="1">
                                        <button onclick="incrementValue(this)"><i
                                                class='bx bx-chevron-right'></i></button>
                                    </div>
                                </td>
                                <td>
                                    <p>$130.00</p>
                                </td>
                            </tr> 
                            <tr class="cart_data">
                                <td class="cart_img">
                                    <div class="cart_pro_img">
                                        <a href="javascript:;">X</a> <img src="assets/images/topC_img1.png" alt="">
                                        <h5>Place Your Title Here</h5>
                                    </div>
                                </td>
                                <td>
                                    <p>$65.00</p>
                                </td>
                                <td>
                                    <div class="cart-icons">
                                        <button onclick="decrementValue(this)"><i
                                                class='bx bx-chevron-left'></i></button>
                                        <input type="text" value="1">
                                        <button onclick="incrementValue(this)"><i
                                                class='bx bx-chevron-right'></i></button>
                                    </div>
                                </td>
                                <td>
                                    <p>$130.00</p>
                                </td>
                            </tr> 
                        </table>
                    </div>

                   <div class="shoping"> 
                    <div class="shop_btn"> 
                        <a href="product.php" class="themebtn">  Update Cart</a>
                    </div>
                   </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cart_box">
                    <div class="box_heading">
                        <h3>Cart Totals</h3>
                    </div>
                    <div class="price">
                        <h5>Subtotal</h5>
                        <p>$130.00</p>
                    </div> 

                    <div class="price">
                        <h5>Total</h5>
                        <p><span>$130.00</span></p>
                    </div>

                    <div class="cart_btn">
                        <a href="checkout.php" class="themebtn">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
