<?php
$title = 'Contact - Unbox';
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
                    <h3 class="title">Contact Us</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact_main">
                    <div class="image">
                        <img src="assets/images/contact__img.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact_main">
                    <div class="content">
                        <h3 class="title">CONTACT INFORMATION</h3>
                        <p class="detail">Say something to start a live chat!</p>
                        <form action="" class="contact__form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                                    <div class="contact_main__btn">
                                        <button>Submit</button>
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