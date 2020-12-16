<section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
    <div class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-md-6">
                <!-- Google Maps - Settings on footer -->
                <div id="googlemaps" class="google-ma h-100 mb-0" style="min-height: 400px;"></div>
            </div> --}}

            <div class="col-lg-12 p-4 my-5">
                <h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2>

                <p class="text-3 mb-4">LOREM IPSUM DOLOR SIT A MET</p>

                <form class="contact-form" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" placeholder="Subject" required>
                    </div>

                    <div class="form-group">
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="SUBMIT" class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2" data-loading-text="Loading...">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
