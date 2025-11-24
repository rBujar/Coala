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
  <?php include 'components/header.php' ?>
  <section class="hero container">
    <div class="row">
      <div class="hero__item col-12">
        <div class="hero__title">
          <h1>Startup Framework</h1>
          <p class="text-xl text-regular">We made it so beutiful and simple. It combines landings, pages, blogs and shop
            screens. It is definitely the tool you need in your collection!</p>
        </div>
        <div class="hero__button">
          <button class="header__button green-btn">Purchase Now for $248</button>
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
  <script type="module" src="http://localhost:5173/src/js/main.js"></script>
</body>
</html>