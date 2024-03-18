<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    
    include 'DB.php';
    $url = basename($_SERVER['REQUEST_URI']);
    //get meta tag
    $metaqry = "SELECT * from meta_tag where meta_url='$url'";
    $metares = mysqli_query($con, $metaqry);
    $metadata= mysqli_fetch_assoc($metares);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo $metadata['meta_keywords'] ?>">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Franchise</title>
    <link rel="stylesheet" href="app/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="app/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="app/scss/app.css">
    <link rel="stylesheet" href="app/scss/component/timeline.css">
 
    <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/css/all.min.css">
	<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon.png">
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<body class="header-fixed main home-3">
    <!-- preloade -->
    <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header_main" class="header style-3 style-absolute">
            <div class="container" style="margin-top:-20px;">
                <div id="site-header-inner">
                    <div class="" style="margin-left: -20px; margin-top: 40px;">
                        <a href="index.html" style = "padding-left: 10px; "><img src="assets/images/logo/tablalogo.png" style="height: 80px; "  alt=""></a>
                    </div>
                    <nav id="main-nav" class="main-nav" style="margin-left: 40px;">
                        <ul id="menu-primary-menu" class="menu">
                            <li class="menu-item menu-item-has-children  current-menu-item">
                                <a href="#" style="text-decoration: none;">Home</a> 
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#about-section" style="text-decoration: none;" >About</a></li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#founders-section" style="text-decoration: none;" >Our Founders</a>
                            </li>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#investment" style="text-decoration: none;" >Investment</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#faq-section" style="text-decoration: none;" >FAQ</a>
                            </li>
                        </ul>
                    </nav><!-- /#main-nav -->
                    <a href="#" id="tabla-btn" class="tf-button style1" style="margin-top: 50px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Own a Tabla</a>

                    <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                </div>
            </div>
        </header>
        <!-- end Header -->
         <!-- Button trigger modal -->
  
                       <!-- Modal -->
                       <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered modal-lg">
                          <div class="modal-content">
                          
                            <div class="modal-header" style="border-bottom: none;">
							<img src="assets/images/logo/tablalogo.png" alt="logo" style="height:75px;">
                              <!--h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white;">Own A Tabla</h1-->
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;"></button>
                            </div>
                            <div class="modal-body">
                                

                                    <div style="padding: 0px 40px 0px 40px;">
                                        <form  method="GET" id="own-tabla" onsubmit="return tablaSubmit();">
                                        <div class="row g-3">
                                            <div class="col">
                                              <label for="inputName" class="form-label">Name</label>  
                                              <input type="text" class="form-control" placeholder="Name" aria-label="Name" style="border: 1px solid grey; color: white;" required />
                                            </div>
                                            <div class="col">
                                                <label for="inputName" class="form-label">Phone</label>  
                                                <input type="number" class="form-control" placeholder="Phone Number" aria-label="Phone" style="border: 1px solid grey; color: white;" required />
                                              </div>
                                        </div>
                                        <div class="row g-3" style="margin-top: 10px;">
                                            <div class="col">
                                              <label for="inputEmail4" class="form-label">Email</label>  
                                              <input type="email" class="form-control" placeholder="Email" aria-label="Email" style="border: 1px solid grey; color: white;" required />
                                            </div>
                                        </div>
                                        <div class="row g-3" style="margin-top: 10px;">
                                            <div class="col">
                                                <label for="inputName" class="form-label">City</label>  
                                                <input type="text" class="form-control" placeholder="City" aria-label="text" style="border: 1px solid grey; color: white;" required />
                                              </div>
                                            <div class="col">
                                                <label for="inputEmail4" class="form-label">State</label>  
                                                <input type="text" class="form-control" placeholder="State" aria-label="text" style="border: 1px solid grey; color: white;" required />
                                            </div>
                                        </div>
                                        <div class="row g-3" style="margin-top: 10px;">
                                            <div class="col">
                                              <label for="inputtext" class="form-label">Area</label>  
                                              <input type="text" class="form-control" placeholder="Area" aria-label="text" style="border: 1px solid grey; color: white;" required />
                                            </div>
                                        </div>
                                            <button type="submit" class="tf-button style1" style="color: black; float: right; margin-top: 15px;">Submit</button>
                                     </form>
                                     <p class="success" id="success2">
                                        Thank You For Filling the form. Our team will get in touch with you. Meanwhile,
                                      </p>
                                       <a type="submit" id="calender2" class="tf-button style1 text-center" style="display: none;">Book A Call</a>
                                    </div>
                            </div>
                          </div>
                        </div>
                      </div>

                <div class="swiper mySwiper style-3 mySwiper3">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="overlay">
                        <img src="assets/images/slider/header.jpg" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="box-slider">
                                    <div class="content-box" style="margin-top: -50px;">
                                        <h2 class="title">Welcome to TABLA
										</h2>
                                         <h3 style="color: white; text-transform:uppercase; font-size:20px; margin-top: 20px; margin-left: 5px;">The first fine dining Indian restaurant franchise</h3>
                                        
                                        <p class="sub-title"><!--We have been recognized as a premium restaurant in the Orlando, Florida area 
													<br>and now we offer this opportunity to franchise owners in new markets.--></p>
                                        <div class="wrap-btn">
                                            <a href="#" class="tf-button style2"  data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                               OWN A FRANCHISE
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-4 question" style="padding: 20px 20px; background-color: white; background-color: rgba(255,255,255,0.5); height: 900px;">
                                    <div class="top" >
                                        <h5 style="font-size: 40px; text-align: center; margin-top: 30%;">Own A Tabla</h5>
                                    </div>
                                    <div class="main">
                                        <form action="" class="s2" id="own-tabla1" method="GET"  onsubmit="return ownSubmit();">
                                            <p></p>
                                            <form>
                                                <div class="form-group">
													<div class="row g-6">
													 <div class="col">
                                                       <input type="text" class="form-control" id="name" placeholder="Name*" style="color: black;" required />
													  </div>
                                                    </div> 
                                                    <div class="row g-6">
												    	<div class="col">
                                                       <input type="text" class="form-control" id="phone" placeholder="Phone*" style="color: black;" required />
													  </div>
													</div>
                                                    <input type="email" class="form-control" id="email" placeholder="mail@*" style="color: black;" required />
                                                     <div class="row g-3">
													 <div class="col">
                                                    <input type="text" class="form-control" id="city" placeholder="City, State*" style="color: black;" required />
													</div>
													<div class="col">
                                                    <input type="text" class="form-control" id="area" placeholder="Area*" style="color: black;" />
													</div>
													</div>

                                                    <select class="form-control" id="franchiseModel" style="border: 1px solid #892430; border-radius: 0; color: #892430;  margin-bottom: 19px; box-shadow: none;  background: #fff;">
                                                        <option selected>
                                                            Fine Dine Model
                                                        </option>
                                                        <option >
                                                            Cafe Model
                                                         </option>
                                                        <option >Both
                                                        </option>
                
                                                    </select>
                                                   <select class="form-control" id="liquidity" style="border: 1px solid #892430; border-radius: 0; color: #892430;  margin-bottom: 19px; box-shadow: none;  background: #fff;">
                                                        <option >
                                                            Liquidity: $25,000
                                                        </option>
                                                        <option selected >
                                                             Liquidity: Prefer not to say
                                                         </option>
                                                        <option > Liquidity: $50,000
                                                        </option>
														<option > Liquidity: $100,000+
                                                        </option>
                                                    </select>
                                                   
                                                </div>



                                                <button type="submit" class="tf-button style3">Submit</button>
                                              
                                            </form>
                                        </form>
                                        <p class="success" id="success3" style="color: black;">
                                            Thank You For Filling the form. Our team will get in touch with you. Meanwhile -
                                         </p>
                                         <a type="submit" id="calender3" class="tf-button style1 text-center" style="display: none; color: black; ">Book A Call</a>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Button trigger modal -->
  
                       <!-- Modal -->
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-lg">
           <div class="modal-content">
                       

               <div class="modal-header" style="border-bottom: none;">
                        <img src="assets/images/logo/tablalogo.png" alt="logo" style="height: 75px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: white;"></button>
               </div>


               <div class="modal-body">
                   <div class="row">
                                   
                                   <div style="padding: 0px 40px 0px 40px;">
                                     <form id="owner-form" method="GET" onsubmit="return formSubmit();" >
                                       <div class="row g-3">
  
                                           <div class="col">
                                             <label for="inputName" class="form-label">Name</label>  
                                             <input type="text" class="form-control" placeholder= "Name"  style="border: 1px solid grey; color: white;" required />
                                           </div>
                                           <div class="col">
                                               <label for="inputName" class="form-label">Phone</label>  
                                               <input type="number" class="form-control" placeholder="Phone Number"  style="border: 1px solid grey; color: white;" required />
                                             </div>
                                       </div>
                                       <div class="row g-3" style="margin-top: 10px;">
                                           <div class="col">
                                             <label for="inputEmail4" class="form-label">Email</label>  
                                             <input type="email" class="form-control" placeholder="Email" style="border: 1px solid grey; color: white;" required />
                                           </div>
                                       </div>
                                       <div class="row g-3" style="margin-top: 10px;">
                                           <div class="col">
                                               <label for="inputName" class="form-label">City</label>  
                                               <input type="text" class="form-control" placeholder="City"  style="border: 1px solid grey; color: white;" required />
                                             </div>
                                           <div class="col">
                                               <label for="inputEmail4" class="form-label">State</label>  
                                               <input type="text" class="form-control" placeholder="State"  style="border: 1px solid grey; color: white;" required />
                                           </div>
                                       </div>
                                       <div class="row g-3" style="margin-top: 10px;">
                                           <div class="col">
                                             <label for="inputtext" class="form-label">Area</label>  
                                             <input type="text" class="form-control" placeholder="Area"  style="border: 1px solid grey; color: white;" required />
                                           </div>
                                       </div>

                                  
                                     
                                    
                                           <button type="submit" class="tf-button style1" style="color: black; float: right; margin-top: 5px;">Submit</button>
                             

                                   
                                      </form> 
                                     <p class="success" id="success1">
                                       Thank You For Filling the form. Our team will get in touch with you. Meanwhile
                                     </p>
                                    
                                      <a type="submit" id="calender1" class="tf-button style1 text-center" style="display: none;">Book A Call</a>
                                   </div>
                                     
                                      
                                    </div>
                    </div>
               </div>
                           
                     
           </div>
        </div>
   </div>
        <section class="vouchers-details" style="padding: 0px 0px; margin-top: 100px; " >
            <div class="container" style="max-width: 1800px;">
                <div class="row">
                    <div class="col">
                        <div class="vouchers-details-main">
                            <div class="left col-6">
               
								<div class="block-text center">
                                        <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Everything, streamlined for you!</p>
                                        <h3 class="title" style="font-size:30px;"data-aos-duration="1000" data-aos="fade-up">5 Easy Steps to Own a Tabla
                                    </h3>
                           
                                 </div>
                                    
                       <!---<div id="process">
                            <div class="row">
                       
                            </div>
                            <div class="container-fluid">
                              <div class="row">
                                <div class="steps-timeline text-center">
                                  <div class="steps-one">
                                    <h3>Step 1</h3>
                                    <div class="end-circle "></div>
                                    <div class="step-wrap">
                                      <div class="steps-stops">
                                        <div class="verticle-line back-orange"></div>
                                      </div>
                                    </div>
                                    <div class="pane-warp back-blue">
                                      <div class="steps-pane">
                                       
                                        <i class="fa-solid fa-comments fa-3x" style="margin-top: 30px;"></i>
                                      </div>
                                    </div>
                                    <div class="inverted-pane-warp back-blue">
                                      <div class="inverted-steps-pane">
                                        <p>Chat With Us</p>
                                      </div>
                                    </div>
                                  </div>
                          
                                  <div class="steps-two">
                                    <h3>Step 2</h3>
                                    <div class="step-wrap">
                                      <div class="steps-stops">
                                        <div class="verticle-line back-orange"></div>
                                      </div>
                                    </div>
                                    <div class="pane-warp back-orange">
                                      <div class="steps-pane">
                                        <i class="fa-solid fa-file-lines fa-3x" style="margin-top: 30px;"></i>
                                      </div>
                                    </div>
                                    <div class="inverted-pane-warp back-orange">
                                      <div class="inverted-steps-pane">
                                        <p>Recieve Our FDD</p>
                                      </div>
                                    </div>
                                  </div>
                          
                                  <div class="steps-three">
                                    <h3>Step 3</h3>
                                    <div class="step-wrap">
                                      <div class="steps-stops">
                                        <div class="verticle-line back-orange"></div>
                                      </div>
                                    </div>
                                    <div class="pane-warp back-blue">
                                      <div class="steps-pane">
                                        <i class="fa-solid fa-map-location-dot fa-3x" style="margin-top: 30px;"></i>
                                      </div>
                                    </div>
                                    <div class="inverted-pane-warp back-blue">
                                      <div class="inverted-steps-pane">
                                        <p>Visit Us</p>
                                      </div>
                                    </div>
                                  </div>
                          
                                  <div class="steps-four">
                                    <h3>Step 4</h3>
                                    <div class="step-wrap">
                                      <div class="steps-stops">
                                        <div class="verticle-line back-orange"></div>
                                      </div>
                                    </div>
                                    <div class="pane-warp back-orange">
                                      <div class="steps-pane">
                                        <i class="fa-solid fa-thumbs-up fa-3x" style="margin-top: 30px;"></i>
                                      </div>
                                    </div>
                                    <div class="inverted-pane-warp back-orange">
                                      <div class="inverted-steps-pane">
                                        <p>Become Approved for Ownership</p>
                                      </div>
                                    </div>
                                  </div>
                          
                                  <div class="steps-five">
                                    <h3>Step 5</h3>
                                    <div class="inverted-end-circle "></div>
                                    <div class="step-wrap">
                                      <div class="steps-stops">
                                        <div class="verticle-line back-orange"></div>
                                      </div>
                                    </div>
                                    <div class="pane-warp back-blue">
                                      <div class="steps-pane">
                                        <i class="fa-solid fa-briefcase fa-3x" style="margin-top: 30px;"></i>
                                      </div>
                                    </div>
                                    <div class="inverted-pane-warp back-blue">
                                      <div class="inverted-steps-pane">
                                        <p style="margin-right: 10px;">Onboarding and Training</p>
                                      </div>
                                    </div>
                                  </div>
                          
                                </div>
                           
                              </div>
                            </div>
                        </div>

                       <section style="margin-top: 40px;">
                        <ul class="process-step">
                            <li class="process__item">
                              <span class="process__number">1</span>
                        
                              <span class="process__title">Chat with Us</span>
                             
                            </li>
                          
                            <li class="process__item">
                              <span class="process__number">2</span>
                      
                              <span class="process__title">Receive Our FDD</span>
                        
                            </li>
                          
                            <li class="process__item">
                              <span class="process__number">3</span>
           
                              <span class="process__title">Visit Us</span>
                           
                            </li>
                          
                            <li class="process__item">
                              <span class="process__number">4</span>
           
                              <span class="process__title">Become Approved for Ownership</span>
           
                            </li>

                            <li class="process__item">
                                <span class="process__number">5</span>
                    
                                <span class="process__title">Onboarding and Training</span>
                   
                              </li>
                          </ul>

                       </section> --->

                          <!-- Process Section -->
<section id="process-step" class="section-content bg3" style="margin-top: 30px;">
    <div class="container">
        <div class="row" style="padding-bottom: 60px;">
            <!-- Section title -->
            <div class="section-title item_bottom text-center">
                <h1 class="white">Our <span>Process</span></h1>
            </div>
            <!-- End Section title -->
            <ol class="process-flow list-unstyled">
                <li class="active">
                <div class="process-node active">
                    <i class="fa-solid fa-comments fa-3x" style="color: #FFD700"></i>
                </div>
                <h4 style="color: white;">Chat With Us</h4>
                <p>
                     Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                </p>
                <div class="line">
                    <div class="progress">
                    </div>
                </div>
                </li>
                <li class="active">
                <div class="process-node active">
                
                    <i class="fa-solid fa-file-lines fa-3x" style="color: #FFD700"></i>
                </div>
                <h4 style="color: white;">Recieve Our FDD</h4>
                <p>
                     Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                </p>
                <div class="line">
                    <div class="progress">
                    </div>
                </div>
                </li>
                <li class="active">
                <div class="process-node active">
                    <i class="fa-solid fa-map-location-dot fa-3x" style="color: #FFD700"></i>
                </div>
                <h4 style="color: white;">Visit Us</h4>
                <p>
                     Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                </p>
                <div class="line">
                    <div class="progress">
                    </div>
                </div>
                </li>
                <li class="active">
                <div class="process-node active">
                    <i class="fa-solid fa-thumbs-up fa-3x" style="color: #FFD700"></i>
                </div>
                <h4 style="color: white;">Become Approved for Ownership</h4>
                <p>
                     Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                </p>
                <div class="line">
                    <div class="progress">
                    </div>
                </div>
                </li>
                <li class="active">
                <div class="process-node active">
                    <i class="fa-solid fa-briefcase fa-3x" style="color: #FFD700"></i>
                </div>
                <h4 style="color: white;">Onboarding and Training</h4>
                <p>
                     Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                </p>
                </li>
            </ol>
        </div>
    </div>
    </section>

                     



                                
                            </div>
                            <div class="right col-6">

                                <div class="question" style="margin-top: 50%;">
                                    <div class="top">
                                        <h5>Take the first step</h5>
                                    </div>
                                    <div class="main">
                                        <form action="" class="s2" id="book-form" method="GET"  onsubmit="return onFormSubmit();">
                                            <p></p>
                                            <form>
                                                <div class="form-group">
													 <div class="row g-3">
													 <div class="col">
                                                    <input type="text" class="form-control" id="name" placeholder="Name*" style="color: black;" required />
													</div>
													<div class="col">
                                                    <input type="text" class="form-control" id="phone" placeholder="Phone*" style="color: black;" required />
													</div>
													</div>
                                                    <input type="email" class="form-control" id="email" placeholder="mail@*" style="color: black;" required />
                                                     <div class="row g-3">
													 <div class="col">
                                                    <input type="text" class="form-control" id="city" placeholder="City, State*" style="color: black;" required />
													</div>
													<div class="col">
                                                    <input type="text" class="form-control" id="area" placeholder="Area*" style="color: black;" />
													</div>
													</div>

                                                    <select class="form-control" id="franchiseModel" style="border: 1px solid #892430; border-radius: 0; color: #892430;  margin-bottom: 19px; box-shadow: none;  background: #fff;">
                                                        <option selected>
                                                            Fine Dine Model
                                                        </option>
                                                        <option >
                                                            Cafe Model
                                                         </option>
                                                        <option >Both
                                                        </option>
                
                                                    </select>
                                                   <select class="form-control" id="liquidity" style="border: 1px solid #892430; border-radius: 0; color: #892430;  margin-bottom: 19px; box-shadow: none;  background: #fff;">
                                                        <option >
                                                            Liquidity: $25,000
                                                        </option>
                                                        <option selected >
                                                             Liquidity: Prefer not to say
                                                         </option>
                                                        <option > Liquidity: $50,000
                                                        </option>
														<option > Liquidity: $100,000+
                                                        </option>
                                                    </select>
                                                   
                                                </div>



                                                <button type="submit" class="tf-button style3">Submit</button>
                                              
                                            </form>
                                        </form>
                                        <p class="success" id="success" style="color: black;">
                                            Thank You For Filling the form. Our team will get in touch with you. Meanwhile -
                                         </p>
                                         <a type="submit" id="calender" class="tf-button style1 text-center" style="display: none; color: black; ">Book A Call</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		        <section class="s-services" style="margin-top: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="services-box" data-aos-duration="1000" data-aos="fade-up">
                            <div class="icon">
                                <img src="assets/images/icon/services-01.png" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="title h5">Rated as the best chain </a>
                                <p>best chain content carefully checked before processing, Mauris et
                                    justo eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="icon">
                                <img src="assets/images/icon/services-02.png" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="title h5">Quality Control </a>
                                <p>Some quality control content, Mauris et
                                    justo eros. Quisque consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-box" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="icon">
                                <img src="assets/images/icon/services-03.png" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="title h5">Different models </a>
                                <p>Different model dining and casual content, lorem ipsum dolor sit </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		                <section class="about-restaurant" id="about-section">
            <div class="container">			
        <div class="wg-about-hour" style="margin-top:-130px; margin-bottom: -140px;">
            <div class="wrap" style="flex-shrink: 0;">
                <div class="left">
                    <div class="content">
                        <div class="block-text center">
                            <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Fine Dining</p>
                            <h3 class="title" style="font-size:30px;"data-aos-duration="1000" data-aos="fade-up">First fine dining Indian restaurant franchise
                                    </h3>
                            <div class="divider wow fadeInUp"><div></div></div>
                               <p class="text" data-aos-duration="1000" data-aos="fade-up">Two models - fast casual cafe or a fine dining full-service restaurant. Check out our huge following – join a brand with amazing brand awareness </p>
                               <p class="text" data-aos-duration="1000" data-aos="fade-up">Our franchise model was designed with low labor cost and low food cost  </p>
                               <p class="text" data-aos-duration="1000" data-aos="fade-up">Experienced franchisees at the helm with business agility and in-depth knowledge of the industry . 15 years of success creating distinctive and memorable South Asian foods served at our Tabla restaurants </p>
                        </div>
                        <!---<p class="wow fadeInUp">Experience Ray's incomparable outdoor riverside dining at Ray's On The River, along with scenic patio dining at both Rays On The River and Rays.</p>
                        <p class="wow fadeInUp">While social distancing is one of our top priorities, guests may still enjoy beautiful surrounding nature landscapes <br> while dining.</p>
                        <img class="wow fadeInUp" src="assets/images/item-background/signature.png" alt="">
                        <div class="author wow fadeInUp"><a href="#">johnathan - chef master</a></div>--->
                    </div>
                </div>
                <div class="center">
                    <div class="image" style="height: 400px;">
                        <img class="bean-img-top" src="assets/images/section/findine.jpg" alt="" style="height: 300px; width: 400px;">
						<img class="bean-img-bottom" src="assets/images/section/casual.jpg" alt="" style="height: 300px; width: 400px;">
                    </div>
                </div>
                <div class="right">
                    <div class="content">
                        <div class="block-text center">
                            <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Fast Casual</p>
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">And a fast casual for cafe enthusiasts
                            </h3>
                            <div class="divider wow fadeInUp"><div></div></div>
                             <p class="text" data-aos-duration="1000" data-aos="fade-up">Tabla is the first fine dining Indian restaurant franchise. We have been recognized as a premium restaurant in the Orlando, Florida area and now we offer this opportunity to franchise owners in new markets. We offer fresh, flavorful and authentic Indian and Indian fusion cuisine to guests with two ownership models for franchise owners: full-service fine dining and fast casual with a limited menu.  </p>
                             
                              <p class="text" data-aos-duration="1000" data-aos="fade-up">We really cherish the awesome reviews and feedback when someone comes and celebrates their milestones with us. We cannot wait to have franchisees enjoy the same joy of becoming a part of our guest’s happy memories and celebrations!  </p>
                            </div>
                        <!----<ul class="list-content">
                            <li class="wow fadeInUp"><p class="text">Opening Hour:</p></li>
                            <li class="wow fadeInUp"><p>Monday - Friday : 9.00am - 22.00pm</p></li>
                            <li class="wow fadeInUp"><p>Saturday: 10.00am - 23.00pm</p></li>
                            <li class="wow fadeInUp"><p>Sunday: 5.00pm - 23.00pm</p></li>
                            <li class="wow fadeInUp"><p>Holidays: Closed</p></li>
                            <li class="wow fadeInUp"><p>Happy Hour: 18.00pm - 20.00pm</p></li>
                        </ul>---->
                       
                    </div>
                </div>
            </div>
        </div>
            </div>
        </section>

    


		

		        <section class="choose">
            <div class="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="choose-content">
                            <div class="block-text">
                                <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">why choose us</p>
                                <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Reasons to owna Tabla </h3>

                                <div class="flat-tabs" data-aos-duration="1000" data-aos="fade-up" >
                                    <ul class="menu-tab" style="padding-left: 0;">
                                        <li class="active">
                                            <h5>Higher Sales</h5>
                                        </li>
                                        <li>
                                            <h5>Huge Following</h5>
                                        </li>
									    <li >
                                            <h5>Supply Chain</h5>
                                        </li>
                                        <li>
                                            <h5>Outstanding History</h5>
                                        </li>

                                    </ul>

                                    <div class="content-tab">
                                        <div class="content-inner">
                                            <div class="container_inner">
                                                <p>According to the “Open for Opportunity” market research on franchised businesses:
                                                </p>
                                                <ul class="">
                                                    <li>Drive 1.8 times higher sales than comparable non-franchise establishments </li>
                                                    <li>Provide 2.3 times as many jobs than their non-franchise counterparts </li>
                                                    <li>Pass their success on to employees in the form of higher wages and benefits and greater opportunity for advancement</li>
                                                </ul>
                                                <a href="#" class="tf-button style3">Know More</a>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="container_inner">
                                                <p>Huge following text Lorem ipsum dolor sit amet.
                                                </p>
                                                <ul class="">
                                                    <li>music and space </li>
                                                    <li>atmosphere of fun </li>
                                                    <li>Experience the cozy space</li>
                                                    <li>everything is always clean and tidy </li>
                                                </ul>
                                                <a href="#" class="tf-button style3">Know more</a>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="container_inner">
                                                <p>Supply Chain Text and content, lorem ipsum dolor sit amet
                                                </p>
                                                <ul class="">
                                                    <li>music and space </li>
                                                    <li>atmosphere of fun </li>
                                                    <li>Experience the cozy space</li>
                                                    <li>everything is always clean and tidy </li>
                                                </ul>
                                                <a href="#" class="tf-button style3">read more</a>
                                            </div>
                                        </div>
										<div class="content-inner">
                                            <div class="container_inner">
                                                <p>Outstanding History Text and content, lorem ipsum dolor sit amet
                                                </p>
                                                <ul class="">
                                                    <li>music and space </li>
                                                    <li>atmosphere of fun </li>
                                                    <li>Experience the cozy space</li>
                                                    <li>everything is always clean and tidy </li>
                                                </ul>
                                                <a href="#" class="tf-button style3">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="choose-image" data-aos-duration="1000" data-aos="fade-left">
                            <div class="swiper swiperchoose">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" style="height: 600px; width: 400px;"><img src="assets/images/section/tabla1.jpg" alt=""></div>
									 <div class="swiper-slide" style="height: 600px; width: 400px;"><img src="assets/images/section/findine.jpg" alt=""></div>
                                    <div class="swiper-slide" style="height: 600px; width: 400px;"><img src="assets/images/section/casual.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next">next <br /> image</div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="testimonials" >
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper testimonialSwiper">
                            <div class="swiper-wrapper">


                                <div class="swiper-slide">
                                    <div class="testimonials-content">
                                        <img src="assets/images/icon/quote.png" alt="">
                                        <h4>Rated PREMIUM in Orlando, Florida
                                        </h4>
                                        <p>We really cherish the awesome reviews and feedback when someone
										<br>comes and celebrates their milestones with us. We cannot wait to have franchisees enjoy the same joy of becoming
										<br>a part of our guest’s happy memories and celebrations.</p>
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>

                                        <h5>Tabla</h5>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="Investment" id="investment" style="margin-top: 30px; margin-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block-text center">
                            <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Startup Investment</p>
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">INVESTMENT</h3>

                          

<div class="pricing__table">
  <div class="pt__title">
    <div class="pt__title__wrap">
      <div class="pt__row"></div>
      <div class="pt__row" style="color: black;">Initial Fees and 
        Investment Terms
        </div>
      <div class="pt__row" style="color: black;">Notes On Investment</div>
      <!--<div class="pt__row">Essentials</div>--->
    </div>
  </div>
  <div class="pt__option">
    <div class="pt__option__mobile__nav">
        <a id="pricing-card-left" href="#" class="mobile__nav__btn">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.1538 11.9819H1.81972" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M11.9863 22.1535L1.82043 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
        <a id="pricing-card-right" href="#" class="mobile__nav__btn">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.81934 11.9819H22.1534" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M11.9863 22.1535L22.1522 11.9865L11.9863 1.81946" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
    <div class="pt__option__slider swiper" id="pricing-card-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide pt__option__item">
          <div class="pt__item">
            <div class="pt__item__wrap">
              <div class="pt__row" style="color: black;">Startup Investment</div>
              <div class="pt__row">$257,824 to $466,124 Cafe <br> $456,189 to $691,000 Restaurant</div>
              <div class="pt__row">Startup ranges vary for our fast casual cafe or fine dining restaurant models</div>
    
            </div>
          </div>
        </div>
        <div class="swiper-slide pt__option__item">
          <div class="pt__item">
            <div class="pt__item__wrap">
              <div class="pt__row" style="color: black;">Initial Franchise Fee </div>
              <div class="pt__row">$35,000 Fast Casual Cafe <br> $50,000 Fine Dining Restaurant</div>
              <div class="pt__row" style="margin-top: 10px;">2 Unit-agreement 
                Cafe: $65,000 
                Fine Dining: $90,000 <br>
                3 Unit-agreement 
                Cafe: $95,000 
                Fine dining: $135,000

                </div>
 
            </div>
          </div>
        </div>
        <div class="swiper-slide pt__option__item">
          <div class="pt__item">
            <div class="pt__item__wrap">
              <div class="pt__row" style="color: black;">On-going Royalty</div>
              <div class="pt__row">6% of Gross Sales</div>
              <div class="pt__row">Paid Weekly </div>
          
            </div>
          </div>
        </div>
        <div class="swiper-slide pt__option__item">
          <div class="pt__item">
            <div class="pt__item__wrap">
              <div class="pt__row" style="color: black;">Brand Development Fund</div>
              <div class="pt__row">2% of Gross Sales </div>
              <div class="pt__row">Also invest 2% with $5,000/month min in local advertising and marketing</div>
       
            </div>
          </div>
        </div>
        <div class="swiper-slide pt__option__item">
          <div class="pt__item selected">
            <div class="pt__item__wrap">
              <div class="pt__row" style="color: black;">Grand Opening</div>
              <div class="pt__row">$10,000 to $15,000</div>
              <div class="pt__row">Included in startup range to 
                help open the business
                </div>
           
            </div>
          </div>
        </div>

     

      </div>
    </div>
  </div>
</div>
							
							
                        <!--</div>
                        <div class="row">
                            <div class="col-4">
                                <h2>Per our 2024 Franchise
                                Disclosure Document </h2>
                            </div>
                            <div class="col-4">
                                 <h2>Initial Fees and 
                                    Investment Terms
                                    </h2>
                            </div>
                            <div class="col-4">
                               <h2>Notes on Investment</h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-4">
                                <p style="font-size: 25px; font-weight: 500;">Startup Investment </p>
                            </div>
                            <div class="col-4">
                                 <p style="font-size: 25px;">$257,824 to $466,124 Cafe
                                    $456,189 to $691,000 Restaurant
                                    
                                 </p>
                            </div>
                            <div class="col-4">
                               <p style="font-size: 25px;">Startup ranges vary for our fast casual cafe or fine dining restaurant models</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 25px; font-weight: 500;">Initial Franchise Fee </p>
                            </div>
                            <div class="col-4">
                                 <p style="font-size: 25px;">Varies on Model <br>
                                    $35,000 Fast Casual Cafe <br>
                                    $50,000 Fine Dining Restaurant
                                 </p>
                            </div>
                            <div class="col-4">
                              <div class="row">
                               <div class="col">
                                 <p style="font-size: 25px;">2 Unit-agreement <br>
                                    Cafe: $65,000 <br>
                                    Fine Dining: $90,000 <br>
                                    </p>
                               </div>
                               <div class="col">
                                <p style="font-size: 25px;">3 Unit-agreement <br>
                                    Cafe: $95,000 <br>
                                    Fine dining: $135,000 <br>                                   
                                   </p>
                                </div>
                              </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 25px; font-weight: 500;">On-going Royalty </p>
                            </div>
                            <div class="col-4">
                                 <p style="font-size: 25px;">6% of Gross Sales
                                 </p>
                            </div>
                            <div class="col-4">
                                 <p style="font-size: 25px;">Paid Weekly </p>
                              </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 25px; font-weight: 500;">Brand Development Fund </p>
                            </div>
                            <div class="col-4">
                                 <p style="font-size: 25px; margin-left: 8px;">2% of Gross Sales  
                                 </p>
                            </div>
                            <div class="col-4">
                               <p style="font-size: 25px; margin-left: 12px;">Also invest 2% with $5,000/month min in local advertising and marketing</p>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-4">
                                <p style="font-size: 25px; font-weight: 500;">Grand Opening </p>
                            </div>
                            <div class="col-4">
                                 <p style="font-size: 25px; margin-left: 8px;">$10,000 to $15,000
                                 </p>
                            </div>
                            <div class="col-4">
                               <p style="font-size: 25px; margin-left: 12px;">Included in startup range to 
                                help open the business
                                </p>
                            </div>
                        </div>
                        <hr>

                        <div style="margin-top: 25px; margin-bottom: 25px;">
                            <p style="font-size: 25px;">As part of your pre-opening support, we provide on-boarding and training to prepare you to open. <br><br>
 
                                - Join us for 2 weeks (fast casual) or 3 weeks (fine dining) of initial training, plus a comprehensive 2 week long <br>   head chef training for our fine dining franchise units.  <br>
                                
                                - Then, onsite support in your Tabla as you get ready to open your restaurant. 
                                </p>
                        </div>
-->
                    </div>
                </div>
            </div>
        </section>
      
       <!---- <section class="booking">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="booking-content">
                            <div class="block-text style-2">
                                <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">Get in touch now!</p>
                                <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Own a Tabla</h3>
                                <p class="text" data-aos-duration="1000" data-aos="fade-up">Please fill up this form and our team of experts will call and assist you.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="booking-form">
                            <form id="book-form" method="GET"  onsubmit="return onFormSubmit();" >
                                <div class="form-group">

                                    <input type="text" class="form-control" id="name" placeholder="Name*" style="color: white;" required />
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">

                                        <input type="text" class="form-control" id="phone" placeholder="Phone*" style="color: white;" required />
                                    </div>
                                    <div class="form-group col-md-6">

                                        <input type="email" class="form-control" id="email" placeholder="mail@*" style="color: white;" required />
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">

                                        <select id="franchiseModel" class="form-control">
                                            <option selected>
											Fine Dine Model
                                            </option>
                                            <option selected>
											Cafe Model
                                            </option>
                                            <option selected>Both
                                            </option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <input type="text" class="form-control" id="location" placeholder="location" style="color: white;" required />
                                    </div>


                                </div>

                                <button type="submit" class="tf-button style1 text-center">Submit</button>
                              
                               
                            </form>
                            <p class="success" id="success">
                               Thank You For Filling the form. Our team will get in touch with you. Meanwhile -
                            </p>
                            <a type="submit" id="calender" class="tf-button style1 text-center" style="display: none;">Book A Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->


		
 <section class="event" id="founders-section">
            <div class="shape"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-md-12">
                        <div class="event-image style-2">
                            <div class="img" data-aos-duration="1000" data-aos="fade-right"><img src="assets/images/section/founder.jpeg" alt="">
                              <ul class="list"><li>Founder & CEO</li></ul>
                            </div>
                            <div class="img" data-aos-duration="1000" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100"><img src="assets/images/section/cofounder.jpeg" alt="">
                             <ul class="list"><li>Co Founder</li></ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12">
                        <div class="event-content style-2">
                            <div class="block-text">
                                <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">People who made it happen!</p>
                                <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Meet Our Founders <br >
                                </h3>

                                <p data-aos-duration="1000" data-aos="fade-up"> This section can be removed/replace with another section. creative decesion taken to 
											 change the design a bit. a dedicated meet our founder section is also there, we can also chnage the layout here.


                                </p>


                                <a href="#" class="tf-button style3" >Know more
                                </a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="s-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block-text center">
                            <p class="subtitle" data-aos-duration="1000" data-aos="fade-up">great moments </p>
                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">view our gallery</h3>
                        </div>
                        <div class="gallery-main">
                            <div class="gallery-box" data-aos-duration="1000" data-aos="fade-up">
                                <img src="assets/images/section/g1.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="gallery-box" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <img src="assets/images/section/g2.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="gallery-box" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <img src="assets/images/section/g3.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="gallery-box" data-aos-duration="1000" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <img src="assets/images/section/g4.jpg" alt="">
                                <div class="content">
                                    <a href="#" class="ig"><i class="fa-brands fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="center mt-50" data-aos-duration="1000" data-aos="fade-up">
                            <a href="#" class="tf-button style3">view all gallery & video</a>
                        </div>

                    </div>



                </div>
            </div>
        </section>

        <section class="s-faq" style="padding-bottom: 30px;" id="faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="faq-main">

                            <h3 class="title" data-aos-duration="1000" data-aos="fade-up">Most Asked Questions ?</h3>
                            <div class="flat-accordion style-1 style-2 style-3">
                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title active">Can I own more than one restaurant? <span class="icon"><i
                                                class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">Yes. We believe some owners will operate multiple units under either model. We offer discounts on initial franchise fees for owners who commit up front to a multi-unit development agreement.

                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title">Are you seeking owner operators or executive owners? <span class="icon"><i
                                                class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">We want our owners to be involved in the management of the business, but not working “in” the business. Most of our franchise owners will focus on marketing, guest loyalty and business development.

                                        </p>
                                     
                                    </div>
                                </div>
                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title">Do I need experience as a chef in an Indian or Asian restaurant?<span
                                            class="icon"><i class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">No. We do offer head chef training for our fine dining model. The menu in our fast casual concept is simpler and does not require this.

                                        </p>
                                        
                                    </div>
                                </div>
                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title">How much space do I need for this restaurant?<span
                                            class="icon"><i class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">Between 900 to 3,000 square feet for the fast casual model and 2,500 to 6,000 square feet for a fine dining full-service restaurant. Either model requires adequate parking and drive by traffic. Inquire about specific site criteria which will help you evaluate real estate that would be a good fit for the Tabla model you choose.

                                        </p>
                                      
                                    </div>
                                </div>

                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title">How long does it take to open?<span
                                            class="icon"><i class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">Estimated timeframe is between 4 and 9 months (cafe) up to 12 months (fine dining restaurant) based on 2nd Generation space in order to finish our pre-opening process and attend training.

                                        </p>
                                      
                                    </div>
                                </div>

                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title">How many employees are needed to operate the restaurant?<span
                                            class="icon"><i class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">Depending on the model, between 5 and 15 full-time and part-time employees per shift.

                                        </p>
                                      
                                    </div>
                                </div>

                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title">What are the startup costs and what do they include? <span
                                            class="icon"><i class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">Startup funding</a> includes the initial franchise fee and other estimated costs such as 3rd party professional fees, insurance, equipment, furniture and fixtures, plus initial marketing and 3-months of working capital.

                                        </p>
                                      
                                    </div>
                                </div>

                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title">Can I visit the restaurant to learn more? <span
                                            class="icon"><i class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">Absolutely, we would love to host you for a tour and have you meet our team! 

                                        </p>
                                      
                                    </div>
                                </div>

                                <div class="flat-toggle" data-aos-duration="1000" data-aos="fade-up">
                                    <div class="toggle-title">How much will the business make in a year? <span
                                            class="icon"><i class="fa fa-chevron-down"></i></span></div>
                                    <div class="toggle-content" style="background-color: rgba(200, 200, 200, 0.149)">
                                        <p class="mb-27">We will be able to share our Financial Performance Representation, called an Item 19, in our Franchise Disclosure Document which highlights affiliate performance and history. This can be a useful tool to help you evaluate the revenue potential of your Tabla restaurant or cafe.

                                        </p>
                                      
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


                <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget logo">
                            <img src="assets/images/logo/tablalogo.png" alt="">
                            <p>lorem ipsum dolor sit amet international dining styles, especially
                                in Asia.
                            </p>
                            <ul class="list-social" >
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="widget locations">
                            <h5>location</h5>
                            <ul>
                                <li>
                                    <span>Address:
                                    </span>
                                    <p>Some 123 Street.
                                       City, California 12345, USA
                                    </p>
                                </li>
                                <li>
                                    <span>Contact:
                                    </span>
                                    <p><a style="color: white;" href="mailto:mail@mail.com">mail@mail.com</a>
                                    </p>
                                    <p>+1 123 234 345</p>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget latestnew">
                            <h5>newsletter</h5>
                            <p class="mb-28">Register your email to not miss any news and offers from us! </p>
                            <form>
                                <div class="form-group">

                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email *">

                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree to the Privacy
                                        Policy</label>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row bottom-footer">
                    <div class="bottom-main">
                        <p>Copyright © 2023 Tabla. All Rights Reserved.</p>

                       
                    </div>

                </div>
            </div>
        </footer>



    </div>
    <a id="scroll-top"></a>
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/swiper-bundle.min.js"></script>
    <script src="app/js/swiper.js"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="app/js/parallax.js"></script>
    <script src="app/js/jquery.magnific-popup.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app/js/count-down.js"></script>
    <script src="app/js/countto.js"></script>

</body>

<script>
    function myFunction() {
      const element = document.getElementById("faq");
      element.scrollIntoView();
    }
    
    function about() {
      const element = document.getElementById("about");
      element.scrollIntoView();
    }
    
    function founder() {
      const element = document.getElementById("founder");
      element.scrollIntoView();
    }
    
    function investment() {
      const element = document.getElementById("investment");
      element.scrollIntoView();
    }
    
   /* function submit() {
        alert("Sent Successfully !");
        document.getElementById("calender").style.display = "block";
    }

     function submitform() {
        alert("Sent Successfully !");
        document.getElementById("calender1").style.display = "block";
    }

     function submitForm() {
        alert("Sent Successfully !");
        document.getElementById("calender2").style.display = "block";
    }*/
    


  function onFormSubmit() {
  document.getElementById("book-form").style.display = "none";
  document.getElementById("success").style.display = "block";
  document.getElementById("calender").style.display = "block";
  return false;
}

function formSubmit() {
  document.getElementById("owner-form").style.display = "none";
  document.getElementById("success1").style.display = "block";
  document.getElementById("calender1").style.display = "block";
  return false;
}

function tablaSubmit() {
  document.getElementById("own-tabla").style.display = "none";
  document.getElementById("success2").style.display = "block";
  document.getElementById("calender2").style.display = "block";
  return false;
}

function ownSubmit() {
  document.getElementById("own-tabla1").style.display = "none";
  document.getElementById("success3").style.display = "block";
  document.getElementById("calender3").style.display = "block";
  return false;
}




        
     

    

    </script>

</html>