<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Kat Fuss | Assignment 3: Information Architecture</title>
      <link rel="stylesheet" href="styles.css">
   </head>

   <body class="container">
      <header>
         <a href="kat.php">
            <h1>Kat Fuss</h1>
            <img href="kat.php" src="../images/kat.jpg" alt="kat">
         </a>
      </header>

   <aside>
      <ul>
         <li>DMS Major</li>
         <li>Class of 2022</li>
      </ul>
   </aside>

   <nav class="inner_nav">
      <ul>
         <li><a href="kat.php">Main</a></li>
         <li><a href="dms.php">Why DMS?</a></li>
         <li><a href="spanish.php">Other Academic Interests</a></li>
      </ul>
   </nav>

  <?php include "../inc/main-menu.inc"; ?>

   <main>
      <p>As I progress through this major, it's exciting to be able to move beyond the introductory courses and choose others that are unique to the topics that I am interested in. This semester I will be taking The Art of Film and Modern Architecture, both of which are subjects that are very new to me, but I am eager to learn more about. I am also continuing this CSC web development series, after taking CSC 170 last spring, and although I do not intend on pursuing computer science as a career, I think the fundamental skills learned are invaluable as the world becomes more digitized and driven by technology.</p>
   </main>
   
   <footer>
      <p>CSC 174: Advanced Front End Web Design and Development</p>
   </footer>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="../js/menu-highlighter.js"></script>	

   </body>
   
</html>