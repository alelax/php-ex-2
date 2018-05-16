<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>

      <?php
         $movies = [
            [
               'title' => 'Ritorno al futuro',
               'voto' => 10,
               'generi' => ['azione', 'horror']
            ],
            [
               'title' => 'Ritorno al futuro 2',
               'voto' => 10,
               'generi' => ['drammatico', 'comico', 'sitcom']
            ],
            [
               'title' => 'Ritorno al futuro 3',
               'voto' => 9,
               'generi' => ['fantascienza']
            ],
         ]
      ?>

      <?php  foreach ($movies as $movie) { ?>
         <div class="Card">

            <h2 class="title"> <?php echo $movie["title"]; ?></h2>
            <p class="voto"><?php echo $movie["voto"]; ?></p>
            <ul>
               <?php foreach ($movie['generi'] as $genere) { ?>
                  <li> <?php echo ucfirst($genere) ?> </li>   
               <?php  } ?>

            </ul>
         </div>


      <?php } ?>
<!--
      <div class="Card">

         <h2 class="title">Ritorno al futuro</h2>
         <p class="voto">10</p>
         <p class="genere">sdad</p>

      </div> -->

   </body>
</html>
