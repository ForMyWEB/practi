<?php
// session_start();
require_once __DIR__ . '/../src/helpers.php';
require_once __DIR__ . '/../src/actions/header.php';
require_once __DIR__ . '/../src/actions/footer.php';
// require_once __DIR__ . '/../src/actions/login.php';

$user = currentUser();

?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Благодійний Фонд "Мрії Здійснюються"</title>
    <link href="../styles/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/Screenshot_20240617_112949.png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/9e3bcbb946.js" crossorigin="anonymous"></script>
    <script src="../script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7NElGXx3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+SK:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php renderHeader($user); ?>

    <div class="account-wrapper container">
        <div class="page-header">
            <h1>
                Особистий кабінет
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="nav flex-column nav-pills account-menu" aria-orientation="vertical">
                    <span class="nav-link active">Особистий кабінет</span>
                    <a class="nav-link" href="../pages/settings.php">Налаштування акаунту</a>
                </div>
            </div>
            <div class="col-lg-9 cont">
                <div class="dashboard-wrapper">
                    <div class="user-info">
                        <div class="user-info--details">
                            <p class="user-info--name">
                                TestName 
                                <span>(foxyplayy6@gmail.com)</span>
                                
                            </p>
                            <p class="user-info--date">
                                Дата реєстрації:
                                <span>18-06-2024</span>
                            </p>
                        </div>
                    </div>
                    <div class="dashboard-summary">
                        <div class="row no-gutters">
                            <div class="col-lg-6 items">
                                <div class="donation-summary summary-wrapper">
                                    <p class="summary-item--header">Благодійні внески</p>
                                    <div class="summary-item">
                                        <div class="summary-item--inner">
                                            <p class="summary-item--value">0 грн</p>
                                            <p class="summary-item--label">сума благодійних внесків</p>
                                        </div>
                                    </div>
                                    <div class="summary-item">
                                        <div class="summary-item--inner">
                                            <p class="summary-item--value">0</p>
                                            <p class="summary-item--label">благодійних внесків</p>
                                        </div>
                                    </div>
                                    <div class="summary-item">
                                        <div class="summary-item--inner">
                                            <p class="summary-item--value">0</p>
                                            <p class="summary-item--label">підтримано кампаній</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 items">
                            <div class="campaigns-summary summary-wrapper">
                                    <p class="summary-item--header">Кампанії</p>
                                    <div class="summary-item">
                                        <div class="summary-item--inner">
                                            <p class="summary-item--value">0</p>
                                            <p class="summary-item--label">створено кампаній</p>
                                        </div>
                                    </div>
                                    <div class="summary-item">
                                        <div class="summary-item--inner">
                                            <p class="summary-item--value">0 грн</p>
                                            <p class="summary-item--label">зібрано коштів</p>
                                        </div>
                                    </div>
                                    <div class="summary-item">
                                        <div class="summary-item--inner">
                                            <p class="summary-item--value">0</p>
                                            <p class="summary-item--label">мої кампанії підтримало</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php renderFooter(); ?>

</body>
</html>