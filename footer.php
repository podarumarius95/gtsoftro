<footer id="footer" class="background-dark text-grey">

	<div class="footer-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">

					<div class="footer-logo float-left">
						<img alt="" src="images/logo-sm-dark.png">
					</div>

					<p>You do best in what you do. We do our best in what we do. Let's do best together!</p>
					<div class="seperator seperator-dark seperator-simple"></div>
					<div class="widget clearfix widget-newsletter">
                                <form id="widget-subscribe-form" action="include/subscribe-form.php" role="form" method="post" class="form-inline">
                                    <h4 class="widget-title">Newsletter</h4>
                                    <small>Stay informed on our latest news!</small>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                        <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                        <span class="input-group-btn">
											<button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary">Subscribe</button>
										</span>
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    jQuery("#widget-subscribe-form").validate({
                                        submitHandler: function(form) {
                                            jQuery(form).ajaxSubmit({
                                                dataType: 'json',
                                                success: function(text) {
                                                    if (text.response == 'success') {
                                                        $.notify({
                                                            message: "You have successfully subscribed to our mailing list."
                                                        }, {
                                                            type: 'success'
                                                        });
                                                        $(form)[0].reset();

                                                    } else {
                                                        $.notify({
                                                            message: text.message
                                                        }, {
                                                            type: 'warning'
                                                        });
                                                    }
                                                }
                                            });
                                        }
                                    });
                                  </script>
                            </div>
				</div>


                        <div class="col-md-4">
                            <div class="widget clearfix widget-tweeter">
     <h4 class="widget-title">Recent Tweets</h4>
</div>
                        </div>


				<div class="col-md-4">
					<div class="jumbotron jumbotron-small jumbotron-transparent">
						<h4>Have any questions? <br>Contact us Today</h4>

						<ul class="list-large list-icons">
							<address>
  <i class="fa fa-map-marker"></i>
  <strong>Romania Office:</strong> 66 Tomis Street
  <br>Brasov, BV 500334, Romania</address>
							<li><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:office@gtsoft.ro">office.ro@gtsoft.ro</a>
							<li><i class="fa fa-phone"></i><strong>Phone:</strong> +40 752 76 90 21 </li>
							</li>

						</ul>
						
												<ul class="list-large list-icons">
							<address>
  <i class="fa fa-map-marker"></i>
  <strong>United Kingdom Office:</strong> 48 Tennyson Rd
  <br>Southampton, United Kingdom</address>
							<li><i class="fa fa-phone"></i><strong>Phone:</strong> +44 7761 644 921 </li>
							<li><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:office@gtsoft.ro">office.uk@gtsoft.ro</a>
							</li>

						</ul>

						<a href="#" class="button small color effect fill-vertical rounded icon-left"><span><i class="fa fa-external-link"></i>Contact us</span></a>

					</div>
				</div>




			</div>
		</div>
	</div>
	<div class="copyright-content">
		<div class="container">
			<div class="row">
				<div class="copyright-text text-center"> &copy; 2018 POLO - GTSOFT TECHNOLOGIES SRL. ALL RIGHTS RESERVED.
				</div>
			</div>
		</div>
	</div>
</footer>