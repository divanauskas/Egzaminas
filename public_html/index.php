<?php
require '../bootloader.php';

$navigation = new \App\Views\Navigation();
$footer = new \App\Views\Footer();

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turbo Gym Home</title>
    <link rel="stylesheet" type="text/css" href="media/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="media/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script defer src="media/js/app.js"></script>
</head>
<body>
<!-- Header -->
<header>
    <?php print $navigation->render(); ?>
</header>
<main>
    <div id="title-photo"></div>
    <section class="wrapper container">
        <article>
            <img src="/media/images/1.jpg" alt="opa">
            <div>
                <span class="art-title">Where does it come from?</span>
                <span class="art-content">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </span>
            </div>
        </article>
        <article>
            <img src="/media/images/2.jpg" alt="opapa-2">
            <div>
                <span class="art-title">Where does it come from?t</span>
                <span class="art-content">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </span>
            </div>
        </article>
        <article>
            <img src="/media/images/3.jpg" alt="opapapa-3">
            <div>
                <span class="art-title">Where does it come from?</span>
                <span class="art-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </span>
            </div>
        </article>
    </section>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.219426156724!2d25.3356966160162!3d54.72335507837753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010221!5e0!3m2!1slt!2slt!4v1567460490499!5m2!1slt!2slt"
                width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</main>
<footer>
    <?php print $footer->render(); ?>
</footer>
</body>
</html>
