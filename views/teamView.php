<?php

class teamView{
    
    function showAllCountries($countrie){
        include('templates/header.php');

        echo '<div class="container">';
        
        echo '<h5> Seleccione el pais del cual quiere ver los campeones</h5>';

        echo '<ul class="list-group">';

        foreach($countrie as $countries){
            echo "<li> $countries->pais <a href='detallar/$countries->id' class='btn btn-dark btn-sm'>Detallar</a></li>";
        }

        echo '</ul>';

        echo '</div>';

    }

    function showAllTeamsCountrie($teams){

        include('templates/header.php');

        echo '<div class="container">';

        echo '<ul class="list-group">';

        foreach($teams as $team){
            echo "<li> $team->nombre_equipo <a href='team/$team->id' class='btn btn-dark btn-sm'>Detallar</a></li>";
        }
        echo '</ul>';

        echo '</div>';
    }

    function showCupsTeams($cups){
        include ('templates/header.php');


        echo "<h1>$cups->nombre_equipo</h1>";

        echo '<ul class="list-group">';
        echo "<li>Cantidad de copas Libertadores: $cups->cantidad_libertadores";
        echo "<li>Cantidad de copas Sudamericanas: $cups->cantidad_sudamericanas";
        echo '</ul>';

    }
}