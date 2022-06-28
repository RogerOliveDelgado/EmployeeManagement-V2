<!-- TODO Employee view -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <link rel="stylesheet" href="<?= MAIN_CSS ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="<?= INDEX_JS ?>" defer></script>
</head>

<body>
    <?php
    require_once HEADER;
    ?>

    <div class="navbar-nav me-auto mb-2 mb-lg-0 center">
            <div class="nav-item center">
                <a class="link self" href="<?= BASE_URL ?>dashboard">
                    ERROR 404
                </a>
            </div>
        </div>
    <div class="d-flex flex-column align-items-center">
        <img src="<?= BASE_URL ?>/assets/img/darth-vader.gif" alt="darth-vader-gif">
    </div>

    <div class="quote">
        “You lost your own way my son.”
    </div>
</body>

</html>