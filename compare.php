<?php
//Page to view all the pokemon in a generation on one page
include_once('view-top.php');


?>
<form method="GET" >
  <input autocomplete="off" name="mc" id="myInputForm1" class="form-control" placeholder="Pikachu" />
  <hr/>
  <input autocomplete="off" name="rival" id="myInputForm2" class="form-control" placeholder="Meowth" />
  <hr/>
  <input type="submit" class="btn btn-block btn-success"/>
</form>
<div class="active-pink-3 active-pink-4 mb-4 pokedexsearch">
</div>

<table id="example" class="table table-striped table-bordered table-sm" cellspacing="0">
    <tr>
        <th scope="col">Attribute</th>
        <th scope="col">Pokemon</th>
        <th scope="col">Rival</th>
    </tr>
<?php

global $pokemonIcon1, $pokemonIcon2, $pokemonType1Total, $pokemonType2Total, $pokemon1Gen, $pokemon2Gen;
global $pokemon1Total, $pokemon1HP, $pokemon1Attack , $pokemon1Defence, $pokemon1SpAtt, $pokemon1SpDef , $pokemon1Speed;
global $pokemon2Total, $pokemon2HP, $pokemon2Attack , $pokemon2Defence, $pokemon2SpAtt, $pokemon2SpDef , $pokemon2Speed;

if ($_GET['mc'] == "" && $_GET['rival']=="")
{
	echo '<p> Search for two Pokemon to compare above</p>';
}
else
{
if (($handle = fopen("PokemonSpecificTyping.csv", "r")) !== FALSE)
{
  //Getting Gen from GET Paramater
  $pokemonCompare1 = $_GET['mc'];
  $pokemonCompare2 = $_GET['rival'];

  //Converting the + in URLs to Space
  //$pokemonCompare1 = str_replace("+", " ",$pokemonCompare1);
  //$pokemonCompare2 = str_replace("+", " ",$pokemonCompare2);


  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
  {
    if($pokemonCompare1 == "" && $pokemonCompare2 == "")
    {
      break;
    }
    //Ensuring that if there is a pokemon specific link, it's captured
      if($data[14]== "")
      {
        if(strtolower($data[1]) == strtolower($pokemonCompare1))
        {
          $pokemonIcon1 = '<a href="index.php?Type1=Bug&Type2=&search='.urlencode($data[1]).'&HighDataOpt=on"><img class="tinySprite" src="Sprites/sugimori/'.strtolower($data[1]).'.png" onError="this.onerror=null;this.src=\'Photos/Missingno_Sprite.png\';" ></br>'.$data[1].'</a>';
        }
        if(strtolower($data[1]) == strtolower($pokemonCompare2))
        {
          $pokemonIcon2 = '<a href="index.php?Type1=Bug&Type2=&search='.urlencode($data[1]).'&HighDataOpt=on"><img class="tinySprite" src="Sprites/sugimori/'.strtolower($data[1]).'.png" onError="this.onerror=null;this.src=\'Photos/Missingno_Sprite.png\';" ></br>'.$data[1].'</a>';
        }
      }
      else
      {
        if($data[1] == $pokemonCompare1)
        {
          $pokemonIcon1 = '<a href="index.php?Type1=Bug&Type2=&search='.urlencode($data[14]).'&HighDataOpt=on"><img class="tinySprite" src="Sprites/sugimori/'.strtolower($data[14]).'.png" onError="this.onerror=null;this.src=\'Photos/Missingno_Sprite.png\';" ></br>'.$data[1].'</a>';
        }
        if($data[1] == $pokemonCompare2)
        {
          $pokemonIcon2 = '<a href="index.php?Type1=Bug&Type2=&search='.urlencode($data[14]).'&HighDataOpt=on"><img class="tinySprite" src="Sprites/sugimori/'.strtolower($data[14]).'.png" onError="this.onerror=null;this.src=\'Photos/Missingno_Sprite.png\';" ></br>'.$data[1].'</a>';
        }
      }
      #,Name,Type 1,Type 2,Total,HP,Attack,Defense,Sp. Atk,Sp. Def,Speed,
      if($data[1] == $pokemonCompare1)
      {
        $pokemon1Type1 = $data[2];
        $pokemon1Type2 = $data[3];
        $pokemon1Total = $data[4];
        $pokemon1HP = $data[5];
        $pokemon1Attack = $data[6];
        $pokemon1Defence = $data[7];
        $pokemon1SpAtt = $data[8];
        $pokemon1SpDef = $data[9];
        $pokemon1Speed = $data[10];
        $pokemon1Gen = $data[11];
      }

      if($data[1] == $pokemonCompare2)
      {
        $pokemon2Type1 = $data[2];
        $pokemon2Type2 = $data[3];
        $pokemon2Total = $data[4];
        $pokemon2HP = $data[5];
        $pokemon2Attack = $data[6];
        $pokemon2Defence = $data[7];
        $pokemon2SpAtt = $data[8];
        $pokemon2SpDef = $data[9];
        $pokemon2Speed = $data[9];
        $pokemon2Gen = $data[11];
      }

  }
  fclose($handle);
}



if (($handle = fopen("PokemonTyping.csv", "r")) !== FALSE)
{
  while (($pokemonTypeData = fgetcsv($handle, 1000, ",")) !== FALSE)
  {
    //setting the associative array for Pokemon typing
    $pokemonTypingAssArray = array("NOR"=>2,"FIR"=>3,"WAT"=>4,"ELE"=>5,"GRA"=>6,"ICE"=>7,"FIG"=>8,"POI"=>9,"GRO"=>10,"FLY"=>11,"PSY"=>12,"BUG"=>13,"ROC"=>14,"GHO"=>15,"DRA"=>16,"DAR"=>17,"STE"=>18,"FAI"=>19);

    //For Array
    //Setting the typing to compare which is stronger
    $pokemonType1Typing1 = strtoupper(substr($pokemon1Type1, 0, 3));
    $pokemonType1Typing2 = strtoupper(substr($pokemon1Type2, 0, 3));

    //Setting the typing to compare which is stronger
    $pokemonType2Typing1 = strtoupper(substr($pokemon2Type1, 0, 3));
    $pokemonType2Typing2 = strtoupper(substr($pokemon2Type2, 0, 3));

    //getting the typing values for the pokemon it's opposing First Pokemon
    $pokemon1 = $pokemon1Type1.$pokemon1Type2;
    $pokemon2 = $pokemon2Type1.$pokemon2Type2;

    //For pokemon 1
    if($pokemonTypeData[0] == strtoupper($pokemon1))
    {
      //Using pokemon type within the associative array to get the value of that opposing type weakness / strength
      //for pokemon 1 type 1
      if($pokemonTypeData[$pokemonTypingAssArray[$pokemonType2Typing1]] == "")
      {
        $pokemonType1Total = 1;
      }
      //When the pokemon has 0 effect i've set it to negative 1 to add a mathematical way of saying it is not null but a negative effect
      elseif($pokemonTypeData[$pokemonTypingAssArray[$pokemonType2Typing1]] ==  0 && $pokemonTypeData[$pokemonTypingAssArray[$pokemonType2Typing1]] != "")
      {
        $pokemonType1Total = -1;
      }
      else
      {
        $pokemonType1Total= $pokemonTypeData[$pokemonTypingAssArray[$pokemonType2Typing1]];
      }

      //Using pokemon type within the associative array to get the value of that opposing type weakness / strength
      //for pokemon 1 type 2
      if($pokemonTypeData[$pokemonTypingAssArray[$pokemonType2Typing2]] == "")
      {
        $pokemonType1Total = $pokemonType1Total + 1;
      }
      //When the pokemon has 0 effect i've set it to negative 1 to add a mathematical way of saying it is not null but a negative effect
      elseif($pokemonTypeData[$pokemonTypingAssArray[$pokemonType2Typing2]] ==  0 && $pokemonTypeData[$pokemonTypingAssArray[$pokemonType2Typing2]] != "")
      {
        $pokemonType1Total = -1;
      }
      else
      {
        $pokemonType1Total= $pokemonType1Total + $pokemonTypeData[$pokemonTypingAssArray[$pokemonType2Typing2]];
      }
    }


    //For rival pokemon
    if($pokemonTypeData[0] == strtoupper($pokemon2))
    {
      //Using pokemon type within the associative array to get the value of that opposing type weakness / strength
      //for pokemon 2 type 1
      if($pokemonTypeData[$pokemonTypingAssArray[$pokemonType1Typing1]] == "")
      {
        $pokemonType2Total = 1;
      }
      //When the pokemon has 0 effect i've set it to negative 1 to add a mathematical way of saying it is not null but a negative effect
      elseif($pokemonTypeData[$pokemonTypingAssArray[$pokemonType1Typing1]] ==  0 && $pokemonTypeData[$pokemonTypingAssArray[$pokemonType1Typing1]] != "")
      {
        $pokemonType2Total = -1;
      }
      else
      {
        $pokemonType2Total= $pokemonTypeData[$pokemonTypingAssArray[$pokemonType1Typing1]];
      }


      //Using pokemon type within the associative array to get the value of that opposing type weakness / strength
      //for pokemon 2 type 2
      if($pokemonTypeData[$pokemonTypingAssArray[$pokemonType1Typing2]] == "")
      {
        $pokemonType2Total = $pokemonType2Total + 1;

      }
      //When the pokemon has 0 effect i've set it to negative 1 to add a mathematical way of saying it is not null but a negative effect
      elseif($pokemonTypeData[$pokemonTypingAssArray[$pokemonType1Typing2]] ==  0 && $pokemonTypeData[$pokemonTypingAssArray[$pokemonType1Typing2]] != "")
      {
        $pokemonType2Total = -1;
      }
      else
      {
        $pokemonType2Total= $pokemonType2Total + $pokemonTypeData[$pokemonTypingAssArray[$pokemonType1Typing2]];
      }
    }


  }
  fclose($handle);
}



echo '
  <!--Pokemon Icon-->
  <tr>
    <td>Pokemon</td>
    <td>'.$pokemonIcon1.'
    </td>
    <td>'.$pokemonIcon2.'
    </td>
  <tr>
  <!--Pokemon Icon-->';

  echo '
  <!--Gen-->
  <tr>
    <td>Generation</td>
    <td>'.$pokemon1Gen.'
    </td>
    <td>'.$pokemon2Gen.'
    </td>
  </tr>
  <!--Gen-->';

  echo '
  <!--Type-->
  <td>Type</td>
  <td>
  <div class="container">
    <div class="row">';
    //Comparing if the total is smaller in order to see whether if this pokemon wins
    if($pokemonType1Total < $pokemonType2Total && isset($pokemon1Total) && $pokemonType1Total != $pokemonType2Total)
    {
      //creating the div to show that this is the winner, and adding a new row sp that winner appears above the typing
      echo '<div class="col-sm">👑</div></div><div class="row">';
    }
    echo '
    <div class="col-sm '.substr(strtolower($pokemon1Type1),0,3).'">'.$pokemon1Type1.'</div>';
    if($pokemon1Type2 != "")
    {
      echo '<div class="col-sm '.substr(strtolower($pokemon1Type2),0,3).'">'.$pokemon1Type2.'</div>';
    }
    echo '
    </div>
  </div>
  </td>
  <td>
  <div class="container">
    <div class="row">';
    //same as for the type 1 (above)
    if($pokemonType1Total > $pokemonType2Total && isset($pokemon2Total) && $pokemonType1Total != $pokemonType2Total)
    {
      //same as the one for type 1
      echo '<div class="col-sm">👑</div></div><div class="row">';
    }
    echo '
    <div class="col-sm '.substr(strtolower($pokemon2Type1),0,3).'">'.$pokemon2Type1.'</div>';
    if($pokemon2Type2 != "")
    {
      echo '<div class="col-sm '.substr(strtolower($pokemon2Type2),0,3).'">'.$pokemon2Type2.'</div>';
    }
    echo '
    </div>
  </div>
  </td>
  </tr>
  <!--Type-->';

  echo '
  <!--Total-->
  <tr>
    <td>Total</td>
    <td>'.$pokemon1Total.'
    </td>
    <td>'.$pokemon2Total.'
    </td>
  </tr>
  <!--Total-->';

  echo '
  <!--HP-->
  <tr>
    <td>HP</td>
    <td>'.$pokemon1HP.'
    </td>
    <td>'.$pokemon2HP.'
    </td>
  </tr>
  <!--HP-->';


  echo '
  <!--Att-->
  <tr>
    <td>Attack</td>
    <td>'.$pokemon1Attack.'
    </td>
    <td>'.$pokemon2Attack.'
    </td>
  </tr>
  <!--Att-->';

  echo '
  <!--Def-->
  <tr>
    <td>Defence</td>
    <td>'.$pokemon1Defence.'
    </td>
    <td>'.$pokemon2Defence.'
    </td>
  </tr>
  <!--Def-->';

  echo '
  <!--Sp Att-->
  <tr>
    <td>Special Attack</td>
    <td>'.$pokemon1SpAtt.'
    </td>
    <td>'.$pokemon2SpAtt.'
    </td>
  </tr>
  <!--Sp Att-->';

  echo '
  <!--Sp Def-->
  <tr>
    <td>Special Defence</td>
    <td>'.$pokemon1SpDef.'
    </td>
    <td>'.$pokemon2SpDef.'
    </td>
  </tr>
  <!--Sp Def-->';

  echo '
  <!--Speed-->
  <tr>
    <td>Speed</td>
    <td>'.$pokemon1Speed.'
    </td>
    <td>'.$pokemon2Speed.'
    </td>
  </tr>
  <!--Speed-->';
}
?>
</table>

<script>
function myFunction() {
// Declare variables
var input, filter, table, tr, td, i ;
input = document.getElementById("Search");
filter = input.value.toUpperCase();
table = document.getElementById("example");
tr = table.getElementsByTagName("tr"),
th = table.getElementsByTagName("th");

// Loop through all table rows, and hide those who don't match the        search query
for (i = 1; i < tr.length; i++)
{
    tr[i].style.display = "none";
    for(var j=0; j<th.length; j++)
    {
        td = tr[i].getElementsByTagName("td")[j];
        if (td)
        {
            if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1)
            {
                tr[i].style.display = "";
                break;
            }
        }
    }
}
}

//Allowing for clicking sort
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("example");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

<?php

//____Autocomplete Javascript Call_____\\
include("autocomplete.php");

include_once('view-bottom.php');

?>
