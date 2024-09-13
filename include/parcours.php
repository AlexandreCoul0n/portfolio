<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parcours</title>
    <link rel="stylesheet" href="../timeline.css">
    <link rel="stylesheet" href="../menu.css">
    <title>Parcours</title>  
    <script type="module" src="../index.js"></script>
  </head>
  <body>
    <header>
      <?php require 'menu.html' ?>
    </header>
    <style>@import url('https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400&display=swap');</style>
    <!--This is the main container that contains the whole timeline.-->
    <section class="design-section">
    <div class="timeline">

              <!--Well, The reason for this div is to fill space. 
    This space is technically used for keeping dates, 
    but I didn't find the need for dates. However, I'll provide 
    you the styling for dates, so that you can use it if you 
    wanted to.-->
                      <div class="timeline-empty">
                      </div>

    <!--This is the class where the timeline graphics are 
    housed in. Note that we have timeline-circle 
    here for that pointer in timeline.-->

                   <div class="timeline-middle">
                       <div class="timeline-circle"></div>
                   </div>
                   <div class="timeline-component timeline-content">
                    <h3>2023-Aujourd'hui</h3>
                    <p>BTS SIO aux lycée saint-remi à Amiens </p>
               </div>
                    <div class="timeline-component timeline-content">
                             <h3>2021-2023</h3>
                             <p>première année de licence informatique à l'UPJV d'Amiens</p>
                    </div>
                    <div class="timeline-middle">
                        <div class="timeline-circle"></div>
                    </div>
                    <div class="timeline-empty">
                    </div>

                    <div class="timeline-empty">
                    </div>

                   <div class="timeline-middle">
                       <div class="timeline-circle"></div>
                   </div>
                   <div class=" timeline-component timeline-content">
                    <h3>2018-2021</h3>
                    <p>BAC général au lycée polyvalent de vimeu à Friville-Escarbotin avec les spécialité mathématique et numérique et science informatique</p>
               </div>

           </div>
        </div> 
    </section> 
  </body>
</html>