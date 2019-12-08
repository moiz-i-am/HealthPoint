<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?= $getsettingData['application_name'] ?>
    </title><!-- 
    <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- css -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/newsitecss.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/animation.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/aos.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/uikit.min.css" rel="stylesheet">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/aos.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/uikit.min.js"></script>
</head>

<body>
    <!-- <div class="loader-div" style=" position: fixed;
      top: 0;
      left: 0;
      right: 0;
      text-align: center;
      width: 100%;
      height: 100%;
      z-index:10000;
      padding-top: 150px;
      overflow:hidden;
      background:#fff;">
      <img src="<?= base_url() ?>assets/images/loader.gif" alt="loader">
       </div> -->
    <!--main site html wraper-->
    <div id="mysitemainwraper" class="w3-animate-bottom">
        <!-- Header -->

        <!-- main contant -->
        <?php $this->load->view($page_content);?>

            <!-- Footer -->
        <?php $this->load->view('common/footer');?>

    </div>

    <script>
        $(document).ready(function() {
            $('body').append('<div id="toTop" class="btn btn-info"><i class="fa fa-angle-up" aria-hidden="true"></i> </div>');
            $(window).scroll(function() {
                if ($(this).scrollTop() != 0) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            });
            $('#toTop').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        });
    </script>

    <!--properties slider-->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 25,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <!--//properties slider-->

    <!--lazy load-->
    <script>
        AOS.init({
            easing: 'ease-in-quad',
        });
    </script>
    <!--//lazy load-->

    <!--scroll to-->
    <script>
        $("#scroll-to-next").click(function() {

            $('html, body').animate({
                scrollTop: $("#scroll-to").offset().top - 60
            }, 1000);
        });
        $(document).ready(function() {
            setTimeout(function() {
                $('.loader-div').hide();
            }, 3000);
        });
    </script>
    <!--//scroll to-->

    <script>
        var sp = document.querySelector('.search-open');
        var searchbar = document.querySelector('.search-inline');
        var shclose = document.querySelector('.search-close');

        function changeClass() {
            searchbar.classList.add('search-visible');
        }

        function closesearch() {
            searchbar.classList.remove('search-visible');
        }
        sp.addEventListener('click', changeClass);
        shclose.addEventListener('click', closesearch);
    </script>
    <script>
        $(document).ready(function() {
            var stickyNavTop = $('.wrapper').offset().top;
            var stickyNav = function() {
                var scrollTop = $(window).scrollTop();
                //if (scrollTop > stickyNavTop) { 
                if (scrollTop >= 160) {
                    $('.wrapper').addClass('sticky');
                    $('.slider_wraper').addClass('margin-top');
                } else {
                    $('.wrapper').removeClass('sticky');
                    $('.slider_wraper').removeClass('margin-top');
                }
            };
            stickyNav();
            $(window).scroll(function() {
                stickyNav();
            });
        });
    </script>
</body>

</html>