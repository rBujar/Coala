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
        <div class="default-bg overlay">
            <section class="contact container">
                <div class="row">
                    <div class="contact__content col-12 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="contact__title">
                        <h1>Let's Keep in Touch</h1>
                        <p class="text-xl text-medium">We have created a new product that will help designers, developers and companies create websites for their startups quickly and easily.</p>
                    </div>
                    <div class="contact__infos">
                        <div class="contact__info">
                            <i class="icon-phone"></i>
                            <span class="text-sm text-regular">+1 555 505 5050</span>
                        </div>
                        <div class="contact__info">
                            <i class="icon-mail"></i>
                            <span class="text-sm text-regular">info@designmodo.com</span>
                        </div>
                        <div class="contact__info">
                            <i class="icon-building"></i>
                            <span class="text-sm text-regular">San Francisco, CA560 Bush St & 20th Ave, Apt5 San Francisco, 230909</span>
                        </div>
                    </div>
                    </div>
                    <div class="contact__formContainer col-12 col-lg-6 offset-lg-1 col-xl-5">
                        <div class="contact__formWrapper">
                        <form action="" class="contact__form" >
                            <div class="contact__fields">
                                <div class="contact__field">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="First name">
                            </div>
                            <div class="contact__field">
                            <label for="budget">Budget</label>
                            <select name="budget" id="budget">
                                <option value="250">250$</option>
                                <option value="500">500$</option>
                                <option value="800">800$</option>
                            </select>
                            </div>
                            </div>
                            <div class="contact__fields">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="example@gmail.com">
                            <label for="message">Your Message</label>
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="contact__fields">
                            <div class="contact__checkbox">
                            <input type="checkbox" id="copy" name="copy" value="copy">
                            <label for="copy">Send me a copy</label>
                            </div>
                            <button class="green-btn" type="submit"><p class="text-md text-regular">Send</p></button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script type="module" src="http://localhost:5173/src/js/main.js"></script>
    </main>
</body>

</html>