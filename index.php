<?php
    require ('./config.php');
    include 'includes/header.php';
?>

<!--Home Section-->
<section id="home" class="heroSection" data-title="home">
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
<section id="about" class="alternatingTheme aboutSection" data-title="about">
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

        <h1>My <span>Skills</span></h1>
        
        <!--Skills row container-->
        <div class="row mt-5 skillContainer">

            <!--Column Items-->

            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bxl-html5"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 80%">80%</div>
                </div>
            </div>
            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bxl-css3"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 80%">80%</div>
                </div>
            </div>
            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bxl-javascript"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 60%">60%</div>
                </div>
            </div>
            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bxl-php"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 50%">50%</div>
                </div>
            </div>
            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bxl-bootstrap"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 70%">70%</div>
                </div>
            </div>
            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bxl-wordpress"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 75%">75%</div>
                </div>
            </div>
            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bx-data"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 65%">65%</div>
                </div>
            </div>
            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bxl-react"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 50%">50%</div>
                </div>
            </div>
            <!--Skill Card-->
            <div class="col-12 col-md-4 mb-4 skillCard">
                <i class="bx bxl-github"></i>
                <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped text-bg-success" style="width: 80%">80%</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Services Section-->
<section id="services" class="alternatingTheme servicesSection" data-title="services">
    <div class="container">
        <h1>What I Offer?</h1>
        <p>
            Here are some of the services that I provide. I hope to add more services in the future when I have more experience.
        </p>

        <!--Create service card container-->
        <div class="row mt-5 serviceCardContainer">

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
<section id="projects" class="alternatingTheme projectsSection" data-title="projects">
    <div class="container">
        <h1>My <span>Projects</span></h1>

        <p>
            Here are some of the projects that I have worked on.
            I hope to add more projects in the future when I have gained more experience.
        </p>

        <!--Project Carousel-->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
            </div>
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <a href="https://daniel1000c.github.io/website-Portfolio/finalProject/index.html" target="_blank">
                        <img src="images/browardVillasProject.png" class="d-block w-100" alt="Broward Villas: Clone Website">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Broward Villas</h5>
                            <p>First attempt at a clone website project.</p>
                        </div>
                    </a>     
                </div>    

                <div class="carousel-item">
                    <a href="https://daniel1000c.github.io/website-Portfolio/nonProfit/index.html" target="_blank">
                        <img src="images/newBrowardRescue.png" class="d-block w-100" alt="Broward Rescue">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Broward Rescue</h5>
                            <p>Non-profit pet shelter project.</p>
                        </div>
                    </a>     
                </div>   

                <div class="carousel-item">
                    <a href="https://daniel1000c.github.io/website-Portfolio/jqueryProject/index.html" target="_blank">
                        <img src="images/fitFocus.png" class="d-block w-100" alt="Fit Focus: Jquery Project">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fit Focus</h5>
                            <p>First project created using Jquery.</p>
                        </div>
                    </a>     
                </div>   
                 
                <div class="carousel-item">
                    <a href="https://daniel1000c.github.io/website-Portfolio/nonProfit/index.html" target="_blank">
                        <img src="images/cloudWare.png" class="d-block w-100" alt="CloudWare: React Project">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>CloudWare</h5>
                            <p>First project created using React.</p>
                        </div>
                    </a>     
                </div>    

                <div class="carousel-item">
                    <a href="https://daniel1000c.github.io/JavaScriptAPI/formapi/formAPI.html" target="_blank">
                        <img src="images/formAPI.png" class="d-block w-100" alt="Form API: JavaScript Project">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Form API</h5>
                            <p>Project created using JavaScript by using form API.</p>
                        </div>
                    </a>     
                </div>    

                <div class="carousel-item">
                    <a href="https://daniel1000c.github.io/JavaScriptAPI/weatherApp/index.html" target="_blank">
                        <img src="images/weatherApp.png" class="d-block w-100" alt="Weather App: JavaScript Project">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Weather App</h5>
                            <p>Project created using JavaScript to predict the weather.</p>
                        </div>
                    </a>     
                </div>    

                <div class="carousel-item">
                    <a href="http://danielbuildsweb.com/hr25/" target="_blank">
                        <img src="images/hrApplication.png" class="d-block w-100" alt="HR App: PHP Project">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>HR Application</h5>
                            <p>Project created using PHP to create an HR application to add and delete employees.</p>
                        </div>
                    </a>     
                </div>    

                <div class="carousel-item">
                    <a href="http://danielbuildsweb.com/crud25/" target="_blank">
                        <img src="images/crudApplication.png" class="d-block w-100" alt="Crud Application: PHP Project">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Item Crud Application</h5>
                            <p>Project created using PHP that helps to add, view and delete shopping items.</p>
                        </div>
                    </a>     
                </div>    

                <div class="carousel-item">
                    <a href="http://danielbuildsweb.com/quizapp25/" target="_blank">
                        <img src="images/quizapp.png" class="d-block w-100" alt="Quiz App: PHP Project">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Quiz App</h5>
                            <p>Project created using PHP to create a quiz. You can delete, add, and view questions.</p>
                        </div>
                    </a>     
                </div>

                <div class="carousel-item">
                    <a href="https://dev-equinox-industries.pantheonsite.io/" target="_blank">
                        <img src="images/barbellEquinox.png" class="d-block w-100" alt="Barbell Equinox: Wordpress Group Project">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Barbell Equinox</h5>
                            <p>Group project that was creating a fitness website using Wordpress.</p>
                        </div>
                    </a>     
                </div>    

                
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
</section>

<!--Contact Us Section-->
<section id="contact" class="alternatingTheme contactSection" data-title="contact">
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
                    <input type="text" name="fullName" id="fullName" placeholder="Full Name" class="form-control" autocomplete="off"><br>

                    <!--Email Input-->
                    <input type="email" name="email" id="email" placeholder="Email Address" class="form-control" autocomplete="off"><br>

                    <!--Message Input-->
                    <textarea name="client_message" id="client_message" placeholder="Your Message" rows="5" class="form-control"></textarea><br>

                    <input type="submit" value="Send Message" id="submitButton">

                    <div id="statusMessage" class="mt-3"></div>
                </form>

                
           </div>
        </div>
    </div>
</section>

<?php
    include 'includes/footer.php';
?>