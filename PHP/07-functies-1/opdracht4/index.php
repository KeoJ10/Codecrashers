<?php

    function printBusinessCard($firstName, $lastName, $age = 'onbekend', $title = 'onbekend', $location = 'onbekend', $biography = 'onbekend'): string {
        $output = '<article>';
        $output .= '<p>Naam: '.$firstName.' '.$lastName.'</p>';
        $output .= '<p>Leeftijd: '.$age.'</p>';
        $output .= '<p>Titel: '.$title.'</p>';
        $output .= '<p>Locatie: '.$location.'</p>';
        $output .= '<p>Biografie: '.$biography.'</p>';
        $output .= '</article>';
        return $output;
    }

    echo printBusinessCard('Keo', 'de Jong', 21, 'biographie', 'Leiden');
    echo printBusinessCard(firstName: 'Mick', lastName:'Jagger',  location: 'Londen', biography:'bla bla bla');