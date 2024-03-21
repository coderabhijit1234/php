<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
        <title>Contact Form</title>
    </head>
    <body>
        <div class="container">
            <span class="big-circle"></span>
            <img src="img/shape.png" class="square" alt="" />
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Let's get in touch</h3>
                    <p class="text">
                        Have a question or idea? We'd love to hear from you! Fill out the form below and we'll be in touch soon.
                    </p>
                    <div class="info">
                        <div class="information">
                            <img src="img/location.png" class="icon" alt="" />
                            <p>Asansol, West Bengal, India</p>
                        </div>
                        <div class="information">
                            <img src="img/email.png" class="icon" alt="" />
                            <p>souviksvs2008@gmail.com</p>
                        </div>
                        <div class="information">
                            <img src="img/phone.png" class="icon" alt="" />
                            <p>+91 98324 95697</p>
                        </div>
                    </div>
                    <div class="social-media">
                        <p>Connect with us :</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="form.php" autocomplete="off" id="contact-form" method="post">
                        <?php
                            echo((!empty($errorMessage)) ? $errorMessage : '')
                        ?>
                        <h3 class="title">Contact us</h3>
                        <div class="input-container">
                            <input type="text" name="name" class="input" autocomplete="off"/>
                            <label for="">Fullname</label>
                            <span>Fullname</span>
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" class="input" autocomplete="off"/>
                            <label for="">Email</label>
                            <span>Email</span>
                        </div>
                        <div class="input-container">
                            <input type="tel" name="phone" class="input" autocomplete="off"/>
                            <label for="">Phone</label>
                            <span>Phone</span>
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input" autocomplete="off"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                        </div>
                        <input type="submit" value="Send" class="btn" />
                    </form>
                </div>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>