<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Maria Mancheno | Assignment 3: Information Architecture</title>
      <link rel="stylesheet" href="styles.css">
   </head>

   <body class="container">
      <header>
         <a href="maria.php">
            <h1>Maria Mancheno</h1>
            <img href="maria.php" src="../images/maria.jpg" alt="maria">
         </a>
      </header>

   <aside>
      <ul>
         <li>DMS Major</li>
         <li>Class of 2020</li>
      </ul>
   </aside>

   <nav class="inner_nav">
      <ul>
         <li><a href="maria.php">Main</a></li>
         <li><a href="highschool.php">High School</a></li>
         <li><a href="university.php">University</a></li>
         <li><a href="hobbies.php">Hobbies</a></li>
      </ul>
   </nav>

   <?php include "../inc/main-menu.inc"; ?>

   <main>
      <p>I came to the University of Rochester on August of 2016. My family came all the way from Ecuador to drop me in school. Those days were filled with mixed emotions, as I was excited to start a new stage of my life, but sad because I had to say goodbye to my family. When I first arrived, I wanted to study Economics, but from the beginning I wasn’t sure about it. I was going to give a try, but it ended up in disappointment. For this reason, I switched to Computer Science, it was my first time ever programming and it was really hard for me. I realized it wasn’t meant for me. Therefore, I decided to switch again to Mathematics, which is something I’ve always felt comfortable with. I did enjoy it a lot, but I wanted to combine with something else so that it would be more useful in the future. When exploring my career options, the most appealing option was Digital Media Studies. It combines many of my passions, such as website design, photography and film. Thus, I decided to major in Digital Media Studies and do a minor in Mathematics.</p>
   </main>
   
   <footer>
      <p>CSC 174: Advanced Front End Web Design and Development</p>
   </footer>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="../js/menu-highlighter.js"></script>	

   </body>

</html>