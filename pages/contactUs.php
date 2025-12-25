<?php require_once '../vite-helper.php'; ?>
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
        <?php include '../components/header.php'?>
        <div class="default-bg overlay">
            <section class="contact container">
                <div class="row">
                    <div class="contact__content col-12 col-lg-5 col-xl-4 offset-xl-1" data-aos="fade" data-aos-delay="100">
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
                    <div class="contact__formContainer col-12 col-lg-6 offset-lg-1 col-xl-5" data-aos="fade" data-aos-delay="150">
                        <div class="contact__formWrapper">
                        <form action="https://api.web3forms.com/submit" class="contact__form" method="POST" >
                            <div class="contact__fields">
                                <div class="contact__field">
                            <label for="fname">Your Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="First name">
                            </div>
                            <div class="contact__field contact__field--budget">
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
                            <input type="email" id="email" name="email" placeholder="name@mail.com">
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
                            <input type="hidden" name="access_key" value="89f07b6e-8fdd-422b-8a2b-7fe7ddc27c0d">
                        </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="questions container">
            <div class="row">
                <h1 class="col-12" data-aos="fade" data-aos-delay="100">Your questions answered</h1>
                <div class="questions__cards col-12 col-xl-10 offset-xl-1" data-aos="fade" data-aos-delay="150">
                    <div class="questions__item">
                        <h4>How Startup Framework works?</h4>
                        <p class="text-sm text-regular">The Generator App is an online tool that helps you to export ready-made templates ready to work as your future website. It helps you to combine slides, panels and other components and export it as a set of static files: HTML/CSS/JS.</p>
                    </div>
                    <div class="questions__item">
                        <h4>Do you provide hosting with Startup Framework?</h4>
                        <p class="text-sm text-regular">No, hosting is on you. You upload the result on your hosting via FTP or using other tools you like. You can use any server, just make sure it have a PHP installed in case if you need a contact form.</p>
                    </div>
                    <div class="questions__item">
                        <h4>What exactly am I buying?</h4>
                        <p class="text-sm text-regular">You're buying an access to the Startup Generator app to export ready-made templates with the rest source files included. It's an online tool, not a software. For more details about generator's workflow watch this tutorial?</p>
                    </div>
                    <div class="questions__item">
                        <h4>Are you planning to update Startup Framework?</h4>
                        <p class="text-sm text-regular">We are! Here is the changelog of changes we've made after the release. Thanks our clients who helped us to improve our product.</p>
                    </div>
                    <div class="questions__item">
                        <h4>How Startup Framework works?</h4>
                        <p class="text-sm text-regular">The Generator App is an online tool that helps you to export ready-made templates ready to work as your future website. It helps you to combine slides, panels and other components and export it as a set of static files: HTML/CSS/JS.</p>
                    </div>
                    <div class="questions__item">
                        <h4>Do you provide support for customers?</h4>
                        <p class="text-sm text-regular">Yes, we are. Please use our contact us form to chat with us. We DO NOT provide product support via Facebook, Twitter or others sources.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../components/footer.php'?>
        <?php viteEntry('src/js/main.js'); ?>
    </main>
</body>
</html>