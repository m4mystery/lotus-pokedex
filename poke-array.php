<?php
if(($handle = fopen("PokemonSpecificTyping.csv", "r")) !== FALSE)
{
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
{
    $pokemonFullData[] = $data[1];
}

fclose($handle);

}

/* commented this out so that it doesn't print out the entire formula again.
foreach($pokemonFullData as $pokeloop)
{
    if ($pokeloop != "Name")
    {
    echo '"'.$pokeloop . '",';
    }
}
*/
?>
