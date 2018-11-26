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
      <form action="index.php" method="get" id="pokeform">
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
<div class="container">
  <div id="poketype">
  <!--your code here. Make sure to include view bottom at the end-->
