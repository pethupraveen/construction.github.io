<?php include 'header.php'; ?>

        <div class="map-wrapper">
            <div id="map"></div>
        </div><!-- end map -->

        <section class="section-w clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="widget-title">
                            <h3><span class="divider"></span> Contact Us</h3>
                        </div><!-- end widget -->
                        <div class="general-form">
                            <div id="message"></div>
                            <form id="contactform" action="http://jollythemes.com/html/builder/contact.php" name="contactform" method="post">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Enter your name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Enter your e-mail <span>*</span></label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Enter your website</label>
                                    <input type="text" name="website" id="website" class="form-control" placeholder="Website"> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Enter subject <span>*</span></label>
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">  
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Message goes here <span>*</span></label>
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message"></textarea>
                                    <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right border-radius">GET A QUOTE</button>
                                </div>
                            </form>    
                        </div><!-- end contact-form -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-xs-12">
                        <div class="widget-title">
                            <h3><span class="divider"></span> Contact Us</h3>
                        </div><!-- end widget -->
                        <div class="contact_details">
                            <p><i class="fa fa-home"></i> 25, Barathiyar Street, Manikandan Nager, Kundrathur, Chennai - 600 069. </p>
                            <span>Phone: 7200020777</span><br>
                            <span>Email: support@mrcgroup.com </span><br>
                            <span>Web: https://pethupraveen.github.io/construction.github.io/</span>
                        </div><!-- end services -->

                        <hr>

                        <span class="contact_details">
                            <strong><i class="fa fa-calendar"></i> Monday - Sunday 9.00 - 18.00</strong><br>
                            Saturday - Sunday Working day
                        </span><!-- end -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section white -->

        <div class="landing-message colorful">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="pull-left">We promise our customer to give life long support for our “ MRC Groups ”</h3>
                        <a href="#" class="btn btn-default btn-lg pull-right">Get a Quote</a>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end landing -->
<?php include 'footer.php'; ?>

        <section class="copyrights text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4>All rights reserved | © 2017</h4>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end conpyrights -->

        <div class="dmtop">Scroll to Top</div>

    </div><!-- /#wrapper -->
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/masonry.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl-scripts.js"></script>
    <script src="js/custom.js"></script>

    <!-- Map Scripts-->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Google Map -->
    <script type="text/javascript">
        (function($) {
          "use strict";
            var locations = [
            ['<div class="infobox"><h3 class="title"><a href="about-1.html">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><br>+90 555 666 77 88</p></div></div></div>', -37.801578, 145.060508, 2]
            ];
        
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: false,
                draggable: false,
                styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -200},
                    {gamma: 0.50} ] } ],
                center: new google.maps.LatLng(-37.801578, 145.060508),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        
            var infowindow = new google.maps.InfoWindow();
        
            var marker, i;
        
            for (i = 0; i < locations.length; i++) {  
          
                marker = new google.maps.Marker({ 
                position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
                map: map ,
                icon: 'images/marker.png'
                });
        
        
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }
        })(jQuery);
    </script>
    <script src="../../../www.jollythemes.com/html/builder/js/jigowatt.html"></script>

</body>

<!-- Mirrored from jollythemes.com/html/builder/contant.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2017 07:33:46 GMT -->
</html>