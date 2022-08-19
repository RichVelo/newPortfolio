<?php

?>
<!Doctype html>
<html lang="en">
<head>
    <title>Rich Kerr | Dev.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body class="">
<div class="Tlogo">
    <img src="images/logo.png" alt="Letter 'R' in a box as logo" id="Tlogo"/>
</div>
<nav>
    <div class="logo">
        <a href="#home"><img src="images/logo.png" alt="Letter 'R' in a box as logo" id="Rlogo"/></a>
    </div>
    <div class="links-right" id="nav">
        <ol class="nav-links">
            <li><a href="#about"> About </a></li>
            <li><a href="#work"> Work </a></li>
            <li><a href="#contact"> Contact </a></li>
            <li><a href="" id="light-dark-mode"><img src="images/mode.svg" alt="light and dark mode toggle" id="modetoggle"/></a></li>
        </ol>
    </div>
</nav>

<div id="mobile-button">
    <ul class="menu">
        <li><a class="menuItem" href="#about"> About </a></li>
        <li><a class="menuItem" href="#work"> Projects </a></li>
        <li><a class="menuItem" href="#contact"> Contact </a></li>
    </ul>
    <button class="hamburger">
        <!-- material icons https://material.io/resources/icons/ -->
        <i class="menuIcon material-icons">menu</i>
        <i class="closeIcon material-icons">close</i>
    </button>
</div>

<header id="home">
    <div id="heading-line-1">Hello, world!</div>
    <div id="heading-line-2">I'm Rich - a <span class=" full-stack">full stack</span> developer</div>
    <div class="header-button"><a href="#work">View my work.
            <svg class="down-arrow" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                <path d="M11.293 5.707l5.293 5.293h-11.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h11.586l-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l7-7c0.092-0.092 0.166-0.202 0.217-0.324 0.101-0.245 0.101-0.521 0-0.766-0.049-0.118-0.121-0.228-0.217-0.324l-7-7c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z">
                </path></svg></a>
    </div>
</header>

<main>
    <section class="about" id="about">
        <div class="about-me">
            <h2>About me</h2>
            <div class="statement">
                <p> I'm a Junior Full Stack Developer and certified Scrum Master, seeking my first
                    full time role in the tech sector following 10 years of experience in financial services.
                    I graduated in May 2022 from the Full Stack Track at <a class="h3" href="https://io-academy.uk/courses/full-stack-track/" target="_blank">iO Academy</a>
                    and am adept in numerous front-and-back end technologies.</p>
                <br>
                <p>My passion for technology dates back to childhood years spent building gaming
                    computers in my bedroom. There is much I love about development - the combination
                    of creativity and logic, the constant possibility of something new to discover,
                    the satisfaction of building something users love.</p>
            </div>
        </div>
        <div class="stack">
            <h2>Skills</h2>
            <div class="skills">
                <div class="skill">
                    <img src="images/html.png" alt="html 5 shield logo" />
                    <p>HTML</p>
                </div>
                <div class="skill">
                    <img src="images/css.png" alt="css 3 shield logo" />
                    <p>CSS</p>
                </div>
                <div class="skill">
                    <img src="images/sass.png" alt="Sass logo" />
                    <p>Sass</p>
                </div>
                <div class="skill">
                    <img src="images/js.png" alt="JavaScript logo" />
                    <p>JavaScript</p>
                </div>
                <div class="skill">
                    <img src="images/php.png" alt="PHP logo" />
                    <p>PHP</p>
                </div>
                <div class="skill">
                    <img src="images/react.png" alt="React logo" />
                    <p>React</p>
                </div>
                <div class="skill">
                    <img src="images/mongo.png" alt="MongoDB logo" />
                    <p>Mongodb</p>
                </div>
                <div class="skill">
                    <img src="images/git.png" alt="git hub logo" />
                    <p>git</p>
                </div>
                <div class="skill">
                    <img src="images/node.png" alt="Node JS logo" />
                    <p>Node.js</p>
                </div>
            </div>
        </div>
    </section>

    <section class="work" id="work">
        <h2>Featured Projects</h2>
        <div class="article-container">

            <article class="project-article project-article-dark" id="project-article">
                <div class="project-article-details">
                    <h3>Profile Card</h3>
                    <h4>I wanted to recreate a Profile Card I found online. Uses pseudo class to alter the banner/hero image. HTML/CSS.</h4>
                    <a href="https://github.com/RichVelo/profileCard1"><h4>GitHub Repo </h4></a> <a href="https://richvelo.github.io/profileCard1"><h4>Live</h4></a>
                </div>
                <img src="images/profileCard.jpg" alt="screenshot of a basic HTML and CSS profile card" />

            </article>

            <article class="project-article project-article-dark" id="project-article">
                <div class="project-article-details">
                    <h3>weatherTron 3000</h3>
                    <h4>A solo project to call an api and display the local weather for home, with dynamicaly changing icons to represent weather conditions using JSON data. HTML/CSS/JS.</h4>
                    <a href="https://github.com/RichVelo/weatherPage"><h4>GitHub Repo </h4></a> <a href="https://richvelo.github.io/weatherPage"><h4>Live</h4></a>
                </div>
                <img src="images/weatherTron.jpg" alt="screenshot of a weather forecast app" />

            </article>

            <article class="project-article project-article-dark">
                <div class="project-article-details">
                    <h3>Planet Listing App</h3>
                    <h4>A listing app for the planets of our solar system with a focus on Object Oriented Programming. I produced wire frames in Figma, used MySQL to build and query a database as a
                        RESTful API, populated and displayed modals using PHP and JavaScript (ES6).</h4>
                    <a href="https://github.com/iO-Academy/2022-jan-planets"><h4>GitHub Repo </h4></a> <a href="https://dev.io-academy.uk/projects/2022-jan/planet-plinky-plonk/"><h4>Live</h4></a>
                </div>
                <img src="images/PPP-solarsys.png" alt="screenshot of a solar system and planets app" />

            </article>

            <article class="project-article project-article-dark">
                <div class="project-article-details">
                    <h3>Job Board</h3>
                    <h4>Using React, bootstrap and Sass, fetched jobs data via RESTful API and implemented filtering to display open roles matching user search criteria. Final product was a live and responsive online jobs
                        board.</h4>
                    <a href="https://github.com/iO-Academy/2022-jan-fish-job-search"><h4>GitHub Repo</h4></a> <a href="https://2022-jan-fish-job-search.dev.io-academy.uk/"><h4>Live</h4></a>
                </div>
                <img src="images/jobboard.png" alt="screenshot of a job search listing website" />
            </article>
        </div>
    </section>
    <!--        <div class="about-border">-->

    <!--        </div>-->



    <section class="contact" id="contact">
        <h2>Send me a message!</h2>
        <h3>Have a question, proposal or just want to say hello? - go ahead</h3>
        <div class="contact-form">
            <form action="https://formspree.io/f/mdobabra" method="POST">
                <input class="contact-name input" name="name" placeholder="Name" required="true">
                <input class="contact-email input" type="email" name="_replyto" placeholder="Email address" required="true">
                <textarea class="contact-message input" name="message" placeholder="Message" style="resize:none" required="true"></textarea>
                <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
                <input class="contact-form-button" type="submit" value="SEND!">
            </form>
        </div>
    </section>
</main>
<footer>
    <div class="footer-left">
        <div class="logo">
            <a href="#home"><img src="images/logo.png" alt="Letter 'R' in a box as logo" id="Flogo"/></a>
        </div>
        <div class="thanks">
            Thanks for reading!
        </div>
        <div>
            &copy 2022-present Rich Kerr. All Rights Reserved
        </div>
    </div>
    <div class="footer-right">
        <div class="footer-links">
            <div class="toTop">
                <a href="#home">
                    <svg class="up-arrow" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M11.293 5.707l5.293 5.293h-11.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h11.586l-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l7-7c0.092-0.092 0.166-0.202 0.217-0.324 0.101-0.245 0.101-0.521 0-0.766-0.049-0.118-0.121-0.228-0.217-0.324l-7-7c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="socials">
                <a href="https://github.com/RichVelo" class="fa fa-github" target="__blank"></a>
                <a href="https://codepen.io/richvelo" class="fa fa-codepen" target="__blank"></a>
                <a href="https://twitter.com/RichoKerr" class="fa fa-twitter" target="__blank"></a>
                <a href="http://www.instagram.com/riich_kerr" class="fa fa-instagram" target="__blank"></a>
                <a href="https://www.linkedin.com/in/rich0kerr-b1918583" class="fa fa-linkedin" target="__blank"></a>
            </div>

        </div>
    </div>
</footer>
</body>
</html>
