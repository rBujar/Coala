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
        <div class="default-bg">
            <section class="plan container">
                <div class="row">
                    <div class="plan__title col-12 col-lg-8 offset-lg-2" data-aos="fade" data-aos-delay="100">
                        <h1>Plans & Pricing</h1>
                        <p class="text-xl text-medium">Startup Framework is free forever you only pay for custom
                            domain hosting or to export your site.</p>
                    </div>
                    <div class="plan__cards col-12">
                        <div class="plan__item plan__item--default">
                            <div class="plan__type">
                                <p class="text-xl text-semibold">Starter</p>
                                <h2>9.99<span>$</span></h2>
                            </div>
                            <ul class="plan__features">
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">2 GB of space</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">14 days of backups</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Social integrations</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Client billing</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">Remote access</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">Custom domain</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">24 hours support</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">Admin tools</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">Collaboration tools</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">User management</p>
                                </li>
                            </ul>
                            <div class="plan__button">
                                <button>
                                    <p class="text-md text-medium">Get Started</p>
                                </button>
                            </div>

                        </div>
                        <div class="plan__item plan__item--default">
                            <div class="plan__type">
                                <p class="text-xl text-semibold">Professional</p>
                                <h2>19.99<span>$</span></h2>
                            </div>
                            <ul class="plan__features">
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">2 GB of space</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">14 days of backups</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Social integrations</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Client billing</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Remote access</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Custom domain</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">24 hours support</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">Admin tools</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">Collaboration tools</p>
                                </li>
                                <li>
                                    <p class="text-sm text-regular not-checked">User management</p>
                                </li>
                            </ul>
                            <div class="plan__button">
                                <button>
                                    <p class="text-md text-medium">Get Started</p>
                                </button>
                            </div>
                        </div>
                        <div class="plan__item plan__item--default">
                            <div class="plan__type">
                                <p class="text-xl text-semibold">Team</p>
                                <h2>49.99<span>$</span></h2>
                            </div>
                            <ul class="plan__features">
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">2 GB of space</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">14 days of backups</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Social integrations</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Client billing</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Remote access</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Custom domain</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">24 hours support</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Admin tools</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">Collaboration tools</p>
                                </li>
                                <li> <i class="icon-check"></i>
                                    <p class="text-sm text-regular">User management</p>
                                </li>
                            </ul>
                            <div class="plan__button">
                                <button>
                                    <p class="text-md text-medium">Get Started</p>
                                </button>
                            </div>

                        </div>
                    </div>

            </section>
        </div>
        <div class="dark-bg">
            <section class="client container">
                <div class="row">
                    <div class="client__title col-12 col-xl-8 offset-xl-2" data-aos="fade" data-aos-delay="100">
                        <h1>Our Happy Clients</h1>
                    </div>
                    <div class="client__cards col-12 col-xl-8 offset-xl-2" data-aos="fade" data-aos-delay="150">
                        <div class="client__item">
                            <img src="../src/assets/client-1.svg" alt="client 1">
                            <div class="client__info">
                                <p class="text-md text-medium">Get a fully retina ready site when you build with Startup
                                    Framework. Websites look sharper and more gorgeous on devices with retina display
                                    support</p>
                                <span class="text-xs text-bold">Rayhan Curran</span>
                            </div>
                        </div>
                        <div class="client__item">
                            <img src="../src/assets/client-2.svg" alt="client 2">
                            <div class="client__info">
                                <p class="text-md text-medium">As a business targeting high net worth individuals, we
                                    were looking for a slick, cool and mini-malistic design for our website</p>
                                <span class="text-xs text-bold">Kayley Frame</span>
                            </div>
                        </div>
                        <div class="client__item">
                            <img src="../src/assets/client-3.svg" alt="client 3">
                            <div class="client__info">
                                <p class="text-md text-medium">The most important part of the Startup Framework is the
                                    samples</p>
                                <span class="text-xs text-bold">Gene Whitfield</span>
                            </div>
                        </div>
                        <div class="client__item">
                            <img src="../src/assets/client-4.svg" alt="client 4">
                            <div class="client__info">
                                <p class="text-md text-medium">I've built my website with Startup just in one day, and
                                    it was ready-to-go. </p>
                                <span class="text-xs text-bold">Allan Kim</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include './components/footer.php' ?>
        <?php viteEntry('src/js/main.js'); ?>
    </main>
</body>

</html>