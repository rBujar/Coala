<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost:5173/src/css/style.scss"/>
    <link rel="shortcut icon" type="image/x-icon" href="/src/assets/favicon.ico" />
    <title>Coala</title>
  </head>
  <body>
    <header class="header container">
      <div class="header__logo">
        <h2>Coala</h2>
      </div>
      <nav class="header__nav">
      <div class="header__buttons">
          <button class="header__buttons--signIn"><p class="text-md text-regular">Sign in</p></button>
          <button class="green-btn header__buttons--signUp"><p class="text-md text-regular">Sing Up</p></button>
        </div>
        <ul class="header__menu">
          <li class="header__item" ><a href="#">Home</a></li>
          <li class="header__item" ><a href="#">Features</a></li>
          <li class="header__item" ><a href="#">Blog</a></li>
          <li class="header__item" ><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      <div class="header__hamburger">
        <span class="header__hamburger--bar header__hamburger--bar--top"></span>
        <span class="header__hamburger--bar header__hamburger--bar--middle"></span>
        <span class="header__hamburger--bar header__hamburger--bar--bottom"></span>
      </div>
    </header>
    <script type="module" src="http://localhost:5173/src/js/main.js"></script>
  </body>
</html>
