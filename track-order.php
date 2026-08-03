<?php
$title = 'Track - Unbox';
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
                    <h3 class="title">Track Order</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="track__order">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="track_order__main">
                    <div class="image">
                        <img src="assets/images/track__img.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="track_order__main">
                    <div class="track_order__content">
                        <h3 class="title">ORDER TRACKING</h3>
                        <p class="detail">If you want to receive an update regarding your order that is due to be delivered, fill in this tracking form. Thank you!</p>
                        <form action="" class="track__form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-m-12">
                                    <label for="">Order Information</label>
                                    <input type="text" class="form-control" placeholder="Order ID:">
                                </div>
                                <div class="col-m-12">
                                    <label for="">Delivery Address:</label>
                                    <input type="text" class="form-control" placeholder="Street Address">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Region">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Postal / Zip Code">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Date of order</label>
                                    <input type="date" class="form-control" placeholder="mm/dd/yyyy">
                                </div>
                                <div class="col-md-12">
                                    <div class="track_order__button">
                                        <button>Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'include/footer.php'; ?>