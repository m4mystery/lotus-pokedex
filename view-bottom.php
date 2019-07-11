<!--Div that collapses when rotom is pressed contains links to the full pokedex-->
<div class="collapse" id="rotomDex">
  <div class="card card-body footerCard">
   <?php
   $gen = 8;
   for ($x = 0; $x < $gen; $x++) {
    $cGen = $x + 1;
    if(basename($_SERVER['PHP_SELF']) != "pokedex.php")
    {
     echo '<span class="footer span"><a href="pokedex.php?gen='.$cGen.'">Gen '.$cGen.'</a><span>';
    }
    else
    {
     echo '<span class="footer span"><a href="?gen='.$cGen.'">Gen '.$cGen.'</a><span>';
    }
   }
   ?>
  </div>
</div>
<!--Rotom button that closes and opens a div for the pokedex -->
<p class="footerIcon">
  <img class="footerIcon" data-toggle="collapse" href="#rotomDex" role="button" aria-expanded="false" aria-controls="collapseExample" src="Photos/rotom-dex.png" width="50px">
  <a href="index.php?Type1=Bug&Type2=&search=gender&HighDataOpt=on""><img class="footerIcon" data-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapseExample" src="Photos/R_T.png" width="80px"></a>
</p>



</body>
</html>
