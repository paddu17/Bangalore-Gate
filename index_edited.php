
   <?php
include('header.php');
?>

<style type="text/css">
#vid 
{
   /* position:fixed;*/
    z-index: -1;

    width:100% !important;   
    
    top: 50% !important; 
    
} 
 .section-abt
{
    top: 55px;
}
.overlay
{
    /*height: 90% !important;*/
}
.swiper-content h1 {
 
    margin-top: -45px;
}
.ttl
{
    text-align: center;
    width: 80% !important;
}

.slider 
{
   /* height: 535px !important;*/
}
.section-abt 
{
    padding: 0px !important;
}
@media only screen and (max-width: 1080px)
{

#vid 
    {
        top:37% !important; 
    }
    .ttl h1 {
    font-size: 20px !important;
     margin-bottom: 0px !important;
     margin-top: 25px;
    }

    .slider {
    
    }
    .h_text
    {
        font-size: 15px;
    }
    .section-abt
    {
        top: -302px;
    }
    .overlay
    {
      /*  height: 64% !important;*/
    }
}
@media only screen and (max-width: 768px) 
{
    
    
    #vid 
    {
        top: 28% !important;
    }
    .overlay
    {
        /*height: 46% !important;*/
    }

}
@media only screen and (max-width: 480px) 
{
    #vid 
    {
        top: 23% !important;
    }
}
@media only screen and (max-width: 400px)
{

    .overlay
    {
        height: 37% !important;
    }
    #vid 
    {
        top:18% !important; 
    }
      .slider {
    /*height: 398px !important;*/
    }
    .ttl h1 {
    font-size: 20px !important;
     margin-bottom: 0px !important;
     margin-top: 25px;
    }
}
@media only screen and (max-width: 280px)
{

    .overlay
    {
        height: 27% !important;
    }
    #vid 
    {
        top:12% !important; 
    }
     
    .ttl h1 {
    font-size: 16px !important;
     margin-bottom: 0px !important;
     margin-top: 20px;
    }
}





</style>
<head>
      

</head>

  
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5QPCXK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <section class="banner">
        <div class="slider video-slider">
            <div class="banner-outer">
                <div class="video-banner">

                    <video poster="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_L_Video_Poster_w1366h768_ncc.jpg" autoplay muted loop playsinline id="vid">
                        <!-- <source src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_VIDEO/blrgate_10frames_1440k_b1440k_scale1920_test106.mp4"> -->
 

<!-- <source src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_VIDEO/HomePageVideo01.mp4" type="video/mp4" media="">  -->
                  


                    </video>
  

                </div>
                <div class="video-banner-content swiper-content">
                   <!-- <div class="slider-logo">
                        <img src="images/icons/bed-logo.png" alt="Image">
                    </div>-->
                    
                    

                </div> 
            </div> 
            <div class="overlay"></div>
        </div>

 <!--
        <div class="banner-form form-style-1">
            <div class="container">
                <div class="form-content text-center">
                    <div class="table-item">
                        <label>Check In</label>
                        <div class="form-group form-icon">
                            <select class="niceSelect">
                                <option value="1">05/Jan</option>
                                <option value="2">06/Jan</option>
                                <option value="3">07/Jan</option>
                                <option value="4">08/Jan</option>
                                <option value="5">09/Jan</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Check Out</label>
                        <div class="form-group form-icon">
                            <select class="niceSelect">
                                <option value="1">05/Jan</option>
                                <option value="2">06/Jan</option>
                                <option value="3">07/Jan</option>
                                <option value="4">08/Jan</option>
                                <option value="5">09/Jan</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Guests</label>
                        <div class="form-group form-icon">
                            <select class="niceSelect">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Nights</label>
                        <div class="form-group form-icon">
                            <select class="niceSelect">
                                <option value="1">05</option>
                                <option value="2">06</option>
                                <option value="3">07</option>
                                <option value="4">08</option>
                                <option value="5">09</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-btn mar-top-35">
                            <a class="btn btn-orange">Check Availability</a>
                        </div>
                    </div>
                </div>-->

            </div>
        </div>
    </section>
    <!-- banner Ends -->
    

    <!-- About Us Start -->
    <section class="about-us section-abt">
        <div class="container">
             <div class="section-title ttl" style="">
                <h1 data-animation="animated fadeInUp">Welcome to <span>Bangalore Gate</span></h1>
                <p class="h_text">Hotel Bangalore Gate is an ideal location to explore Bengaluru and all its attractions.</p> 
        </div>

            <div class="section-title">
                <h2>About <span>Us</span></h2>
                <p>Stay In The Heart Of Bangalore, at the 3 star Hotel Bangalore Gate & enjoy a superb location, quality rooms, great food and fabulous service. </p>
            </div>
            <div class="about-outer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3 class="mar-bottom-30">Great Location, Gorgeous Rooms, Gentle Service, Good Value For Money Hotel in Bengaluru</h3>
                            <p>Hotel Bangalore Gate is an ideal location to explore Bengaluru and all its attractions. Travel to any part of Bangalore by Metro quickly and easily. Walk to KSR Metro  Station and also to KSR Bengaluru Railway Station (SBC)  in less than 5 minutes.</p>
                            <p>We have more than 100 hospitals, colleges, churches, temples and other places of significance nearby. Use our transport services to export Bengaluru in every aspect , be it nightlife, shopping, or sightseeing. Our expert guidance will make your every trip a pleasant and successful one. </p>
                            <a class="btn btn-orange mar-top-10">KNOW MORE ABOUT US <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            <div class="image-box">
                                <div class="image-1 abt-image">

                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLRGATE_Square/square1.jpg" alt="image">
                                </div>
                                <div class="image-2 abt-image">
                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLRGATE_Square/square2.jpg" alt="image">

                                </div>
                            </div>
                            <div class="image-box">
                                <div class="image-3 abt-image">

                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLRGATE_Square/square3.jpg" alt="image">
                                </div>
                                <div class="image-4 abt-image">
                                    <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLRGATE_Square/square4.jpg" alt="image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Ends -->

    <!-- Rooms starts -->
    <section class="rooms">
        <div class="container">
            <div class="section-title">
                <h2>Explore <span>Rooms</span></h2>
                <p>We created our rooms  to with a view to fulfill  your needs and delight your senses. Pre-order cakes and flowers on website Booking for your room to be placed there on arrival. </p>
            </div>
            <div class="room-outer">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="room-item">
                        <div class="room-image">

                                <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_SilverExec_Curtains_L_w1366h768_CC.jpeg" alt="image">
                            </div>
                            <div class="room-content">
                                <div class="room-title">
                                    <h4>Silver Executive Room</h4>
                                    <p>INR 3500/Night</p>
                                    <div class="deal-rating">
                                       


                                    </div>
                                </div>
                                <div class="room-services mar-bottom-15">
                                    <ul>
                                        <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
                                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    </ul>
                                </div>

                                <p>A great option for budget conscious guests, our Silver Executive room has 200 sq ft of space with a generous or twin bed and work desk as well. Complimentary mineral water and Tea/Coffee Maker plus hygiene kit are complimentary.<br><br><br><br><br><br><br></p>
                                <div class="room-btns mar-top-20">
                                <a class="btn btn-black mar-right-10" data-toggle="modal" data-target="#Mo">
                                VIEW DETAILS
  </a>
                                   
                                    <a href="https://bangaloregate.rooms-wizard.com/" target="_blank" class="btn btn-orange">BOOK NOW</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="room-item">
                        <div class="room-image">

                        <img style="height: 35%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_GOLD_DBLBED2_L_w1366h768_cc.jpg" alt="image">
                            </div>
                            <div class="room-content">
                                <div class="room-title">
                                    <h4>Gold Superior room</h4>
                                    <p>INR 4000/Night</p>
                                    <div class="deal-rating">
                                        

                                    </div>
                                </div>
                                <div class="room-services mar-bottom-15">
                                    <ul>
                                        <li><i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms</li>
                                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    </ul>
                                </div>

                                <p>Relaxed interiors allow guests in our Gold Superior room to wallow in 220 sq ft of  superior living space with a generous queen or twin bed and mid sized work desk as well.  Wooden Flooring,  Deluxe Furnishing, Large Windows create a luxurious ambience. Kick off those shoes and put your legs up on our 2 seater sofa, whilst you watch movies on our Large LCD TV. A Mini Fridge with  Mineral water and Tea/Coffee Maker plus hygiene kit are complimentary. </p>

                                <div class="room-btns mar-top-20">
                                <a class="btn btn-black mar-right-10" data-toggle="modal" data-target="#Moda">
                                VIEW DETAILS
  </a>    

                <a href="https://bangaloregate.rooms-wizard.com/" target="_blank" class="btn btn-orange">BOOK NOW</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="room-item">
                            <div class="room-image">

                            <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/Blr_Gate_Platinum_Sunlit_L_w1366h768_cc.jpg" alt="image">
                            </div>
                            <div class="room-content">
                                <div class="room-title">
                                    <h4>Platinum Deluxe Room</h4>
                                    <p>INR 4500/Night</p>
                                    <div class="deal-rating">
                                       
                                       

                                    </div>
                                </div>
                                <div class="room-services mar-bottom-15">
                                    <ul>
                                        <li><i class="fa fa-bed" aria-hidden="true"></i> Twin Beds</li>
                                        <li><i class="fa fa-wifi" aria-hidden="true"></i> Wifi</li>
                                    </ul>
                                </div>

                                <p>Luxury , Refinement & Relaxation are what guests experience in our Platinum Deluxe Room. 280 sq ft of  expansive living space with a king size or twin bed and mid sized work desk ensure all your needs are catered for.  Wooden Flooring,  Deluxe Furnishing, & Large Windows create a luxurious ambience. Put your legs up on our 3 seater sofa, whilst you have a cup of tea on the sofa and center table set. Watch movies on our Large LCD TV. A Mini Fridge with  Mineral water and Tea/Coffee Maker plus hygiene kit are complimentary. </p>

                                <div class="room-btns mar-top-20">
                                <a class="btn btn-black mar-right-10" data-toggle="modal" data-target="#Mod">
                                VIEW DETAILS
  </a>
                                   

                                    <a href="https://bangaloregate.rooms-wizard.com/" target="_blank" class="btn btn-orange">BOOK NOW</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-btn">
                <a href="#" class="btn btn-black mar-right-10">EXPLORE ALL ROOMS <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Room Ends -->

    <!-- Call To Action Starts -->
    <!-- <section class="call-to-action">
        <div class="container-fluid">
            <div class="row display-flex">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-content">
                        <h2 class="white mar-bottom-25">Discover a brand <span>luxurious</span> hotel</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor, eros nec porttitor viverra, felis libero luctus nisi, non volutpat purus felis ut erat ipsum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor, eros nec porttitor viverra, felis libero luctus nisi, non volutpat purus felis ut erat ipsum.</p>
                        <a href="#" class="btn btn-orange mar-top-20">READ MORE <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-button">
                        <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo"><i class="fa fa-play"></i></button>
                    </div>
                    <div class="video-figure"></div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Call To Action Ends -->

    <!-- Services Starts -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Explore <span>Services</span></h2>
                <p>We provide Room Service , Taxi and Transport Service, Laundry & Ironing Services & various other services for our business and leisure guests.</p>
            </div>
            <div class="service-outer">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="service-item">
                            <div class="service-image">

                                <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_Portrait/BLRGate_Restaurant(1)_P_360x799.jpg" alt="Image">
                            </div>
                            <div class="service-content">
                                <h4><a href="">Restaurant</a></h4>

                                <p>Multi Cuisine open 7-11</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="service-item">
                            <div class="service-image">

                                <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_Portrait/BLRGate+_Royale_Banquets_P_360x800.jpg" alt="Image">
                            </div>
                            <div class="service-content">
                                <h4><a href="">Wedding & Events</a></h4>

                                <p>​​​​Elegant Wedding Venues</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="service-item">
                            <div class="service-image">

                                <img src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_Portrait/BLRGate_Regent_Board_Room_P_360x780.JPG" alt="Image">
                            </div>
                            <div class="service-content">
                                <h4><a href="">Conference Room</a></h4>

                                <p>​​Board & Large Meetings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Ends -->

    <!-- Reviews Starts -->
    <!-- <section class="reviews">
        <div class="container">
            <div class="section-title title-white">
                <h2>Explore <span>Reviews</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="review-slider">
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="images/review1.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="images/icons/quote.png" alt="Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="images/review2.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                        <h4>Ketty Perry</h4>
                        <span>Australia</span>
                    </div>
                    <div class="slider-quote">
                        <img src="images/icons/quote.png" alt="Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="images/review1.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="images/icons/quote.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Reviews Ends -->

    <!-- News Starts -->
    <!-- <section class="news">
        <div class="container">
            <div class="section-title">
                <h2>Latest <span>News</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="news-outer">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="images/news1.jpg" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                                <h4><a href="https://bit.ly/BLR_Gate_blog">Why choose Hotux Hotel to travel this summer</a></h4>
                                <div class="room-services mar-bottom-10">
                                    <ul>
                                        <li><a href="single-right.php"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                        <li><a href="single-right.php"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <a href="https://bit.ly/BLR_Gate_blog">READ MORE <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="images/news2.jpg" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                                <h4><a href="https://bit.ly/BLR_Gate_blog">Why choose Hotux Hotel to travel this summer</a></h4>
                                <div class="room-services mar-bottom-10">
                                    <ul>
                                        <li><a href="single-right.php"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                        <li><a href="single-right.php"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <a href="https://bit.ly/BLR_Gate_blog">READ MORE <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="images/news3.jpg" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                                <h4><a href="https://bit.ly/BLR_Gate_blog">Why choose Hotux Hotel to travel this summer</a></h4>
                                <div class="room-services mar-bottom-10">
                                    <ul>
                                        <li><a href="single-right.php"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                        <li><a href="single-right.php"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                                <a href="https://bit.ly/BLR_Gate_blog">READ MORE <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-btn">
                <a href="#" class="btn btn-black mar-right-10">EXPLORE ALL <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </section> -->
    <!-- News Ends -->

    <!-- Newsletter Starts -->
    <!-- <section class="newsletter">
        <div class="container">
            <div class="section-title title-white">
                <h2>Subscribe to our <span>Newsletter</span></h2>
                <p>We take great care and assure you that we do not  share your personal data with any outside agency.  Our Monthly newsletters are filled with tips and tricks as well as special offers for your next Bengaluru trip. Also we will only send you 1 email every month or  1 every 3 months as per the option on the subscribe form.</p>
            </div>
            <div class="newsletter-form">
                <form>
                    <input type="email" placeholder="Enter your email">
                    <a href="https://bit.ly/BlrGate_Subscribe" class="btn btn-orange">SIGN UP</a>
                </form>
            </div>
        </div>
    </section> -->
    <!-- Newsletter Ends -->




    <!-- Newsletter Starts -->
    <section class="newsletter" style="margin-bottom:0px;">
        <div class="container">
            <div class="section-title title-white">
                <h2>Subscribe to our <span>Newsletter</span></h2>
                <p>We take great care and assure you that we do not  share your personal data with any outside agency.  Our Monthly newsletters are filled with tips and tricks as well as special offers for your next Bengaluru trip. Also we will only send you 1 email every month or  1 every 3 months as per the option on the subscribe form.</p>
            </div>
            <div class="newsletter-form">
                <form>
                    <input type="email" placeholder="Enter your email">

                    <a href="https://directmail.kalltrip.com/subscription?f=OjYokM4SeApoZItqb7TXX7xgn53oYLn7dhi6EQxpNMvs38JADd763EjUDkd76Z0l763d763BKJU7hbrgT3WBkhXefWCA" class="btn btn-orange">SIGN UP</a>

                </form>
            </div>
        </div>
    </section>
    <!-- Newsletter Ends -->






    <div class="container">

<!-- Button to Open the Modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
  Open modal
</button> -->

<!-- The Modal -->

<div class="modal" id="Mo">
    <div class="modal-dialog modal-dialog-scrollable ">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title"></h1>
          <button type="button" class="close  " data-dismiss="modal" style="color:red;">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
    


    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->



    <!-- breadcrumb Starts -->
    <section class="breadcrumb-outer" >
        <div class="container">
            <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="breadcrumb-content">
                <h4 style="color:#fff;">Room Details</h4>

                
             <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li aria-current="page">Room Details </li>
                    </ul>
                </nav> 
              

            </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb Ends -->

    <!-- details starts-->
    <section class="details">
        <div class="container" >
        



<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:auto; width:100%;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">

    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_SilverExec_L_w1366h768_CC.jpg" alt="image">
    </div>

    <div class="item">
    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_SilverExec_DoorView_L_w1366h768_CC.jpg" alt="image">
    </div>
  
    <div class="item">
    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_SilverExec_Curtains_L_w1366h768_CC.jpeg" alt="image">

    </div>
  </div>

  <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="display:none;">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span> 
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next" style="display:none;">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span> 
  </a> 
</div>


            <div class="detail-content">
                <div class="detail-title">
                    <div class="title-left">
                        <h3>SILVER EXECUTIVE ROOM</h3>
                        <div class="rating">
                           
                            <!-- <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> -->
                        </div>
                    </div>

                </div>
                <div class="detail-overview">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="overview-outer">
                                <div class="overview-content mar-bottom-30">
                                    <h4>Overview</h4>
                                   <p>Situated on all floors, our  modern well furnished  Silver Executive Room has 200 sq ft of space and a 10 ft ceiling.  All rooms have windows that can be opened for fresh air.  You can use our work desk to plan your day & fix appointments before you leave for your meetings.  Book a car  for your meetings with our travel desk to save time.   Enjoy a relaxed evening  after work with our large screen LCD TV  and surf our satellite channels after work.  Or use our High Speed Wifi to watch content on OTT apps. 
Upgrade to Gold Club  </p>
<h4>Room Inclusions</h4>
<p>High Speed WiFi managed by Wifonic.
Tea Coffee Maker Hot Pot  Mineral Water with daily replenishment. 
Bathroom With Hot /Cold Running Water 24 Hrs ;  Western WC & Washbasin with Mirror. 
Change of Bed Linen after every 2 days or before new check-in.
24” LCD TV with Satellite channels.
Small Work Desk
Clothes Cupboard
Split Air-Conditioning
Large Size Dressing Mirror with Lamp
Marble Flooring
Desk Intercom
2 Bedside Electric Multi-Pin Sockets for devices.
Ceiling Fan with Speed Controls. Room Service is 24 hours. </p>                                    
                                </div>
                           
                            </div>
                        </div>
                      
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- details Ends-->

    <!-- check-in Starts -->
    <!-- <section class="check-in">
        <div class="container">


            <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="date-range2" class="form-control" value="Check In">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="date-range3" class="form-control" value="Check Out">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group form-icon">
                        <select>
                            <option value="0">Type</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group form-icon">
                        <select>
                            <option value="0">Destination</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                    </div>
                </div>
                </div>
                <br>
                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-btn">
                        <a class="btn btn-orange">Check Availability</a>
                    </div>
                </div>
                </div>
            </div>
      
    </section> -->
    <!-- check-in Ends -->

    <!-- amenities starts -->
    <section class="amenities">
        <div class="container">

                <h4 style="text-align: center;">Explore <span style="color:red;">Amenities</span></h4>
            
            <div class="amenities-content">
                
                    
                    <div class="row">
                           <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-car" aria-hidden="true"></i>
                            </div>
                            <h4>Transport</h4>
                        </div>
                    </div>
                   
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                            </div>
                            <h4>Free wifi</h4>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                            </div>
                            <h4>Laundry service</h4>
                        </div>
                    </div>
                   
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="amt-item">
                            <div class="amt-icon">
                                <i class="fa fa-bolt" aria-hidden="true"></i>
                            </div>
                            <h4>Smoking free</h4>
                        </div>
                    </div>
                    </div>
                   
        </div>
    </section>
    <!-- amenities Ends -->


    <!-- detail review starts -->
    <!-- <section class="detail-reviews">
        <div class="container">

                <h4 style="margin-left:90px;">Explore <span style="color:red;">Reviews</span></h4>
            
            <div class="comment-box">
                <h4>Leave a message</h4>
                <form>
                    <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4">
                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="text" class="form-control" id="number" placeholder="Phone">
                        </div>
                        </div>
   
                        <div class="row">
                        <div class="textarea col-xs-4 ">
                            <textarea placeholder="Enter a message"></textarea>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-xs-4 ">
                            <div class="comment-btn">
                                <a href="#" class="btn btn-orange">Submit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
    <!-- detail review Ends -->


    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->


 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


</div>




<div class="container">

  <!-- Button to Open the Modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
    Open modal
  </button> -->

  <!-- The Modal -->
  <div class="modal" id="Moda">
    <div class="modal-dialog modal-dialog-scrollable ">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title"></h1>

          <button type="button" class="close  " data-dismiss="modal" style="color:red;">×</button>

        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->



    <!-- breadcrumb Starts -->
    <section class="breadcrumb-outer" >
        <div class="container">
            <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="breadcrumb-content">
                <h4 style="color:#fff;">Room Detail</h4>

                
             <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li aria-current="page">Room Details </li>
                    </ul>
                </nav> 
              

            </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb Ends -->

    <!-- details starts-->
    <section class="details">
        <div class="container" >
        



<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:auto; width:100%;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">

    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_GOLD_DBLBED2_L_w1366h768_cc.jpg" alt="image">
    </div>

    <div class="item">
    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_GOLD_DBLBED_L_w1366h768_cc.jpg" alt="image">
    </div>
  
    <div class="item">
    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_GOLD_Bath_L_w1366h768_cc.jpg" alt="image">

    </div>
  </div>

  <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="display:none;">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span> 
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next" style="display:none;">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span> 
  </a> 
</div>
            <div class="detail-content">
                <div class="detail-title">
                    <div class="title-left">

                        <h3>GOLD SUPERIOR ROOM</h3>
                        <div class="rating">
                            <!-- <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> -->

                            <!-- <span class="fa fa-star checked"></span> -->
                        </div>
                    </div>

                </div>
                <div class="detail-overview">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="overview-outer">
                                <div class="overview-content mar-bottom-30">
                                    <h4>Overview</h4>
                                   <p>Situated on all floors, our  modern well furnished Gold Superior Room has 220 sq ft of space and 10 ft ceiling.  All rooms have Large vertical windows that can be opened for fresh air.  You can use our work desk to plan your day & fix appointments before you leave for your meetings.   Enjoy a relaxed evening  after work with our large screen LCD TV  and satellite channels to  surf after work.  Or use our High Speed Wifi to watch content on OTT apps. 
Upgrade to Platinum Deluxe for a superlative stay. </p>
<h4>Room Inclusions</h4>
<p>High Speed WiFi managed by Wifonic.
Wooden Flooring
Tea Coffee Maker Hot Pot  Mineral Water with daily replenishment. 
Bathroom With Hot /Cold Running Water 24 Hrs ;  Western WC & Washbasin with Mirror. 
Change of Bed Linen after every 2 days or before new check-in.
24” LCD TV with Satellite channels.
Small Work Desk
Clothes Cupboard
Split Air-Conditioning
Large Size Dressing Mirror with Lamp
Desk Intercom
2 Bedside Electric Multi-Pin Sockets for devices.
Ceiling Fan with Speed Controls. Room Service is 24 hours. </p>                                    

                                </div>
                           
                            </div>
                        </div>

                        

                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- details Ends-->

    <!-- check-in Starts -->
    <!-- <section class="check-in">
        <div class="container">


            <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="date-range2" class="form-control" value="Check In">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>

                <br>

                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="date-range3" class="form-control" value="Check Out">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>

                <br>

                <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group form-icon">
                        <select>
                            <option value="0">Type</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group form-icon">
                        <select>
                            <option value="0">Destination</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                    </div>
                </div>
                </div>
                <br>
                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-btn">
                        <a class="btn btn-orange">Check Availability</a>
                    </div>
                </div>
                </div>
            </div>
      
    </section> -->
    <!-- check-in Ends -->

    <!-- amenities starts -->
    <section class="amenities">
        <div class="container">


                <h4 style="text-align: center;">Explore <span style="color:red;">Amenities</span></h4>
            
            <div class="amenities-content">
                
                    
                    <div class="row">
                           <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-car" aria-hidden="true"></i>
                            </div>
                            <h4>Transport</h4>
                        </div>
                    </div>

                   
                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                            </div>
                            <h4>Free wifi</h4>
                        </div>
                    </div>
                    </div>
                    <div class="row">

                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                            </div>
                            <h4>Laundry service</h4>
                        </div>
                    </div>

                    
                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="amt-item">
                            <div class="amt-icon">
                                <i class="fa fa-bolt" aria-hidden="true"></i>
                            </div>
                            <h4>Smoking free</h4>
                        </div>
                    </div>
                    </div>

                   

        </div>
    </section>
    <!-- amenities Ends -->


   

    <!-- detail review starts -->
    <!-- <section class="detail-reviews">
        <div class="container">


                <h4 style="margin-left:90px;">Explore <span style="color:red;">Reviews</span></h4>
            

            <div class="comment-box">
                <h4>Leave a message</h4>
                <form>
                    <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4">
                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="text" class="form-control" id="number" placeholder="Phone">
                        </div>
                        </div>

                        <div class="row">
                        <div class="textarea col-xs-4 ">
                            <textarea placeholder="Enter a message"></textarea>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-xs-4 ">
                            <div class="comment-btn">
                                <a href="#" class="btn btn-orange">Submit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
    <!-- detail review Ends -->



    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->


   

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>






<div class="container">

  <!-- Button to Open the Modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
    Open modal
  </button> -->

  <!-- The Modal -->

<div class="modal" id="Mod">

    <div class="modal-dialog modal-dialog-scrollable ">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title"></h1>
          <button type="button" class="close  " data-dismiss="modal" style="color:red;">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->



    <!-- breadcrumb Starts -->
    <section class="breadcrumb-outer" >
        <div class="container">
            <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="breadcrumb-content">
                <h4 style="color:#fff;">Room Details</h4>

                
             <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li aria-current="page">Room Details </li>
                    </ul>
                </nav> 
              

            </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb Ends -->

    <!-- details starts-->
    <section class="details">
        <div class="container" >
        



<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:auto; width:100%;">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">

    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/Blr_Gate_Platinum_Sunlit_L_w1366h768_cc.jpg" alt="image">
    </div>

    <div class="item">
    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/Blr_Gate_Platinum__Sofa_L_w1366h768_cc_.jpg" alt="image">
    </div>
  
    <div class="item">
    <img  style="width:100%;" src="https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_IMAGES/BangaloreGatePhotos/BLR_GATE_MOBILE_LANDSCAPE_NEW/BLR_GATE_Planitum_Bath_L_w641h768_cc.jpeg" alt="image">

    </div>
  </div>

  <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="display:none;">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span> 
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next" style="display:none;">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span> 
  </a> 
</div>

            <div class="detail-content">
                <div class="detail-title">
                    <div class="title-left">
                        <h3>PLATINUM DELUXE ROOM</h3>
                        <div class="rating">
                            <!-- <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> -->
                        </div>
                    </div>

                </div>
                <div class="detail-overview">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="overview-outer">
                                <div class="overview-content mar-bottom-30">
                                    <h4>Overview</h4>
                                   <p>Situated on all floors, our  modern well furnished Platinum Dleuxe Room has 280 sq ft of space and 10 ft ceiling.  All rooms have Large vertical windows that can be opened for fresh air.  You can use our work desk to plan your day & fix appointments before you leave for your meetings.   Enjoy a relaxed evening  after work with our large screen LCD TV  and satellite channels to  surf after work.  Or use our High Speed Wifi to watch content on OTT apps. 
Book more rooms on https://bangaloregate.rooms-wizard.com/</p> 
                                   <h4>Room Inclusions</h4>
                                   <p>High Speed WiFi managed by Wifonic.
Tea Coffee Maker Hot Pot  Mineral Water with daily replenishment. 
Bathroom With Hot /Cold Running Water 24 Hrs ;  Western WC & Washbasin with Mirror. 
Change of Bed Linen after every 2 days or before new check-in.
24” LCD TV with Satellite channels.
Small Work Desk
Clothes Cupboard
Split Air-Conditioning
Large Size Dressing Mirror with Lamp
Wooden Flooring
Desk Intercom
2 Bedside Electric Multi-Pin Sockets for devices.
Ceiling Fan with Speed Controls. Room Service is 24 hours. </p>                                   

                                </div>
                           
                            </div>
                        </div>

                      

                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- details Ends-->

    <!-- check-in Starts -->
    <!-- <section class="check-in">
        <div class="container">


            <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="date-range2" class="form-control" value="Check In">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="date-range3" class="form-control" value="Check Out">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group form-icon">
                        <select>
                            <option value="0">Type</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                    </div>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-group form-icon">
                        <select>
                            <option value="0">Destination</option>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                    </div>
                </div>
                </div>
                <br>
                <div class="row">
                <div class=" col-md-3 col-sm-3 col-xs-3">
                    <div class="form-btn">
                        <a class="btn btn-orange">Check Availability</a>
                    </div>
                </div>
                </div>
            </div>
      
    </section> -->
    <!-- check-in Ends -->

    <!-- amenities starts -->
    <section class="amenities">
        <div class="container">


                <h4 style="text-align: center;">Explore <span style="color:red;">Amenities</span></h4>
            
            <div class="amenities-content">
                
                    
                    <div class="row">
                           <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-car" aria-hidden="true"></i>
                            </div>
                            <h4>Transport</h4>
                        </div>
                    </div>

                   
                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                            </div>
                            <h4>Free wifi</h4>
                        </div>
                    </div>
                    </div>
                    <div class="row">

                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="amt-item mar-bottom-30">
                            <div class="amt-icon">
                                <i class="fa fa-bath" aria-hidden="true"></i>
                            </div>
                            <h4>Laundry service</h4>
                        </div>
                    </div>

                  
                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <div class="amt-item">
                            <div class="amt-icon">
                                <i class="fa fa-bolt" aria-hidden="true"></i>
                            </div>
                            <h4>Smoking free</h4>
                        </div>
                    </div>
                    </div>

                    

        </div>
    </section>
    <!-- amenities Ends -->


    <!-- detail review starts -->
    <!-- <section class="detail-reviews">
        <div class="container">

                <h4 style="margin-left:90px;">Explore <span style="color:red;">Reviews</span></h4>
            

            <div class="comment-box">
                <h4>Leave a message</h4>
                <form>
                    <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4">
                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-xs-4 ">
                            <input type="text" class="form-control" id="number" placeholder="Phone">
                        </div>
                        </div>
   
                        <div class="row">
                        <div class="textarea col-xs-4 ">
                            <textarea placeholder="Enter a message"></textarea>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-xs-4 ">
                            <div class="comment-btn">
                                <a href="#" class="btn btn-orange">Submit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
    <!-- detail review Ends -->


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

  <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
<!-- *Scripts* -->
    
    <script type="text/javascript">
 var w = window.matchMedia("(max-width: 320px)");
 var w1 = window.matchMedia("(max-width: 720px)");
  var vid = document.getElementById("vid");
  var source = document.createElement("source");
  source.id = "hvid";
  source.setAttribute("type", "video/mp4");
  vid.appendChild(source);
  
  if (w.matches) {
    vid.pause();
    source.removeAttribute("src");
    source.setAttribute("src", "https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_VIDEO/blrgate_10frames_320k_b640k_scale480_test104.mp4");
    vid.load();
    vid.play();
  }
  else if (w1.matches) {
    vid.pause();
    source.removeAttribute("src");
    source.setAttribute("src", "https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_VIDEO/blrgate_10frames_720k_b1080k_scale960_test105.mp4");
    vid.load();
    vid.play();
  }
  else
  {
    vid.pause();
    source.removeAttribute("src");
    source.setAttribute("src", "https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_VIDEO/blrgate_10frames_1440k_b1440k_scale1920_test106.mp4");
    vid.load();
    vid.play();
  }

window.addEventListener("resize", function(){
  var w = window.matchMedia("(max-width: 767px)");
  var vid = document.getElementById("vid");
  var source = document.getElementById("hvid");
  
  if (w.matches) {
    vid.pause();
    source.src = "https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_VIDEO/blrgate_10frames_320k_b640k_scale480_test104.mp4";
    vid.load();
    vid.play();
  }
  else if (w1.matches) {
    vid.pause();
    source.removeAttribute("src");
    source.setAttribute("src", "https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_VIDEO/blrgate_10frames_720k_b1080k_scale960_test105.mp4");
    vid.load();
    vid.play();
  }
   else {
    vid.pause();
    source.src = "https://d1riqdagk3udeo.cloudfront.net/BLR_GATE_VIDEO/blrgate_10frames_1440k_b1440k_scale1920_test106.mp4";
    vid.load();
    vid.play();
  }
});
    </script>




<?php
include('footer.php');
?>

