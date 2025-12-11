<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost:5173/src/css/style.scss" />
    <link rel="shortcut icon" type="image/x-icon" href="/src/assets/favicon.ico" />
    <title>Coala</title>
</head>
<body>
    <main>
        <?php include '../components/header.php'?>
        <section class="feature-hero container">
            <div class="row">
                <div class="feature-hero__title col-12 col-xl-8 offset-xl-2">
                    <h1>Create Something Awesome</h1>
                    <p class="text-xl text-medium">We have created a new product that will help designers, developers and companies create websites for their startups quickly and easily.</p>
                </div>
                <div class="feature-hero__cards col-12">
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
        <?php include '../components/footer.php'?>
        <script type="module" src="http://localhost:5173/src/js/main.js"></script>
    </main>
</body>

</html>