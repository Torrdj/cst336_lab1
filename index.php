<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8"/>
        <title> Leo TORDJMAN: Personal Website </title>
        
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
<!-- closing head -->
    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Leo TORDJMAN </h1>
        </header>
        <nav>
            <hr width="50%"/>
            <a href="index.php" id="current_nav">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        <br/><br/>
        <main>
            <figure id="me">
                <img src="img/me.jpg" alt="My Visa picture." width="342em"/>
            </figure>
            
            <div id="welcomeText">
                Hello! <br/>
                <p>
                    Thank you for visiting my personnal portfolio website.
                </p>
                <p>
                    I am a Computer Science student recently enrolled in a Semester@CSUMB California State University, Monterey Bay.
                    <br/>
                    I am an International student from France.
                </p>
                <br/><br/>
                <em>
                    "Computer Science is no more about computers than astronomy is about telescopes."
                </em>
                <br/> - <a href="https://en.wikipedia.org/wiki/Edsger_W._Dijkstra">Edsger W. Dijkstra</a>
            </div>
        </main>
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            <center><img src="img/csumb.jpg" width="9%"></img></center>
            CST 336 - Internet Programming. 2018&copy; TORDJMAN <br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            It is used for academic purposes only.
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>