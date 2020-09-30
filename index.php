<?php
$title = "Это заголовок";
$heading1 = "Это заголовок Н1";
$today = date("m.d.y"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title ?></title>
</head>

<body>
    <div class="top">
        <div class="container">
            <header class="nav-menu">
                <div class="nav-block-1"><a href="index.html"><img src="/img/Navigation.svg" alt=""></a>
                </div>
                <div class="nav-block-2"><a href="contacts.html"><img src="img/address-book-solid.svg" alt=""></a>
                </div>
            </header>

            <div class="top-cont">
                <div class="top-header">
                    <h1 class="top-h1"><?= $heading1 ?> </h1>
                </div>
                <div class="artical">
                    <p class="artical-p"><?= "Сегодня: " . $today ?>
                    </p>
                </div>
                <a href="#" class="top-botton">See Our Project</a>
            </div>
        </div>
    </div>
    <div class="cols-cont">

        <h2 class="heading-h2">What we do to help our client grow in digital era</h2>

        <div class="inside-cols-cont">
            <div class="col-1 col">
                <img src="img/img-left.svg" alt="img">
                <h4 class="heading-h4">Make Your business To Be Better Famous In Internet</h4>
                <p class="cart-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua.</p>
                <a href="#" class="cart-link">Learn more</a>
            </div>
            <div class="col-2 col">
                <img src="img/img-center.svg" alt="img">
                <h4 class="heading-h4">Bring Technology To Your Comfrotable Home</h4>
                <p class="cart-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua.</p>
                <a href="#" class="cart-link">Learn more</a>
            </div>
            <div class="col-3 col">
                <img src="img/img-right.svg" alt="img">
                <h4 class="heading-h4">Build Your Digital Product That Suitable For Your Need</h4>
                <p class="cart-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua.</p>
                <a href="#" class="cart-link">Learn more</a>
            </div>
        </div>
    </div>
    <div class="content-cont">
        <h3 class="inside-content-cont">Our Finished Project</h3>
        <p class="cont-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

        <div class="img-cont img-cont-2"> <img class="img-cont" src="/img/full-img.jpg" alt="img">
            <p class="cont-p-text">Smart Home Installation</p>
        </div>
        <div class="half-img">
            <div class="sm-img-cont-1 sm-img-cont"><img class="img-cont" src="/img/half-img-left.jpg" alt=""></div>
            <div class="sm-img-cont-2 sm-img-cont"><img class="img-cont" src="/img/half-img-right.jpg" alt=""></div>
        </div>

    </div>





    <footer class="footer-block">
        <div class="footet-cont">
            <div class="inside-footer-cont">
                <h3 class="heading-h3 footer-h3">Intersted to woek with our team?</h3>
                <p class="footer-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <a href="#" class="footer-botton">See Our Project</a>
            <a href="#" class="footer-botton-2">Let’s Talk</a>
        </div>

        <hr>
        <div class="footer-cont-2-block">
            <ul class="footer-cont-2">
                <li class="footer-cont-2-li">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li class="footer-cont-2-li">36543646457</li>
                <li class="footer-cont-2-li">test@test.com</li>
            </ul>
        </div>

        <div class="inside-footer-cont-2">
            <p>2020 All rights reserved.</p>
        </div>

    </footer>
    </div>
</body>

</html>