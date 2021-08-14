<!-- Description -->
<div class="container-fluid bg-dark position-relative text-light px-lg-5 parallax-2">
    <span class="glass-effect"></span>
    <div class="row mx-lg-5 py-lg-5">
        <div class="col-lg-3 py-4">
            <h5 class="pb-4 text-center text-lg-left">ABOUT US</h5>
            <img src="component/image/ss-bangla-express-logo3.png" alt="ss-bangla-express-logo" width="180px">
            <p class="text-justify pr-lg-4">To be market leader and to be customers first choice for economy express courier service
                industry in Bangladesh and to offer the possible shortest time with most affordable price.</p>
        </div>

        <div class="col-lg-3 py-4">
            <div>
                <h5 class="pb-4 text-center text-lg-left">SERVICES</h5>
                <ul class="list-unstyled">
                    <?php
                    $items = ["International Courier Export", "Imports (Courier & Cargo)", "Customs Clearance", "24x7 hour Online Internet Tracking", "Instant Customer Query Response", "Pick up and delivery services"];
                    for ($key = 0; $key < 6; $key++) {
                        echo '<li class="pb-2"><a class="text-light text-decoration-none" href="#">
                                    <i class="fas fa-dot-circle pr-1"></i>' . $items[$key] .
                            '</a></li>';
                    };
                    ?>
                </ul>
            </div>
        </div>

        <div class="col-lg-3 py-4">
            <div>
                <h5 class="pb-4 text-center text-lg-left">WORKING HOURS</h5>
                <p class="text-justify pr-lg-4">We work 7 days a week, every day excluding major holidays. Contact
                    us if you have an emergency, with our Hotline and Contact form.</p>
                <p>Sunday - Thursday:08:00 - 22:00</p>
                <p>Saturday:08:00 - 20:00</p>
                <p>Friday and holidays:10:00 - 18:00</p>
            </div>
        </div>

        <div class="col-lg-3 py-4">
            <h5 class="pb-4 text-center text-lg-left">FIND US</h5>
            <p><i class="fab fa-whatsapp pr-2"></i>+880 1711 327 764</p>
            <p><i class="fas fa-phone pr-2"></i>+880 1611 327 764</p>
            <p><i class="far fa-envelope pr-2"></i>banglaexpress01@gmail.com</p>
            <div class="d-flex">
                <i class="far fa-map pr-1 pt-2"></i>
                <p>Ali Azom market. Hojjcamp, 47-Dakhkhin Khan Mollartek, Bottola,Dhaka-1230.</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="container-fluid bg-danger px-lg-5 text-white">
    <div class="row mx-lg-5 d-flex align-items-center">
        <div class="col-lg-5 ml-lg-auto align-items-center order-lg-2 pt-3">
            <div class="bg-danger">
                <ul class="d-flex flex-lg-row flex-column list-unstyled" id="bottomBar">
                    <li class="nav-item">
                        <a class="nav-link text-light pr-2 display-lg-inline text-center text-lg-left m-lg-0" href="page/about/about.html">About Us</a>
                    </li>
                    <span class="d-lg-block d-none">|</span>
                    <li class="nav-item">
                        <a class="nav-link text-light pr-2 display-lg-inline text-center text-lg-left m-lg-0" href="page/services/services.html">Services</a>
                    </li>
                    <span class="d-lg-block d-none">|</span>
                    <li class="nav-item">
                        <a class="nav-link text-light pr-2 display-lg-inline text-center text-lg-left m-lg-0" href="page/about/about.html">Terms & Condition</a>
                    </li>
                    <span class="d-lg-block d-none">|</span>
                    <li class="nav-item">
                        <a class="nav-link text-light pr-2 display-lg-inline text-center text-lg-left m-lg-0" href="page/contact/contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-5 py-3 order-lg-1 text-center text-lg-left">
            <small>Copyright@ 2021 All right reserved by
                <a class="stretched-link text-white" href="https://www.facebook.com/SantoKhan1999/">Santo Khan</a>
            </small>
        </div>
    </div>
</div>


<!-- JavaScript source -->
<?php include "js/bootstrap.bundle.js.php"; ?>
<?php include "js/dpdhl.js.php"; ?>
</body>

</html>