<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v21.0&appId=1533313497052295"></script>
<footer class="footer-two">
    <!-- footer-top area start -->
    <div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Contact</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p class="text-white">36 Nguyen Hue - Phu Xuan District</p>
                                        <p class="text-white">Hue City</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p class="text-white">0914 88 87 62</p>
                                        <p class="text-white">0915 10 10 93</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p class="text-white">kietnnt.software@gmail.com</p>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Account</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="?act=taikhoan&xuli=account" class="text-white"><i
                                                class="mdi mdi-menu-right"></i>Infomation Account</a></li>
                                    <li><a href="?act=cart" class="text-white"><i class="mdi mdi-menu-right"></i>Cart</a></li>
                                    <li><a href="?act=taikhoan" class="text-white"><i
                                                class="mdi mdi-menu-right"></i>Login</a></li>
                                    <li><a href="?act=checkout" class="text-white"><i
                                                class="mdi mdi-menu-right"></i>Payment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Category</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php foreach ($data_danhmuc as $row) { ?>
                                        <li><a class="text-white" href="?act=shop&sp=<?= $row['MaDM'] ?>"><i
                                                    class="mdi mdi-menu-right"></i><?= $row['TenDM'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 r-margin-top wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Social</h4>
                            </div>
                            <div class="clearfix instagram">
                                <ul>
                                    <li><a href="#"><img src="public/img/footer/in1.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="public/img/footer/in2.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="public/img/footer/in3.png" alt="Instagram" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="fb-page mb-3"
                            data-href="https://www.facebook.com/ThanhNhanMobileStore/?ref=embed_page" data-width="360"
                            data-height="360" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    <div class="footer-bottom border-top  text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p class="text-white">&copy; TechShop 2020. All Rights Reserved.</p>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <a href="https://www.nganluong.vn/vn/home.html" target="_blank"><img
                            src="public/img/footer/payment.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area end -->
</footer>