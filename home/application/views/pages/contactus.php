<!-- header started-->
<header class="header-main-wraper "style="height: 300px;">

    <?php $this->load->view('common/header') ?>

        <!--inner page heading-->
        <div class="inner-page-heading"style="height: 300px;">
            <div class="container w3-animate-left">
                <div class="row">

                    <div class="col-md-8 col-sm-8 col-xs-12 ">
                        <h1>  Contact <span>us</span>  </h1>
                        <p><?= $getsettingData['contact_page'] ?> </p>
                    </div>
                    </div>

                </div>
            </div>
        </div>
        <!--inner page heading-->

</header>
<!-- //header ends-->

<!--content started-->
<div class="inner-contact-wraper">

    <div class="top-contact-listing-wraper">
        <div class="container">
            <ul class="row">

                <li class="col-md-4">
                    <div class="contact-info-wrp">

                        <div class="contact-info-icon"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>

                        <div class="contact-info-text">
                            <h4> Location:</h4>
                            <p>
                                <?= $getsettingData['address'] ?>
                            </p>
                        </div>

                    </div>
                </li>

                <li class="col-md-4">
                    <div class="contact-info-wrp">

                        <div class="contact-info-icon"> <i class="fa fa-mobile" aria-hidden="true"></i> </div>

                        <div class="contact-info-text">
                            <h4> Phone:</h4>
                            <p>
                                <?= $getsettingData['phone_number'] ?>
                            </p>
                        </div>

                    </div>
                </li>

                <li class="col-md-4">
                    <div class="contact-info-wrp">

                        <div class="contact-info-icon"> <i class="fa fa-mobile" aria-hidden="true"></i> </div>

                        <div class="contact-info-text">
                            <h4> Email:</h4>
                            <p>
                                <?= $getsettingData['receiving_email'] ?>
                            </p>
                        </div>

                    </div>
                </li>

            </ul>
        </div>
    </div>

    <div class="contact-map">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27257965.347988382!2d-113.74693464487116!3d33.49127196255418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1staxes!5e0!3m2!1sen!2s!4v1542012692078" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>

    <div class="contact-form-wraper" data-aos="slide-up">
        <div class="container">
            <div class="contact-from-heading"> Ready to Get Started? </div>

            <form class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-textarea-control">
                        <textarea class="textarea-control" rows="6" placeholder="Your Message"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="save-contact-button">
                        <input type="button" value="Submit" class="button-save-button">
                    </div>
                </div>

            </form>

        </div>
    </div>

</div>
<!--//content ends-->