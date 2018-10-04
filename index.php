<!DOCTYPE html>
<html>
<head>
 <title>Barelysuper Pokedex</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--CSS-->
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <!--Main Page-->
  <link rel="stylesheet" type="text/css" href="css/PokemonSpecificTyping.css">
    <!--Search bar-->
  <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
    <!--Charts-->
  <link rel="stylesheet" type="text/css" href="css/highchart.css">
    <!--Evolution line-->
  <link rel="stylesheet" type="text/css" href="css/evolutionline.css">
  <!--JS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="Bootstrap/js/bootstrap.min.js"></script>
  <!--<script src="js/loading.js"></script>-->
  <!--highcharts and bootstrap-->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-more.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <!--Evolution Line Icons -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!--Favicons-->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href=“favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="favicon/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="favicon/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="favicon/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="favicon/mstile-310x310.png" />
</head>

<body>
<!-- Removing the Loading GIF <div id="loading"></div> -->
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
 <form action="" method="get" id="pokeform">
<div class="container">
 <div class="row">
    <div class="splitscreen">
 <p class="SelectType">Select Type 1:</p>
 <select name="Type1" form="pokeform">
  <option value="Bug" selected>Bug</option>
  <option value="Dark">Dark</option>
  <option value="Dragon">Dragon</option>
  <option value="Electric">Electric</option>
  <option value="Fairy">Fairy</option>
  <option value="Fighting">Fighting</option>
  <option value="Fire">Fire</option>
  <option value="Flying">Flying</option>
  <option value="Ghost">Ghost</option>
  <option value="Grass">Grass</option>
  <option value="Ground" >Ground</option>
  <option value="Ice">Ice</option>
  <option value="Normal">Normal</option>
  <option value="Poison">Poison</option>
  <option value="Psychic">Psychic</option>
  <option value="Rock">Rock</option>
  <option value="Steel">Steel</option>
  <option value="Water">Water</option>
 </select>
    </div>
    <div class="splitscreen">
 <p class="SelectType">Select Type 2</p>
 <select name="Type2" form="pokeform">
  <option value="" selected></option>
  <option value="Bug">Bug</option>
  <option value="Dark">Dark</option>
  <option value="Dragon">Dragon</option>
  <option value="Electric">Electric</option>
  <option value="Fairy">Fairy</option>
  <option value="Fighting">Fighting</option>
  <option value="Fire">Fire</option>
  <option value="Flying">Flying</option>
  <option value="Ghost">Ghost</option>
  <option value="Grass">Grass</option>
  <option value="Ground" >Ground</option>
  <option value="Ice">Ice</option>
  <option value="Normal">Normal</option>
  <option value="Poison">Poison</option>
  <option value="Psychic">Psychic</option>
  <option value="Rock">Rock</option>
  <option value="Steel">Steel</option>
  <option value="Water">Water</option>
 </select>
</form>
   </div>
    </div>
    <p>
    <hr/>
    <div class="active-pink-3 active-pink-4 mb-4 autocomplete">
    <input autocomplete="off" class="form-control" id="myInput" type="text" name="search" placeholder="OR....search for them cuties" "font-weight-bold" form="pokeform" aria-label="Search"></div>
    <hr/>
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
  </div>
</div>

    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>


<?php
if(!isset($_GET['Type1']))
{
 echo '
<div class="container">
<p class="font-weight-bold" id="poketype">Select Your Pok&eacute; Type from the Menu Above <br/> <img src="Photos\Mimikyu.png"> <br/> 上記のメニューでポケモンの種類を選択してください</p>

</div>';
}
else
{
if($_GET['search'] != "")
{
 $pokemonSearch = $_GET['search'];
}
else
{

$pokemonSearch ="";
$pokemonDesc = "";
$pokeDexLink = "";
$pokemonImage = "";
$pokemonNumber = 0;
//for pokemon that have more than one variation
$pokemonNumberNames = array();
$pokemonNumberLinks = array();
$pokemonSpecies = "";
$pokemonPokedexEntry = "";
$mega ="";
$megastone ="";
$pokemonList = array();
$pokemonRegion = array();
$pokemonValue1 = "";
$pokemonValue2 = "";
$pokemonEvolutionLine = array();
$HP="";
$Attack="";
$Defense="";
$SpAtk="";
$SpDef="";
$Speed = "";

 //https://forums.phpfreaks.com/topic/269574-searching-through-a-csv-and-only-returning-certain-rows-and-certain-columns/
 $PokemonValue1 = $_GET['Type1'];
 if ($_GET['Type1'] == $_GET['Type2'])
 {
 $PokemonValue2 = "";
 }
 else
 {
 $PokemonValue2 = $_GET['Type2'];
 }
 $PokemonValueCombined = strtoupper($PokemonValue1.$PokemonValue2);
}

function ChangeCell($value1)
{
 if ($value1 == 4)
 {
  return "Super-Effective";
 }
 elseif ($value1 == 2)
 {
  return "Super-Effective";
 }
 elseif ($value1 == 0.5)
 {
  return "Not-Effective";
 }
 elseif ($value1 == 0.25)
 {
  return "Not-Effective";
 }
 else
 {
  return "No-Effect";
 }
}

function PrintDataCells($type, $dataSet, $effectivenessColour)
{
 echo '
     <div class="card '.substr(strtolower($type),0,3).'">
      <div class="card-body text-center">
        <p class="card-text header">'.$type.'<img id="typeIcon" src="Icons/'.$type.'.png" height="20px" width="20px"></p>
        <p class="card-text header" id="'.$effectivenessColour.'">'.$dataSet. 'x - ' . $effectivenessColour . '</p>
      </div>
     </div>';
}

if(is_numeric($pokemonSearch))
{
  if (($handle = fopen("PokemonSpecificTyping.csv", "r")) !== FALSE)
  {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
      if ($data[0]==$pokemonSearch)
      {
      $pokemonNumber = $data[0];
      $PokemonValue1 = $data[2];
      $PokemonValue2 = $data[3];
      $HP=$data[5];
      $Attack=$data[6];
      $Defense=$data[7];
      $SpAtk=$data[8];
      $SpDef=$data[9];
      $Speed = $data[10];
      $mega = $data[15];
      $megastone = $data[16];
      $pokemonEvolutionLine = $data[17];
      $pokemonSpecies = $data[18];
      $pokemonPokedexEntry = $data[19];
      $PokemonValueCombined = strtoupper($PokemonValue1 . $PokemonValue2);
      $pokemonDesc = '#'. $data[0] . ': ' .$data[1] . ' - ';
      $dataWithoutFullstopsCommas = preg_replace('/[.,]/', '', $data[1]);
      $dataWithoutSpaces = preg_replace('/\s+/', '-', $dataWithoutFullstopsCommas);
      $strArray = explode(' ',$data[1]);
      if ($strArray[0] == "Mega")
       {
         if (sizeof($strArray) == 2)
         {
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($strArray[1]).'-'.strtolower($strArray[0]).'.jpg">';
         }
         else
         {
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($strArray[1]).'-'.strtolower($strArray[0]).'-'.strtolower($strArray[2]).'.jpg">';
         }
       }
       elseif (strtolower($data[1]) == strtolower("Meltan"))
       {
          $pokemonImage = '<img class="whodat" src="https://cdn.bulbagarden.net/upload/thumb/3/30/Meltan.png/500px-Meltan.png">';
          echo '<style>.fa{display:none}</style>';
       }
       else
       {
        if($data[13] == "")
        {
          $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.$dataWithoutSpaces.'" target="_blank">[PokeDex Entry]</a>';
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($dataWithoutSpaces).'.jpg">';
        }
        else
        {
          $specificPokemonLinkArr = explode("-",$data[13]);
         // for some reason castform isn't a JPG with it's alternative forms so I have to have this clause
         if(strtolower($specificPokemonLinkArr[0]) == "castform")
         {
          $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.strtolower($data[13]).'" target="_blank">[PokeDex Entry]</a>';
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/vector/'.strtolower($data[14]).'.png">';
         }
         else
         {
          $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.strtolower($data[13]).'" target="_blank">[PokeDex Entry]</a>';
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($data[14]).'.jpg">';
         }
        }
       }
       //Stop it going to the Alolan ones or variants
       break;

      }
    }
  }
  fclose($handle);
}
else
{
  if (($handle = fopen("PokemonSpecificTyping.csv", "r")) !== FALSE)
  {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
  {
  similar_text(strtolower($data[1]),strtolower($pokemonSearch),$percent);

   if($percent == 100)
    {
     $pokemonNumber = $data[0];
     $PokemonValue1 = $data[2];
     $PokemonValue2 = $data[3];
     $HP=$data[5];
     $Attack=$data[6];
     $Defense=$data[7];
     $SpAtk=$data[8];
     $SpDef=$data[9];
     $Speed = $data[10];
     $PokemonType1Array[] = $data[2];
     $PokemonType2Array[] = $data[3];
     $mega = $data[15];
     $megastone = $data[16];
     $pokemonEvolutionLine = $data[17];
     $pokemonSpecies = $data[18];
     $pokemonPokedexEntry = $data[19];
     $PokemonValueCombined = strtoupper($PokemonValue1 . $PokemonValue2);
     $pokemonDesc = '#'. $data[0] . ': ' .$data[1] . ' - ';
     $dataWithoutSpaces = preg_replace('/\s+/', '-', strtolower($data[1]));
     $strArray = explode(' ',$data[1]);
     if (strtolower($strArray[0]) == strtolower("Mega"))
     {
      if (sizeof($strArray) == 2)
      {
       $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($strArray[1]).'-'.strtolower($strArray[0]).'.jpg">';
      }
      else
      {
       $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($strArray[1]).'-'.strtolower($strArray[0]).'-'.strtolower($strArray[2]).'.jpg">';
      }
     }
     elseif (strtolower($data[1]) == strtolower("Meltan"))
     {
        $pokemonImage = '<img class="whodat" src="https://cdn.bulbagarden.net/upload/thumb/3/30/Meltan.png/500px-Meltan.png">';
        echo '<style>.fa{display:none}</style>';
     }
     else
     {
       if($data[13] == "")
       {
         $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.$dataWithoutSpaces.'" target="_blank">[PokeDex Entry]</a>';
         $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($dataWithoutSpaces).'.jpg">';
       }
       else
       {
         $specificPokemonLinkArr = explode("-",$data[13]);
         // for some reason castform isn't a JPG with it's alternative forms so I have to have this clause
         if(strtolower($specificPokemonLinkArr[0]) == "castform")
         {
          $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.strtolower($data[13]).'" target="_blank">[PokeDex Entry]</a>';
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/vector/'.strtolower($data[14]).'.png">';
         }
         else
         {
          $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.strtolower($data[13]).'" target="_blank">[PokeDex Entry]</a>';
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($data[14]).'.jpg">';
         }
       }
     }
     //to make sure it doesn't go to the next one
     $matchConfirmed = true;
    }
   if($percent > 85 and !isset($matchConfirmed))
    {
     $pokemonNumber = $data[0];
     $PokemonValue1 = $data[2];
     $PokemonValue2 = $data[3];
     $HP=$data[5];
     $Attack=$data[6];
     $Defense=$data[7];
     $SpAtk=$data[8];
     $SpDef=$data[9];
     $Speed = $data[10];
     $PokemonType1Array[] = $data[2];
     $PokemonType2Array[] = $data[3];
     $mega = $data[15];
     $megastone = $data[16];
     $pokemonEvolutionLine = $data[17];
     $pokemonSpecies = $data[18];
     $pokemonPokedexEntry = $data[19];
     $PokemonValueCombined = strtoupper($PokemonValue1 . $PokemonValue2);
     $pokemonDesc = '#'. $data[0] . ': ' .$data[1] . ' - ';
     $dataWithoutSpaces = preg_replace('/\s+/', '-', strtolower($data[1]));
     $strArray = explode(' ',$data[1]);
     if ($strArray[0] == "Mega")
     {
      if (sizeof($strArray) == 2)
      {
       $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($strArray[1]).'-'.strtolower($strArray[0]).'.jpg">';
      }
      else
      {
       $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($strArray[1]).'-'.strtolower($strArray[0]).'-'.strtolower($strArray[2]).'.jpg">';
      }
     }
     elseif (strtolower($data[1]) == strtolower("Meltan"))
     {
        $pokemonImage = '<img class="whodat" src="https://cdn.bulbagarden.net/upload/thumb/3/30/Meltan.png/500px-Meltan.png">';
        echo '<style>.fa{display:none}</style>';
     }
     else
     {
       if($data[13] == "")
       {
         $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.$dataWithoutSpaces.'" target="_blank">[PokeDex Entry]</a>';
         $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($dataWithoutSpaces).'.jpg">';
       }
       else
       {
         $specificPokemonLinkArr = explode("-",$data[13]);
         // for some reason castform isn't a JPG with it's alternative forms so I have to have this clause
         if(strtolower($specificPokemonLinkArr[0]) == "castform")
         {
          $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.strtolower($data[13]).'" target="_blank">[PokeDex Entry]</a>';
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/vector/'.strtolower($data[14]).'.png">';
         }
         else
         {
          $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.strtolower($data[13]).'" target="_blank">[PokeDex Entry]</a>';
          $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($data[14]).'.jpg">';
         }
       }
     }
    }
  }
  fclose($handle);
  }
}

//get specific information
if (($handle = fopen("PokemonSpecificTyping.csv", "r")) !== FALSE)
{
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
 {

 if(isset($PokemonValue1))
 {
   if ($data[2] == $PokemonValue1 and $data[3] == $PokemonValue2 or $data[3] == $PokemonValue1 and $data[2] == $PokemonValue2)
   {
     $PokemonName = $data[1];
     $Region = $data[11];
     $pokemonList[] = $PokemonName.$Region;
   }
 }

 //getting all pokemon a number
 if(isset($pokemonNumber))
 {
  if($pokemonNumber == $data[0])
  {
   $pokemonNumberNames[] = $data[1];
   $pokemonNumberLinks[] = $data[14];
  }
 }

 }

 fclose($handle);
}

if (!isset($PokemonValueCombined))
{
echo '<div class="container">
<p class="font-weight-bold" id="poketype">Who\'s that Pokemon? Sorry, could not find it.<br/> <img  class="whodat missingno" src="https://i.ytimg.com/vi/vGioJbsxiYk/maxresdefault.jpg"> </p>
</div>';
}
else
{
  if (($handle = fopen("PokemonTyping.csv", "r")) !== FALSE)
  {
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

      if(!isset($pokeDexLink))
      {
      $pokeDexLink = "";
      }

      if ($data[0] == $PokemonValueCombined)
      {
       echo '
       <div class="container">
       <div id="poketype">
       <p class="font-weight-bold" id="poketype">'. $pokemonDesc . $PokemonValue1 . " " .$PokemonValue2 . ' Type</p>';
       if (isset($mega) && $mega!="")
       {
        $megaStonePieces = explode("|",$megastone);
        $megaPieces = explode("|",$mega);
        $counter = 0;
        foreach ($megaStonePieces as $value)
        {
         $valueWithoutSpaces = preg_replace('/\s+/', '-', strtolower($value));
         $megaWithoutSpaces = explode("-",$megaPieces[$counter]);
         if (count($megaWithoutSpaces) < 3)
         {
          echo '<a href="?Type1=Bug&Type2=&search=Mega-'.$megaWithoutSpaces[0].'" target="_blank"><img src="/Icons/megastones/'.$valueWithoutSpaces.'.png" width="30px"></a>';
         }
         else
         {
          echo '<a href="?Type1=Bug&Type2=&search=Mega-'.$megaWithoutSpaces[0].'-'.$megaWithoutSpaces[2].'" target="_blank"><img src="/Icons/megastones/'.$valueWithoutSpaces.'.png" width="30px"></a>';
         }
         $counter++;
        }
       echo '<br/>';
       }
       echo $pokeDexLink . '<br/>';
       if($pokemonNumber > 1)
       {
       echo '
       <a href="?Type1=Bug&Type2=&search='. ($pokemonNumber-1) .'"><i class="fa fa-arrow-circle-left" style="font-size:50px" aria-hidden="true"></i></a>';
       }
       echo $pokemonImage .'
       <a href="?Type1=Bug&Type2=&search='. ($pokemonNumber+1) .'"><i class="fa fa-arrow-circle-right" style="font-size:50px" aria-hidden="true"></i></a><br/>';

    //uncomment below to disable pokedex entry until ready
    //$pokemonEvolutionLine = "";
    if(isset($pokemonEvolutionLine) and $pokemonEvolutionLine !="" and isset($pokemonSearch) and $pokemonSearch != "" or count($pokemonNumberNames)>1)
    {
    echo '
    <p><button type="button" class="btn btn-dex" data-toggle="collapse" data-target="#demo2">PokeDex Entry</button><br/>
    <div id="demo2" class="collapse">';
    $pieces = explode(">",$pokemonEvolutionLine);
    echo '<br/>
    <div class="card">';
        if(isset($pokemonSpecies) and $pokemonSpecies !="")
        {
        echo '
        <div class="card-header">The '.$pokemonSpecies.' Pokémon</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">'.$pokemonPokedexEntry.'</li>';
            if(isset($pokemonEvolutionLine) and $pokemonEvolutionLine !="")
            {
             echo '
             <li class="list-group-item evolve"><ul><b>Evolution Line</b><br/><br/>';
             foreach ($pieces as $value)
             {
                 $valueWithoutSpaces = preg_replace('/\s+/', '-', strtolower($value));
                 if($value != "-")
                 {
                     if ($value === end($pieces)) { //last
                         if (strpos($value, '|') !== false)
                         {
                             $value  = str_replace("|","",$value);
                             $valueWithoutSpaces = str_replace("|","",$valueWithoutSpaces);
                             echo '<li class="branchingEvolution"><a href="?Type1=Normal&Type2=&search='.strtolower($valueWithoutSpaces).'"><p><img src="https://img.pokemondb.net/artwork/'.strtolower($valueWithoutSpaces).'.jpg" height="42"><br/>'.$value.'</p></a></li>';
                         }
                         else
                         {
                             echo '<a href="?Type1=Normal&Type2=&search='.strtolower($valueWithoutSpaces).'"><li><p><img class="end" src="https://img.pokemondb.net/artwork/'.strtolower($valueWithoutSpaces).'.jpg" height="42"><br/>'.$value.'</p></li></a>';
                         }

                     }
                     else
                     {
                         if (strpos($value, '|') !== false)
                         {
                             $value  = str_replace("|","",$value);
                             $valueWithoutSpaces = str_replace("|","",$valueWithoutSpaces);
                             echo '<li class="branchingEvolution"><a href="?Type1=Normal&Type2=&search='.strtolower($valueWithoutSpaces).'"><p><img src="https://img.pokemondb.net/artwork/'.strtolower($valueWithoutSpaces).'.jpg" height="42"><br/>'.$value.'</p></a></li>';
                         }
                         else
                         {
                             echo '<a href="?Type1=Normal&Type2=&search='.strtolower($valueWithoutSpaces).'"><li><p class="notend"><img src="https://img.pokemondb.net/artwork/'.strtolower($valueWithoutSpaces).'.jpg" height="42"><br/>'.$value.'</p></li></a>';
                         }
                     }
                 }
                 else
                 {
                     echo '<li><p>This Pokemon has no evolution</p></li>';
                 }
              }
              echo '</ul>
              </li>';
             }
            }
            if (count($pokemonNumberNames)>1)
            {
             echo '<li class="list-group-item forme"><ul><b>Different Forms</b><br/><br/>';
             $counter = 0;
             foreach ($pokemonNumberNames as $pokenames) {
             $pokenamesWithoutSpaces = str_replace(" ","-",$pokenames);
              if(isset($mega) and $mega != "")
              {
               $megaArr = explode("-",$mega);
               $pokenamesArr = explode(" ",$pokenames);
               if(strtolower($megaArr[1])=="mega" and strtolower($pokenamesArr[0])=="mega")
               {
                echo '<a href="?Type1=Normal&Type2=&search=mega-'.strtolower($megaArr[0]).'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($megaArr[0]).'-mega.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
               }
               else
               {
                echo '<a href="?Type1=Normal&Type2=&search='.strtolower($pokenames).'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($pokenames).'.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
               }
              }
              else
              {
               if($pokemonNumberLinks[$counter] != "")
               {
                $pokemonNumberLinksArr = explode("-",$pokemonNumberLinks[$counter]);
                //clause for castform as it's in PNG form for some fucking reason
                if($pokemonNumberLinksArr[0] != "castform")
                {
                 echo '<a href="?Type1=Normal&Type2=&search='.strtolower($pokenamesWithoutSpaces).'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($pokemonNumberLinks[$counter]).'.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
                }
                else
                {
                 echo '<a href="?Type1=Normal&Type2=&search='.strtolower($pokenamesWithoutSpaces).'"><li><p><img src="https://img.pokemondb.net/artwork/vector/'.strtolower($pokemonNumberLinks[$counter]).'.png" height="42"><br/>'.$pokenames.'</p></li></a>';
                }
               }
               else
               {
                echo '<a href="?Type1=Normal&Type2=&search='.strtolower($pokenamesWithoutSpaces).'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($pokenames).'.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
               }
              }
              $counter++;
             }
             echo '</ul></li>';
            }

        echo '
        </ul>
        </div>
    </div>';
    }
    if(isset($HP) and $HP !="")
    {
    //POGO Calculations
    //CpM (Combat Points Modifier) - Using Level 40 (Technically Level 39)
    $CPM = 0.78463697;

    //Level of the IVs as you would get through Appraisals
    $IV_Attack = 15;
    $IV_Defence = 15;
    $IV_HP = 15;

    //Generating Base Speed
    $PokemonGoSpeedMod = 1+(($Speed-75)/500);

    //Generating Base Attack by combining Special Att. And Base Att.
    $HigherAttackStat = MAX($Attack,$SpAtk);
    $LowerAttackStat = MIN($Attack,$SpAtk);
    $ScaledAttackStat = ROUND(2*((7/8)*$HigherAttackStat+(1/8)*$LowerAttackStat));
    $PokemonGoBaseAttack = Round($ScaledAttackStat * $PokemonGoSpeedMod);

    //Generating Base Defence combining Special Def. And Base Def.
    $HigherDefenceStat = MAX($Defense,$SpDef);
    $LowerDefenceStat = MIN($Defense,$SpDef);
    $ScaledDefenceStat = ROUND(2*((7/8)*$HigherDefenceStat+(1/8)*$LowerDefenceStat));
    $PokemonGoBaseDefence = Round($ScaledDefenceStat * $PokemonGoSpeedMod);

    //Generating Base Stamina (HP)
    $PokemonGoBaseHP = 2*$HP;

    //Rounding down the Pokemon MAX CP based on the stats above pow() - is power of, floor() rounds down to the nearest integer
    $CP = floor((($PokemonGoBaseAttack+$IV_Attack)*pow(($PokemonGoBaseDefence+$IV_Defence),0.5)*pow(($PokemonGoBaseHP+$IV_HP),0.5)*pow($CPM,2))/10);
    echo '
        <p><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">Stats</button></p>
        <div id="demo3" class="collapse">
            <li class="list-group-item"><div id="StatsContainer"></div><hr/><div id="PogoStatsContainer"></div></li>
        </div>';
    }
    echo '
       <p><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">'.$data[1].' Pokemon of this type</button><br/>
    <div id="demo" class="collapse">';
          $currentGen = "";
       foreach ($pokemonList as $pokeloop) {

          if($pokeloop != "")
          {
              if ($pokeloop[strlen($pokeloop) - 1] != $currentGen)
              {
              echo '<br/>';
              echo '<p class="font-weight-bold">Gen '.$pokeloop[strlen($pokeloop) - 1].': </p>';
              echo '<a href="?Type1=Bug&Type2=&search='.substr($pokeloop, 0, -1).'"><button type="button" class="btn btn-outline-info pokemonOfAType">'.substr($pokeloop, 0, -1).'</button></a> ';
              $currentGen = $pokeloop[strlen($pokeloop) - 1];
              }
              else
              {
              echo '<a href="?Type1=Bug&Type2=&search='.substr($pokeloop, 0, -1).'"><button type="button" class="btn btn-outline-info pokemonOfAType">'.substr($pokeloop, 0, -1).'</button></a> ';
              }
          }
       }
       echo '</p></div></div>
       <div class="container">
       <div class="card-group">';

       if ($data[2] != "")
       {
       PrintDataCells("NORMAL",$data[2],ChangeCell($data[2]));
       }

       if ($data[3] != "")
       {
       PrintDataCells("FIRE",$data[3],ChangeCell($data[3]));
       }

       if ($data[4] != "")
       {
       PrintDataCells("WATER",$data[4],ChangeCell($data[4]));
       }

       if ($data[5] != "")
       {
       PrintDataCells("ELECTRIC",$data[5],ChangeCell($data[5]));
       }

       if ($data[6] != "")
       {
       PrintDataCells("GRASS",$data[6],ChangeCell($data[6]));
       }

       if ($data[7] != "")
       {
       PrintDataCells("ICE",$data[7],ChangeCell($data[7]));
       }

       if ($data[8] != "")
       {
       PrintDataCells("FIGHTING",$data[8],ChangeCell($data[8]));
       }

       if ($data[9] != "")
       {
       PrintDataCells("POISON",$data[9],ChangeCell($data[9]));
       }

       if($data[10] != "")
       {
       PrintDataCells("GROUND",$data[10],ChangeCell($data[10]));
       }

       if($data[11] != "")
       {
       PrintDataCells("FLYING",$data[11],ChangeCell($data[11]));
       }

       if($data[12] != "")
       {
       PrintDataCells("PSYCHIC",$data[12],ChangeCell($data[12]));
       }

       if($data[13] != "")
       {
       PrintDataCells("BUG",$data[13],ChangeCell($data[13]));
       }

       if($data[14] != "")
       {
       PrintDataCells("ROCK",$data[14],ChangeCell($data[14]));
       }

       if($data[15] != "")
       {
       PrintDataCells("GHOST",$data[15],ChangeCell($data[15]));
       }

       if($data[16] != "")
       {
       PrintDataCells("DRAGON",$data[16],ChangeCell($data[16]));
       }

       if($data[17] != "")
       {
       PrintDataCells("DARK",$data[17],ChangeCell($data[17]));
       }

       if($data[18] != "")
       {
       PrintDataCells("STEEL",$data[18],ChangeCell($data[18]));
       }

       if($data[19] != "")
       {
       PrintDataCells("FAIRY",$data[19],ChangeCell($data[19]));
       }
      }
   }
  echo '
  </div>
  </div>';

   fclose($handle);
  }
}
}


//____Autocomplete Javascript Call_____\\
include("autocomplete.php");


if(isset($_GET['Type1']))
{
//____Charts Javascript Call_____\\
include("highchart.php");
}
?>

</body>
</html>
