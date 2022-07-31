<?php

?>
<!Doctype html>
<html lang="en">
<head>
    <title>Rich Kerr | Dev.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body>
<nav>
    <div class="logo">
        <a href="#home"><img src="images/logo.png" alt="Letter 'R' in a box as logo" id="Rlogo"/></a>
    </div>
    <div class="links-right" id="nav">
        <ol class="nav-links">
            <li><a href="#about"> About </a></li>
            <li><a href="#work"> Work </a></li>
            <li><a href="#contact"> Contact </a></li>

        </ol>
    </div>
</nav>

<div id="mobile-button">
    <ul class="menu">
        <li><a class="menuItem" href="#about"> About </a></li>
        <li><a class="menuItem" href="#work"> Work </a></li>
        <li><a class="menuItem" href="#contact"> Contact </a></li>

    </ul>
    <button class="hamburger">
        <!-- material icons https://material.io/resources/icons/ -->
        <i class="menuIcon material-icons">menu</i>
        <i class="closeIcon material-icons">close</i>
    </button>
</div>

<header id="home">
    <div id="heading-line-1"><h1>Hello, world!</h1></div>
    <div id="heading-line-2"><h2>I'm Rich - I like building things with computers - Let's Go!</h2></div>
</header>

<main>
    <section class="about" id="about">
        <div class="about-me">
            <h3>About me</h3>
            <div class="statement">
                <p>I've a fascination for all things development - the combination of
                    creativity, logic, technology and there always being something new to
                    discover, this drives my excitement for the industry and building things
                    people love to use. I am fully committed to the life - long learning that
                    comes with software development and I'm looking forward to starting a
                    career in this exciting industry.</p>
                <br>
                <p>I started my journey in tech and dev with <a class="io-academy-link" href="https://io-academy.uk/courses/full-stack-track/">iO Academy</a> in early 2022 following a career change from the world of financial services.</p>
                <br>
                <p>But, I've been playing around with computers since I was about 13, building my own as soon as I could - mostly to play Quake
                    and Unreal Tournament with friends at school. I want to keep building on the experience I've gained and continue learning to create
                    wonderful things.</p>
            </div>
        </div>
        <div class="stack">
            <h3>Skills</h3>
            <div class="skills">
                <div class="skill">
                    <img src="/images/html.png" alt="html 5 shield logo" />
                    <h3>HTML</h3>
                </div>
                <div class="skill">
                    <img src="/images/css.png" alt="css 3 shield logo" />
                    <h3>CSS</h3>
                </div>
                <div class="skill">
                    <img src="/images/sass.png" alt="css 3 shield logo" />
                    <h3>Sass</h3>
                </div>
                <div class="skill">
                    <img src="/images/php.png" alt="PHP logo" />
                    <h3>PHP</h3>
                </div>
                <div class="skill">
                    <img src="/images/js.png" alt="JavaScript logo" />
                    <h3>JavaScript</h3>
                </div>
                <div class="skill">
                    <img src="/images/react.png" alt="React logo" />
                    <h3>React</h3>
                </div>
                <div class="skill">
                    <img src="/images/mongo.png" alt="MongoDB logo" />
                    <h3>Mongodb</h3>
                </div>
                <div class="skill">
                    <img src="/images/git.png" alt="git hub logo" />
                    <h3>git</h3>
                </div>
                <div class="skill">
                    <img src="/images/node.png" alt="Node JS logo" />
                    <h3>Node.js</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="work" id="work">
        <h2>What I've been upto</h2>
        <div class="article-container">
            <article class="project-article">
                <h3>weatherTron 3000</h3>
                <h4>A solo project to call an api and display the local weather for home, with dynamicaly changing icons to represent weather conditions. HTML/CSS/JS.</h4>
                <img src="images/weatherTron.jpg" alt="screenshot of a weather forecast app" />
                <a href="https://github.com/RichVelo/weatherPage"><h4>GitHub Repo</h4></a>
            </article>

            <article class="project-article">
                <h3>OOP Collection app</h3>
                <h4>A group project to display a collection of planetary objects with details. I produced the UI, JS DOM manipulation and population as well as additional features which didn't make it to main). HTML/CSS/JS/PHP.</h4>
                <img src="images/PPP-solarsys.png" alt="screenshot of a solar system and planets app" />
                <a href="https://github.com/RichVelo/weatherPage"><h4>GitHub Repo</h4></a>
            </article>

            <article class="project-article">
                <h3>weatherTron 3000</h3>
                <h4>A solo project to call an api and display the local weather for home, with dynamicaly changing icons to represent weather conditions. HTML/CSS/JS.</h4>
                <img src="images/weatherTron.jpg" alt="screenshot of a weather forecast app" />
                <a href="https://github.com/RichVelo/weatherPage"><h4>GitHub Repo</h4></a>
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
        <div>
            Thanks for reading!
        </div>
        <div>
            &copy 2022-present Rich Kerr. All Rights Reserved - bleep blorp
        </div>
    </div>
    <div class="footer-right">
        <div class="footer-links">
            <ul>
                <li><a href="https://github.com/RichVelo" target="_blank">GitHub</a></li>
                <li><a href="https://codepen.io/richvelo" target="_blank">CodePen</a></li>
                <li><a href="https://twitter.com/RichoKerr" target="_blank">Twitter</a></li>
                <li><a href="http://www.instagram.com/riich_kerr" target="_blank">Insta</a></li>
                <li><a href="https://www.linkedin.com/in/rich0kerr-b1918583" target="_blank">LinkedIn</a></li>
            </ul>
        </div>

    </div>
</footer>
</body>
</html>