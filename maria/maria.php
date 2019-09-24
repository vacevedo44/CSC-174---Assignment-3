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
         <li><a href="universitydms.php">Why DMS?</a></li>
         <li><a href="highschool.php">Other Academic Interests</a></li>
      </ul>
   </nav>

   <?php include "../inc/main-menu.inc"; ?>

   <main>
      <p>My name is Maria Mancheno and I’m from Quito, Ecuador. I’m 21 years old and I currently go to the University of Rochester. My major is in Digital Media Studies and I’m also doing a minor in Math. My hobbies include playing soccer, playing the guitar and reading. I work as a social media manager and web developer at the Peak Lab in the University of Rochester Medical Center. This last summer I had the opportunity to do an internship in an Ecuadorian firm where I was able to improve my programming skills. My favorite thing is to travel around the world to learn about new cultures and meet new interesting people.</p>
   </main>
   
   <footer>
      <p>CSC 174: Advanced Front End Web Design and Development</p>
   </footer>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="../js/menu-highlighter.js"></script>	

   </body>

</html>