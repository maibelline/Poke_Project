<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/<?=$homePageStyle?? 'style.css' ?>">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>PokéMonde</title>
</head>
<body>
    <!-- -- en-téte du site-- -->
    <header>
        <!-- Barre de navigation se transformant en menu burger pour mobile -->
            <nav class="navbar navbar-light navbar-expand-sm bg-light opacity-50 fixed-top">
                <a href="/" class="navbar-brand">
                PokéMonde
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link active">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link active">QUIZZ</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link active">MEMO</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link active">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a href="/controllers/dashboard/listUserCtrl.php" class="nav-link active">DASHBOARD</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-5">
                    <?php if(empty($_SESSION["user"])){?>
                    <a class="btn btn-info" href="/controllers/signupCtrl.php">Connexion</a>

                    <a class="btn btn-info" href="/controllers/signinCtrl.php">Inscription</a>
                    <?php } else {?>

                    <a class="btn btn-warning" href="/controllers/logoutCtrl.php">Déconnexion</a>
                    <?php } ?>
                </div>
            </nav>   
    </header>






