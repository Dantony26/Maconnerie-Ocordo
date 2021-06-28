<?php

function title() {
    $xml = simplexml_load_file('utilities/source.xml');
    if (isset($_GET['id'])) {
        switch ($_GET['id']) {
            case 1:
                $title = $xml->page[0]->title;
                echo $title;
                break;
            case 2:
                $title = $xml->page[1]->title;
                echo $title;
                break;
            case 3:
                $title = $xml->page[2]->title;
                echo $title;
                break;
            case 4:
                $title = $xml->page[3]->title;
                echo $title;
                break;
            default:
                echo "error";
        }
    } else {
        $title = $xml->page[0]->title;
        echo $title;
    }
}