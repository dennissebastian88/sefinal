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
        <div class="main-header">
                <div class="main-slider">
                    <?php include_once("navbar.php") ?>
                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <!-- Set the first background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('img/home/slideshow_01.jpg');"></div>
                                <div class="carousel-caption">
                                     <h1 class="animated fadeInLeft">KPS Steel</h1>
                                     <p class="animated fadeInUp">KPS Steel is the LEADING steel company in Indonesia</p>
                                     <p class="animated fadeInUp"><a href="history.php" class="btn btn-transparent btn-rounded btn-large">Learn More</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the second background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('img/home/slideshow_02.jpg');"></div>
                                <div class="carousel-caption">
                                     <h1 class="animated fadeInLeft">Best Quality</h1>
                                     <p class="animated fadeInUp">We only offer the best quality products</p>
                                     <p class="animated fadeInUp"><a href="products.php" class="btn btn-transparent btn-rounded btn-large">Learn More</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('img/home/slideshow_03.jpg');"></div>
                                <div class="carousel-caption">
                                     <h1 class="animated fadeInLeft">Your Solution</h1>
                                     <p class="animated fadeInUp">KPS Steel is your trusted steel solution</p>
                                     <p class="animated fadeInUp"><a href="contactus.php" class="btn btn-transparent btn-rounded btn-large">Learn More</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
        </div><!-- END MAIN HEADER -->
        
        <div class="main">
            <div class="section">
                <div class="grid">
                    <div class="row">
                      <div class="col-md-4">
                        <figure class="effect-lily">
                            <img src="img/products/cnp.jpg" alt=""/>
                            <figcaption>
                                <div>
                                    <h3>CNP</h3>
                                    <p>Good for Primary Material</p>
                                </div>
                                <a href="products.php">View more</a>
                            </figcaption>			
                        </figure>  
                      </div>
					  
                      <div class="col-md-4">
                        <figure class="effect-lily">
                            <img src="img/products/unp.jpg" alt=""/>
                            <figcaption>
                                <div>
                                    <h3>UNP</h3>
                                    <p>UNP is Your Solution</p>
                                </div>
                                <a href="products.php">View more</a>
                            </figcaption>			
                        </figure>  
                     </div>
					  
                     <div class="col-md-4">
                        <figure class="effect-lily">
                            <img src="img/products/siku.jpg" alt=""/>
                            <figcaption>
                                <div>
                                    <h3>Siku</h3>
                                    <p>Siku steel short description.</p>
                                </div>
                                <a href="products.php">View more</a>
                            </figcaption>			
                        </figure>  
                      </div>
					  
                      <div class="col-md-4">
                        <figure class="effect-lily">
                            <img src="img/products/h-beam.jpg" alt=""/>
                            <figcaption>
                                <div>
                                    <h3>H-Beam</h3>
                                    <p>H-Beam description</p>
                                </div>
                                <a href="products.php">View more</a>
                            </figcaption>			
                        </figure>  
                      </div>
                      
                    </div>
                </div>
            </div>
        </div>
        
        <div class="parallax">
            <div class="section">
                <div class="center-content">
                    <div class="center-title">
                        <h1>Industrial & Factory Solutions</h1>
                        <p>KPS Steel is your perfect solutions for industrial, factory, and building solutions. We have a lot of varieties of products such as CNP, UNP, Siku, H-Beams, and many more.</p>
                        <!--
						<p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Learn More</a></p>
						-->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main counter-parallax">
            <div class="section">
                <div class="row">
					<div class="col-sm-3 col-md-3">
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle">1990</span>
                          <h4>ESTABLISHED</h4>
                      </circle-counter>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-bolt" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle">1234</span>
                          <h4>PROJECTS</h4>
                      </circle-counter>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle">4567</span>
                          <h4>PRODUCTIONS</h4>
                      </circle-counter>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <circle-counter>
                          <div class="counter-icon">
                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                          </div>
                          <span class="counter circle">2865</span>
                          <h4>HAPPY CUSTOMERS</h4>
                      </circle-counter>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-form"  id="contact">
            <div class="section">
                <div class="row">
                 <div class="col-md-7">
                        <div class="staff-background">
                            <img src="img/home/getintouch.jpg" alt="">
                        </div>
                    </div>
                  <div class="col-md-5">
                      <div class="span-support">
                        <h4>GET OUR BEST OFFER</h4>
                        <p>Please feel free to contact us to get our SPECIAL and BEST offers.</p>
          
                      </div>
                    <form id="contact-form" method="post" action="#">
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
        <div class="main-call-out">
            <div class="section">
                <div class="call-out">
                    <div class="text-label">
                        <h2>WE TAKE YOUR BUSINESS FURTHER</h2>
                        <p>There are many variations of our products to accomode your need.</p><br />
                        <h2>OUR CUSTOMERS</h2><br />
                        <p>Perusahaan-perusahaan yang telah mempercayakan kemitraannya dengan PT Karya Perkasa Steelindo seperti : PT Super Tata Raya Steel , PT Perwira Adhitama Sejati , Mega Baja Grup, PT Marga Sejahtera Bersamatama, PT Sinar Agung Metalindo, PT Intisumber Bajasakti, Perjuangan Steel dan banyak lagi perusahaan perusahaan besar lainnya.</p>
											<p>Didukung oleh PT Bank Central Asia Tbk, sebagai bank utama .</p>
                    </div>
					<!--
                    <p><button type="button" class="btn-callout">GET A QUOTE</button></p>
					-->
                </div>
            </div>
        </div>
        
        <?php include_once("map.php") ?> 
        
    </div>
    <!-- END MAIN CONTAINER -->
    
    <?php include_once("footer.php") ?>

</body>

</html>
