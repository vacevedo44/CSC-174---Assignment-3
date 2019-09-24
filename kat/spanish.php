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
         <li><a href="spanish.php">Spanish Minor</a></li>
         <li><a href="clusters.php">Clusters</a></li>
      </ul>
   </nav>

   <?php include "../inc/main-menu.inc"; ?>

   <main>
      <p>Last year, I decided to pursue a minor in Spanish, and I will be taking another course to continue that this semester. When I first came to college, I started taking German, but after one semester I decided that it wasn’t for me, and chose to switch back to Spanish, which I had taken in high school. I now have three courses left to fulfill the minor, including the one I am taking this fall, and I am hoping to finish the last one through a summer program in Ecuador. The program runs for four weeks, and consists of classes during the day, and various trips and excursions on the weekends. This trip seems like an excellent way to experience another culture, practice different language skills, and, as someone who has lived in Rochester her whole life, serve as a much needed change of scenery.</p>
   </main>
   
   <footer>
      <p>CSC 174: Advanced Front End Web Design and Development</p>
   </footer>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="../js/menu-highlighter.js"></script>	

   </body>
   
</html>