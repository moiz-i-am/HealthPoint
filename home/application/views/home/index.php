
   <!-- header started-->
  <header class="header-main-wraper"> 
    
   <?php $this->load->view('common/header');?> 

    
    <!--listing header-->
    <!-- <div class="listing-header-wraper">
      <div class="container">
        <ul>
          <li class="w3-animate-bottom" > <a href="#"> <img src="<?= base_url()?>assets/images/headericon1.png" alt="header-icon"> <span> Homes </span> </a> </li>
          <li class="w3-animate-bottom"> <a href="#"> <img src="<?= base_url()?>assets/images/headericon2.png" alt="header-icon"> <span> Apartments </span> </a> </li>
          <li class="w3-animate-bottom"> <a href="#"> <img src="<?= base_url()?>assets/images/headericon3.png" alt="header-icon"> <span> Shops </span> </a> </li>
          <li class="w3-animate-bottom"> <a href="#"> <img src="<?= base_url()?>assets/images/headericon4.png" alt="header-icon"> <span> Offices </span> </a> </li>
          <li class="w3-animate-bottom"> <a href="#"> <img src="<?= base_url()?>assets/images/headericon5.png" alt="header-icon"> <span> Plots </span> </a> </li>
        </ul>
      </div>
    </div> -->
    <!--listing header--> 
    
    <!--vides-->
    <div class="video-wraper-header">
      <video autoplay muted="" loop id="background" __idm_id__="329076737">
        <source src="<?= base_url() ?>assets/video/video.mp4" type="video/webm">
      </video>
    </div>
    <!--video--> 
    
  </header>
  <!-- //header ends--> 
  
  <!--content started-->
  <div class="content-main-wraper"> 
    
    <!--latest properties-->
    <div class="latest-properties-wraper" id="scroll-to">
      <div class="container" data-aos="slide-up">
        <h1> <?= $getsettingData['properties_title'] ?> </h1>
        <p> <?= $getsettingData['properties_description'] ?> </p>
        <div class="carousel-wrap" data-aos="slide-up">
          <div class="owl-carousel">
            <?php foreach ($getproperties as $value) { ?>
            <div class="item">
              <div class="latest-property-listing">
                <div class="latest-property-images" style="background:url(<?php echo base_url()?>assets/images/<?php echo $value['image']?>) no-repeat top;"> <a href="#">
                  <div class="categori-wraper"> <span class="forrental-text"> For <?= $value['for1'] ?> </span> <span> <?= $value['for2'] ?> </span> </div>
                  </a> </div>

                  
                <div class="latest-property-text"> <a href="#"> <?= $value['title'] ?> </a>
                  <p> <img src="<?php echo base_url()?>assets/images/propertyicon1.png" alt="icon"> <?= $value['address'] ?> </p>
                  <p> <img src="<?php echo base_url()?>assets/images/propertyicon2.png" alt="icon"> <?= $value['phone'] ?> </p>
                  <div class="price-property"> Rs <?= $value['price'] ?></div>
                </div>
                <div class="property-info-wraper">
                  <ul>
                    <li> <img src="<?php echo base_url()?>assets/images/propertyicon3.png" alt="icon"> <?= $value['bed'] ?> Bed </li>
                    <li> <img src="<?php echo base_url()?>assets/images/propertyicon4.png" alt="icon"><?= $value['bath'] ?> Bath </li>
                    <li> <img src="<?php echo base_url()?>assets/images/propertyicon5.png" alt="icon"><?= $value['marla'] ?> Marla </li>
                  </ul>
                </div>
              </div>
            </div>
          <?php } ?>
           <!--  <div class="item">
              <div class="latest-property-listing">
                <div class="latest-property-images" style="background:url(<?php //echo base_url()?>assets/images/propertyimg2.jpg) no-repeat top;"> <a href="#">
                  <div class="categori-wraper"> <span class="forrental-text"> For Sale </span> <span> House </span> </div>
                  </a> </div>
                <div class="latest-property-text"> <a href="#"> Luxury villa with oceanview </a>
                  <p> <img src="<?php //echo base_url()?>assets/images/propertyicon1.png" alt="icon"> 1234 Bharia Town Islamabad </p>
                  <p> <img src="<?php //echo base_url()?>assets/images/propertyicon2.png" alt="icon"> +051 2223487 </p>
                  <div class="price-property"> Rs 1,000,000 </div>
                </div>
                <div class="property-info-wraper">
                  <ul>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon3.png" alt="icon"> 2 Bed </li>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon4.png" alt="icon">3 Bath </li>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon5.png" alt="icon">10 Marla </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="latest-property-listing">
                <div class="latest-property-images" style="background:url(<?php //echo base_url()?>assets/images/propertyimg3.jpg) no-repeat top;"> <a href="#">
                  <div class="categori-wraper"> <span class="forrental-text"> For Rent </span> <span> House </span> </div>
                  </a> </div>
                <div class="latest-property-text"> <a href="#"> Royal Town house with pool </a>
                  <p> <img src="<?php //echo base_url()?>assets/images/propertyicon1.png" alt="icon"> 1234 Bharia Town Islamabad </p>
                  <p> <img src="<?php //echo base_url()?>assets/images/propertyicon2.png" alt="icon"> +051 2223487 </p>
                  <div class="price-property"> Rs 9,000,000 </div>
                </div>
                <div class="property-info-wraper">
                  <ul>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon3.png" alt="icon"> 2 Bed </li>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon4.png" alt="icon">3 Bath </li>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon5.png" alt="icon">10 Marla </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="latest-property-listing">
                <div class="latest-property-images" style="background:url(<?php //echo base_url()?>assets/images/propertyimg4.jpg) no-repeat top;"> <a href="#">
                  <div class="categori-wraper"> <span class="forrental-text"> For Rent </span> <span> House </span> </div>
                  </a> </div>
                <div class="latest-property-text"> <a href="#"> Best town house in New York </a>
                  <p> <img src="<?php //echo base_url()?>assets/images/propertyicon1.png" alt="icon"> 1234 Bharia Town Islamabad </p>
                  <p> <img src="<?php //echo base_url()?>assets/images/propertyicon2.png" alt="icon"> +051 2223487 </p>
                  <div class="price-property"> Rs 9,000,000 </div>
                </div>
                <div class="property-info-wraper">
                  <ul>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon3.png" alt="icon"> 2 Bed </li>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon4.png" alt="icon">3 Bath </li>
                    <li> <img src="<?php //echo base_url()?>assets/images/propertyicon5.png" alt="icon">10 Marla </li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="latest-property-button"> <a href="<?php echo base_url()?>home/properties" class="custom-site-button"> Browse More Property </a> </div>
      </div>
    </div>
    <!--//latest properties--> 
    
    <!--about us-->
    <div class="aboutus-main-wraper">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="slide-right">
            <div class="about-text-wraper">
              <h3> <?= $getsettingData['sell_buy_title'] ?> </h3>
              <p> <?= $getsettingData['sell_buy_description'] ?> </p>
              <div class="header-slider-buttons"> <a href="#" class="custom-white-button"> More About us</a> <a href="#" class="custom-site-button"> Contact us </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--about us--> 
    
    <!--how it works-->
    <div class="how-it-work-wraper" data-aos="slide-up">
      <div class="container">
        <h3> <?= $getsettingData['how_work_title'] ?> </h3>
        <p data-aos="slide-top"> <?= $getsettingData['how_work_description'] ?> </p>
        <ul class="row" >
          <li class="col-md-4 col-sm-6 col-xs-12">
            <div class="howitwork-listing-wrp">
              <h4> Search Property from Anywhere </h4>
              <div class="icon-howitwork-listing"> <img src="<?php echo base_url()?>assets/images/listingicon1.png" alt="service icon"> </div>
              <div class="howitwork-words"> 01 </div>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's. </p>
            </div>
          </li>
          <li class="col-md-4 col-sm-6 col-xs-12">
            <div class="howitwork-listing-wrp">
              <h4> Professional & Friendly Agents </h4>
              <div class="icon-howitwork-listing"> <img src="<?php echo base_url()?>assets/images/listingicon2.png" alt="service icon"> </div>
              <div class="howitwork-words"> 02 </div>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's. </p>
            </div>
          </li>
          <li class="col-md-4 col-sm-6 col-xs-12">
            <div class="howitwork-listing-wrp">
              <h4> Buy and Sell Awesome Property</h4>
              <div class="icon-howitwork-listing"> <img src="<?php echo base_url()?>assets/images/listingicon3.png" alt="service icon"> </div>
              <div class="howitwork-words"> 03 </div>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's. </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!--//how it works--> 
    
    <!--find by location-->
    <div class="find-location-wraper">
      <div class="container">
        <h3 data-aos="slide-up"> <?= $getsettingData['free_consultation_title'] ?> </h3>
        <p  data-aos="slide-up"> <?= $getsettingData['free_consultation_description'] ?> </p>
        <form class="row" data-aos="slide-left">
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
    <!--find by location--> 
    
  </div>
  <!--//content ends--> 

