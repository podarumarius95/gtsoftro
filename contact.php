<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="images/favicon.png">
    <title>POLO | The Multi-Purpose HTML5 Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="vendor/animateit/animate.min.css" rel="stylesheet">

    <!-- Vendor css -->
    <link href="vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Template base -->
    <link href="css/theme-base.css" rel="stylesheet">

    <!-- Template elements -->
    <link href="css/theme-elements.css" rel="stylesheet">

    <!-- Responsive classes -->
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Template color -->
    <link href="css/color-variations/green.css" rel="stylesheet" type="text/css" media="screen">

    <!-- LOAD GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

    <!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />

    <!-- FONTS -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css" media="screen" />

    <!--VENDOR SCRIPT-->
    <script src="vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="vendor/plugins-compressed.js"></script>

</head>

<body class="wide">

    <!-- WRAPPER -->
    <div class="wrapper">
	
		<!-- HEADER -->
<?php include 'header.php'; ?>

	        <!-- INSPIRO SLIDER -->
        <section class="no-padding">
            <!-- Google map sensor -->
            <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
            <div class="map" data-map-address="Melburne, Australia" data-map-zoom="10" data-map-icon="images/markers/marker1.png" data-map-type="ROADMAP"></div>
        </section>
        <!-- END: PAGE TITLE -->

        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>


                        <div class="row m-t-40">
                            <div class="col-md-6">
                                <address>
			  <strong>Polo, Inc.</strong><br>
			  795 Folsom Ave, Suite 600<br>
			  San Francisco, CA 94107<br>
			  <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
                            </div>
                            <div class="col-md-6">
                                <address>
			  <strong>Polo Office</strong><br>
			  795 Folsom Ave, Suite 600<br>
			  San Francisco, CA 94107<br>
			  <abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
                            </div>
                        </div>




                        <div class="social-icons m-t-30 social-icons-colored">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form id="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <input type="text" class="hidden" id="widget-contact-form-antispam" name="widget-contact-form-antispam" value="" />
                            <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                        <script type="text/javascript">
                            jQuery("#widget-contact-form").validate({

                                submitHandler: function(form) {

                                    jQuery(form).ajaxSubmit({
                                        success: function(text) {
                                            if (text.response == 'success') {
                                                $.notify({
                                                    message: "We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible."
                                                }, {
                                                    type: 'success'
                                                });
                                                $(form)[0].reset();

                                            } else {
                                                $.notify({
                                                    message: text.message
                                                }, {
                                                    type: 'danger'
                                                });
                                            }
                                        }
                                    });
                                }
                            });

                        </script>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Contact -->

        <!-- Footer -->
<?php include 'footer.php'; ?>
        <!-- End: Footer -->
    </div>
    <!-- End: Wrapper -->

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme-functions.js"></script>

    <!-- Custom js file -->
    <script src="js/custom.js"></script>

</body>

</html>
