<?php
    $title = "Contact Us || Seo Assistances";
    include 'header.php';
?>
            <section class="inner-banner-wrapper paralaxbg sem-banners" data-paralaxbg-speed="2">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class='banner-text'>
                                    <h2>Contact Us</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-us-section">
                <div class="container">
                    <!--Section Title-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title-bold">Contact Us</h2>
                                
                            </div>
                        </div>
                    </div>
                    <!--End of Section Title-->
                    <div class="row">
                        <div class="col-md-6 left-info-contact">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h3 class="r-m-t-0">Address</h3>
                                    <p> 385-A, Gandhi Nagar,<br> Jammu<br> Jammu and  Kashmir 180004</i></p>
                                </div>
                                <!--<div class="col-md-12 text-center mt-30">
                                    <h3>Phone</h3>
                                    <p>
                                        <a style="color: #000000;" href="tel: +x-xxx-xxx-xxxx">+x-xxx-xxx-xxxx</a></p>
                                    
                                </div>-->
                                <div class="col-md-12 text-center mt-30">
                                    <h3>E-mail</h3>
                                    <p> <a style="color: #000000;" href="mailto: contact@seoassistances.com">contact@seoassistances.com</a></p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="seo-audit-section">
                                <form action="mailsend.php" class="validation-form">
                                    <!-- <h3>Contact With Us</h3> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon icon-user" id="user-name"></span>
                                                <input type="text" class="form-control white-ph" placeholder="Enter your name" aria-label="user-name"   name="contactUsName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">       
                                            <div class="input-group">
                                                <span class="input-group-addon icon-telephone2" id="phone-number"></span>
                                                <input type="text" class="form-control white-ph" placeholder="Phone" aria-label="phone-number"  name="contactUsPhone" required>
                                            </div>
                                        </div><!--column ends here -->
                                    </div><!--row ends here-->
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon icon-envelope" id="email-address-contact"></span>
                                        <input type="text" class="form-control white-ph" placeholder="Enter your e-mail" aria-label="email-address" name="contactUsEmail" required>
                                    </div>
                                    <div class="input-group">
                                        <textarea class="form-control white-ph" placeholder="Enter your message" name="contactUsMsg" required></textarea>
                                    </div>
                                    <div class="input-group">
                                        <input type="Submit" class="form-control btn white-btn-lg" name="submit" value="Submit" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                include 'footer.php';
            ?>