<style>
:root {
    --shadow-color: rgba(0, 0, 0, 0.2);
}

html,
body {
    scroll-behavior: smooth;
}

html::-webkit-scrollbar {
    background: transparent;
    background-color: transparent;
    width: 8px;
}

html::-webkit-scrollbar-track {
    background: transparent;
    background-color: transparent;
}

html::-webkit-scrollbar-thumb {
    background: #dc3545;
    border-radius: 6px;
}

.corner-clip {
    clip-path: polygon(0 0, 98% 0%, 100% 40%, 100% 100%, 2% 100%, 0% 65%);
}

.link-style-circle {
    background-color: crimson;
    width: 3px;
    height: 3px;
    border-radius: 50%;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3)
}

/*Logo*/
.logo {
    width: 180px;
    text-align: left;
}

/* Height */
.h-lg-10 {
    height: 100px;
}

.h-lg-20 {
    height: 200px;
}

.h-lg-30 {
    height: 300px;
}

.h-lg-40 {
    height: 400px;
}

.h-lg-50 {
    height: 500px;
}

.h-lg-60 {
    height: 600px;
}

.h-lg-70 {
    height: 700px;
}

.h-lg-80 {
    height: 800px;
}

.h-lg-90 {
    height: 900px;
}

.h-lg-100 {
    height: 1000px;
}

.display-lg-inline {
    display: inline;
}



.card-img-clip {
    clip-path: polygon(0 0, 100% 0%, 100% 100%, 7% 100%, 0 90%);
}

.fa-user,
.fa-facebook,
.fa-instagram,
.fa-twitter,
.fa-linkedin,
.fa-youtube {
    font-size: 1.2rem;
}

.note {
    position: absolute;
    width: 100%;
    height: 10px;
    left: 0;
    bottom: 0;
    background: crimson;
}

.note::before {
    content: "";
    position: absolute;
    width: 22px;
    height: 22px;
    left: -2px;
    bottom: -2px;
    background: rgb(141, 13, 39);
}

/* for top bar */
.crop-corner-top {
    position: absolute;
    background: #fff;
    width: 60px;
    height: 30px;
    transform: rotate(45deg);
    right: -22px;
    top: -22px;
}

.crop-corner-bottom {
    position: absolute;
    background: #fff;
    width: 60px;
    height: 30px;
    transform: rotate(45deg);
    left: -22px;
    bottom: -22px;
}

.top-navbar {
    display: block;
    z-index: 200;
}

/* Sticky navbar I user this attribute in javascript to scroll and classList.add("scicky") */
.sticky {
    position: fixed;
    top: 0px;
    z-index: 200;
    animation: slide-down 500ms ease-out;
    transform-origin: 50% 0%;
}

/* Dropdown Menu */
.tools-dropdown {
    position: absolute;
    top: 90%;
    display: none;
    box-shadow: 1px 1px 10px var(--shadow-color);
    z-index: 100;
}

.tools-btn:hover .tools-dropdown {
    display: block;
}

/* /Dropdown Menu */

/* Slider */
.mySlides {
    visibility: visible;
}

.fa-angle-left {
    position: absolute;
    color: #ffffff;
    top: 180px;
    left: 30px;
    font-size: 2.5rem;
}

.fa-angle-right {
    position: absolute;
    color: #ffffff;
    top: 180px;
    right: 30px;
    font-size: 2.5rem;
}

.slide-text-box {
    position: relative;
}

.slide-text {
    display: none;
    position: absolute;
    font-size: 3rem;
    font-weight: bold;
    top: 75%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1000;
    color: white;
}

/* Slider close */


.parallax {
    background-image: url(component/image/slide-1.png);
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    position: relative;
    /* for position the glassy dark background over image */
}

.glass-effect {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.6);
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
}

/* Map Parallex */
.parallax-2 {
    background-image: url(component/image/world-map-146505.svg);
    background-attachment: fixed;
    background-size: cover;
    background-position: 50% 0%;
}

@media(max-width:992px) {
    .h-lg-10 {
        height: 50px;
    }

    .h-lg-20 {
        height: 100px;
    }

    .h-lg-30 {
        height: 150px;
    }

    .h-lg-40 {
        height: 200px;
    }

    .h-lg-50 {
        height: 250px;
    }

    .h-lg-60 {
        height: 300px;
    }

    .h-lg-70 {
        height: 350px;
    }

    .h-lg-80 {
        height: 400px;
    }

    .h-lg-90 {
        height: 450px;
    }

    .h-lg-100 {
        height: 500px;
    }

    .fa-angle-left {
        position: absolute;
        color: #ffffff;
        top: 35%;
        left: 3vw;
        font-size: 1.5rem;
    }

    .fa-angle-right {
        position: absolute;
        color: #ffffff;
        top: 35%;
        right: 3vw;
        font-size: 1.5rem;
    }

    .logo {
        width: 150px;
        text-align: center;
        margin: auto;
    }

    .display-lg-inline {
        display: block;
    }

    .note {
        /* note bottom bar */
        position: absolute;
        width: 100%;
        height: 10px;
        left: 0;
        bottom: 0;
        background: crimson;
    }

    .note::before {
        /* note corner clip */
        content: "";
        position: absolute;
        width: 7%;
        height: 28px;
        left: 0px;
        bottom: 0px;
        background: rgb(141, 13, 39);
    }

    .tools-dropdown {
        top: 62%;
        left: 25%;
    }

}


@media(max-width:476px) {
    .h-lg-40 {
        height: 160px;
    }
}

@keyframes slide-down {
    0% {
        transform: scaleY(0);
    }

    100% {
        transform: scaleY(1);
    }
}

.animate-up:hover {
    animation: animate-up 500ms ease-out;
    animation-fill-mode: forwards;
}

@keyframes animate-up {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-10px);
    }
}
</style>