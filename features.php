<?php require_once './vite-helper.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php viteClient(); ?>
    <?php viteEntry('src/css/style.scss'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo viteAsset('src/assets/favicon.ico'); ?>" />
    <title>Coala</title>
</head>
<body>
    <main>
        <?php include './components/header.php' ?>
        <section class="feature-hero container">
            <div class="row">
                <div class="feature-hero__title col-12 col-xl-8 offset-xl-2" data-aos="fade" data-aos-delay="100">
                    <h1>Create Something Awesome</h1>
                    <p class="text-xl text-medium">We have created a new product that will help designers, developers and companies create websites for their startups quickly and easily.</p>
                </div>
                <div class="feature-hero__cards col-12" data-aos="fade" data-aos-delay="150">
                    <div class="feature-hero__item">
                        <div class="feature-hero__image">
                            <img src="../src/assets/pasta.svg" alt="pasta image">
                        </div>
                        <div class="feature-hero__content">
                            <h4>Convert Better</h4>
                            <p class="text-sm text-regular">Generate leads and sales with our effective call-to-action blocks from buttons to testimonials to forms.</p>
                        </div>
                    </div>
                    <div class="feature-hero__item">
                        <div class="feature-hero__image">
                            <img src="../src/assets/macaroni.svg" alt="macaroni image">
                        </div>
                        <div class="feature-hero__content">
                            <h4>Designed to Impress</h4>
                            <p class="text-sm text-regular">Carefully crafted precise design, with harmo-nious typography and perfect padding around every component.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="default-bg overlay">
            <section class="info container">
                <div class="row">
                    <div class="info__title col-12 col-xl-8 offset-xl-2" data-aos="fade" data-aos-delay="100">
                        <span class="text-xs text-bold">Easy-to-use</span>
                        <h1>Better Landing for Your Startup</h1>
                        <p class="text-xl text-regular">We have created a new product that will help designers, developers and companies create websites for their startups quickly and easily.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="info__item col-12 col-md-6 col-lg-5 col-xl-4 offset-xl-1" data-aos="fade" data-aos-delay="150">
                        <i class="icon-book"></i>
                        <div class="info__item-title">
                            <h4>User Guide</h4>
                            <p class="text-sm text-regular">You'll get a description of each component and learn how to connect and use them.</p>
                        </div>
                    </div>
                    <div class="info__item col-12 col-md-6 col-lg-5 offset-lg-2 col-xl-4 offset-xl-2" data-aos="fade" data-aos-delay="150">
                        <i class="icon-youtube"></i>
                        <div class="info__item-title">
                            <h4>Video Tutorials</h4>
                            <p class="text-sm text-regular">Video tutorials show you how to make a web site for your startup from design to code.</p>
                        </div>
                    </div>
                    <div class="info__image col-12 col-xl-10 offset-xl-1" data-aos="fade" data-aos-delay="200">
                        <img src="/src/assets/macbook.svg" alt="macbook image">
                    </div>
                </div>
            </section>
        </div>
        <section class="benefits container">
            <div class="row">
                <div class="benefits__content col-12">
                    <h1 data-aos="fade" data-aos-delay="100">Our Benefits</h1>
                    <div class="benefits__cards" data-aos="fade" data-aos-delay="150">
                        <div class="benefits__item">
                            <i class="icon-briefcase"></i>
                            <h4 class="text-xl text-medium">Many Useful Components</h4>
                            <p class="text-sm text-regular">Startup Framework contains components and complex blocks which can easily be integrated into almost any design. </p>
                        </div>
                        <div class="benefits__item">
                            <i class="icon-compress"></i>
                            <h4 class="text-xl text-medium">Responsive Layout</h4>
                            <p class="text-sm text-regular">We haven't forgotten about responsive layout. With Startup Framework, you can create a website with full mobile support.</p>
                        </div>
                        <div class="benefits__item">
                            <i class="icon-desktop"></i>
                            <h4 class="text-xl text-medium">Retina Ready</h4>
                            <p class="text-sm text-regular">Startup Framework works on devices supporting Retina Display. Feel the clarity in each pixel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="default-bg street-bg">
            <section class="layers container">
                <div class="row">
                    <div class="layers__info col-12 col-md-5 offset-xl-1">
                        <div class="layers__title">
                            <h1>Looking cautiously round</h1>
                            <p class="text-xl text-medium">A child was brought in, who had swallowed a necklace o towards made.</p>
                        </div>
                        <div class="layers__list">
                            <div class="layers__item">
                                <i class="icon-squares"></i>
                                <p class="text-md text-bold">Well Structured Layers</p>
                            </div>
                            <div class="layers__item">
                                <i class="icon-desktop"></i>
                                <p class="text-md text-bold">Ready to Prototype</p>
                            </div>        
                            <div class="layers__item">
                                <i class="icon-database"></i>
                                <p class="text-md text-bold">Great Layer Organization</p>
                            </div>
                        </div>
                    </div>
                    <div class="layers__phones col-12 col-md-6 offset-md-1 col-xl-4">
                        <img src="/src/assets/iPhones.png" alt="iphones image">
                    </div>
                </div>
            </section>
        </div>
        <section class="components container">
            <div class="row">
            <div class="components__info col-12 col-md-5 offset-xl-1">
                <h3>Create a beautiful, responsive website 
                like this one in under 60 minutes</h3>
                <p class="text-md text-medium">Introducing 30 brand new designed and coded blocks for your next impressive project</p>
                <button class="green-btn">Explore</button>
            </div>
            <div class="components__card col-12 col-md-5 offset-md-2 col-xl-4">
                <div class="components__item">
                    <i class="icon-reload"></i>
                    <p class="text-md text-bold">Useful Components</p>
                </div>
                <div class="components__item">
                    <i class="icon-doc"></i>
                    <p class="text-md text-bold">30 New Feature Pages</p>
                </div>
                <div class="components__item">
                    <i class="icon-columns"></i>
                    <p class="text-md text-bold">12 Column Grid</p>
                </div>
                <div class="components__item">
                                <i class="icon-star"></i>
                                <p class="text-md text-bold">Happy Costumers</p>
                </div>
            </div>
            </div>
        </section>
        <?php include './components/footer.php' ?>
        <?php viteEntry('src/js/main.js'); ?>
    </main>
</body>
</html>