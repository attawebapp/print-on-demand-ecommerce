<?php
$title = 'Blog - Unbox';
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
                    <h3 class="title">Blog</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog_page_section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7">
                <div class="blog_detail">
                    <a href="javascript:;" class="blog_link">blog</a>
                    <h3>ROYAL COMMERCE FASHION OF TODAY</h3>
                    <ul class="date">
                        <li>January 10, 2024 Posted by</li>
                        <li><a href="devexp.php"><i class='bx bxs-user-circle' ></i> Devexp</a></li>
                    </ul>

                    <div class="blog_detail_img">
                        <img src="assets/images/blog_img1.png" alt="">
                        <p>10 <span>jan</span></p>
                    </div>

                    <div class="blog_social">
                        <ul class="icon">
                            <li><a href=""><i class='bx bxl-facebook-circle'></i></a></li>
                            <li><a href=""><i class='bx bxl-twitter'></i></a></li>
                            <li><a href=""><i class='bx bxl-pinterest'></i></a></li>
                            <li><a href=""><i class='bx bxl-linkedin-square'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="leaveReply">
    <div class="container">
        <div class="leave_reply__mian">
            <a href="" class="leave_reply__header">
                <div class="arrow">
                    <i class='bx bx-chevron-left'></i>
                </div>
                <div class="content">
                    <p class="subtitle">Never</p>
                    <p class="title">ROYAL COMMERCE FASHION OF TODAY</p>
                </div>
            </a>
            <div class="leave_reply__body">
                <a href="" class="gridIcon"><i class='bx bx-grid-alt'></i></a>
            </div>
            <a href="" class="leave_reply__header">
                <div class="content text-end">
                    <p class="subtitle">Never</p>
                    <p class="title">ROYAL COMMERCE FASHION OF TODAY</p>
                </div>
                <div class="arrow">
                    <i class='bx bx-chevron-right'></i>
                </div>
            </a>
        </div>
        <form action="" class="leave_reply__form">
            <div class="cont">
                <h3 class="title">LEAVE A REPLY</h3>
                <p class="para">Your email address will not be published. Required fields are marked<span>*</span></p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="">Comment<span>*</span></label>
                    <textarea name="" id="" cols="30" rows="8" class="form-control"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="">Name<span>*</span></label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="">Name<span>*</span></label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="">Website</label>
                    <input type="text" class="form-control">
                </div>
                <div class="colmd-6">
                    <div class="checbox">
                        <input type="checkbox">
                        <p>Save my name, email, and website in this browser for the next time I comment.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <button>Post Comment</button>
                </div>
            </div>
        </form>
    </div>
</section>





<?php include 'include/footer.php'; ?>