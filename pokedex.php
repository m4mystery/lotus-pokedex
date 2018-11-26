<?php

include_once('view-top.php');

?>

<div class="active-pink-3 active-pink-4 mb-4 pokedexsearch">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="Search" onkeyup="myFunction()" placeholder="search for performance">
</div>
<table id="example" class="table table-striped table-bordered table-sm" cellspacing="0">
    <tr>
        <th scope="col">Pokemon</th>
        <th scope="col" onclick="sortTable(0)">#</th>
        <th scope="col" onclick="sortTable(1)">Name</th>
    </tr>

<?php

if (($handle = fopen("PokemonSpecificTyping.csv", "r")) !== FALSE)
{
  //Getting Gen from GET Paramater
  $gen = $_GET['gen'];

  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
  {
  if($data[11] == $gen)
  {
  //Ensuring that if there is a pokemon specific link, it's captured
  echo '
  <tr>';
    if($data[14]== "")
    {
      echo '
      <td><img class="tinySprite" src="https://img.pokemondb.net/sprites/sun-moon/icon/'.strtolower($data[1]).'.png" onError="this.onerror=null;this.src=\'Photos/Missingno_Sprite.png\';" ></td>';
    }
    else
    {
      echo '
      <td><a href=index.php?Type1=Bug&Type2=&search='.$data[1].'&HighDataOpt=on"><img class="tinySprite" src="https://img.pokemondb.net/sprites/sun-moon/icon/'.strtolower($data[14]).'.png" onError="this.onerror=null;this.src=\'Photos/Missingno_Sprite.png\';"></a></td>';
    }
    echo '
    <td><a href=index.php?Type1=Bug&Type2=&search='.$data[1].'&HighDataOpt=on">'.$data[0].'</a></td>
    <td><a href=index.php?Type1=Bug&Type2=&search='.$data[1].'&HighDataOpt=on">'.$data[1].'</a>
    <br/>
    <div class="container">
      <div class="row">
          <div class="col-sm '.substr(strtolower($data[2]),0,3).'">'.$data[2].'</div>';
          if($data[3] != "")
          {
              echo '<div class="col-sm '.substr(strtolower($data[3]),0,3).'">'.$data[3].'</div>';
          }
      echo '
      </div>
     </div>
    </td>
  </tr>
  ';
  }

}
fclose($handle);
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

include_once('view-bottom.php');

?>
