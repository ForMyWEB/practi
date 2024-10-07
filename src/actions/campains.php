<?php
function renderCampains() {
    ?>
    <?php
// session_start();
require_once __DIR__ . '/../src/helpers.php';
require_once __DIR__ . '/../src/actions/header.php';
require_once __DIR__ . '/../src/actions/footer.php';
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

<div class="page-content">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6-img">
                <div class="item-image">
                    <img src="" width="555px" height="673px" alt="">
                </div>
            </div>
            <div class="col-lg-6-content">
                <div class="campain-details">
                    <h1>

                    </h1>
                    <div class="campain-date row">
                        <div class="col-lg-6">
                            <p>
                                Розпочато: 
                                <span></span>
                            </p>
                        </div>
                    </div>
                    <div class="campain-values">
                        <div class="row">
                            <div class="col-lg-5">
                                <p>
                                    <span>Зібрано</span>
                                    <br>

                                </p>
                            </div>
                            <div class="col-lg-5">
                                <p>
                                    <span>Мета</span>
                                    <br>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="campain-supportes">
                        <div class="row">
                            <div class="col-lg-5">
                                <p>
                                    <span>Підтримало людей</span>
                                </p>
                            </div>
                            <div class="col-lg-5">
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="btn-btn-prim"><a href="">Підтримати</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="campain-content">
        <div class="container">
            <p>

            </p>
        </div>
    </div>
</div>

<?php renderFooter(); ?>

</body>
</html>

<?php
}
?>