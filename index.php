<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Vishad Sharma</div>
                <div class="text-1">(Vee-shuh-dh)</div>
                <br>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="https://www.linkedin.com/in/vishad-sharma-86b517198/">Hire me</a>
            </div>
          </div>
      </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/me.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Vishad and I'm a <span class="typing-2"></span></div>
                    <p>I am a final year undergraduate pursuing B.E. in Computer Engineering from Thapar University, Patiala, Punjab. I hail from the pink city Jaipur and I have done my schooling from St. Xavier's Sr. Sec school. I am an enthusiastic football fan. In my leisure time I like to play video games.</p>
                    <a href="https://drive.google.com/file/d/118qwHYTdwRjR3KK_R-UHhv15VrYvFhOC/view?usp=sharing">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services1">
        <div class="max-width">
            <h2 class="title">Coding Platform Profiles</h2>
            <div class="serv-content">
                <div class="card">
                    <a href="https://auth.geeksforgeeks.org/user/vishadsharma12/practice/"><div class="box">
                        <img src="images/geeks3.png" alt="">    
                        <div class="text">GeeksForGeeks</div>
                        <p>A Computer Science portal for geeks.</p>
                    </div></a>
                </div>
                <div class="card">
                    <a href="https://leetcode.com/woody04/"><div class="box">
                        <img src="images/leetcode2.png" alt="">    
                        <div class="text">LeetCode</div>
                        <p>A platform to prepare for technical interviews.</p>
                    </div></a>
                </div>
                <div class="card">
                <a href="https://codeforces.com/profile/woody04">
                    <div class="box">
                        <img src="images/codeforces-logo.png" alt="">
                        <div class="text">CodeForces</div>
                        <p>Programming community and regular contests.</p>
                    </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://www.codechef.com/users/vswoody">
                    <div class="box">
                        <img src="images/Codechef.png" alt="">
                        <div class="text">CodeChef</div>
                        <p>Programming community and regular contests.</p>
                    </div>
                    </a>
                </div>
               </div>
            </div>
        </div>
    </section>
    <hr class="style-two">
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                <a href="https://entertainment-daily.netlify.app/">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Campus Recruitment Portal: A portal for three types of users: student, company and admin. Features like profile creation, authentication, student shortlisting are present.</p>
                    </div>
                    </a>
                </div>
                <div class="card">
                <a href="https://github.com/woody020/TotalOCR.git">
                    <div class="box">
                        <i class="fas fa-cogs"></i>
                        <div class="text">Machine Learning Models</div>
                        <p>TotalOCR: A deep learning model that has joint funtionality of correcting skew, word detection and character recognition from scanned images.</p>
                    </div>
                    </a>
                </div>
                <div class="card" >
                <a href="https://entertainment-daily.netlify.app/">
                    <div class="box">
                    <a href="https://entertainment-daily.netlify.app/">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Entertainment Daily : A web application that lists all trending movies and shows, also has the feature to search genre wise or by typing.</p>
                    </div>
                    </a>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I am competitive programming enthusiast active on platforms like GFG, leetcode, codeforces, codechef. I enjoy developing web applications and have worked with tools like HTML, CSS, JavaScript, Bootstrap, PHP, MySQL and ReactJS. I am a beginner in the machine learning field and have worked on a few deep learning models.</p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>C++, Algorithmic Programming</span>
                            <span>Proficient</span>
                        </div>
                        <div class="line programming"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>HTML, CSS, JavaScript, Bootstrap</span>
                            <span>Seasoned</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP, MySQL</span>
                            <span>Skillfull</span>
                        </div>
                        <div class="line sql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>ReactJS</span>
                            <span>Intermediate</span>
                        </div>
                        <div class="line react"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Python, Deep Learning</span>
                            <span>Beginner</span>
                        </div>
                        <div class="line ml"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <a href="https://www.linkedin.com/in/shivam-sikri-418074170/">
                    <div class="box">
                        <img src="images/s.jpg" alt="">
                        <div class="text">Shivam Sikri</div>
                    </div>  
                    </a>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/ap.jpg" alt="">
                        <div class="text">Ali Mehdi</div>
                    </div>
                </div>
                <div class="card">
                    <a href="https://www.linkedin.com/in/anurag-mishra-941676196/">
                    <div class="box">
                        <img src="images/amp.jpg" alt="">
                        <div class="text">Anurag Mishra</div>
                    </div>
                    </a>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/pps.jpg" alt="">
                        <div class="text">Sharad Agarwal</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p></p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Vishad Sharma</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Jaipur, Rajasthan, India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">vishad.sharma12@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                        <i class="fab fa-linkedin-in"></i>
                            <div class="info">
                                <div class="head">LinkedIn</div>
                                <a href="https://www.linkedin.com/in/vishad-sharma-86b517198/">
                                <div class="sub-title">Vishad Sharma</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form class="contact-form" action="message.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" class="fullname" placeholder="Name">
                            </div>
                            <div class="field email">
                                <input type="text" class="email-input" value="vishad.sharma12@gmail.com"  readonly>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" class="subject" placeholder="Subject">
                        </div>
                        <div class="field textarea">
                            <textarea class="message" cols="30" rows="10" placeholder="Message.."></textarea>
                        </div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="send">Send message</button>
                            <div class="error-box"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.linkedin.com/in/vishad-sharma-86b517198/">Vishad Sharma</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
