<?php

function devolverPokemonsPorTipo(array $pokemons, Tipo $tipo) : array
{
    $pokemonsTipo = array();
    foreach($pokemons as $pokemon)
    {
        if($pokemon->getTipo() == $tipo || $pokemon->getTipoSecundario() == $tipo)
        {
            array_push($pokemonsTipo, $pokemon);
        }
    }

    return $pokemonsTipo;
}

function mostrarPokemonsPorTipo(array $pokemons, Tipo $tipo)
{
    
    if(count($pokemons) > 0)
    {
        echo "Pokemons de tipo " . $tipo->value . ": <br>";
        foreach($pokemons as $pokemon)
        {
            echo $pokemon . "<br>";
        }
    }
    else
    {
        echo "No se pudo encontrar ningún pokemon del tipo especificado";
    }
    
}

function devolverPokemonPorNombre(array $pokemons, string $nombrePokemon) : Pokemon|NULL
{
    $pokemonObtenido = NULL;
    foreach($pokemons as $pokemon)
    {
        if($pokemon->getNombre() === $nombrePokemon)
        {
            $pokemonObtenido = $pokemon;
        }
    }
    return $pokemonObtenido;
}

function mostrarAtaques(Pokemon $pokemon) : void
{
    echo "<br>Ataques de: " . $pokemon->getNombre() ."<br>";
    if($pokemon != NULL)
    {
        foreach($pokemon->getAtaques() as $ataque)
        {
            echo $ataque . "<br>";
        }
    }
}

?>