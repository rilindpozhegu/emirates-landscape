<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Tab Logo -->
    <link rel="icon" href="img/fav_icon-01.png">
    <title>Emirates Landscape</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="build/styles.css">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<style type="text/css">
    .active7 {
          background-color: #C93851 !important;
          color: white !important;
          transition: ease-in-out all 0.2s;
    }
</style>
   <!-- Navigation -->
    <?php include 'navigationbar.php';?>


    <!-- Slider -->
    <?php include 'slider_top.php';?>


  <!-- Text Inside Slider -->
    <div class="logo-slider-over col-md-12 container mobile-d-n">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">GET IN TOUCH WITH US</h1><!-- 
        <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">Emirates Landscape LLC is a landscaping and irrigation company and was set up to meet the growing demand<br>for high quality construction of outdoor recreation and horticultural facilities.</p> --><!-- 
        <a href="contact_page.php"><button class="slider-top-button wow bounceIn hover_effect_buttons" data-wow-duration="1s" data-wow-delay=".7s">Get in touch</button></a> -->
    </div>  

        <!-- Header Mobile -->
    <section class="header_mobile_about desktop-d-n">
        <div class="container">
            <div class="row">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">GET IN TOUCH WITH US</h1><!-- 
        <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">Emirates Landscape LLC is a landscaping and irrigation company and was set up to meet the growing demand<br>for high quality construction of outdoor recreation and horticultural facilities.</p> --><!-- 
        <a href="contact_page.php"><button class="slider-top-button wow bounceIn hover_effect_buttons" data-wow-duration="1s" data-wow-delay=".7s">Get in touch</button></a> -->
            </div>
        </div>
    </section>

<!-- Fist Section on the About Page -->

<section class="first_section_about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="padding-top: 2%;">
                <h3 style="font-size: 40px;">Talk to A Human</h3>
                <p>You’re not going to hit a ridiculously long phone menu when you call us. Your email isn’t going to the inbox abyss, never to be seen or heard from again. At Emirates Landscape, we provide exceptional service we’d want to experience ourselves!</p>
                <h4>Direct Contact:</h4>
                <p style="font-size: 18px;"><b>Phone:</b> +971 26744777</p>
                <p style="font-size: 18px;"><b>Fax:</b> +971 26722555 </p>
                <p style="font-size: 18px;"><b>Email:</b> info@emirateslandscape.com </p>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <img src="img/sekretarja-01.jpg">
            </div>
        </div>
        <hr>
    </div>
</section>


<!-- Map Section on the About page -->

<section class="map_section_about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 maps wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12212.138813226735!2d54.368575942754646!3d24.496175194809222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e665bc54714ed%3A0x6d680568741f9511!2sEmirates+Landscape+LLC!5e0!3m2!1sen!2s!4v1487501120289" width="100%;" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <p>Emirates Landscape - Dubai Office</p>
            </div>
            <div class="col-md-6 maps wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12212.138813226735!2d54.368575942754646!3d24.496175194809222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e665bc54714ed%3A0x6d680568741f9511!2sEmirates+Landscape+LLC!5e0!3m2!1sen!2s!4v1487501120289" width="100%;" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <p>Emirates Landscape - Abu Dhabi Office</p>
            </div>
        </div>
    </div>
</section>



<!-- Contact Inputs section on all the pages + footer -->
    <?php include 'contact_footer_all.php';?>
    <!-- jQuery -->
    <script type="text/javascript" src="build/scripts.js"></script>

    <script> 
    $('.maps').click(function () {
    $('.maps iframe').css("pointer-events", "auto");
    });
    
    $( ".maps" ).mouseleave(function() {
      $('.maps iframe').css("pointer-events", "none"); 
    });
    </script>
</body>

</html>
