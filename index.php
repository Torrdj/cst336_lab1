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
                <img src="img/juan_doe.png" alt="Picture of Juan Doe"/>
            </figure>
            
            <div id="welcomeText">
                Hello! <br/>
                <p>
                    Thank you for visiting my professional portfolio website.
                </p>
                <p>
                    I am a Software Engineer.
                </p>
                <br/><br/>
                <em>
                    "With ordinary talent and extraordinary <strong>perseverance</strong> all things are attainable"
                </em><br/> - Thomas F. Buxton
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