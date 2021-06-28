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
    <title><?= title(); ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center">
                        <a class="nav-link" href="accueil">Accueil</a>
                        <a class="nav-link" href="qui-sommes-nous">Qui sommes nous?</a>
                        <a class="nav-link" href="nos-clients-temoignent">Nos clients témoignent</a>
                        <a class="nav-link" href="contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-md mt-5">
        <?php
        if (isset($_GET['id'])) {
            switch ($_GET['id']) {
                case 1:
                    echo $xml->page[0]->content;
                    break;
                case 2:
                    echo $xml->page[1]->content;
                    break;
                case 3:
                    echo $xml->page[2]->content;
                    break;
                case 4:
                    echo $xml->page[3]->content;
                    break;
                default:
                    echo "error";
                    break;
            }
        } else {
            header("Location: accueil");
            exit;
        }

        ?>
    </div>
</body>

</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>