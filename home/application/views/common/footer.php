
    
    <!--footer-->
    <div class="footer-wraper">
      <div class="container aos-init aos-animate" data-aos="slide-right">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="footer-logo"> <a href="<?php echo base_url()?>"> <img src="assets/images/footerlogo.png" alt=""> </div>
            
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="footer-links-wraper">
              <h2> Quick Links </h2>
              <ul>
                <li> <a href="<?php echo base_url()?>"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Home </a> </li>
                <li> <a href="<?php echo base_url()?>aboutus"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> About us </a> </li>
                <li> <a href="<?php echo base_url()?>projects"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Project </a> </li>
                <li> <a href="<?php echo base_url()?>maps"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Maps </a> </li>
                <li> <a href="<?php echo base_url()?>contactus"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact us </a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="footer-contact-heading"> Contact us </div>
            <div class="footer-info"> <strong>Adress :</strong> <?= $getsettingData['address'] ?><br>
              <strong>Phone:</strong> <?= $getsettingData['phone_number'] ?><br>
              <strong>Email:</strong> <?= $getsettingData['receiving_email'] ?></div>
          </div>
        </div>
        <div class="termservice-social">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="footer-termservice"> <a href="#"> Privacy Policy </a> <a href="#"> Terms of Service </a> </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="footer-social"> 
                <?php if ($getsettingData['facebook']) { ?>
                <a href="<?= $getsettingData['facebook'] ?>"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> 
                 <?php }?>

                <a href="<?= $getsettingData['instagram'] ?>"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> 

                <a href="<?= $getsettingData['twitter'] ?>"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> 

                <a href="<?= $getsettingData['linkedin'] ?>"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> 

                <a href="<?= $getsettingData['youtube'] ?>"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a> 

                <a href="<?= $getsettingData['pinterest'] ?>"> <i class="fa fa-pinterest-p" aria-hidden="true"></i> </a> 

              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!--copyright-->
      <div class="footer-copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="copyright-text"> Copyrights <i class="fa fa-copyright" aria-hidden="true"></i> CurePak</div>
            </div>
           
          </div>
        </div>
      </div>
      <!--copyright--> 
      
    </div>
    <!--footer--> 
    
  </div>
  <!--footer started-->
  
  <div class="search-popup-wraper">
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog"> 
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-seach-wraper w3-animate-bottom">
              <div class="modal-seach-heading"> Search Property </div>
              <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Select Type</label>
                  <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Bedrooms</label>
                  <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Baths</label>
                  <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Area</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" x>
                </div>
                <div class="form-group-button">
                  <input type="button" value="Find Propery" class="searchform-button">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--social fixed-->
  <div class="socail-icon-fixed  w3-animate-right"> 
  
    
    
      <p style="font-weight: bold">Emergency</p>
      <p style="font-weight: bold">Doctor</p>
    <?php if ($getsettingData['google_plus']) { ?>
    <a href="#" class="googleplus"> <i class="fa fa-phone" aria-hidden="true"></i> </a>
    <?php }?> 

  

   
  </div>
  <!--//social fixed--> 
  
</div>