<?php require 'header.php';?>

<!-- SECTION 1 - CONTACT MAP -->
<section class="hero-title">
    <h2>Contact Us<small>For a Sweet cakes</small></h2>
</section>
<!-- // SECTION 1 -->

<!-- SECTION 2 - CONTACT -->
<section class="contact space">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Say Hello! Don’t Be Shy</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ulla corper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <form action="contactform/contact-form-handler.php" method="post" name="contactform">
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                            <input type="text" class="form-control" placeholder="Website">
                        </div>
                        <div class="col-xs-12">
                            <textarea class="form-control" name="message" id="message" rows="10" placeholder="Write Message"></textarea>
                            <button type="submit" name="submit" class="btn btn-default btn-colored btn-fullwidth">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="contact-description">
                <div class="col-md-6">
                    <div class="info-box">
                        <div class="align">
                            <h4>Get Free Support</h4>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-headphones"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-box">
                        <div class="align">
                            <h4>Connect With Us</h4>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-thumbs-o-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // SECTION 2 -->

<?php require 'footer.php';?>
