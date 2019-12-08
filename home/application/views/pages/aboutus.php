
<header class="header-main-wraper inner-siteheader-wraper">

    <?php $this->load->view('common/header') ?>

        <!--inner page heading-->
        <div class="inner-page-heading">
            <div class="container w3-animate-left">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 ">
                        <h1> About <span>us</span> </h1>
                        <p>
                            <?= $getsettingData['about_page'] ?>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="breadcrumsite"> <a href="<?php echo base_url() ?>"> Home </a><i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#"> About </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--inner page heading-->

</header>
<!-- //header ends-->

<!--content started-->

<div class="site-innercontent-wraper">
    <div class="about-main-wraper">
        <div class="about-texttop-wraper" data-aos="slide-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about-text-wrp">
                            <h3> Lorem Ipsum is simply dummy text of the printing and scrambled typesetting industry. </h3>
                            <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia looked up one of the more obscure Latin words consectetur from a Lorem Ipsum passage nto electronic typesetting
                                <br>
                                <br> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old </p>
                            <div class="inner-service-detail-wraper">
                                <ul>
                                    <li> <img src="<?php echo base_url() ?>assets/images/checkicon1.png" alt=""> looking at its layout The point of using Lorem Ipsum </li>
                                    <li> <img src="<?php echo base_url() ?>assets/images/checkicon1.png" alt=""> It is a long established fact that a reader will be distracted</li>
                                    <li> <img src="<?php echo base_url() ?>assets/images/checkicon1.png" alt=""> looking at its layout The point of using Lorem Ipsum </li>
                                    <li> <img src="<?php echo base_url() ?>assets/images/checkicon1.png" alt=""> looking at its layout The point of using Lorem Ipsum </li>
                                    <li> <img src="<?php echo base_url() ?>assets/images/checkicon1.png" alt=""> looking at its layout The point of using Lorem Ipsum </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="about-image"> <img src="<?php echo base_url() ?>assets/images/aboutimg.png" alt="about image"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aboutus-main-wraper">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 aos-init aos-animate" data-aos="slide-right">
                        <div class="about-text-wraper">
                            <h3> <?= $getsettingData['sell_buy_title'] ?> </h3>
                            <p>
                                <?= $getsettingData['sell_buy_description'] ?>
                            </p>
                            <div class="header-slider-buttons"> <a href="#" class="custom-site-button"> Contact us </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-our-team-wraper">
            <div class="container">
                <h3 data-aos="slide-up"><?= $getsettingData['our_team_title'] ?></h3>
                <p data-aos="slide-up">
                    <?= $getsettingData['our_team_description'] ?>
                </p>
                <div class="carousel-wrap" data-aos="slide-up">
                    <div class="owl-carousel">
                        <?php foreach ($ourteam as $value) { ?>
                            <div class="item">
                                <div class="our-team-listing-wraper">
                                    <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/<?php echo $value['image']?>) no-repeat top"> </div>

                                    <h2> <?= $value['name'] ?> </h2>
                                    <p>
                                        <?= $value['designation'] ?>
                                    </p>
                                    <p>
                                        <?= $value['message'] ?>
                                    </p>

                                    <div class="team-social-media">
                                        <?php if ($value['facebook']) { ?>
                                            <a href="<?= $value['facebook'] ?>" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                                            <?php } ?>

                                                <?php if ($value['twitter']) { ?>
                                                    <a href="<?= $value['twitter'] ?>" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                                    <?php } ?>

                                                        <?php if ($value['google']) { ?>
                                                            <a href="<?= $value['google'] ?>" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                                                            <?php } ?>

                                                                <?php if ($value['linkedin']) { ?>
                                                                    <a href="<?= $value['linkedin'] ?>" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                                                                    <?php } ?>

                                                                        <?php if ($value['instagram']) { ?>
                                                                            <a href="<?= $value['instagram'] ?>" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                                                                            <?php } ?>
                                    </div>
                                </div>
                                
                            </div>
                            <?php } ?>

                    </div>
                </div>
                <div class="about-our-team-button"><a href="<?php echo base_url() ?>ourteam" class="custom-site-button"> View All Team</a></div>
            </div>
    </div>


         <div class="find-location-wraper">
            <div class="container">
                <h3 data-aos="slide-up" class="aos-init aos-animate"> <?= $getsettingData['free_consultation_title'] ?> </h3>
                <p data-aos="slide-up" class="aos-init aos-animate">
                    <?= $getsettingData['free_consultation_description'] ?>
                </p>
                <form class="row aos-init aos-animate" data-aos="slide-left">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <select class="form-control">
                                <option>Area</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <select class="form-control">
                            <option>Property Type</option>
                            <option>Rental</option>
                            <option>Buy</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 col-sm-12  col-xs-12">
                        <div class="form-consult-button"> <a href="#" class="custom-site-button"> Consultation Now </a> </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>
</div>
<!--//content ends-->