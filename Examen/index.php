<?php
require_once("pokemon.php");
require_once("tipo.php");
require_once("filtroPokemon.php");


function addPokemonToArray($listaPokemon ,$pokemon) : array
{
    array_push($listaPokemon, $pokemon);

    return $listaPokemon;
}

$pokemon1 = new Pokemon(1, "Blaziken", Tipo::FUEGO, 20.5, 1.2, 
array("Patada Salto Alta", "Envite Ígneo", "Danza Espada", "Protección"), NULL);
$pokemon2 = new Pokemon(2, "Swampert", Tipo::AGUA, 22.5, 1.2, 
array("Terremoto", "Hidroariete", "Puño Hielo", "Protección"), Tipo::TIERRA);
$pokemon3 = new Pokemon(3, "Torkoal", Tipo::FUEGO, 22.5, 1.2, 
array("Estallido", "Onda Ígnea", "Tierra Viva", "Protección"), NULL);
$pokemon4 = new Pokemon(4, "Lanturn", Tipo::AGUA, 22.5, 1.2, 
array("Rayo", "Surf", "Rayo Hielo", "Danza Lluvia"), Tipo::ELECTRICO);
$pokemon5 = new Pokemon(5, "Groudon", Tipo::TIERRA, 22.5, 1.2, 
array("Puño Trueno", "Avalancha", "Corpulencia", "Fuerza Equina"), NULL);
$pokemon6 = new Pokemon(6, "Manectric", Tipo::ELECTRICO, 22.5, 1.2, 
array("Sofoco", "Trueno", "Voltiocambio", "Protección"), NULL);

$listaPokemon = array();
$listaPokemon = addPokemonToArray($listaPokemon, $pokemon1);
$listaPokemon = addPokemonToArray($listaPokemon, $pokemon2);
$listaPokemon = addPokemonToArray($listaPokemon, $pokemon3);
$listaPokemon = addPokemonToArray($listaPokemon, $pokemon4);
$listaPokemon = addPokemonToArray($listaPokemon, $pokemon5);
$listaPokemon = addPokemonToArray($listaPokemon, $pokemon6);
/*$pokemons = array($pokemon1, $pokemon2, $pokemon3, $pokemon4, 
$pokemon5, $pokemon6);*/

$pokemonsPorTipo = devolverPokemonsPorTipo($listaPokemon, Tipo::TIERRA);
mostrarPokemonsPorTipo($pokemonsPorTipo, Tipo::TIERRA);

$pokemonAtaque = devolverPokemonPorNombre($listaPokemon, "Manectric");
if($pokemonAtaque != NULL)
{
    mostrarAtaques($pokemonAtaque);
}
else
{
    echo "No existe el pokemon solicitado.";
}

?>