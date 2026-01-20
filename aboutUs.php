<?php require_once './vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php viteClient(); ?>
    <?php viteEntry('src/css/style.scss'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo viteAsset('src/assets/favicon.ico'); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <title>Coala</title>
</head>
<body>
    <main>
        <?php include './components/header.php' ?>
        <section class="team container" data-aos="fade" data-aos-delay="100">
            <div class="row">
                <div class="team__title col-12">
                    <h2 class="h2-style">Our team</h2>
                    <p class="text-lg text-regular">Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                </div>
                <div class="team__cards col-12">
                    <div class="team__item">
                        <img src="../src/assets/person 1.jpg" alt="person 1">
                        <div class="team__info">
                            <h4>Amanda Green</h4>
                            <span>Senior Front-end Developer</span>
                            <p class="text-sm text-regular">Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                            <div class="team__socials">
                                <i class="icon-facebook"></i>
                                <i class="icon-twitter"></i>
                                <i class="icon-net"></i>
                                <i class="icon-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <img src="../src/assets/person 2.jpg" alt="person 2">
                        <div class="team__info">
                            <h4>Thomas Lean</h4>
                            <span>Senior back-end Developer</span>
                            <p class="text-sm text-regular">Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                            <div class="team__socials">
                                <i class="icon-facebook"></i>
                                <i class="icon-twitter"></i>
                                <i class="icon-net"></i>
                                <i class="icon-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <img src="../src/assets/person 4.jpg" alt="person 4">
                        <div class="team__info">
                            <h4>James Leos</h4>
                            <span>Senior Fullstack Developer</span>
                            <p class="text-sm text-regular">Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                            <div class="team__socials">
                                <i class="icon-facebook"></i>
                                <i class="icon-twitter"></i>
                                <i class="icon-net"></i>
                                <i class="icon-github"></i>
                            </div>
                        </div>
                    </div>
                    <div class="team__item">
                        <img src="../src/assets/person 3.jpg" alt="person 3">
                        <div class="team__info">
                            <h4>Leslie Livingston</h4>
                            <span>Graphic Designer</span>
                            <p class="text-sm text-regular">Worem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                            <div class="team__socials">
                                <i class="icon-facebook"></i>
                                <i class="icon-twitter"></i>
                                <i class="icon-net"></i>
                                <i class="icon-github"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="values container" data-aos="fade" data-aos-delay="150">
            <div class="row">
                <h2 class="h2-style col-12">Our values</h2>
                <div class="values__cards col-12">
                    <div class="values__item">
                        <div class="values__title">
                            <h4>Design to Impress</h4>
                            <i class="icon-send"></i>
                        </div>
                        <p class="text-sm text-regular">Carefully crafted precise design, with harmonious typography and perfect padding around every component.</p>
                    </div>
                    <div class="values__item">
                        <div class="values__title">
                            <h4>Commited Support</h4>
                            <i class="icon-support"></i>
                        </div>
                        <p class="text-sm text-regular">We are here for you. Our dedicated team is committed in providing excellent support.</p>
                    </div>
                    <div class="values__item">
                        <div class="values__title">
                            <h4>Clean Code</h4>
                            <i class="icon-code_file"></i>
                        </div>
                        <p class="text-sm text-regular">Built with HTML, CSS and JS. Startup's code is easy to under-stand and easy to change. No other frameworks needed.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php include './components/footer.php'?>
        <?php viteEntry('src/js/main.js');?>
    </main>
</body>
</html>