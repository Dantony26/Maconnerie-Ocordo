<?php
$xml = simplexml_load_file('utilities/source.xml');
require('functions/title.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?= title();?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-nav">
                <a class="nav-link" href="accueil">Accueil</a>
                <a class="nav-link" href="qui-sommes-nous">Qui sommes nous?</a>
                <a class="nav-link" href="nos-clients-temoignent">Nos clients témoignent</a>
                <a class="nav-link" href="contact">Contact</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            switch ($_GET['id']) {
                case 1:
                    $content = $xml->page[0]->content;
                    echo $content;
                    break;
                case 2:
                    $content = $xml->page[1]->content;
                    echo $content;
                    break;
                case 3:
                    $content = $xml->page[2]->content;
                    echo $content;
                    break;
                case 4:
                    $content = $xml->page[3]->content;
                    echo $content;
                    break;
                default:
                    echo "error";
            }
        } else {
            $content = $xml->page[0]->content;
            echo $content;
        }

        ?>
    </div>
</body>

</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>