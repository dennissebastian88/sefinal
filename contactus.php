<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<?php include_once("header.php") ?>
</head>

<body>

<!-- LOADER -->
<div id="loader-wrapper">
<div id="loader"></div>
</div>
<!-- LOADER -->
    
    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <div class="pages-header">
					<div class="main-slider">
							<?php include_once("navbar.php") ?>
					</div>
					<div class="section-heading">
							<div class="section">
									<div class="span-title">
											<h1>Contact Us</h1>
											<div class="page-map"><p>Home &nbsp;/&nbsp; Contact Us</p></div>
									</div>
							</div>
					</div>
        </div><!-- END MAIN HEADER -->
        
        <div class="container-form"  id="contact">
            <div class="section">
                <div class="row">
                 <div class="col-md-7">
                        <div class="staff-background">
                            <img src="img/contactus/contact.png" alt="">
                        </div>
                    </div>
                  <div class="col-md-5">
                      <div class="span-support">
                        <h4>GET IN TOUCH</h4>
          
                      </div>
                    <form id="contact-form" method="post" action="contact.php">
                        <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email address" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Your message" rows="6" required data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="submit" class="btn btn-warning" value="Send message"></p>
                                    </div>
                                </div>
                            </div>
                    </form>
                  </div>
                </div> 
            </div>       
        </div>
        
        <?php include_once("map.php") ?>
        
    </div>
    <!-- END MAIN CONTAINER -->
    
    <?php include_once("footer.php") ?>

</body>

</html>
