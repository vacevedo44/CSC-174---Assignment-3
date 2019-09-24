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
         <li><a href="highschool.php">High School</a></li>
         <li><a href="hobbies.php">Hobbies</a></li>
      </ul>
   </nav>

   <?php include "../inc/main-menu.inc"; ?>

   <main>
      <p>In Ecuador, kinder, primary and secondary are only one school. So, I can say I went to the same school for 14 years. The name of my school was American School of Quito, which is the city where I’m from. My favorite teacher was my Physics teacher from my two last years of high school. I also did the International Baccalaureate Program, where you have to choose two natural science classes and a social science class, or vice versa. I ended up choosing Economics, Physics and History. It was a good combination but very demanding as well. Overall my experience at the school was great. I met a lot of people, who’ve been my friends since we were 4 years old. I know the school made a good job in getting me prepared for college life.</p>
   </main>
   
   <footer>
      <p>CSC 174: Advanced Front End Web Design and Development</p>
   </footer>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="../js/menu-highlighter.js"></script>	

   </body>

</html>