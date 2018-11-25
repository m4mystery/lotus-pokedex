<!DOCTYPE html>
<html>
<head>
 <title>Barelysuper Pokedex</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--CSS-->
   <!--bootstrap 3.3.1 CSS-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!--bootstrap toggle CSS-->
   <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
   <!--Main Page-->
   <link rel="stylesheet" type="text/css" href="css/PokemonSpecificTyping.css">
   <!--Search bar-->
   <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
   <!--Charts-->
   <link rel="stylesheet" type="text/css" href="css/highchart.css">
   <!--Evolution line-->
   <link rel="stylesheet" type="text/css" href="css/evolutionline.css">
  <!--JS-->
  <!--bootstrap and jquery-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!--Bootstrap toggle button-->
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!--<script src="js/loading.js"></script>-->
  <!--highcharts and bootstrap-->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-more.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <!--Evolution Line Icons-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!--Favicons-->
  <!-- http://www.favicomatic.com/ -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
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
          </div>
        </div>
        <hr/>
        <div class="active-pink-3 active-pink-4 mb-4 autocomplete">
        <input autocomplete="off" class="form-control" id="myInput" type="text" name="search" placeholder="OR....search for them cuties" "font-weight-bold" form="pokeform" aria-label="Search"></div>
        <hr/>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
        <hr/>
        <input id="dataOpt" type="checkbox" checked data-toggle="toggle" data-size="large" data-onstyle="success" data-offstyle="danger" data-on="3D" data-off="2D">
        <label for="HighDataOpt">3D Models are quite data intensive (for some people). If you're low on data, turn on 2D models with this switch, note you'll also lose shiny models</label>
        <script>
        //A very extra way of setting the name for a value but I am keeping it here because it's good info.
        $("#dataOpt").attr("name", "HighDataOpt");

        //Setting GET Parameter function
        var getUrlParameter = function getUrlParameter(sParam)
        {
         var sPageURL = window.location.search.substring(1),
             sURLVariables = sPageURL.split('&'),
             sParameterName,
             i;

         for (i = 0; i < sURLVariables.length; i++)
         {
             sParameterName = sURLVariables[i].split('=');
             if (sParameterName[0] === sParam)
             {
              return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
             }
         }
        };

        //Getting GET parameter
        var dataoptGET = getUrlParameter('HighDataOpt');
        var type1GET = getUrlParameter('Type1');

        if (typeof dataoptGET === "undefined" && typeof type1GET !== "undefined")
        {
         $('#dataOpt').bootstrapToggle('off');
        }
        </script>
      </div>
      </form>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

<!-- code for -->
<?php
/*----Instantiating Variables----*/

//Resource variables
$pokemonSearch ="";
$pokemonDesc = "";
$pokeDexLink = "";
$pokemonImage = "";
$pokemonNumber = 0;
$specificPokemonName = "";


//for pokemon that have more than one variation
$pokemonNumberNames = array();
$pokemonNumberLinks = array();

//Variables for Pokedex Entry
$pokemonSpecies = "";
$pokemonPokedexEntry = "";

//Variables for mega evolution
$mega ="";
$megastone ="";

//Generating pokemon lists
$pokemonList = array();
$pokemonRegion = array();
$pokemonValue1 = "";
$pokemonValue2 = "";
$pokemonEvolutionLine = array();

//Graph variables
$HP="";
$Attack="";
$Defense="";
$SpAtk="";
$SpDef="";
$Speed = "";

//Easter Egg Values
$easterEggSprite = FALSE;

//Setting 3D / 2D setting preferences for the session
if(isset($_GET['HighDataOpt']))
{
 $highDataOptGET = "&HighDataOpt=".$_GET['HighDataOpt'];
}

//Checking if user has set the type (Get Parameter)
if(!isset($_GET['Type1']))
{
 echo '
<div class="container">
<p class="font-weight-bold" id="poketype">Select your Pok&eacute; type from the menu above <br/> 3D Models have shiny forms. Just click on them <br/><img class="mainMenuPhoto" src="Photos\lotus.png"> <br/> 上記のメニューでポケモンの種類を選択してください<br/><br/><br/><a class="twitter-timeline" data-height="800" data-theme="light" href="https://twitter.com/barelysuperman/lists/pokemon-go?ref_src=twsrc%5Etfw">Pokemon Updates</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
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
/*----Instantiating Variables End----*/

/*----Functions----*/

//Function to change numberical values into text for Pokemon Type Effectiveness
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

//This is a function to output the cards that hold individual type weaknesses on the main page.
function PrintDataCells($type, $dataSet, $effectivenessColour)
{
 echo '
     <div class="card '.substr(strtolower($type),0,3).'">
      <div class="card-body text-center">
        <a href="?Type1='.ucwords(strtolower($type)).'&Type2=&search="'.$highDataOptGET.'><p class="card-text header">'.$type.'<img id="typeIcon" src="Icons/'.$type.'.png" height="20px" width="20px"></p></a>
        <p class="card-text header" id="'.$effectivenessColour.'">'.$dataSet. 'x - ' . $effectivenessColour . '</p>
      </div>
     </div>';
}

//This is a function to test if a vaule is empty
function isEmptyOutput($val1,$output)
{
  if (isset($val1) and $val1 != "")
  {
    return $output;
  }
}

//Function that toggles the an image using javascript (for switching between shiny and non-shiny)
function ShinyCheck($regular,$shiny)
{
     echo '
     <script>
     $(document).ready(function ()
     {
       function SettingShiny(genderParameter)
       {

        //setting the active class so that it can switch
         if($(".whodat").hasClass("active"))
         {
        	 $(".whodat").attr("src","'.$shiny.'"+genderParameter+".gif");
         }
         else
         {
          $(".whodat").attr("src","'.$regular.'"+genderParameter+".gif");
         }

         var x = document.getElementById("shiny");
         if (x.style.display === "none")
         {
            x.style.display = "block";
         } else
         {
            x.style.display = "none";
         }

         $(".whodat").toggleClass("active");
       }

       $(".whodat").click(function ()
       {

        //Checking if the sprite is female
        if($(this).hasClass("female"))
        {
         SettingShiny("_Female");
        }
        //If the sprite is male
        else
        {
         SettingShiny("");
        }
       });

     });
     </script>';
}

//Function that toggles the image from the male and female variant.
//Uses Team Rocket as the gender identifiers.
function GenderSpriteChange($pokemon)
{
     echo '
     <script>
     $(document).ready(function ()
     {
       $("#genderMale").click(function ()
       {
        $(".whodat").addClass("active");
        $(".whodat").removeClass("female");
       	$(".whodat").attr("src","Sprites/'.$pokemon.'.gif");
       	//Hiding the shiny loading sprite
       	document.getElementById("shiny").style.display = "none";
       });
       $("#genderFemale").click(function ()
       {
        $(".whodat").addClass("active");
        $(".whodat").addClass("female");
        $(".whodat").removeClass("male");
       	$(".whodat").attr("src","Sprites/'.$pokemon.'_Female.gif");
       	//Hiding the shiny loading sprite
       	document.getElementById("shiny").style.display = "none";
       });
     });
     </script>';
}

//Function that pulls information from the datafile
function SetPokemonSpecificTyping($data)
{
 //Setting Pokemon Pokemon name and numbers Globally
 global $pokemonNumber,$PokemonValue1,$PokemonValue2;
 //Setting Pokemon Descriptors globally
 global $PokemonValueCombined,$pokemonDesc, $specificPokemonName;
 //Setting Graph Stats Globally
 global $HP,$Attack,$Defense,$SpAtk,$SpDef,$Speed;
 //Setting Mega Evolution Data Globally
 global $mega,$megastone;
 //Setting Pokedex Entry Data Globally
 global $pokemonEvolutionLine,$pokemonSpecies,$pokemonPokedexEntry,$professorLotusNotes,$genderNotes;

 //Setting Pokemon Pokemon name and numbers
 $pokemonNumber = $data[0];
 $PokemonValue1 = $data[2];
 $PokemonValue2 = $data[3];

 //Setting Pokemon Descriptors
 $PokemonValueCombined = strtoupper($PokemonValue1 . $PokemonValue2);
 $pokemonDesc = '#'. $data[0] . ': ' .$data[1] . ' - ';
 $specificPokemonName = $data[1];

 //Setting Graph Data
 $HP=$data[5];
 $Attack=$data[6];
 $Defense=$data[7];
 $SpAtk=$data[8];
 $SpDef=$data[9];
 $Speed = $data[10];

 //Setting mega Evolution
 $mega = $data[15];
 $megastone = $data[16];

 //Setting Pokedex Entry line items
 $pokemonEvolutionLine = $data[17];
 $pokemonSpecies = $data[18];
 $pokemonPokedexEntry = $data[19];
 $professorLotusNotes = $data[20];
 $genderNotes = $data[21];
}

function SetPokemonURLs($data,$easterEgg)
{
 //setting pokemon link and image global
 global $pokemonImage,$pokeDexLink;

 //Setting variable for sprite image location
 $spriteFileLocation = "Sprites/";
 $shinySpriteFileLocation = "Sprites/Shiny/";

 //Checking if the User has left it in 3D mode or set it to 2D mode
 if (isset($_GET['HighDataOpt']))
 {
  $HighDataOption = $_GET['HighDataOpt'];
 }

 //Checking Search Query for special cases such as mega evolutions etc...
 $dataWithoutFullstopsCommas = preg_replace('/[.,]/', '', $data[1]);
 $dataWithoutSpaces = preg_replace('/\s+/', '-', $dataWithoutFullstopsCommas);
 $strArray = explode(' ',$data[1]);

 //Check if the first word is Mega
 if ($strArray[0] == "Mega")
 {
   //Check if it's something that has more than two words, like mega charizard x
   if (sizeof($strArray) == 2)
   {
    //Checks if the 3D sprite exists for that pokemon
    if (file_exists($spriteFileLocation.$strArray[1].'_Mega.gif') and $HighDataOption == "on")
    {
     //Setting pokemon image based on the sprite
     $pokemonImage = '<img class="whodat" src="'.$spriteFileLocation.$strArray[1].'_Mega.gif">';

     //Checking if Shiny Sprite Exists
     if (file_exists($shinySpriteFileLocation.$strArray[1].'_Mega.gif'))
     {
      //Enables clicking of regular to get shiny
      ShinyCheck($spriteFileLocation.$strArray[1]."_Mega", $shinySpriteFileLocation.$strArray[1]."_Mega");
     }

    }
    //If the 3D sprite does not exist then load from PokemonDB
    else
    {
     $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($strArray[1]).'-'.strtolower($strArray[0]).'.jpg">';
    }
   }
   //This is the condition for mega charizard x / mewtwo y and the like
   else
   {
    //Checks if the 3D sprite exists for that pokemon
    if (file_exists($spriteFileLocation.$strArray[1].'_Mega'.$strArray[2].'.gif') and $HighDataOption == "on")
    {
     //Setting pokemon image based on the sprite
     $pokemonImage = '<img class="whodat" src="'.$spriteFileLocation.$strArray[1].'_Mega'.$strArray[2].'.gif">';

     //Checking if Shiny Sprite Exists
     if (file_exists($shinySpriteFileLocation.$strArray[1].'_Mega'.$strArray[2].'.gif'))
     {
      //Enables clicking of regular to get shiny
      ShinyCheck($spriteFileLocation.$strArray[1]."_Mega".$strArray[2], $shinySpriteFileLocation.$strArray[1].'_Mega'.$strArray[2]);
     }

    }
    //If the 3D sprite does not exist then load from PokemonDB
    else
    {
     $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($strArray[1]).'-'.strtolower($strArray[0]).'-'.strtolower($strArray[2]).'.jpg">';
    }
   }
 }
 else
 {
  if($data[13] == "")
  {
    $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.$dataWithoutSpaces.'" target="_blank">[PokeDex Entry]</a>';
    //Testing if 3D sprite exists on server
    if (file_exists($spriteFileLocation.$data[1].'.gif') and $HighDataOption == "on")
    {
     $pokemonImage = '<img class="whodat" src="'.$spriteFileLocation.$data[1].'.gif">';

     if (file_exists($shinySpriteFileLocation.$data[1].'.gif'))
     {
      ShinyCheck($spriteFileLocation.$data[1], $shinySpriteFileLocation.$data[1]);
     }

    }
    else
    {
     //Not setting this just for easter eggs, new sprites, or shiny pokemon. Value set within numeric
     if ($easterEgg == FALSE)
     {
      $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($dataWithoutSpaces).'.jpg">';
     }
    }
  }
  else
  {
   $specificPokemonLinkArr = explode("-",$data[14]);
   //Setting the link
   $pokeDexLink = '<a href="https://pokemondb.net/pokedex/'.strtolower($data[13]).'" target="_blank">[PokeDex Entry]</a>';

   //Capturing a castform filetype change in Pokemondb
   if(strtolower($specificPokemonLinkArr[0]) == "castform")
   {
    if (file_exists($spriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])).'.gif') and isset($HighDataOption))
    {
     $pokemonImage = '<img class="whodat" src="'.$spriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])).'.gif">';

     if (file_exists($shinySpriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])).'.gif'))
     {
      ShinyCheck($spriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])), $shinySpriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])));
     }

    }
    // for some reason castform isn't a JPG in Pokemon DB hence this clause with it's alternative forms so I have to have this clause
    else
    {
     $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/vector/'.strtolower($data[14]).'.png">';
    }
   }
   //Capturing everything else that has a specific link
   else
   {
    //Changing items with the specific image link to 3D sprites
    if (file_exists($spriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])).'.gif') and isset($HighDataOption) )
    {
     $pokemonImage = '<img class="whodat" src="'.$spriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])).'.gif">';

     if (file_exists($shinySpriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])).'.gif'))
     {
      ShinyCheck($spriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])), $shinySpriteFileLocation.ucfirst(strtolower($specificPokemonLinkArr[0])).'_'.ucfirst(strtolower($specificPokemonLinkArr[1])));
     }

    }
    //Everything else that isn't a 3D sprite redirected to pokemonDB
    else
    {
     $pokemonImage = '<img class="whodat" src="https://img.pokemondb.net/artwork/'.strtolower($data[14]).'.jpg">';
    }
   }
  }
 }

}

//function to display pokemon in blocks and also seperate them by gen
function SeperatePokemon($pokemonList,$newPage)
{
 $currentGen = "";
 if(isset($_GET['HighDataOpt']))
 {
  $highDataOptGET = "&HighDataOpt=on";
 }
 foreach ($pokemonList as $pokeloop)
 {
   if($pokeloop != "")
   {
    if ($pokeloop[strlen($pokeloop) - 1] != $currentGen)
    {
     echo '<br/>';
     echo '<p class="font-weight-bold">Gen '.$pokeloop[strlen($pokeloop) - 1].': </p>';
     if ($newPage != 0)
     {
      echo '<a href="?Type1=Bug&Type2=&search='.substr($pokeloop, 0, -1).$highDataOptGET.'"><button type="button" class="btn btn-outline-info pokemonOfAType">'.substr($pokeloop, 0, -1).'</button></a> ';
     }
     else
     {
      echo '<a href="?Type1=Bug&Type2=&search='.substr($pokeloop, 0, -1).$highDataOptGET.'" target="_blank"><button type="button" class="btn btn-outline-info pokemonOfAType">'.substr($pokeloop, 0, -1).'</button></a> ';
     }
     $currentGen = $pokeloop[strlen($pokeloop) - 1];
    }
    else
    {
     if ($newPage != 0)
     {
      echo '<a href="?Type1=Bug&Type2=&search='.substr($pokeloop, 0, -1).$highDataOptGET.'"><button type="button" class="btn btn-outline-info pokemonOfAType">'.substr($pokeloop, 0, -1).'</button></a> ';
     }
     else
     {
      echo '<a href="?Type1=Bug&Type2=&search='.substr($pokeloop, 0, -1).$highDataOptGET.'" target="_blank"><button type="button" class="btn btn-outline-info pokemonOfAType">'.substr($pokeloop, 0, -1).'</button></a> ';
     }

    }
   }
 }
}

//EasterEgg that will affect what the sprite looks like
function EasterEggSprite($easterEggValue)
{
 global $pokemonImage, $pokemonSearch, $easterEggSprite;
 //Eevee community day sprite
 if ($pokemonSearch == 110818 or $pokemonSearch == 120818)
 {
  $pokemonImage = '<img class="whodat" src="Sprites/Shiny/Eevee.gif">';
  $pokemonSearch = "133";
  $easterEggSprite = TRUE;
 }

  return $easterEggSprite;
}

//Generating gender icons function
function GenderIcons($genderInformation,$pkmnname)
{
 if ($genderInformation != "")
 {
  echo '
  <img class="genderIcons" id="genderFemale" src="Photos/R_F.png" />
  <img class="genderIcons" id="genderMale" src="Photos/R_M.png" />
  <br/>
  ';
  GenderSpriteChange($pkmnname);
 }
}

/*----Functions End----*/

//When the Pokemon is searched by number
if(is_numeric($pokemonSearch))
{
  EasterEggSprite($pokemonSearch);

  if (($handle = fopen("PokemonSpecificTyping.csv", "r")) !== FALSE)
  {

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
    {
      if ($data[0]==$pokemonSearch)
      {
      //Setting variables
      SetPokemonSpecificTyping($data);

      //Setting Pokemon Link and Image
      SetPokemonURLs($data, EasterEggSprite($pokemonSearch));

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
     //To make sure it does not apply / satisft the 85 and above condition
     $matchConfirmed = true;
    }
   if($percent == 100 or ($percent > 85 and !isset($matchConfirmed)))
    {
     //Setting variables
     SetPokemonSpecificTyping($data);

     //Setting Pokemon Link and Image
     SetPokemonURLs($data,"");
    }
  }
  fclose($handle);
  }
}


//get specific information about pokemon
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
     //Combining name and region so I can get the region and name without having to use a multidimensional array.
     $pokemonList[] = $PokemonName.$Region;
   }
 }

 if(strtolower($pokemonSearch) == "gender")
 {
  if ($data[21] != "")
  {
    //Capturing the first line and ignoring it
    if (is_numeric($data[0]))
    {
     $PokemonName = $data[1];
     $Region = $data[11];
    //Combining name and region so I can get the region and name without having to use a multidimensional array.
     $pokemonList[] = $PokemonName.$Region;
    }
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

//This is to chech if the correct pokemon was identified, if not set, it will show who is that pokemon, unless specific command overrides
if (!isset($PokemonValueCombined))
{
 //container that will house content
 echo '<div class="container">';
 if(strtolower($pokemonSearch)=="gender")
 {
  //Printing out all the pokemon with gender differences
  echo '<div id="poketype"><h1>Pokemon with gender differences</h1>';
  SeperatePokemon($pokemonList,1);
  echo '</div>';
 }
 else
 {
  //Who's that pokemon? It's Zapdos!
  echo '<p class="font-weight-bold" id="poketype">Who\'s that Pokemon? Sorry, could not find it.<br/><img  class="whodat missingno" src="https://i.ytimg.com/vi/vGioJbsxiYk/maxresdefault.jpg"><iframe width="560" height="315" src="https://www.youtube.com/embed/F4Bi9cZ7YA0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>';
 }
 //closing the container div
 echo '</div>';
}
else
{
  if (($handle = fopen("PokemonTyping.csv", "r")) !== FALSE)
  {
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
   {

    if(!isset($pokeDexLink))
    {
    $pokeDexLink = "";
    }

    if ($data[0] == $PokemonValueCombined)
    {
     //Displaying the first row
     echo '
     <div class="container">

     <div id="poketype">
     <p class="font-weight-bold" id="poketype">'. $pokemonDesc . $PokemonValue1 . " " .$PokemonValue2 . ' Type</p>';
     //Setting the Pokemon Type to be displayed on page
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
        echo '<a href="?Type1=Bug&Type2=&search=Mega-'.$megaWithoutSpaces[0].$highDataOptGET.'"><img src="/Icons/megastones/'.$valueWithoutSpaces.'.png" width="30px"></a>';
       }
       else
       {
        echo '<a href="?Type1=Bug&Type2=&search=Mega-'.$megaWithoutSpaces[0].'-'.$megaWithoutSpaces[2].$highDataOptGET.'"><img src="/Icons/megastones/'.$valueWithoutSpaces.'.png" width="30px"></a>';
       }
       $counter++;
      }

      echo '<br/>';
     }

     //Setting the Team Rocket / Jessie and James gender icons to appear when the 3D file exists and user has set 3D option
     if ($_GET['HighDataOpt'] == "on" and file_exists("Sprites/".$specificPokemonName.".gif"))
     {
      GenderIcons($genderNotes,$specificPokemonName);
     }

     echo $pokeDexLink . '<br/>';
     if($pokemonNumber > 1)
     {
      echo '
      <a href="?Type1=Bug&Type2=&search='. ($pokemonNumber-1) .$highDataOptGET.'"><i class="fa fa-arrow-circle-left" style="font-size:50px" aria-hidden="true"></i></a>';
     }

    //last pokemon arrow. Too tired to do it programmatically, couldn't think of solution, hard coded to melmetal.
    if ($pokemonNumber != 809)
    {
     echo $pokemonImage .'
     <a href="?Type1=Bug&Type2=&search='. ($pokemonNumber+1) .$highDataOptGET.'"><i class="fa fa-arrow-circle-right" style="font-size:50px" aria-hidden="true"></i></a><br/>';
    }
    else
    {
     echo $pokemonImage .'
     <a href="?Type1=Bug&Type2=&search='. ($pokemonNumber+1) .$highDataOptGET.'"></i></a><br/>';
    }

    //Shiny Animation
    echo '<img id="shiny" style="display:none;" src="Photos/shiny.gif" /> ';

    //Setting the evolution line items
    if(isset($pokemonEvolutionLine) and $pokemonEvolutionLine !="" and isset($pokemonSearch) and $pokemonSearch != "" or count($pokemonNumberNames)>1 or $genderNotes != "" or $professorLotusNotes != "")
    {

    //Line Breaks for the Pokedex
    //Professor Lotus Notes
    $lotusString = "<br/><br/><b>Prof. Lotus' Notes:</b> ". $professorLotusNotes;
    //Gender Differences Notes
    $GenderString = "<br/><br/><b>Gender Differences:</b> ". $genderNotes;

    echo '
    <!--Pokedex Entry Button-->
    <p><button type="button" class="btn btn-dex" data-toggle="collapse" data-target="#demo2">PokeDex Entry</button><br/>
    <div id="demo2" class="collapse">';
    $pieces = explode(">",$pokemonEvolutionLine);
    echo '<br/>
    <div class="card">';
    if($pokemonSpecies != "")
    {
    echo '
    <div class="card-header">The '.$pokemonSpecies.' Pokémon</div>';
    }
    else
    {
    echo '
    <div class="card-header">Pokémon Details</div>';
    }
    echo '
    <ul class="list-group list-group-flush">
      <!--Setting the Pokedex Entries-->
      <li class="list-group-item">'.isEmptyOutput($pokemonPokedexEntry,$pokemonPokedexEntry).isEmptyOutput($professorLotusNotes,$lotusString).isEmptyOutput($genderNotes,$GenderString).'</li>';
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
                       echo '<li class="branchingEvolution"><a href="?Type1=Normal&Type2=&search='.strtolower($valueWithoutSpaces).$highDataOptGET.'"><p><img src="https://img.pokemondb.net/artwork/'.strtolower($valueWithoutSpaces).'.jpg" height="42"><br/>'.$value.'</p></a></li>';
                   }
                   else
                   {
                       echo '<a href="?Type1=Normal&Type2=&search='.strtolower($valueWithoutSpaces).$highDataOptGET.'"><li><p><img class="end" src="https://img.pokemondb.net/artwork/'.strtolower($valueWithoutSpaces).'.jpg" height="42"><br/>'.$value.'</p></li></a>';
                   }

               }
               else
               {
                   if (strpos($value, '|') !== false)
                   {
                       $value  = str_replace("|","",$value);
                       $valueWithoutSpaces = str_replace("|","",$valueWithoutSpaces);
                       echo '<li class="branchingEvolution"><a href="?Type1=Normal&Type2=&search='.strtolower($valueWithoutSpaces).$highDataOptGET.'"><p><img src="https://img.pokemondb.net/artwork/'.strtolower($valueWithoutSpaces).'.jpg" height="42"><br/>'.$value.'</p></a></li>';
                   }
                   else
                   {
                       echo '<a href="?Type1=Normal&Type2=&search='.strtolower($valueWithoutSpaces).$highDataOptGET.'"><li><p class="notend"><img src="https://img.pokemondb.net/artwork/'.strtolower($valueWithoutSpaces).'.jpg" height="42"><br/>'.$value.'</p></li></a>';
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
            $megaArrXYVariants = explode("|",$mega);
            if(count($megaArrXYVariants)<2)
            {
             echo '<a href="?Type1=Normal&Type2=&search=mega-'.strtolower($megaArr[0]).$highDataOptGET.'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($megaArr[0]).'-mega.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
            }
            else
            {
             $pokenamesArr = explode(" ",$pokenames);
             echo '<a href="?Type1=Normal&Type2=&search=mega-'.strtolower($pokenamesArr[1]).'-'.strtolower($pokenamesArr[2]).$highDataOptGET.'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($pokenamesArr[1]).'-mega-'.strtolower($pokenamesArr[2]).'.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
            }
           }
           else
           {
            echo '<a href="?Type1=Normal&Type2=&search='.strtolower($pokenames).$highDataOptGET.'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($pokenames).'.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
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
             echo '<a href="?Type1=Normal&Type2=&search='.strtolower($pokenamesWithoutSpaces).$highDataOptGET.'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($pokemonNumberLinks[$counter]).'.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
            }
            else
            {
             echo '<a href="?Type1=Normal&Type2=&search='.strtolower($pokenamesWithoutSpaces).$highDataOptGET.'"><li><p><img src="https://img.pokemondb.net/artwork/vector/'.strtolower($pokemonNumberLinks[$counter]).'.png" height="42"><br/>'.$pokenames.'</p></li></a>';
            }
           }
           else
           {
            echo '<a href="?Type1=Normal&Type2=&search='.strtolower($pokenamesWithoutSpaces).$highDataOptGET.'"><li><p><img src="https://img.pokemondb.net/artwork/'.strtolower($pokenames).'.jpg" height="42"><br/>'.$pokenames.'</p></li></a>';
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
    $IV_Defense = 15;
    $IV_HP = 15;

    //Generating Base Speed
    $PokemonGoSpeedMod = 1+(($Speed-75)/500);

    //Generating Base Attack by combining Special Att. And Base Att.
    $HigherAttackStat = MAX($Attack,$SpAtk);
    $LowerAttackStat = MIN($Attack,$SpAtk);
    $ScaledAttackStat = ROUND(2*((7/8)*$HigherAttackStat+(1/8)*$LowerAttackStat));
    $PokemonGoBaseAttack = Round($ScaledAttackStat * $PokemonGoSpeedMod);

    //Generating Base Defense combining Special Def. And Base Def.
    $HigherDefenseStat = MAX($Defense,$SpDef);
    $LowerDefenseStat = MIN($Defense,$SpDef);
    $ScaledDefenseStat = ROUND(2*((7/8)*$HigherDefenseStat+(1/8)*$LowerDefenseStat));
    $PokemonGoBaseDefense = Round($ScaledDefenseStat * $PokemonGoSpeedMod);

    //Generating Base Stamina (HP)
    $PokemonGoBaseHP = 2*$HP;

    //Rounding down the Pokemon MAX CP based on the stats above pow() - is power of, floor() rounds down to the nearest integer
    $CP = floor((($PokemonGoBaseAttack+$IV_Attack)*pow(($PokemonGoBaseDefense+$IV_Defense),0.5)*pow(($PokemonGoBaseHP+$IV_HP),0.5)*pow($CPM,2))/10);
    echo '
        <p><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">Stats</button></p>
        <div id="demo3" class="collapse">
            <li class="list-group-item"><div id="StatsContainer"></div><hr/><div id="PogoStatsContainer"></div></li>
        </div>';
    }
    echo '
       <p><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">'.$data[1].' Pokemon of this type</button><br/>
    <div id="demo" class="collapse">';

       //Prints out all the pokemon in a specific list and splits them by generation
       SeperatePokemon($pokemonList,1);

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


if($pokemonSearch != "" and $PokemonValueCombined != "")
{
//____Charts Javascript Call_____\\
include("highchart.php");
}
?>

</body>
</html>
