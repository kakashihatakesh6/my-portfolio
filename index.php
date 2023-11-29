<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikhil Dasar Portfolio</title>
    <!---------------- Fav-icon --------------------->
    <link rel="shortcut icon" href=".static/images/yin-yang.svg" type="image/x-icon">
    <!----------------- AOS Css file ----------------->
    <link rel="stylesheet" href=".static/aos-master/dist/aos.css">
    <!-------------- Vendor CSS File ---------------->
    <link rel="stylesheet" href="./static/assets/css/style.css">
    <!-------------  Bootstrap    ------------>
    <link rel="stylesheet" href="static/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/vendor/bootstrap-5.2.3-dist/icons-1.10.2/font/bootstrap-icons.css">
    <!-------------  Bootstrap lainfo Icons   ---------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <!----------------- PageClip CSS ------------------>
    <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen">
    
</head>
<body>
    <?php
        echo "Hello Nikhil!!!
      ?>
    <!--------- Mobile nav toggle button ----->
    <i class="bi bi-list-nested mobile-nav-toggle d-xl-none"></i>

    <!--------------- Header ------------------->

    <header class="main-header d-flex" id="main-header">
        <div class="d-flex flex-column headerprofile">
            <div class="profiledp-container">
                <img class="profiledp" src="/static/images/mypic-3.jpg" alt="wait a bit">
                <h4>Nikhil Dasar</h4>
            </div>
            <div class="icon-bar">
                <nav class="icon-bar-container">
                    <a class="header-icon-main" href="">
                        <i class="bi-github header-icon "></i>
                    </a>
                    <a class="header-icon-main" href="">
                        <i class="bi-linkedin header-icon"></i>
                    </a>
                    <a class="header-icon-main" href="">
                        <i class="bi-twitter header-icon"></i>
                    </a>
                    <a class="header-icon-main" href="">
                        <i class="bi-facebook header-icon"></i>
                    </a>
                    <a class="header-icon-main" href="">
                        <i class="bi-instagram header-icon"></i>
                    </a>
                    <a class="header-icon-main" href="linktr.ee/nikhil_dasar_naidu">
                        <i class="bi-tree header-icon"></i>
                    </a>
                </nav>
            </div>
            <div class="navmenu-container">
                <nav class="navmenu">
                    <ul>
                        <li>
                            <a class="header-nav-link scrolltohash active" href="#bgcover" id="Home"><i class="bi bi-house scrollto header-navl-icon"></i><span> Home</span></a>
                        </li>
                        <li>
                            <a class="header-nav-link scrolltohash" href="#about"><i class="bi bi-person-circle"></i><span> About</span></a>
                        </li>
                        <li>
                            <a class="header-nav-link scrolltohash" href="#resume"><i class="bi bi-file-earmark header-navl-icon"></i><span> Resume</span></a>
                        </li>
                        <li>                          
                            <a class="header-nav-link scrolltohash" href="#services"><i class="bi bi-link-45deg header-navl-icon"></i><span> Links</span></a>
                        </li>
                        <li>                           
                            <a class="header-nav-link scrolltohash" href="#contact"><i class="bi bi-envelope"></i><span> Contact</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>

    </header> <!----------- End of header ----->

    <!--------------- Bgcover Section ----------->
    <section id="bgcover" class="d-flex flex-column justify-content-center align-items-center bgcover" data-aos="">

        <div class="type-animation-container" data-aos="fade-in">
            <h1>Nikhil Dasar Naidu</h1>
            <p>I'm a <span class="typed" data-typed-items="Programmer,Web Developer,Competitive,Programmer,Python Developer,Android Developer"></span></p>
        </div>

    </section> <!-------------- End Bgcover section ---------------------->


  <!---------------------  Main ------------------------------->

  <main id="main">

    <!--------------- About Section ----------->

    <section id="about" class="about">
        <div class="section-title">
            <h2>About</h2>
            <p>An IT undergraduate student at Government Engineering College, Bilaspur. <br>
            I'm a web developer and i work on web development projects.</p><hr>
        </div>
            
        <div class="row about-info" data-aos="fade-up">
                <!-------------  Column left  -------------->
                <div class="d-flex col-lg-3 col-md-12 justify-content-center about-img">
                    <img class="narutosquaredp" src="static/images/me_5_dp2.png" alt="">
                </div>
                <!------------- Column right --------------->
                <div class="col-lg-8 col-md-12 content">
                    <h3>Competitive programmer and web Developer.</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 about-lc">
                            <ul>
                                <li><p><i class="bi bi-arrow-right-circle-fill"></i><b> Birthday: </b>15, August 1999</p></li>
                                <li><p><i class="bi bi-arrow-right-circle-fill"></i><b> Website: </b>www.nkdportfolio.com</p></li>
                                <li><p><i class="bi bi-arrow-right-circle-fill"></i><b> Mobile Number: </b>6268885174</p></li>
                                <li><p></p><i class="bi bi-arrow-right-circle-fill"></i><b> Address: </b>Bilaspur, Chhattisgarh, India</p></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12 about-rc">
                                <ul class="list-about">
                                    <li><p><i class="bi bi-arrow-right-circle-fill"></i><b> Age: </b>23</p></li>
                                    <li><p><i class="bi bi-arrow-right-circle-fill"></i><b> Degree: </b>Bachelor of Technology</p></li>
                                    <li><p><i class="bi bi-arrow-right-circle-fill"></i><b> Major: </b>Information Technology</p></li>
                                    <li><p><i class="bi bi-arrow-right-circle-fill"></i><b> Email: </b>nkdasar@gmail.com</p></li>
                                </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section> <!-------------  End of about --------------->

    <!----------------  Skill Section  ---------------->

    <section id="skill-bar" class="skill-bar mt-5" data-aos="fade-down">
            <div class="row p-4">

                <div class="col-lg-6 col-md-12">
                    <div class="container-fluid">
                        
                        <div class="bar-value-container">
                            
                            <span class="bar-value">C & C++ <b>80%</b></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="bar-1" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                            </div><br>

                            <span class="bar-value">HTML, CSS & BOOTSTRAP <b>95%</b></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="bar-2" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                            </div><br>

                            <span class="bar-value">PYTHON <b>75%</b></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="bar-3" style="width: 75%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div><br>

                            <span class="bar-value">GIT AND GITHUB <b>70%</b></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="bar-4" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>                         

                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="bar-point container-fluid">

                            <span class="bar-value">PROBLEM SOLVING <b>95%</b></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="bar-5" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                              </div><br>
                            
                            <span class="bar-value">DJANGO AND DJANGO FRAMEWORK <b>70%</b></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="bar-6" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div><br>

                            <span style="display: flex; justify-content:space-between;">REST API <b>85%</b></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="bar-7" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                            </div><br>

                            <span style="display: flex; justify-content:space-between;">JAVASCRIPT <b>50%</b></span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="bar-8" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                              
                    </div>
                </div>


            </div>
    </section>  <!------------ End of Skill ---------------->

    <!--------------- Resume Section--------------->
    
    <section class="resume p-3" id="resume">
        
        <div class="section-title">
            <h2 class="section-title-name">Resume</h2>
        </div><hr>
        
        <div class="row" data-aos="fade-up">
            
            <div class="col-lg-6 col-md-12 resume-container">
                
                <h3 class="resume-title">Summary</h3>
                <div class="resume-data-item">
                    <h4>Nikhil Dasar</h4>
                    <p><em>An IT Undergraduate Student</em></p>
                    <ul>
                        <li><p>nkdasar@gmail.com</p></li>
                        <li><p>6268885174</p></li>
                        <li><p>Bilaspur, Chhattisgarh</p></li>
                    </ul>
                </div>

                <h3 class="resume-title">Education</h3>
                <div class="resume-data-item">
                    <h4>BACHELOR OF TECHNOLOGY</h4>
                    <h5>2019-2023</h5>
                    <p><em>Government Engineering Collage, Bilaspur</em></p>
                </div>
                <div class="resume-data-item">
                    <h4>INTERMEDIATE</h4>
                    <h5>2015-2017</h5>
                    <p><em>Vidya Mandir Classes</em></p>
                    <p><small>Got 84% never tried to score more than this.</small></p>
                </div>
                <div class="resume-data-item">
                    <h4>HIGH SCHOOL</h4>
                    <h5>2013-2015</h5>
                    <p><em>Vidya Mandir Classes</em></p>
                    <p><small>It Dosen't count haha</small></p>
                </div>
                <div class="resume-data-item">
                    <h4>Entrance Exams</h4>
                    <h5>2017-2019</h5>
                    <p>
                        <em>JEE MAINS</em>
                        <p><small>2 Times JEE Qualified. <br>
                                  Got a decent rank around 11k
                                  and 23k.
                        </small></p>
                    </p>
                </div>
                <div class="resume-data-item">
                    <h4>JEE ADVANCE 2017 & 2018</h4>
                    <p><small>2 Times Appeared at JEE ADVANCE<br>
                             Got 78 marks and 111 marks respectively.
                    </small></p>
                </div>
                <div class="resume-data-item">
                    <h4></h4>
                    <p>
                        <small></small>
                    </p>
                </div>

                <h3 class="resume-title">Training</h3>
                <div class="resume-data-item">
                    <h4>Introduction to python</h4>
                    <h5>Aug 2020-Sep 2020 (2 Weeks)</h5>
                    <p><em>IIIT Naya Raipur</em></p>
                </div>
                <div class="resume-data-item">
                    <h4>Full Stack Web development (PHP, MYSQL)</h4>
                    <h5>March 2021 (1 Week+)</h5>
                    <p><em>EICT IIT KANPUR</em></p>
                    <!-- <a href="../static/images/Certificate/EICT IIT Kanpur - Full Stack Web Development Certificate.pdf">Certificate</a> -->
                    <a href="">Certificate</a>
                </div>
                <div class="resume-data-item">
                    <h4>Introduction to Data Structures & Algorithms</h4>
                    <h5>May 2021 (4 Weeks)</h5>
                    <p><em>Internshala</em></p>
                    <a href="">Certificate</a>
                </div>
                

            </div>


            <div class="col-lg-6 col-md-12 resume-container">
                 
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-data-item">
                    <h4>Full Stack Developer and Competitive Programmer</h4>
                    <h5>March 2021- present</h5>
                    <p><em>Software Society Of India, NIT Trichy</em></p>
                    <ul>
                        <li><p>Working as a Full Stack Developer and Competitive Programmer.</p></li>
                        <li><p>Coordinate few Technical Events and Workshops on trending Technologies ( next.Js, Sanity etc).</p></li>
                        <li><p>Conducted a competitive problem solving event (Crafty-Coders) in which 250+ students participated from various colleges.</p></li>
                    </ul>
                </div>

                <h3 class="resume-title">Web Developer Intern</h3>
                <div class="resume-data-item">
                    <h5>Jan 2021-Mar 2021</h5>
                    <p><em>Bridger-Solutions</em></p>
                    <ul>
                        <li><p>Build various web applications routes and models for various usecases(ie: User Authentication History, User Audit Logs, Session History, User Login History etc).</p></li>
                        <li><p>Build various APIs for fetching data.</p></li>
                        <li><p>Throughout the work used mostly Django, React, Node.js, mongoose and Bootstrap frameworks.</p></li>
                    </ul>
                </div>
                <h3 class="resume-title">Training</h3>
                <div class="resume-data-item">
                    <h4>Android App Developement (8 Weeks)</h4>
                    <h5>Sep 2021</h5>
                    <p><em>Internshala</em></p>
                    <a href="">Certificate</a>
                </div>
                <div class="resume-data-item">
                    <h4>Modern App Building Training (2 weeks)</h4>
                    <h5>Nov 2021</h5>
                    <p><em>NIT Trichy</em></p>
                    <a href="">Certificate</a>
                </div>
                <div class="resume-data-item">
                    <h4>Strategy and Marketing (Space Tech 5 days)</h4>
                    <h5>Jan 2022</h5>
                    <p><em>IISc Banglore</em></p>
                    <a href="">Certificate</a>
                </div>
                


            </div>
        </div>

    </section> <!----------- End of resume ----------  -->

    <!-------------------- Services Section -------------------------->

    <section class="services" id="services">
        
        <div class="section-title">
            <h2 class="section-title-name">Competitive Programming Links</h2>
        </div><hr>
        
        <div class="slider-container">
            <div class="slider-title">
                <h2>Tech & Tools</h2>
            </div>
            
            <!------------- Flickity Container ----------------------->

            <div class="carousel" data-aos="fade-up" data-flickity='{"contain": true, "autoPlay": 1500, "pauseAutoPlayOnHover": true}'>
                
                <div class="carousel-cell">
                    <img src="static/images/Logos/html-logo.png" alt="" class="aos-init aos-animate" data-aos="fade-right" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/java-logo.png" alt="" class="aos-init aos-animate" data-aos="fade-right" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/css-logo-2.jpg" alt="" class="carousel-cell-image" data-aos="fade-right" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/bootstrap-logo-4.png" alt="" class="aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/html-logo-transparent.webp" alt="" class="aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/html-logo.png" alt="" class="aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/django-logo.jpg" alt="" class="carousel-cell-image" data-aos="fade-right" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/git-logo.png" alt="" class="aos-init aos-animate" data-aos="fade-in" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/api-logo.jpg" alt="" class="aos-init aos-animate" data-aos="fade-in" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/Octocat-logo.png" alt="" class="aos-init aos-animate" data-aos="fade-in" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/python-logo-2.png" alt="" class="carousel-cell-image" data-aos="fade-left" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/java-logo.png" alt="" class="aos-init aos-animate" data-aos="fade-in" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/html-logo.png" alt="" class="aos-init aos-animate" data-aos="fade-in" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/api-logo.jpg" alt="" class="aos-init aos-animate" data-aos="fade-in" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/django-logo.jpg" alt="" class="carousel-cell-image" data-aos="fade-left" data-aos-easing="ease-in-shine">
                </div>
                <div class="carousel-cell">
                    <img src="static/images/Logos/bootstrap-logo-4.png" alt="" class="aos-init aos-animate" data-aos="fade-left" data-aos-easing="ease-in-shine">
                </div>
                
            </div>  <!-------------- End of flickity container --------------->
        
        </div>   <!------------ End of Flickity ---------------->


        <div class="competitive-links-container" data-aos="fade-up">
            
            <div class="container-fluid container-main-links">

                <div class="link-container">
                    <img src="static/images/link-code/hacker-rank-logo.png" alt="link-1-image">
                    <h4>Hacker-Rank</h4>
                    <a href=""><span>Profile link</span></a>
                </div>

                <div class="link-container">
                    <img src="static/images/link-code/leet-code.png" alt="link-1-image">
                    <h4>LeetCode</h4>
                    <a href=""><span>Profile link</span></a>
                </div>

                <div class="link-container">
                    <img src="static/images/link-code/code-chef-logo.png" alt="link-1-image">
                    <h4>Code-Chef</h4>
                    <a href=""><span>Profile link</span></a>
                </div>

                <div class="link-container">
                    <img src="static/images/link-code/Geek-for-geek-logo.png" alt="link-1-image">
                    <h4>Geek For Geeks</h4>
                    <a href=""><span>Profile link</span></a>
                </div>

                <div class="link-container">
                    <img src="static/images/link-code/stop-stalk-logo.png" alt="link-1-image">
                    <h4>Stop Stalk</h4>
                    <a href=""><span>Profile link</span></a>
                </div>



            </div>
        </div>

    </section> <!---------------------  End of Services ------------------------>

                                 
    <!---------------- Contact Section  ------------------->

    <section id="contact" class="contact">
        
        <div class="section-title">
            <h2 class="section-title-name">Contact</h2>
        </div><hr>

        <div class="row contact-row" data-aos="fade-left">

                <!---------------- Address,Email,Phone------------------------>
                <div class="map-column col-lg-5 col-md-12 d-flex align-items-stretch">
                    <div class="map-column-info">
                     
                        <div class="address2">
                            <i class="bi bi-geo"></i>
                            <h4>Location:</h4>
                            <p>Bilaspur, Chhattisgarh</p>
                        </div>
                        <div class="email2">
                            <i class="bi bi-envelope-at"></i>
                            <h4>Email:</h4>
                            <p>nkdasar@gmail.com</p>
                        </div>
                        <div class="phone2">
                            <i class="bi bi-phone"></i>
                            <h4>Phone:</h4>
                            <p>6268885174</p>
                        </div>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=bilaspur india&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">#map-area</iframe>
                            </div>
                            <style>
                                .mapouter{
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }
                                .gmap_iframe {
                                    width:100%!important;
                                    height: 300px!important;
                                }
                            </style>
                        </div>
                        
                    </div>                   
                </div> 

                <!------------------ Form Column  ----------------------------->
                <div class="form-email d-flex col-lg-7 col-md-12" data-aos="fade-right">
                    <div class="form-box">

                        <div class="form-email-title">
                            <h2>Beep a message</h2>
                        </div>

                        <div class="form-box-info bg-light p-2">
                            
                            <form action="https://send.pageclip.co/hWwSl1DU5MnwIlsFqrBD9xdn8pWMd5zX" class="pageclip-form" method="post">
                                
                                <div class="form-group">
                                     <label for="Name">Your Name</label>
                                     <input type="text" class="form-control" id="form-control" name="name-input" placeholder="Enter Your Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Your Email</label>
                                    <input type="email" class="form-control" name="email-input" id="email-input" placeholder="Enter Your Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="phone-input" id="phone-input" placeholder="Your Subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="Message">Message</label>
                                    <textarea class="form-control" name="message-input" id="message-input" cols="30" rows="3" placeholder="Write Your Message .." required></textarea>
                                </div>
                                <div class="submit-button">
                                    <button type="submit" class="btn-messsage" id="submit-btn">Send Message</button>
                                </div>
    
                            </form>
                        </div>
                        
                    </div>  
                </div>

            
        </div>


    </section>


    <!-------------------- Footer Section ------------------->

    <section class="footer" id="footer">
        <div class="cotainer-fluid footer-container" id="footer-container">
              <span class="footer-info">&copy; Copyright 2020. All rights reserved</span>
              <strong>Designed by Nikhil Dasar</strong>
        </div>
    </section> <!------------------ End footer section -------------------->



  </main> <!---------End of Main------->

  <!----------------------------->
    <!--### Back to Top ###-->
  <!----------------------------->
  <a href="#" class="back-to-top"><i class="bi bi-arrow-up-short"></i></a>
  

  <!-----------------------------------------------
            ******* JS SCRIPT FILES  *******
    ---------------------------------------------------> 

  <!----------------- Typed JS ------------------>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <!-- Flickity Js -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>  

  <!------------ Main Js file ------------>
  <script src="./static/assets/js/main.js"></script>

  <!---------------- AOS js file ---------->
  <script src=".static/aos-master/dist/aos.js"></script>
       <!-------- Initialize aos -------->
       <script>
            AOS.init({
                offset:300,
                duration:2000,
            });
       </script>

    <!----------------- PageClip JS ------------------>
    <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>




</body>
</html>
