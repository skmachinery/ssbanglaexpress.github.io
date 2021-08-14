<!-- Sticky Navbar -->
<div class="container-fluid px-lg-5" id="top-navbar">
    <div class="row mx-lg-5">
        <div class="col bg-danger rounded">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" onclick="NavBtn()">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <script>
                function NavBtn() {
                    document.getElementById("my-nav").classList.toggle("d-block");
                }
                </script>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.php">Services</a>
                        </li>
                        <li class="nav-item tools-btn">
                            <a class="nav-link" href="#">Tools<i class="fas fa-caret-down pl-1"></i></a>
                            <div class="bg-white p-4 rounded tools-dropdown">
                                <ul class="list-unstyled">
                                    <li><a href="#">Company News</a></li>
                                    <hr>
                                    <li><a href="currency_converter.php">Currancy Converter</a></li>
                                    <hr>
                                    <li><a href="valumetric_weight.php">Valumetric Weight</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <script>
            var navbar = document.getElementById("top-navbar");
            var sticky = navbar.offsetTop;
            window.onscroll = function() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky");
                } else {
                    navbar.classList.remove("sticky");
                }
            }
            </script>
        </div>
    </div>
</div>