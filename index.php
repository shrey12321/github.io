<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Hello! my name is Shrey Garg and I am pursuing B.tech from SRM University in IT stream chennai this is my portfolio that describe my work">
        <meta name="keywords" content="beingyourself,Shrey garg,shrey, garg">
        <meta name="subject" content="your website's subject">
        <meta name="copyright"content="Beingyourself">
        <meta name="language" content="ES">
        <meta name="robots" content="index,follow" />
        <meta name="revised" content="Sunday, July 22nd, 2018, 5:15 pm" />
        <meta name="abstract" content="">
        <meta name="topic" content="">
        <meta name="summary" content="">
        <meta name="Classification" content="PERSONAL">
        <meta name="author" content="sHREY,crazymeshrey@gmail.com">
        <meta name="designer" content="Shrey">
        <meta name="owner" content="Shrey">
        <meta name="url" content="http://www.beingyourself.me">
        <meta name="identifier-URL" content="http://www.beingyourself.me">
        <meta name="directory" content="submission">
        <meta name="category" content="portfolio">
        <meta name="coverage" content="Worldwide">
        <meta name="distribution" content="Global">
        <meta name="rating" content="General">
        <meta name="revisit-after" content="7 days">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta name="og:title" content="sHREY Garg"/>
        <meta name="og:type" content="PERSONAL"/>
        <meta name="og:url" content="http://www.beingyourself.me"/>
        <meta name="og:image" content="http://beingyourself.me/images/shrey12.jpg"/>
        <meta name="og:site_name" content="Beingyourself"/>
        <meta name="og:description" content="Hello! my name is Shrey Garg and I am pursuing B.tech from SRM University in IT stream chennai this is my portfolio that describe my work"/>

        <link rel="stylesheet" href="fontawesome4/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="images/logo.png">
        <title> Shrey Garg</title>
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/customanim.css">
        <link rel="stylesheet" type="text/css" href="css/shrey.css">
        <link rel="stylesheet" type="text/css" href="css/aos.css">
               


    </head>

    <body>
        

        <script src="js/shrey.js" type="text/javascript">
        </script>
        <script>$('body').css('overflow', 'hidden');</script>
        <?php
                if($_SERVER['REQUEST_METHOD']=="POST")
                {
                $conn=new mysqli('localhost','id765132_crazymeshrey','mydatabase','id765132_shrey');
                if($conn->connect_error)
                die($conn->connect_error);
                $sql="insert into `contact-shrey` values('','{$_POST['name']}','{$_POST['email']}','{$_POST['company-name']}','{$_POST['phone']}','{$_POST['message']}') ";
                $conn->query($sql);
                if($conn->error)
                die($conn->error);

                      $to=$_POST['email'];
                      $sub="Thank You For Your Response";
                      $msg="Thank You for your response and your query will be solved soon";
                      echo "<script>alert('Thank You For Response');</script>";

                                mail($to,$sub,$msg,"shrey@beingyourself.me","shrey@beingyourself.me");

                 }

                ?>
            <div class="loader">

                    <div class="loaderimg" style=""></div>
                    <div class="loaderimg1" style=""></div>
                    <div class="loaderimg2" style=""></div>

            </div>
            <div class="page">
               
                    <div class="bg">
                        <div class="dotm-overlay">
                            <!--navigation bar-->
                            <div class="nav">
                                <div class="logo">
                                    <div class="name">
                                        Beingyourself
                                    </div>
                                </div>
                                <div >
                                <ul class="option">
                                    <a>
                                        <li id="home" class="li1">Home</li>
                                    </a>
                                    <a>
                                        <li id="about" class="li1">About</li>
                                    </a>
                                    <a>
                                        <li id="skills" class="li1">Skills</li>
                                    </a>
                                    <a>
                                        <li id="education" class="li1">Education</li>
                                    </a>
                                    <a>
                                        <li id="experiance" class="li1">Experience</li>
                                    </a>
                                    <a>
                                        <li id="portfolio" class="li1">Portfolio</li>
                                    </a>
                                    <a>
                                        <li id="contact" class="li1">Contact</li>
                                    </a>
                                </ul>
                              </div>
                            </div>
                            <div class="ham" onclick="myf();">
                                <div class="hamline"></div>
                                <div class="hamline"></div>
                                <div class="hamline" id="lasthamline"></div>
                            </div>
                            <!--navigation bar over-->
                            <!--http://s14.directupload.net/images/111129/44ga9qid.png-->
                            <!--https://p.w3layouts.com/demos_new/template_demo/01-07-2017/my_design-demo_Free/528613908/web/images/dott.png-->
                            <div class="container">
                                <div class="mycontent-onpic">
                                    HI , I AM
                                    <br>SHREY GARG
                                </div>
                                <div class="quote">
                                    <h2><span id="w">W</span>eb Developer And Designer</h2>
                                    <p id="on-pic-content">
                                        I like to solve logical challenges in my life
                                        no matters how much time it takes  to get solved and I Love to
                                        do productive work which may benificial  for users and always try to
                                        design responsive web pages whenever  I got the
                                         free time.Front-end and back-end both are my favourite
                                        but I give my more focus on front-end through HTML,CSS,JS.
                                    </p>
                                </div>
                                <input type="button" value="Read More" class="button1">
                                <a href="shreygarg.pdf">
                                    <input type="button" value="Download CV" class="button2">
                                </a>
                            </div>
                            <a>
                                <p class="arrow"><i class="fa fa-arrows-v" aria-hidden="false"></i>
                                    <p>
                            </a>
                        </div>
                    </div>
                
                <!--ABOUT-->
                
                    <div class="about">
                        <div id='about-heading' class="anim-heading" data-aos="zoom-in" data-aos-duration="1200">ABOUT ME</div>
                        <p class="about-para" data-aos="fade-up">
                            I am desperate towards my work and like to do work hard for the things in which I am interested in . I am always ready for learning new things that fascinates me. I like to do logical stuffs. I took my inspiration from the work in which I got succeed out of amount of work I did.I like to do work for my passion rather than taking as a competition i always enjoy my work. I love to design responsive web pages whenever got the time font-end and back-end both are my favorite but I give my more focus on front-end through HTML,CSS,JS.
                        </p>
                        <img src="images/shreyonly2.png" class="about-pic" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1200" alt="Shrey Pic">
                    </div>
                
                <!--SKILLS-->
                
                    <div class="skill">
                        <div id='skill-heading' class=" anim-heading" data-aos="zoom-in" data-aos-duration="1200">SKILLS</div>
                        
                        <div class="col-50 wow fadeIn">
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner pink eighty">
                                    C Language
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner orange seventy">
                                    Cpp Language
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner purple fifty">
                                    Java core 
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner blue ninty">
                                    HTML
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner green ninty">
                                    CSS
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner pink thirty">
                                    Android
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-50 wow fadeIn">
                             <div class="bar-outer">
                                <div class="bar-outer bar-inner pink thirty">
                                    JS
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner orange thirty">
                                   JQUERY
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner purple fifty">
                                    PHP
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner blue seventy">
                                   MYSQL
                                </div>
                            </div>
                            <div class="bar-outer">
                                <div class="bar-outer bar-inner green thirty">
                                    Ajax
                                </div>
                            </div>
                        </div>
                        
                    </div>
              
                <!--education-->
                
                    <div class="education">
                        <div class="education-heading anim-heading" data-aos="zoom-in" data-aos-duration="1200">EDUCATION</div>
                        <div  class="row1" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col1">
                                2013 Vidyasagar School
                            </div>
                            <div class="col2">
                                Class Tenth
                                <div class="col2-content">
                                    I completed my class 10th with average cgpa 8.6 in Central Board Of Secondry Education
                                </div>
                            </div>
                        </div>
                        <div class="row1" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col1 col3">
                                2015 ILVA School
                            </div>
                            <div class="col2 col4">
                                Class Twelfth
                                <div class="col2-content">
                                    I completed my class 12th with 80% in Central Board Of Secondry Education
                                </div>
                            </div>
                        </div>
                        <div class="row1" data-aos="fade-up" data-aos-duration="1000">
                            <div class="col1">
                                2015-2019 SRM
                            </div>
                            <div class="col2">
                                B.Tech in IT
                                <div class="col2-content">
                                    I am pursuing my engineering with average percentage 84.98 in Srm University
                                </div>
                            </div>
                        </div>
                    </div>
                
                <!--experiance-->
               
                    <div class="education experiance">
                        <div class="experiance-heading  anim-heading" data-aos="zoom-in" data-aos-duration="1200">EXPERIENCE</div>
                        <div class="row1" data-aos="fade-left" data-aos-duration="1000">
                            <div class="col1 col3">
                                2017 SUN PHARMACEUTICAL
                            </div>
                            <div class="col2 col4">
                                Summer Internship
                                <div class="col2-content">
                                    I completed my Summer internship in SUN PHARMACEUTICAL industries dewas in the Info-Tech department.
                                </div>
                            </div>
                        </div>
                         <div class="row1" data-aos="fade-right" data-aos-duration="1000">
                            <div class="col1">
                                2018 NeuroNerdz
                            </div>
                            <div class="col2">
                                Technical Head
                                <div class="col2-content">
                                    I am a technical head of the startup that works on wordpress based bloging site.
                                </div>
                            </div>
                        </div>
               
                   </div>
                <!--Portfolio-->
                    <div class="portfolio">
                        <div class="experiance-heading anim-heading" data-aos="zoom-in" data-aos-duration="1200">PORTFOLIO</div>
                        <div class="row wow fadeIn margin-top">
                            <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill1" id="first-img" src="images/4a.jpg" alt="sorry">
                                
                                <div class="overlay">
                                    <div class="text" data-aos="zoom-in-down" >University Question Paper Site</div>
                                    
                                    <div class="overlay2">
                                       <a href="https://www.qapaper.com"> <i class="fa fa-2x fa-link" aria-hidden="true"></i></a>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill2" src="images/2a.jpg" alt="sorry">
                                
                                <div class="overlay">
                                   <div class="text" data-aos="zoom-in-down" > Notes Sharing Site</div>
                                      <div class="overlay2">
                                       <a href="https://www.mynotes.ga"> <i class="fa fa-2x fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill3" src="images/3a.jpg" alt="sorry">
                                
                                <div class="overlay">
                                   <div class="text" data-aos="zoom-in-down" > My Portfolio </div>
                                      <div class="overlay2">
                                        <a href="http://www.beingyourself.me"><i class="fa fa-2x fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row wow fadeIn">
                            <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill4" src="images/9a.jpg" alt="sorry">
                               
                                <div class="overlay">
                                    <div class="text" data-aos="zoom-in-down" >Facebook phising site </div>
                                      <div class="overlay2">
                                        <a href="http://beingyourself.me/secondsite/fb.php"><i class="fa fa-2x fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col " data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill5 nee" src="images/5a.jpg" alt="sorry">
                                
                                <div class="overlay ">
                                    <div class="text" data-aos="zoom-in-down" > Blood Donation Site </div>
                                     <div class="overlay2">
                                        <a href="http://beingyourself.me/secondsite/hospital/hospitallog.php"><i class="fa fa-2x fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill6" src="images/6a.jpg" alt="sorry">
                               
                                <div class="overlay">
                                   <div class="text" data-aos="zoom-in-down" > Neuronerdz through Wordpress </div>
                                    <div class="overlay2">
                                        <a href="https://www.neuronerdz.com"><i class="fa fa-2x fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row wow fadeIn">
                            <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill7" src="images/7a.jpg" alt="sorry">
                               
                                <div class="overlay">
                                    <div class="text" data-aos="zoom-in-down">TicTacToe Application Android</div>
                                     <div class="overlay2">
                                       <a href="https://drive.google.com/open?id=11AbhBnLF0eQwhjvhLhva6dePz6lwihRH"> <i class="fa fa-2x fa-link" aria-hidden="true"></i>
                                       </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill8" src="images/8a.jpg" alt="sorry">
                                
                                <div class="overlay">
                                    <div class="text" data-aos="zoom-in-down" > SGPA Calculator SRM </div>
                                     <div class="overlay2">
                                        <a href="https://drive.google.com/open?id=1gop4bKTzMaAhJxttMjqmqyWX1cg1zifK"><i class="fa fa-2x fa-link" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col" data-aos="zoom-in" data-aos-duration="1200">
                                <img class="img-skill9" src="images/4a.jpg" alt="sorry">
                                
                                <div class="overlay">
                                   <div class="text" data-aos="zoom-in-down" > Bank Management in Cpp </div>
                                      <div class="overlay2">
                                        <a href="https://drive.google.com/open?id=1nfVOjGice_HoK2LqYtLr0Bjgrvjsw1UO"><i class="fa fa-2x fa-link" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!--contact-->
                
                    <div class="contact">
                        <div class="contact-heading  anim-heading" data-aos="zoom-in" data-aos-duration="1400">CONTACT</div>
                        <div class="contact-container">
                            <div class="form">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    Please feel free to contact anytime your Response is  important for me
                                    <br/>
                                    <input type="text" name="name" placeholder="Name" required>
                                    <input type="email" name="email" required placeholder="Email Id">
                                    <br/>
                                    <input type="text" name="company-name" required placeholder="Company Name">
                                    <input type="text" name="phone" required placeholder="Phone" pattern="[789][0-9]{9}">
                                    <br/>
                                    <textarea cols="20" rows="5" name="message" placeholder="Message" required></textarea>
                                    <br/>
                                    <input type="submit" id="submit">
                                </form>
                            </div>
                            <div class="contact-detail">
                                <div class="inside-contact-detail">
                                    <div class="icon-and-detail">
                                        <div class="icon1 icon" data-aos="flip-up"> <i class="fa fa-map-marker" style="font-size:24px"></i></div>
                                        <strong>Location</strong>
                                        <br> 4, Parsi Mohhalla Chhawani Indore Madhya Pradesh 452001
                                    </div>
                                    <div class="icon-and-detail">
                                        <div class="icon2 icon" data-aos="flip-up"><i class="fa fa-phone" style="font-size:24px"></i></div>
                                        <strong>Phone</strong>
                                        <br> 8871009875
                                    </div>
                                    <div class="icon-and-detail">
                                        <div class="icon3 icon" data-aos="flip-up" ><i class="fa fa-envelope" style="font-size:24px"></i></div>
                                        <strong>Email</strong>
                                        <br> shrey4625@gmail.com
                                    </div>
                                    <div class="icon-and-detail">
                                        <div class="icon4 icon" data-aos="flip-up"><i class="fa fa-envelope" style="font-size:24px"></i></div>
                                        <strong>support</strong>
                                        <br> crazymeshrey@gmail.com
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
               
            </div>
            <div class="footer">
                <div class="copyright">
                 &copy;All Rights Are Reserved
                </div>
            </div>
            <script src="js/wow.min.js"></script>
            <script>
            new WOW().init();
            </script>
            <script src="js/aos.js"></script>
            <script>
                AOS.init({
                    duration:1000,
                });
            </script>
    </body>

</html>
