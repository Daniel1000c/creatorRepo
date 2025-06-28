<?php
    include 'includes/header.php';
?>

<!--Home Section-->
<section id="home" class="heroSection">
    <div class="container">
        <h1>Hi, I'm <span>Daniel</span></h1>
        <p>Welcome to my Portfolio, where I showcase my skills and experience.</p>
        <!--Button Container-->
        <div class="btnContainer">
            <a href="index.php#contact">Contact</a>
           <a href="images/Daniel_Velez_Resume.pdf" download="Daniel_Velez_Resume.pdf">Resume</a>
        </div>
    </div>
</section>

<!--About Section-->
<section id="about" class="alternatingTheme aboutSection">
    <div class="container">
        <h6>About Me</h6>
        <h1>Get to Know <span>Me</span></h1>
        <p>
            I am a web development student from Broward College looking to expand my skills.
            I want to broaden my horizons and help to create beautiful projects.
        </p>
        <a href="index.php#contact">Learn More &rarr;</a>

        <!--Row Container-->
        <div class="row align-items-center mt-5 creatorContainer">

           <!--Column Items-->

           <!--Creator Image-->
           <div class="col-12 col-md-6 mb-4 mb-md-0 creatorImg">
                <img src="images/creatorPicture.jpg" alt="Daniel Velez: Web Developer">
           </div>

           <!--Creator Info-->
           <div class="col-12 col-md-6 mb-4 mb-md-0 creatorInfo">
                <h3><span>My</span> Mission</h3>
                <p>
                    I am a web development student from Broward College looking to expand my skills.
                    I want to broaden my horizons and help to create beautiful projects.
                </p>
                <ul>
                    <li> Time Management</li>
                    <li> Real-time Collaborator</li>
                    <li> Effective Communication</li>
                </ul>
           </div>
        </div>
    
    </div>
</section>

<!--Services Section-->
<section id="services" class="alternatingTheme servicesSection">
    <div class="container">
        <h1>What I Offer?</h1>
        <p>
            Here are some of the services I offer:
        </p>

        <!--Create service card container-->
        <div class="row mt-5">

            <!--Column Items-->

            <!--Service Card-->
            <div class="col-12 col-md-4 mb-4 serviceCard">
                <div class="serviceCardInner">
                    <div class="serviceIcon">
                        <i class="bx bx-paint"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>
                        I can help create appealing and user-friendly interfaces.
                    </p>
                    <a href="index.php#contact">See More</a>
                </div>
            </div>

            <!--Service Card-->
            <div class="col-12 col-md-4 mb-4 serviceCard">
                <div class="serviceCardInner">
                    <div class="serviceIcon">
                        <i class="bx bx-devices"></i>
                    </div>
                    <h3>Responsive Web Design</h3>
                    <p>
                        I can help with making a website responsive.
                    </p>
                    <a href="index.php#contact">See More</a>
                </div>
            </div>

            <!--Service Card-->
            <div class="col-12 col-md-4 mb-4 serviceCard">
                <div class="serviceCardInner">
                    <div class="serviceIcon">
                        <i class="bx bx-code-curly"></i>
                    </div>
                    <h3>User Interactivity</h3>
                    <p>
                        I can help make a website interactive with JavaScript.
                    </p>
                    <a href="index.php#contact">See More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Projects Section-->
<section id="projects" class="alternatingTheme">
    <div class="container">
        <h2>template text</h2>
    </div>
</section>

<!--Contact Us Section-->
<section id="contact" class="alternatingTheme contactSection">
    <div class="container">
        <h1>Get In <span>Touch</span></h1>
        <p>
            Have any questions or inquiries? Don't hesitate to reach out to me.
        </p>

        <!--Row Container-->
        <div class="row">

            <!--Column Items-->

            <!--Contact Information-->
            <div class="col-12 col-md-6 mb-4 mb-md-0 contactInformation">
                <h3>Contact Information</h3>
                <p>
                    Have something to say? I am here to help. Fill up the form or send an email or call my number.
                </p>
                <ul class="contactList">
                    <li><i class='bx bxs-map'></i> 12172 SW 52nd CT, FL 33330</li>
                    <li><i class="bx bxs-envelope"></i> velezdaniel6162@gmail.com</li>
                    <li><i class="bx bxs-phone"></i> 305-527-0765</li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.37745106665!2d-80.31289052402717!3d26.05391809646765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a7ae27c9e771%3A0x1d8d866e38d06c4b!2s12172%20SW%2052nd%20Ct%2C%20Cooper%20City%2C%20FL%2033330!5e0!3m2!1sen!2sus!4v1750792185518!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>

           <!--Contact Form-->
            <div class="col-12 col-md-6 mb-4 mb-md-0 contactForm">
                <form action="contactForm.php" method="post" name="contactForm" id="contactForm" autocomplete="off">

                    <!--Name Input-->
                    <input type="text" name="name" id="name" placeholder="Full Name" class="form-control"><br>

                    <!--Email Input-->
                    <input type="email" name="email" id="email" placeholder="Email Address" class="form-control"><br>

                    <!--Message Input-->
                    <textarea name="message" id="message" placeholder="Your Message" rows="5" class="form-control"></textarea><br>

                    <input type="submit" value="Send Message">
                    
                </form>
           </div>
        </div>
    </div>
</section>

<?php
    include 'includes/footer.php';
?>