<!-- header started-->
<header class="header-main-wraper " style="height:395px; ">

    <?php $this->load->view('common/header') ?>

        <!--inner page heading-->
        <div class="inner-page-heading" style="height:300px;">
            <div class="container w3-animate-left">
                <div class="row">

                    <div class="col-md-8 col-sm-8 col-xs-12 ">
                        <h1> <span>Details</span>  </h1>
                        <p>Following are relevant doctors according to your desease</p>
                    </div>

                </div>
            </div>
        </div>
        <!--inner page heading-->

</header>
<!-- //header ends-->

<!--content started-->
<div class="site-innercontent-wraper">

    <div class="our-teammain-wraper">
        <div class="container">
            <div class="row">
                <?php foreach ($ourteam as $value) { ?>
                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="our-team-listing-wraper">
                        
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/<?php echo $value['image']?>) no-repeat top"> </div>

                        <h2> <?= $value['name'] ?> </h2>
                        <p> <?= $value['designation'] ?> </p>
                        <p> <?= $value['message'] ?> </p>

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

                <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg1.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg2.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg1.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg2.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg1.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg2.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg1.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="our-team-listing-wraper">
                        <div class="our-team-listing-image" style="background:url(<?php echo base_url() ?>assets/images/testimonialimg2.png) no-repeat top"> </div>
                        <h2> Richard Branson </h2>
                        <p> Engineer </p>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's </p>

                        <div class="team-social-media">
                            <a href="#" class="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" class="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="#" class="googleplus"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" class="linkedin"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                            <a href="#" class="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                </div> -->

            </div>
        </div>
    </div>

</div>
<!--//content ends-->