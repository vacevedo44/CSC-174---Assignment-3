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
         <li><a href="dms.php">DMS Major</a></li>
         <li><a href="spanish.php">Spanish</a></li>
         <li><a href="clusters.php">Clusters</a></li>
      </ul>
   </nav>

   <?php include "../inc/main-menu.inc"; ?>

   <main>
      <p>To fulfill my social science cluster at UR, I’ve decided to follow a history track, which has consisted so far in classes about Western New York and the evolution of technology. Studying the origins and development of technology is an interesting contrast to most of the DMS courses, which direct more towards its present and future uses in society. For my natural science cluster, I am focusing on Environmental Science, which I believe is something that is very important to learn about, given how rapidly the world and its ecosystems are changing. The Environmental Science and Oceanography classes I took both focused on that a lot, and provided a lot of information about the effects that our actions have on the planet.</p>
   </main>
   
   <footer>
      <p>CSC 174: Advanced Front End Web Design and Development</p>
   </footer>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="../js/menu-highlighter.js"></script>	

   </body>
   
</html>