<?php

function title() {
    $xml = simplexml_load_file('utilities/source.xml');
    if (isset($_GET['id'])) {
        $getId = htmlspecialchars(trim($_GET['id']));
        switch ($getId) {
            case 1:
                echo $xml->page[0]->title;
                break;
            case 2:
                echo $xml->page[1]->title;
                break;
            case 3:
                echo $xml->page[2]->title;
                break;
            case 4:
                echo $xml->page[3]->title;
                break;
            default:
                echo "error";
                break;
        }
    } else {
        
        echo "Maçonnerie Ocordo";
    }
}