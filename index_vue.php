<?php
  include __DIR__ . '/db.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/app.css">
     <title>PHP Dischi</title>
   </head>
   <body>
     <div id="root">
       <?php include __DIR__ . '/partials/header.php' ?>
       <main>

           <div v-for="disc in discs" class="album_container">
             <img :src="disc.poster" alt="">
             <h3>{{disc.title}}</h3>
             <p>{{disc.author}}</p>
             <p>{{disc.year}}</p>
           </div>
       </main>
     </div>

    <script src="js/app.js" charset="utf-8"></script>
   </body>
 </html>
