<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ROSA- Restaurant</title>
    <meta name="description" content="ROSA is an enchanting Parallax Restaurant WordPress Theme that allows you to tell your story in an enjoyable way, perfect for restaurants or coffee shops.">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main.min.css">
    <style>
        /*Start Global*/
* {
    box-sizing: border-box;
}
body {
    margin: 0;
    padding: 12px;
}
body.hide-scroll::-webkit-scrollbar {
    display: none;
}
a {
    text-decoration: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
img {
    max-width: 100%;
}
h2 {
    font-family: 'Herr Von Muellerhoff', cursive;
    font-size: 100px;
    font-weight: normal;
    margin: 0 0 -55px;
}
h1, h3 {
    font-family: "Source Code Pro", sans-serif;
    font-size: 47px;
    font-weight: bold;
    letter-spacing: 9.4px;
    margin: 0 0 15px;
}
p {
    color: #515151;
    line-height: 27px;
}
.a-CTA {
    border-bottom: 2px solid #a96700;
    padding-bottom: 4px;
    letter-spacing: 1.5px;
    font-size: 18px;
}
/*End Global*/

/*Start Mutual*/
p, .a-CTA, input, header .navigation-bar a, .copyright li, .contact .form form label, .contact .form form button {
    font-family: Cabin, sans-serif;
}
.fa-asterisk, .a-CTA, h2, header .navigation-bar a:hover, header nav.active .navigation-bar a:hover, footer .social-media .links a:hover, .copyright .info li a, .copyright .CTA li a:hover {
    color: #a96700;
}
header nav .navigation-bar .underline, header .text .button button:hover, .contact .form form button:hover, .contact .text i:hover {
    background-color: #a96700;
}
header .navigation-bar ul li, header .text, .about-us .text, .reservation .text, .menu .box-model, .menu .text, .fixed-image .text, footer, .copyright, .contact .text i {
    text-align: center;
}
header nav, header .navigation-bar ul, .about-us, .reservation, .about-us .image-container, .reservation .image-container, .menu, .menu .menu-image-container, footer .contact-container, .copyright ul, .contact {
    display: flex;
}
header nav .toggle, header nav .toggle span, header .navigation-bar, header .navigation-bar ul, .menu .box-model .close, footer .social-media .links a, .copyright .CTA li a {
    transition: .3s;
}
header, header nav .toggle span, header .navigation-bar a, header .text, header .text .arrow .left, header .text .arrow .right, .recipes, .menu .box-image-container, .fixed-image .text, .copyright, .copyright .arrow-up {
    position: relative;
}
header nav .toggle, header .navigation-bar .underline, header .text .arrow .left:after, header .text .arrow .right:after, header .svg-down, header .arrow-down, .recipes .text, .menu .box-model .close, .menu .box-model .arrow .arrow-right,.menu .box-model .arrow .arrow-left, .menu .box-image-container .box-image, .copyright .svg-up {
    position: absolute;
}
.recipes .text, .fixed-image .text, .menu .box-image-container, .menu .box-image-container .box-image {
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
header nav, header .navigation-bar a:hover .underline, header .navigation-bar li.active .underline, .menu .box-model, .menu .box-image-container, .menu .box-image-container .box-image {
    width: 100%;
}
button, .dots > div, header nav .toggle, header .arrow-down, .menu .box-model .close, .menu .box-model .arrow .arrow-right,.menu .box-model .arrow .arrow-left, .menu .menu-image-container .image img, footer .newsletter i, .copyright .arrow-up {
    cursor: pointer;
}
.dots .active, header nav.active, header nav.active .toggle.active span, header nav .toggle span, header .navigation-bar .underline, header .text .arrow .left, header .text .arrow .right, header .text .button button, .contact form button {
    background-color: #fff;
}
h1, h3, header .navigation-bar a, header .text span, .menu .box-model .close:hover, footer .text h2, footer .text p, footer .social-media .links a, .contact .text i, .contact .form form button {
    color: #fff;
}
header nav, header .navigation-bar.show, header .navigation-bar a:hover .underline, header .navigation-bar li.active .underline, header .text .arrow .left:after, .menu .box-model, .copyright .arrow-up {
    left: 0;
}
header .text .arrow .left:after, header .text .arrow .right:after, header .text span, footer .social-media .links a, footer .newsletter i, .copyright .arrow-up, .contact .text i, .contact .form form label {
    display: inline-block;
}
/*End Mutual*/

/*Start Dots*/
.dots {
    position: fixed;
    top: 50%;
    right: 30px;
    transform: translate(0,-50%);
    z-index: 5;
}
.dots > div  {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    z-index: 20;
    margin-bottom: 10px;
    border: 2px solid #fff;
}
.dots .black {
    border-color: #000;
}
.dots .active.black {
    background-color: #000;
}
/*End Dots*/

/*Start Home Page*/

/*Start Header*/
header {
    height: calc(100vh - 22px);
    background-size: cover;
    background: url("https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988534/header.jpg") fixed bottom;
    padding: 20px 70px;
}
header nav {
    position: fixed;
    top: 0;
    padding: 36px 36px 20px;
    z-index: 20;
}
header nav .toggle {
    display: none;
    top: 26px;
    left: 20px;
    background-color: transparent;
    border: none;
    padding: 0;
    z-index: 21;
}
header nav .toggle:focus {
    outline: none;
}
header nav.active .toggle span {
    background-color: #000;
}
header nav .toggle.active {
    left: 32%;
}
header nav .toggle.active .first {
    top: 16px;
    transform: rotate(-45deg);
}
header nav .toggle.active .last {
    top: 0;
    transform: rotate(45deg);
}
header nav .toggle .hide {
    transition: 0s;
    visibility: hidden;
}
header nav .toggle span {
    display: block;
    width: 30px;
    height: 2px;
    border-radius: 40px;
}
header nav .toggle span:not(:last-of-type) {
    margin-bottom: 6px;
}
header nav .logo {
    flex-basis: 56%;
    padding-left: 50px;
}
header .navigation-bar.show {
    width: 40%;
}
header .navigation-bar.show a {
    color: #ccc !important;
}
header .navigation-bar.show a:hover {
    color: #fff !important;
}
header .navigation-bar ul li {
    flex: 1;
    padding: 0 10px;
}
header .navigation-bar a {
    text-decoration: none;
    transition: all .5s;
    font-size: 16px;
}
header nav.active .navigation-bar a {
    color: #000;
}
header .navigation-bar .underline {
    height: 2px;
    width: 0;
    left: 50%;
    bottom: -4px;
    transition: all .3s;
    display: block;
}
header .text {
    top: 24%;
}
header .text h1 {
    margin-bottom: 0;
}
header .text .arrow .left, header .text .arrow .right {
    height: 3px;
    width: 100px;
}
header .text .arrow .left {
    left: -4%;
}
header .text .arrow .right {
    right: -4%;
}
header .text .arrow .left:after, header .text .arrow .right:after {
    content: '';
    border: 10px solid transparent;
    border-left-color: #fff;
    top: -8px;
}
header .text .arrow .right:after {
    right: 0;
    border-color: transparent #fff transparent transparent;
}
header .text .arrow .fa-asterisk {
    vertical-align: super;
}
header .text span {
    font-family: "Source Code Pro", sans-serif;
    font-size: 15px;
    margin-bottom: 12px;
}
header .text .button button, .contact form button {
    border: none;
    padding: 9px 18px;
    letter-spacing: 2.4px;
    font-size: 12px;
    font-family: source_sans_problack, sans-serif;
    border-radius: 3px;
}
header .text .button button, .contact form button:focus {
    outline: none;
}
header .svg-down {
    bottom: 0;
    left: 50%;
    z-index: 5;
    margin-left: -96px;
    margin-bottom: -12px;
    color: #fff;
}
header .arrow-down {
    width: 70px;
    height: 50px;
    bottom: -10px;
    left: 50%;
    transform: translate(-50%, 0);
    z-index: 10;
    background: url("https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/arrow-down.png") no-repeat center;
}
/*End Header*/

/*Start About-Us*/
.about-us, .reservation {
    padding: 60px;
}
.about-us .text, .reservation .text {
    flex: 50%;
    padding: 40px 52px 0 0;
}
.about-us .text h3, .reservation .text h3 {
    color: #000;
}
.about-us .text .fa-asterisk, .reservation .text .fa-asterisk {
    color: #9a9998;
}
.about-us .image-container, .reservation .image-container {
    flex: 50%;
}
.about-us .image, .reservation .image {
    margin-left: 20px;
}
/*End About-Us*/

/*Start Recipes*/
.recipes .image {
    height: 350px;
    background: url("https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988529/three-col-1.jpg") fixed center;
    background-size: cover;
}
/*End Recipes*/

/*Start Menu*/
.menu {
    padding: 60px;
}
.menu .box-model {
    display: none;
    position: fixed;
    height: 100%;
    top: 0;
    z-index: 20;
    background-color: rgba(0,0,0,.7);
}
.menu .box-model.active {
    display: block;
}
.menu .box-model.active body {
    overflow: hidden;
}
.menu .box-model .close {
    color: #ccc;
    right: 25px;
    top: 10px;
    z-index: 20;
}
.menu .box-model .arrow .arrow-right,.menu .box-model .arrow .arrow-left {
    width: 40px;
    height: 40px;
    right: 20px;
    top: 50%;
    border-right: 2px solid #fff;
    border-top: 2px solid #fff;
    transform: rotate(45deg);
    z-index: 20;
}
.menu .box-model .arrow .arrow-left {
    left: 20px;
    transform: rotate(-135deg);
}
.menu .box-image-container {
    height: 100%;
}
.menu .box-image-container .box-image img.active {
    animation: scale .5s;
}
@keyframes scale {
    from {transform: scale(0,0)}
    to {transform: scale(1,1)}
}
.menu .menu-image-container {
    flex-wrap: wrap;
    flex: 60%;
}
.menu .menu-image-container .image {
    margin: 0 20px 20px 0;
    flex: calc( 50% - 40px);
}
.menu .text {
    flex: 55%;
    padding: 40px 0 0 62px;
}
.menu .text h3 {
    color: #000;;
}
.menu .text .fa-asterisk {
    color: #9a9998;
}
/*End Menu*/

/*Start fixed-image*/
.fixed-image {
    background: url("https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988533/frontpage-menu.jpg") fixed center;
    background-size: cover;
    height: 400px;
}
/*End fixed-image*/

/*Start Footer*/
footer {
    background-color: #121212;
    padding: 60px 20px;
}
footer .text {
    max-width: 500px;
    margin: auto;
}
footer .text h2 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 19px;
    letter-spacing: 1.9px;
    margin-bottom: 25px;
}
footer .text .fa-asterisk {
    font-size: 12px;
}
footer .text p {
    line-height: 27px;
}
footer .contact-container {
    padding: 40px 0;
    max-width: 1000px;
    margin: auto;
}
footer .contact-container > div {
    flex: 1;
}
footer .contact-container h3 {
    font-size: 19px;
    letter-spacing: 1.9px;
}
footer .social-media .links a {
    margin: 0 10px;
    font-size: 25px;
}
footer .newsletter input {
    padding: 10px;
    width: 270px;
    background-color: #eee;
    border: none;
    margin-left: -15px;
}
footer .newsletter i {
    margin-left: -40px;
    vertical-align: middle;
    font-size: 21px;
}
.copyright {
    padding: 15px 40px 30px;
    background-color: #262526;
}
.copyright .svg-up {
    top: 0;
    left: 50%;
    margin-left: -96px;
    margin-top: -50px;
}
.copyright .arrow-up {
    width: 40px;
    height: 30px;
    top: -45px;
    color: #fff;
    line-height: 1.9
}
.copyright ul {
    justify-content: center;
}
.copyright li {
    color: #919191;
    font-size: 14px;
}
.copyright li:not(:last-of-type):after {
    content: '•';
    margin: 10px;
}
.copyright .CTA {
    margin-top: 25px;
}
.copyright .CTA li a {
    color: #919191;
}

/*End Footer*/

/*End Home Page*/

/*Start Contact Page*/
.contact-header {
    background-image: url("https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988526/contact-food.jpg");
    height: 40vh;
}
.contact {
    padding: 78px 40px;
}
.contact > div {
    flex: 50%;
}
.contact .text p {
    margin-bottom: 30px;
}
.contact .text i {
    width: 50px;
    height: 50px;
    background-color: #000;
    border-radius: 50%;
    line-height: 48px;
    font-size: 24px;
}
.contact .text h2 {
    font-family: source_sans_problack, sans-serif;
    font-size: 24px;
    color: #262626;
    letter-spacing: 2.4px;
    margin-bottom: 20px;
}
.contact .form {
    margin-left: 48px;
}
.contact .form form label {
    margin-bottom: 5px;
    color: #515151;
}
.contact .form form input, .contact .form form textarea {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 24px;
    border-radius: 5px;
    border: 2px solid #D8D8D8;
    outline: none;
}
.contact .form form input:focus, .contact .form form textarea:focus {
    border-color: #a96700;
    box-shadow: 0 1px 1px #737373;
}
.contact .form form textarea {
    height: 212px;
    resize: none;
}
.contact .form form button {
    background-color: #262526;
    padding: 12px 30px;
    font-size: 12px;
}
/*End Contact Page*/

/*Start Home Page Responsive*/

@media (max-width: 1200px) {
    .menu, .about-us, .reservation {
        padding: 60px 40px;
    }
    .about-us .text, .reservation .text {
        padding: 0 32px 0 0;
    }
    .about-us .image-container, .reservation .image-container {
        align-items: center;
    }
    .menu .text {
        padding: 0 0 0 32px;
    }
}

@media (max-width: 992px) {
    body {
        padding: 0;
    }
    .dots {
        display: none;
    }
    header {
        height: calc(100vh - 10px);
    }
    header nav .logo {
        padding-left: 0;
    }
    .about-us {
        display: block;
        padding-top: 50px;
    }
    .about-us .text , .reservation .text {
        padding: 0 0 40px;
    }
    .about-us .image-container .image1, .reservation .image-container .image1 {
        margin-left: 0;
    }
    .menu {
        display: block;
        padding: 60px 20px 60px 40px;
    }
    .menu .text {
        padding: 20px 20px 0 0;
    }
    .reservation {
        display: block;
        padding: 30px 20px 60px;
    }
    .contact {
        display: block;
        padding: 78px 20px;
    }
    .contact .form {
        margin-left: 0;
        margin-top: 40px;
    }
}

@media (max-width: 768px) {
    header nav {
        display: block;
        text-align: center;
        left: 0;
        top: 0;
        width: 100%;
        padding-top: 25px;
    }
    header nav .toggle {
        display: block;
    }
    header .navigation-bar {
        position: fixed;
        top: 0;
        left: -174px;
        height: 100%;
        background-color: #262526;
        overflow: hidden;
        z-index: 20;
        padding: 40px;
    }
    header .navigation-bar ul {
        display: block;
        padding-top: 40px;
    }
    header .navigation-bar ul li {
        text-align: left;
        padding: 14px 0;
    }
    footer .contact-container {
        display: block;
    }
    footer .social-media {
        margin-bottom: 40px;
    }
    .copyright ul {
        display: block;
        margin-top: -20px;
    }
    .copyright li {
        margin-bottom: 5px;
    }
    .copyright li:not(:last-of-type):after {
        content: '';
    }

}

@media (max-width: 576px) {
    h3, h1 {
        font-size: 40px;
    }
    h2 {
        font-size:90px
    }
    header {
        padding: 0;
    }
    header nav .logo {
        padding-left: 0;
    }
    header nav .toggle.active {
        left: 36%;
    }
    header .navigation-bar.show {
        padding: 20px;
        width: 48%;
    }
    .about-us, .reservation {
        padding: 60px 20px;
    }
    .menu {
        padding: 60px 0 60px 20px;
    }
}
/*End Home Page Responsive*/
    </style>
   <script>
    // constants
const body = document.querySelector("body"),
    loader = document.querySelector(".loader-wrap"),
    links = document.querySelectorAll('a[href="#"]'),
    nav = document.querySelector("header nav"),
    navToggle = document.querySelector("header nav .toggle"),
    navSpanMiddle = document.querySelector("header nav .toggle .middle"),
    navNavigationBar = document.querySelector("header nav .navigation-bar"),
    navNavigationBarLi = document.querySelectorAll(
        "header nav .navigation-bar li"
    ),
    headerText = document.querySelector("header .text"),
    headerSection = document.querySelector("header"),
    aboutSection = document.querySelector(".about-us"),
    recipeSection = document.querySelector(".recipes"),
    menuSection = document.querySelector(".menu"),
    fixedImageSection = document.querySelector(".fixed-image"),
    footerSection = document.querySelector("footer"),
    dotOne = document.querySelector(".dots .one"),
    dotTwo = document.querySelector(".dots .two"),
    dotThree = document.querySelector(".dots .three"),
    dots = document.querySelectorAll(".dots > div"),
    logoImage = document.querySelector("header nav .logo img"),
    svgDown = document.querySelector("header .arrow-down"),
    svgUp = document.querySelector(".copyright .arrow-up"),
    menuImgs = document.querySelectorAll(".menu .menu-image-container img"),
    boxModel = document.querySelector(".menu .box-model"),
    menuImageContainer = document.querySelector(".menu-image-container"),
    boxModelArrow = document.querySelector(".menu .box-model .arrow"),
    boxModelImage = document.querySelector(".menu .box-model img"),
    pageTitle = document.querySelector("title");

// remove loader
function fadeOutEffect() {
    const fadeEffect = setInterval(function() {
        if (!loader.style.opacity) {
            loader.style.opacity = 1;
        }
        if (loader.style.opacity > 0) {
            loader.style.opacity -= 0.4;
        } else {
            body.classList.remove('stop-scroll');
            loader.classList.add('remove');
            clearInterval(fadeEffect);
        }
    }, 100);
}
window.addEventListener("load", fadeOutEffect);

// prevent links click hash
links.forEach(link =>
    link.addEventListener("click", function(e) {
        e.preventDefault();
    })
);

// toggle hamburger menu button
navToggle.addEventListener("click", () => {
    navToggle.classList.toggle("active");
    navSpanMiddle.classList.toggle("hide");
    navNavigationBar.classList.toggle("show");
});

// show active navigationbar li
navNavigationBarLi.forEach(li =>
    li.addEventListener("click", () => {
        const arr = Array.from(li.parentElement.children);
        arr.forEach(li => li.classList.remove("active"));
        li.classList.add("active");
    })
);

// svg-up smooth scroll
svgUp.addEventListener("click", () => {
    window.scroll({
        top: 0,
        behavior: "smooth"
    });
});

window.onscroll = function() {
    // make navbar fixed & change logo color
    if (window.pageYOffset > headerSection.offsetHeight - 75) {
        nav.classList.add("active");
        logoImage.src = "https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988525/logo-rosa.png";
    } else {
        nav.classList.remove("active");
        logoImage.src = "https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/logo-rosa-white.png";
    }

    // header welcome fade out and in
    if (window.pageYOffset > 0) {
        headerText.style.opacity = -window.pageYOffset / 300 + 1;
    }
    // home page JS
    if (pageTitle.text === "ROSA- Restaurant") {
        //change dots background color
        if (window.pageYOffset < headerSection.offsetHeight * 0.5) {
            dots.forEach(dot => dot.classList.remove("black"));
            dotTwo.classList.remove("active");
            dotOne.classList.add("active");
        } else if (
            window.pageYOffset > headerSection.offsetHeight * 0.5 &&
            window.pageYOffset < recipeSection.offsetTop * 0.72
        ) {
            dots.forEach(dot => dot.classList.add("black"));
        } else if (
            window.pageYOffset > recipeSection.offsetTop * 0.75 &&
            window.pageYOffset < menuSection.offsetTop * 0.81
        ) {
            dots.forEach(dot => dot.classList.remove("black"));
            dotOne.classList.remove("active");
            dotThree.classList.remove("active");
            dotTwo.classList.add("active");
        } else if (
            window.pageYOffset > menuSection.offsetTop * 0.81 &&
            window.pageYOffset < fixedImageSection.offsetTop * 0.86
        ) {
            dots.forEach(dot => dot.classList.add("black"));
            dotThree.classList.remove("active");
            dotTwo.classList.add("active");
        } else if (
            window.pageYOffset > fixedImageSection.offsetTop * 0.86 &&
            window.pageYOffset < footerSection.offsetTop * 0.72
        ) {
            dots.forEach(dot => dot.classList.remove("black"));
            dotTwo.classList.remove("active");
            dotThree.classList.add("active");
        } else if (
            window.pageYOffset > footerSection.offsetTop * 0.72 &&
            window.pageYOffset < footerSection.offsetTop * 0.901
        ) {
            dots.forEach(dot => dot.classList.add("black"));
        } else if (window.pageYOffset > footerSection.offsetTop * 0.901) {
            dots.forEach(dot => dot.classList.remove("black"));
        }
    }
};

// home page JS
if (pageTitle.text === "ROSA- Restaurant") {
    // svg-down smooth scroll
    svgDown.addEventListener("click", () => {
        window.scroll({
            top: aboutSection.offsetTop - 30,
            behavior: "smooth"
        });
    });

    // dots smooth scroll
    dots.forEach(dot =>
        dot.addEventListener("click", function() {
            window.scrollTo({
                top: document.querySelector(this.dataset.x).offsetTop - 100,
                behavior: "smooth"
            });
        })
    );

    // show box model
    menuImgs.forEach(img =>
        img.addEventListener("click", function() {
            const arr = Array.from(this.parentElement.parentElement.children);

            arr.forEach(div => div.classList.remove("active"));

            this.parentElement.classList.add("active");
            boxModel.classList.add("active");
            boxModelImage.src = this.src;
            boxModelImage.classList.add("active");
            body.classList.add("hide-scroll");
        })
    );

    // box model functions
    function boxModelFun(e) {
        // close box model
        if (
            e.code === "Escape" ||
            (e.target.tagName === "DIV" && !e.target.classList.contains("arrow")) ||
            e.target.classList.contains("close")
        ) {
            boxModel.classList.remove("active");
            body.classList.remove("hide-scroll");
        }

        if (boxModel.classList.contains("active")) {
            if (
                e.code === "ArrowRight" ||
                e.code === "ArrowLeft" ||
                e.target.classList.contains("arrow-right") ||
                e.target.classList.contains("arrow-left")
            ) {
                const arr = Array.from(menuImageContainer.children);
                const active = arr.find(div => div.classList.contains("active"));

                // change box model image
                if (
                    e.target.classList.contains("arrow-right") ||
                    e.code === "ArrowRight"
                ) {
                    if (active.nextElementSibling === null) {
                        active.parentElement.firstElementChild.classList.add("active");
                        boxModelImage.src =
                            active.parentElement.firstElementChild.firstElementChild.src;
                    } else {
                        active.nextElementSibling.classList.add("active");
                        boxModelImage.src = active.nextElementSibling.firstElementChild.src;
                    }
                }

                // change box model image
                else if (
                    e.target.classList.contains("arrow-left") ||
                    e.code === "ArrowLeft"
                ) {
                    if (active.previousElementSibling === null) {
                        active.parentElement.lastElementChild.classList.add("active");
                        boxModelImage.src =
                            active.parentElement.lastElementChild.lastElementChild.src;
                    } else {
                        active.previousElementSibling.classList.add("active");
                        boxModelImage.src =
                            active.previousElementSibling.firstElementChild.src;
                    }
                }
                active.classList.remove("active");
            }
        }
    }

    window.addEventListener("keydown", boxModelFun);
    window.addEventListener("click", boxModelFun);
    boxModelArrow.addEventListener("click", boxModelFun);
}

   </script>
</head>

<body class="stop-scroll">

  <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!--Start loader-->
  <div class="loader-wrap">
      <div class="loader">
          <span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span>
      </div>
  </div>
  <!--End loader-->

  <!--Start Dots-->
  <div class="dots">
      <div class="active one" data-x="header"></div>
      <div class="two" data-x=".recipes"></div>
      <div class="three" data-x=".fixed-image"></div>
  </div>
  <!--End Dots-->

 <!-- nav start -->

<!-- nav end -->
<!-- start main -->
<div class="centeri">
<div class="card">
  

  <img src="https://i.pinimg.com/originals/10/f7/41/10f7414c0d4984194f5e1316bd61ca0d.png" class="foto" style="width:100%">
   <header>
     <h1>NIKE AM90id</h1>
  </div>
</div>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap');
    		@import url('https://fonts.googleapis.com/css?family=Montserrat:300&display=swap');
        		@import url('https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap');

img{
    position: fixed;
  top: -8%;
  left: 0%;
  border-radius: 50px;
  opacity:0.9;
  transition: 0.5s;

   
}
h1{
  	   transition: transform 2s;
    font-size: 60px;
color: white;
 font-family: 'Big Shoulders Display', cursive;
}
.card:hover > p{
    opacity:1;
       transform: scale(1.5)
    top:80%;
 
}
img:hover .card{
        
  
}
img, #parent {
    cursor: pointer;
    
}
.card:hover > img{
    opacity:1;
       transform: scale(1.4);
             
}
.card header {
    position:absolute;
 
  top: 120%;
  left: 0%;
    padding: 1px;
    border-radius:  25px;
   width: 450px;
         height: 90px;
     transition: all .5s;
    opacity:0;
}
.card:hover > header{
  
    opacity:1;
         width: 450px;
         height: 90px;
             transform: translateY(-120px);
}

 .card {

    	   transition: transform .7s;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
border-radius: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background: white;
    width: 450px;
  height: 450px;
}
.card:hover{

   transform: scale(1.08)
}
  .centeri{ 
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  }
  span{
    
    position: relative;
  }
  
</style>
<!-- main end -->
  <!--start About Us-->
  <div class="about-us">
      <div class="text">
          <h2>Discover</h2>
          <h3>Our Story</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Rosa is a restaurant, bar and coffee roastery located on a busy corner site in Farringdon’s Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and a bustling London intersection.</p>
          <div><a class="a-CTA" href="#">About Us</a></div>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988527/vertical-photo-1.jpg" alt="Food Photo">
          </div>
          <div class="image image2">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988532/vertical-photo-2.jpg" alt="Food Photo">
          </div>
      </div>
  </div>
  <!--End About Us-->

  <!--start Recipes-->
  <div class="recipes">
      <div class="image"></div>
      <div class="text">
          <h2>Tasteful</h2>
          <h3>Recipes</h3>
      </div>
  </div>
  <!--End Recipes-->

  <!--start Menu-->
  <div class="menu">
      <div class="box-model">
          <i class="fas fa-times fa-2x close"></i>
          <div class="arrow">
              <div class="arrow arrow-right"></div>
              <div class="arrow arrow-left"></div>
          </div>
          <div class="box-image-container">
              <div class="box-image">
                  <img src=""  alt="Food Photo">
              </div>
          </div>
      </div>
      <div class="menu-image-container">
          <div class="image active">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988517/big-menu-thumb-1.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988526/big-menu-thumb-2.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988525/big-menu-thumb-4.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988524/big-menu-thumb-6.jpg" alt="Food Photo">
          </div>
      </div>
      <div class="text">
          <h2>Discover</h2>
          <h3>Menu</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>For those with pure food indulgence in mind, come next door and sate your desires with our ever changing internationally and seasonally inspired small plates.  We love food, lots of different food, just like you.</p>
          <div><a class="a-CTA" href="#">View The Full Menu</a></div>
      </div>
  </div>
  <!--End Menu-->

  <!--Start fixed-image-->
  <div class="fixed-image">
      <div class="text">
          <h2>The Perfect</h2>
          <h3>Blend</h3>
      </div>
  </div>
  <!--End fixed-image-->

  <!--start About Us-->
  <div class="reservation">
      <div class="text">
          <h2>Culinary</h2>
          <h3>Delight</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time.</p>
          <div><a class="a-CTA" href="#">Make a Reservation</a></div>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-1.jpg" alt="Food Photo">
          </div>
          <div class="image image2">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-2.jpg" alt="Food Photo">
          </div>
      </div>
  </div>
  <!--End About Us-->

  <!--Start Footer-->
  <footer>
      <div class="text">
          <h2>ABOUT ROSA</h2>
          <div><i class="fas fa-asterisk"></i></div>
          <p>ROSA is an enchanting and easy-to-use parallax Restaurant WordPress theme that allows you to tell your story in a dynamic, narrative and enjoyable way, making it perfect for restaurants, bakeries, bars or coffee shops.</p>
      </div>
      <div class="contact-container">
        <div class="social-media">
            <h3>Follow Along</h3>
            <div class="links">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
          <div class="newsletter">
            <h3>NewsLetter</h3>
              <form method="post">
                  <input type="email" name="email" placeholder="Type Your Email">
                  <i class="fas fa-envelope"></i>
              </form>
          </div>
      </div>
  </footer>
<!--End Footer-->

<!--Start Copy-Right-->
  <div class="copyright">
      <svg class="svg-up" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="#262526" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <i class="fas fa-angle-double-up arrow-up"></i>
      <ul class="info">
          <li>&copy; ROSA 2017</li>
          <li>13 Hanway Square, London</li>
          <li>Tel: 71494563</li>
          <li>Handcrafted with love by <a href="#">Pixelgrade</a> Team</li>
      </ul>
      <ul class="CTA">
          <li><a href="#">PERMISSIONS AND COPYRIGHT</a></li>
          <li><a href="#">CONTACT THE TEAM</a></li>
      </ul>
  </div>
  <!--End Copy-Right-->

  <!-- Add your site or application content here -->
  <script src="js/main.js"></script>
  <script src="js/main.min.js"></script>
</body>

</html>
