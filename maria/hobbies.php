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
      <p>I began playing the guitar when I was 9 years old. I received private lessons at my house and the beginning it was a bit frustrating because it takes time until chords actually start to sound properly. Yet, I knew that instrument was meant for me and I never gave up. I play the guitar every single day and there is not a single place that I go without my guitar. It’s not only an instrument but one of the best possible companions. I began playing soccer even earlier, when I was about 7 years old. I think much of my soccer passion came from my dad’s influence, as he is a soccer lover. I play as a forward and I’m currently part of the club soccer team at the University of Rochester. Finally, my last hobby is reading. I’ve always liked to read, but I used to make up a lot of excuses and didn’t end up reading as much as I would have wanted. Therefore, my 2019 new year’s resolution included reading 24 book throughout the year. I made time to read at least 30 minutes every day. I finished my goal about three weeks ago and I’m currently on my 26th book now.</p>
   </main>
   
   <footer>
      <p>CSC 174: Advanced Front End Web Design and Development</p>
   </footer>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="../js/menu-highlighter.js"></script>	

   </body>

</html>