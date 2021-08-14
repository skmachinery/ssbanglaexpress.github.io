<!-- Slider -->
<div class="container-fluid pb-5 overflow-hidden">
    <div class="slide-text-box"><span class="slide-text">FASTEST COURIER SOLUTION</span></div>
    <div class="row">
        <div class="col p-0">
            <div class="text-white overflow-hidden h-lg-40 position-relative m-0 p-0">
                <div class="mySlides">
                    <img class="card-img-top" src="component/image/slide-4.jpg" alt="card-image" width="100%">
                </div>

                <div class="mySlides">
                    <img class="card-img-top" src="component/image/slide-1.png" alt="card-image" width="100%">
                </div>

                <div class="mySlides">
                    <img class="card-img-top" src="component/image/slide-6.jpg" alt="card-image" width="100%">
                </div>
                <i class="fas fa-angle-left" onclick="plusSlides(-1)"></i>
                <i class="fas fa-angle-right" onclick="plusSlides(1)"></i>
            </div>

            <div class="row align-items-center bg-danger py-lg-3 px-lg-5 text-white">
                <div class="col-lg-4 col-12 py-lg-3 py-2">
                    <h5 class="text-center m-0">Any query-> +8801711327764</h5>
                </div>
                <div class="col px-lg-5">
                    <div class="row align-items-center pr-lg" title="Tracking is in under construction mode">
                        <div class="col-lg-4 text-lg-right text-center">
                            <h5 class="pr-lg-2">Track your product:</h5>
                        </div>

                        <div class="col text-lg-right">
                            <form id="trackingForm">
                                <div class="input-group p-3">
                                    <input class="form-control" type="number" name="tracking_number" placeholder="Tracking No. 00340434292135100131" id="inputTrackId" aria-label="Recipient's">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text btn btn-danger" id="my-addon">Track</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-4 px-4">
        <div class="col d-flex justify-content-start px-5 mx-5">
            <?php include "component/facebook_share_button.php"; ?>
        </div>
    </div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
</script>