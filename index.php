<?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", "root", "", "portfolio") or die("connection faild");

    $name = $_POST['fname'];
    $email = $_POST['femail'];
    $subject = $_POST['fsubject'];
    $message = $_POST['fmessage'];
    
    $sql = "INSERT INTO form (fname,femail,fsubject,fmessage) VALUES ('{$name}','{$email}','{$subject}','{$message}')";
    // $sql = "INSERT INTO form(`fname`, `femail`, `fsubject`, `fmessage`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
    
    $result = mysqli_query($conn, $sql) or die("query in unsuccessful.");
    
    header("Location: thankyou/thankyou.php");
    
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/ebca7fe9ac.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="main-content">
    
    <header class="section sec1 header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/i_am.JPG" alt="" title="Dipak Chauhan">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hi, I'm <marquee behavior="scroll" direction="up" loop="99999" scrollamount="3"><span>Dipak Chauhan</span></marquee>
                    A Web Developer.
                </h1>
                <p>
                    I'm a Web Developer, I love to create beautiful and functional websites.
                    
                </p>
                
            </div>
        </div>
    </header>
    <main>
        <section class="section sec2 about" id="about">
            <div class="main-title">
                <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information About me</h4>
                    <p>
                        I'm a Web Developer, I love to create beautiful and functional websites.
                    </p>
                    <p>   
                        My passion all about web design and coding with using Html, Css, Javascript, Bootstrap, Node js, React and Angular. provide best view expression and responsible site.
                    </p>
                    <div class="btn-con">
                        <a href="#" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">2+</p>
                            <p class="small-text">Projects <br /> Completed</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">1+</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">3+</p>
                            <p class="small-text">Happy <br /> Clients</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">10+</p>
                            <p class="small-text">Customer <br /> reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">javascript</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">PHP</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">java</p>
                        <div class="progress-con">
                            <p class="prog-text">87%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Python</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <h4 class="stat-title">My Timeline</h4> -->
            <!-- <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2010 - present</p>
                    <h5>Web Developer<span> - Vircrosoft</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2008 - 2011</p>
                    <h5>Software Engineer<span> - Boogle, Inc.</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2016 - 2017</p>
                    <h5>C++ Programmer<span> - Slime Tech</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2009 - 2013</p>
                    <h5>Business Degree<span> - Sussex University</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2013 - 2016</p>
                    <h5>Computer Science Degree<span> - Brookes University</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2017 - present</p>
                    <h5>3d Animation<span> - Brighton University</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
            </div> -->
        </section>
        <section class="section sec3" id="portfolio">
            <div class="main-title">
                <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
            </div>
            <p class="port-text">
                Here is some of my work that I've done in various programming languages.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/html_logo.png" alt="HTML img">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/css_logo.png" alt=" CSS img">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/javascript_logo.jpg" alt="JAVASCRIPT img">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/php_logo.png" alt="PHP img">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/java_logo.png" alt="JAVA img">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/python_logo.jpg" alt="PYTHON img">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/flutter_logo.png" alt="FLUTTER img">
                    </div>
                    <div class="hover-items">
                        <h3>Project Source</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="section sec4 " id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/port6.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                How to Create Your Own Website
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                How to Become an Expert in Web Design
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog2.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Become a Web Designer in 10 Days
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog3.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Debbuging made easy with Web Inspector
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Get started with Web Design and UI Design
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port3.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                This is what you need to know about Web Design
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="section sec5 contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact me here</h4>
                        <p>
                            <br>
                        </p>
                        
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location : INDIA, GUJARAT</span> 
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span><a href="mailto:dipakchauhan65420@gmail.com">Email : dipakchauhan65420@gmail.com</a></span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education : Nirma University</span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                    <span>Mobile Number : 9726070495</span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa-solid fa-language"></i>
                                    <span>Languages : English, Hindi, Gujarati</span>
                                </div>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://www.facebook.com/dipak.chauhan.52012548/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/home" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://github.com/Dipak2611chauhan" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://www.youtube.com/c/DipsStatus2611" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form id="user-form" action=saveformdata.php method="post" class="contact-form">
                            <div class="input-control i-c-2">
                                
                                <input type="text" required placeholder= "ENTER YOUR NAME" value=""  name="fname">
                                
                                <input type="email" required placeholder="ENTER YOUR EMAIL" value=""  name="femail">
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="ENTER SUBJECT" value=""  name="fsubject">
                            </div>
                            <div class="input-control">
                                <textarea name="fmessage"  cols="15" rows="8" placeholder="Message Here..." value="" ></textarea>
                            </div>

                            <div class="input-group btn-text">
				            <button name="submit" class="btn">SUBMIT</button>
			                </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
       
            
        
    </main>

    <div class="controlls">
        <div class="control  control-1 active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control control-2 " data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control control-3" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <!-- <div class="control control-4" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div> -->
        <div class="control control-5" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>

    <div class="theme-btn">
        <img />
        <i class="fas fa-adjust"></i>  
    </div>

    

    <script src="app.js"></script>
</body>
</html>