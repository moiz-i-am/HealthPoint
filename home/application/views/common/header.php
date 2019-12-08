


<!--header-->
    <div class="top-bottom-header w3-animate-top">
      
      <!--topbar-->
      <div class="header-topbar-wraper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="top-header-phonenumber w3-animate-left"> <a href="#"> <img src="<?= base_url()?>assets/images/phone.png" alt="phone"> <strong>Need Help Call Now!</strong> <?= $getsettingData['phone_number'] ?> </a> </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="social-topbar-wraper w3-animate-right">
               
               <?php if ($getsettingData['facebook']) { ?>
               <a href="<?= $getsettingData['facebook'] ?>" class=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
               <?php }?>

                <?php if ($getsettingData['twitter']) { ?>
                <a href="<?= $getsettingData['twitter'] ?>" class=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a> 
                <?php }?>

                <?php if ($getsettingData['google_plus']) { ?>
                <a href="<?= $getsettingData['google_plus'] ?>" class=""> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                <?php }?>

                <?php if ($getsettingData['linkedin']) { ?>
                <a href="<?= $getsettingData['linkedin'] ?>" class=""> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                <?php }?> 

                <?php if ($getsettingData['instagram']) { ?>
                <a href="<?= $getsettingData['instagram'] ?>" class=""> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                <?php }?>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!--/topbar--> 
      
      <!--logo, navigation-->
      <div class="header-wraper wrapper">
        <div class="container-fluid">
          <div class="row"> 
            
            <!--logo-->
            <div class="col-md-3 col-sm-4">
              <div class="logo-wraper"> <a href="<?php echo base_url()?>"> <img src="assets/images/headerlogo.png" alt="logo"> </a> </div>
            </div>
            <!--//logo--> 
            
            <!--navigation-->
            <div class="col-md-9 col-sm-8">
              <nav class="header-navigation-wraper">
                <ul>
                    <li> <a href="<?=  base_url() ?>bloglisting">Home </a> </li>
<!--                  <li> <a href="//
"> Find Doctor </a> </li>-->
                  <li> <a href="<?=  base_url() ?>bloglisting"> Get Consultation on <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                    <div class="dropdown-header">
                      <ul>
                        <li> <a href="<?=  base_url() ?>ourteam"> Gynacolgy </a> </li>
                        <li> <a href="<?=  base_url() ?>ourteam"> Dermatology </a> </li>
                        <li> <a href="<?=  base_url() ?>ourteam"> General Physician </a> </li>
                        <li> <a href="<?=  base_url() ?>ourteam"> Pulmunology </a> </li>
                        <li> <a href="<?=  base_url() ?>ourteam"> Urology </a> </li>
                      
                      </ul>
                    </div>
                  </li>
                  
                  
                  <li> <a href="<?=  base_url() ?>bloglisting">Find doctor  </a> </li>
                  <li> <a href="<?=  base_url() ?>contactus"> Contact us <i class="fa fa-angle-down" aria-hidden="true"></i> </a> </li>
                  <li> <a href="#"> Login <i class="fa fa-angle-down" aria-hidden="true"></i> </a> </li>
                  <li> <a href="javascript:void(0)" class="search-open"> <i class="fa fa-search"></i> </a> </li>
                </ul>
              </nav>
              <div class="menu-bars w3-animate-right">
                <div class="uk-offcanvas-content">
                  <button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-flip"><img class="img-responsive" src="<?= base_url()?>assets/images/barswhite.png" alt=""></button>
                  <a href="#" class="modal-search-popup" data-toggle="modal" data-target="#myModal"> <img src="<?= base_url()?>assets/images/icons8-search-50.png" alt="search"> </a>
                  <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                    <div class="uk-offcanvas-bar">
                      <button class="uk-offcanvas-close" type="button" uk-close></button>
                      <ul class="nav navbar-nav navbar-right">
                        <li> <a href="#"> Home </a> </li>
                        <li>
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" href="#collapse1">About us <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></a> </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse">
                                <ul class="list-group">
                                  <li class="list-group-item"><a href="#">Team</a></li>
                                  <li class="list-group-item"><a href="#">Overview</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li> <a href="#"> Project </a> </li>
                        <li> <a href="#"> Maps </a> </li>
                        <li> <a href="#"> Blogs </a> </li>
                        <li> <a href="#"> Contact us </a> </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--navigation--> 
            
            <!--header search-->
            <div class="searching">
              <div class="search-inline">
                <form>
                  <input type="text" class="form-control" placeholder="Find Your Property...">
                  <button type="submit"> <i class="fa fa-search"></i> </button>
                  <a href="javascript:void(0)" class="search-close"> <i class="fa fa-times"></i> </a>
                </form>
              </div>
            </div>
            <!--header search--> 
            
          </div>
        </div>
      </div>
      <!--//logo, search, navigation--> 
      
    </div>
<!--header--> 