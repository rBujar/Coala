<?php require_once 'vite-helper.php'; ?>
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
  <?php include 'components/header.php'?>
  <section class="hero container">
    <div class="row">
      <div class="hero__item col-12 col-xl-8 offset-xl-2">
        <div class="hero__title">
          <h1>Startup Framework</h1>
          <p class="text-xl text-regular">We made it so beutiful and simple. It combines landings, pages, blogs and shop
            screens. It is definitely the tool you need in your collection!</p>
        </div>
        <div class="hero__button">
          <button class="header__button green-btn"><p class="text-md text-regular">Purchase Now for $248</p></button>
          <a href="#" class="text-md text-medium">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <div class="default-bg">
    <section class="preview container">
      <div class="row">
        <div class="preview__video col-12">
          <h1>We've created the product that will help your startup look better</h1>
          <video autoplay muted>
            <source src="/src/assets/preview-video.mp4" type="video/mp4">
          </video>
        </div>
        <div class="preview__design col-12">
          <div class="preview__item">
            <div class="preview__image">
            <img src="/src/assets/planet.svg" alt="planet">
            </div>
            <div class="preview__title">
              <h4>Fell our design</h4>
              <p class="text-xs text-regular">Startup Design Framework contains components which can easily be integrated into almost any design.</p>
            </div>
          </div>
          <div class="preview__item">
            <div class="preview__image">
            <img src="/src/assets/colorful-core.svg" alt="colorful core">
            </div>
            <div class="preview__title">
              <h4>High Resolution</h4>
              <p class="text-xs text-regular">We did a 2.5K size high resolution photo that will suit even for a very web site.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="product container">
    <div class="row">
      <div class="product__title col-12 col-xl-8 offset-xl-2">
        <h1>Multi Useful Components</h1>
        <p class="text-xl text-medium">We have created a new product that will help designers, developers and companies create websites for their startups quickly and easily.</p>
      </div>
      <div class="product__item col-12">
        <div class="product__components">
          <div class="product__component">
            <h4>Retina Ready</h4>
            <p class="text-sm text-regular">Startup Framework works fine on devices supporting Retina Desplay. Feel the clarity!</p>
          </div>
          <div class="product__component">
            <h4>Responsive Layout</h4>
            <p class="text-sm text-regular">Of course we haven't forgotten about the responsive layout. Full mobile support.</p>
          </div>
          <div class="product__component">
            <h4>Full Contol</h4>
            <p class="text-sm text-regular">Easily change and tweak your content when you need to, however you want. No more third party vendor-lock-in.</p>
          </div>
        </div>
        <div class="product__phone">
          <img src="/src//assets/phone.svg" alt="phone image">
        </div>
      </div>
    </div>
  </section>
  <div class="default-bg">
    <section class="build container">
      <div class="row">
        <div class="build__content col-12 col-xl-5 offset-xl-1">
          <div class="build__title">
            <h1>Build Your Own Site Like a Big Company</h1>
            <p class="text-xl text-medium">We have created a new product that will help designers, developers and
              companies create websites for their startups.</p>
          </div>
          <button class="green-btn">Learn More</button>
        </div>
        <div class="build__features col-12 col-xl-5 offset-xl-1">
          <div class="build__item">
            <i class="icon-cloud"></i>
            <div class="build__item-title">
              <h4>Splashproof Design</h4>
              <p class="text-sm text-regular">You'll get a description of each component and learn how to connect and
                use them.</p>
            </div>
          </div>
          <div class="build__item">
            <i class="icon-book"></i>
            <div class="build__item-title">
              <h4>User Guide</h4>
              <p class="text-sm text-regular">At length one of them called out in a clear, polite, smooth dialect, not
                unlike in sound.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="promo container">
    <div class="row">
      <div class="promo__content col-12 col-xl-8 offset-xl-2">
        <div class="promo__icons">
          <i class="icon-code"></i>
          <i class="icon-heart"></i>
          <i class="icon-star"></i>
        </div>
        <div class="promo__title">
          <h1>Better Landing For Your Startup</h1>
          <p class="text-xl text-medium">We have created a new product that will help designers, developers and companies create websites for their startups quickly and easily.
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php include 'components/footer.php'?>
  <?php viteEntry('src/js/main.js'); ?>
</body>
</html>