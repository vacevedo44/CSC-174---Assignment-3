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
      <p>I am currently a junior at the University of Rochester, studying to get my BA in Digital Media Studies. I have lived in Rochester my whole life, and have enjoyed going to a school in a city that I am familiar with. The elementary school that I went to was expeditionary learning based, which I think helped me to value practical and hands-on education from a young age. My high school was fortunate enough to have arts based majors for the students, and there I studied Theater Technology, which continued the same opportunities of physical learning. Included in that were some classes for lighting and sound design, CAD programming, and PhotoShop skills. I think these experiences have all translated really well into the DMS major, which has a lot of project based elements, and real word influences.</p>
   </main>
   
   <footer>
      <p>CSC 174: Advanced Front End Web Design and Development</p>
   </footer>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="../js/menu-highlighter.js"></script>	

   </body>

</html>